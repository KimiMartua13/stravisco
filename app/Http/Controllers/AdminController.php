<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index( Request $request )
    {
        return view('admin/home/index');
    }

    public function aksiTampilFoto( Request $request ) 
    {

    }
}
