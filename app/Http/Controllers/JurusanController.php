<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function jurusanWithName( Request $request, $jurusan) 
    {
        return view('backup-landing.kelas.kelas', [
            'jurusan' => 'Rekaya Perangkat Lunak'
        ]);
    }

    public function index( Request $request ) 
    {
        return view('backup-landing.jurusan.jurusan');
    }
}
