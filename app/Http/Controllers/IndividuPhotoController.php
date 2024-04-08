<?php

namespace App\Http\Controllers;

use App\Models\MasterClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\MasterStudent;

class IndividuPhotoController extends Controller
{
    public function aksiMasukanFotoIndividu( Request $request, $jurusan, $kelas )
    {
        $imagePath = glob('D:/Kimi Martua/Photo Yearbook/' . $jurusan .'/' . $kelas . '/individu/*');
        $id_jurusan = $this->ambilIdJurusan($jurusan);
        
        $id_kelas = $kelas;
        if ( $kelas == 'industri' ) {
            $id_kelas = '04.';
        }else{
            $id_kelas =  '0' . $kelas . '.'; 
        }

        foreach ($imagePath as $image){
            $imageFile = pathinfo($image);
            $path = Storage::putFile('public/photos', $imageFile['dirname'] . '/'. $imageFile['basename']);
            $upload =  [
                'student_name' => strtoupper( $imageFile['filename'] ),
                'quotes' => 'Dummy',
                'photo' => $path,
                'class_id' => $id_jurusan . $id_kelas,
            ];

            MasterStudent::create($upload);
        }
    }

    public function aksiMasukanFotoSekelas( Request $request ) 
    {
        $pathJurusan = glob('D:/Kimi Martua/Photo Yearbook/*');
        foreach ($pathJurusan as $key) {
            $pathKelas = glob( $key . '/*' );

            // Untuk Agar Maksimal Foto Sekelas 5 Saja
            
            // $selectedPhoto = [];
            // foreach ($pathKelas as $keyKelas) {
            //     $pathSekelas = glob( $keyKelas . '/sekelas/*' );
            //     $totalItems = count($pathSekelas);
    
            //     if( $totalItems <= 5 ){
            //         $selectedPhoto[] = $pathSekelas;
            //     }else{
            //         $randomKeys = array_rand($pathSekelas, 5);
            //         $selectedItems = [];
            //         foreach ($randomKeys as $key) {
            //             $selectedItems[] = $pathSekelas[$key];
            //         }
            //         $selectedPhoto[] = $selectedItems;
            //     }
            // }
        }
    }
}
