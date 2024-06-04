<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MasterStudent;

class UserController extends Controller
{
    public function index() {
        $quote = MasterStudent::inRandomOrder()->where('quotes', '!=', 'Dummy')->first();
        return view('user.home.index',[
            'quote' => $quote,
        ]);
    }

    public function about() {
        return view('user.about.about');
    }
}
