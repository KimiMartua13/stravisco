<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ambilIdJurusan( $jurusan )
    {
        $id_jurusan = null;

        if( $jurusan == 'ak' ){
            $id_jurusan = '01.01.';
        }else if( $jurusan == 'rpl' ){
            $id_jurusan = '01.02.';
        }else if( $jurusan == 'tei'){
            $id_jurusan = '01.03.';
        }else if( $jurusan == 'tet'){
            $id_jurusan = '01.04.';
        }else if( $jurusan == 'tsm' ){
            $id_jurusan = '01.05.';
        }else if( $jurusan == 'tkj'){
            $id_jurusan = '01.06.';
        }else{
            $id_jurusan = null;
        }

        return $id_jurusan;
    }
}
