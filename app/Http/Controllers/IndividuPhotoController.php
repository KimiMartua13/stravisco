<?php

namespace App\Http\Controllers;

use App\Models\MasterClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PhotoGroup;

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

    public function aksiMasukanFoto( Request $request ) 
    {
        $pathJurusan = glob('D:/Kimi Martua/Photo Yearbook/*');
        

        // Mengupload 5 Foto Sekelas
        $selectedPhotoSekelas = [];
        foreach ($pathJurusan as $key) {
            $pathKelas = glob( $key . '/*' );
            foreach ($pathKelas as $keyKelas) {
                $pathSekelas = glob( $keyKelas . '/sekelas/*' );
                $totalItems = count($pathSekelas);
                
                if( $totalItems <= 5 ){
                    $selectedPhotoSekelas[] = $pathSekelas;
                }else{
                    $randomKeys = array_rand($pathSekelas, 5);
                    $selectedItems = [];
                    foreach ($randomKeys as $key) {
                        $selectedItems[] = $pathSekelas[$key];
                    }
                    $selectedPhotoSekelas[] = $selectedItems;
                }
            }
        }

        foreach ($selectedPhotoSekelas as $key) {
            $path = $key[0];
            $parts = explode('/', $path);

            $jurusan = $parts[3];
            $kelas = $parts[4];
            
            $id_jurusan = $this->ambilIdJurusan(strtolower($jurusan));
            if ($kelas == '1') {
                $id_kelas = '01.';
            }else if($kelas == '2'){
                $id_kelas = '02.';
            }elseif($kelas == '3'){
                $id_kelas = '03.';
            }elseif($kelas == 'industri'){
                $id_kelas = '04.';
            }else{
                $id_kelas = null;
            }

            foreach ($key as $keyUpload) {
                $imageFile = pathinfo($keyUpload);
                $path = Storage::putFile('public/photo_groups_sekelas', $imageFile['dirname'] . '/'. $imageFile['basename']);
                $upload = [
                    'class_id' => $id_jurusan . $id_kelas,
                    'photo' => $path,
                    'type_foto' => 1,
                ];
                PhotoGroup::create($upload);
            }
        }


        // Mengupload 5 Foto Kelompok
        $selectedPhotoKelompok = null;
        foreach ($pathJurusan as $key) {
            $pathKelas = glob( $key . '/*' );
            foreach ($pathKelas as $keyKelas) {
                $pathKelompok = glob( $keyKelas . '/kelompok/*' );
                $totalItems = count($pathKelompok);
            
                if( $totalItems <= 5 ){
                    $selectedPhotoKelompok[] = $pathKelompok;
                }else{
                    $randomKeys = array_rand($pathKelompok, 5);
                    $selectedItems = [];
                    foreach ($randomKeys as $key) {
                        $selectedItems[] = $pathKelompok[$key];
                    }
                    $selectedPhotoKelompok[] = $selectedItems;
                }
            }
        }

        // dd($selectedPhoto);
    }
}
