<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterClass;
use Illuminate\Support\Facades\Crypt;

class JurusanController extends Controller
{
    public function jurusanWithName( Request $request, $jurusan) 
    {
        $idJurusan = $this->ambilIdJurusan($jurusan);

        $jurusan = MasterClass::where('id',$idJurusan)->first();
        $kumpulanKelas = MasterClass::where('id', 'like',  $idJurusan . '__.')->get();
        
        return view('backup-landing.kelas.kelas', [
            'jurusan' => $jurusan->name,
            'kumpulanKelas' => $kumpulanKelas,
        ]);
    }

    public function index( Request $request ) 
    {
        $jurusan = MasterClass::where('id', 'LIKE', '__.__.')
        ->where('id', 'NOT LIKE', '__.__.__')
        ->get();

        return view('backup-landing.jurusan.jurusan', [
            'jurusan' => $jurusan,
        ]);
    }

    public function aksiAmbilKelas( Request $request , $jurusan , $kelas ) 
    {
        dd(decrypt($kelas));
    }
}
