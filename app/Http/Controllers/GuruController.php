<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterTeacher;

class GuruController extends Controller
{
    public function index() {
        return view('user.guru.guru',[
            'guru' => MasterTeacher::all(),
        ]);
    }
}
