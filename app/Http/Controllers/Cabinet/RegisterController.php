<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller; 
use App\Http\Requests\Auth\RegisterRequest;
use App\Mail\Auth\VerifyMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function show()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        // TODO Вынести в отдельный сервис
        $user = User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'verify_token' => Str::random(30),
            'status' => User::STATUS_WAIT,
        ]);

        Mail::to($user->email)->send(new VerifyMail($user));
        event(new Registered($user)); // TODO Разобраться с событиями

        return redirect()->route('show.login.form');
    }

    public function verify($token)
    {
        if (!$user = User::where('verify_token', $token)->first()) {
            return redirect()->route('login')->with('error', 'Ваша почта не подтверждена');
        }

        $user->status = User::STATUS_ACTIVE;
        $user->role = User::ROLE_USER;
        $user->verify_token = null;
        $user->save();

        return redirect()->route('show.login.form')->with('success', 'Ваша почта подтверждена! Авторизуйтесь');
    }
}
