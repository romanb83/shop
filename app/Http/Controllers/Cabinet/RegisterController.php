<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show() {
        return view('register');
    }

    public function register() {
        dd('Reg');
    }
}
