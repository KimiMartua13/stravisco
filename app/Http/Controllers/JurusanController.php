<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterClass;
use App\Models\MasterStudent;
use App\Models\PhotoGroup;
use Illuminate\Support\Facades\Crypt;

use Vinkla\Hashids\Facades\Hashids;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class JurusanController extends Controller
{
    public function jurusanWithName( Request $request, $jurusan) 
    {
        $idJurusan = $this->ambilIdJurusan($jurusan);

        $jurusan = MasterClass::where('id',$idJurusan)->first();
        $kumpulanKelas = MasterClass::where('id', 'like',  $idJurusan . '__.')->get();
        
        $kumpulanFoto = [];

        foreach ($kumpulanKelas as $key) {
            $kumpulanFoto [] = PhotoGroup::where('class_id', '=', $key->id)->where('type_foto', 1)->first();
        }
        
        return view('user.kelas.kelas', [
            'jurusan' => $jurusan->name,
            'kumpulanKelas' => $kumpulanKelas,
            'fotoKumpulanKelas' => $kumpulanFoto,
        ]);
    }

    public function index( Request $request ) 
    {
        $jurusan = MasterClass::where('id', 'LIKE', '__.__.')
        ->where('id', 'NOT LIKE', '__.__.__')
        ->get();

        return view('user.jurusan.jurusan', [
            'jurusan' => $jurusan,
        ]);
    }

    public function aksiAmbilKelas( Request $request , $jurusan , $kelas , $filter = 'individu' ) 
    {
        $crypt = $kelas;
        $id_kelas = decrypt($kelas);
        $kelas = MasterClass::find($id_kelas);
        $data = PhotoGroup::where('class_id', $id_kelas);
        if ( $filter == 'individu' ) {
            $data = MasterStudent::where('class_id', $id_kelas);
        }elseif( $filter == 'bts'){
            $data = $data->where('type_foto', '1');
        }elseif( $filter == 'kelompok'){
            $data = $data->where('type_foto', '3');
        }elseif( $filter == 'putbu'){
            $data = $data->where('type_foto', '2');
        }else{
            return redirect()->back();
        }

        $data = $data->get();

        return view('user.kelas.singlekelas', [
            'kelas' => $kelas,
            'data' => $data,
            'hash' => $crypt,
            'jurusan' => $jurusan,
            'filter' => $filter,
        ]);
    }

    public function aksiDownloadPDF( Request $request, $jurusan , $kelas , $filter = 'individu' ) 
    {
        $id_kelas = decrypt($kelas);
        $siswa = MasterStudent::where('class_id', $id_kelas)->get();
        $data = [];
        foreach ($siswa as $key => $value) {
            $data['siswa'][$key] = $value ;
        }
        

        $pdf = Pdf::loadView('pdf.siswa', $data);
        return $pdf->download('siswa.pdf');
    }
}
