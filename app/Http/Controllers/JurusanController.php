<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index( Request $request, $jurusan) 
    {
        return view('user.jurusan.index');
    }
}
