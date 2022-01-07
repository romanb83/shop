<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public $user;

    public function show()
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {
        User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'verify_token' => Str::random(30),
            'status' => User::STATUS_WAIT,
            'role' => User::ROLE_USER,
        ]);

        return redirect()->route('show.login.form');
    }

    public function verify()
    {
        $user->status = User::STATUS_ACTIVE;
        $user->verify_token = null;
        $user->save();
    }

}
