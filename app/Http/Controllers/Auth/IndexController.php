<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index () {
        return view('auth.sign-in', ['route' => '/auth']);
    }

    public function signUp () {
        return view('auth.sign-up', ['route' => '/auth']);
    }
}
