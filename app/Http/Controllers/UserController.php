<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('user.home.index');
    }

    public function about() {
        return view('user.about.about');
    }
}
