<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{
    public function index( Request $request )
    {
        return view('admin/home/index');
    }

    public function aksiTampilFoto( Request $request ) 
    {

    }

    public function aksiTampilLogin( Request $request ) 
    {
        return view('admin/login/index');
    }

    public function aksiLoginAplikasi( Request $request ) 
    {
        dd('test');
    }
}
