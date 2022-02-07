<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view('auth.login');
    }
    public function signup() {
        return view('auth.signup');
    }
    public function password_reset() {
        return view('auth.password_reset');
    }
}
