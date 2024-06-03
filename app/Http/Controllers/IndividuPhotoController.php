<?php

namespace App\Http\Controllers;

use App\Models\MasterClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PhotoGroup;

use App\Services\ExcelImportService;
use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\IOFactory;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Font;
use PhpOffice\PhpPresentation\DocumentLayout;


use App\Models\MasterStudent;
use App\Models\MasterTeacher;

class IndividuPhotoController extends Controller
{

    protected $excelImportService;

    public function __construct(ExcelImportService $excelImportService)
    {
        $this->excelImportService = $excelImportService;
    }

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
                'student_name' => $this->cleanString(strtoupper( $imageFile['filename'] )),
                'quotes' => 'Dummy',
                'photo' => $path,
                'class_id' => $id_jurusan . $id_kelas,
            ];

            MasterStudent::create($upload);
        }
    }

    public function aksiMasukanFoto( Request $request ) 
    {
        try{
            ini_set('max_execution_time', '0');
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
                $id_kelas = $this->cekKelas($kelas);
                
                $id_jurusan = $this->ambilIdJurusan(strtolower($jurusan));
                

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


            // // Mengupload 5 Foto Putbu
            $selectedPhotoPutbu = [];
            foreach ($pathJurusan as $key) {
                $pathKelas = glob( $key . '/*' );
                foreach ($pathKelas as $keyKelas) {
                    $pathPutbu = glob( $keyKelas . '/putbu/*' );
                    $totalItems = count($pathPutbu);
                
                    if( $totalItems <= 5 ){
                        $selectedPhotoPutbu[] = $pathPutbu;
                    }else{
                        $randomKeys = array_rand($pathPutbu, 5);
                        $selectedItems = [];
                        foreach ($randomKeys as $key) {
                            $selectedItems[] = $pathPutbu[$key];
                        }
                        $selectedPhotoPutbu[] = $selectedItems;
                    }
                }
            }

            foreach ($selectedPhotoPutbu as $key) {
                if ( !empty($key) ) {
                    $path = $key[0];
                    $parts = explode('/', $path);
        
                    $jurusan = $parts[3];
                    $kelas = $parts[4];
                    $id_kelas = $this->cekKelas($kelas);
                    $id_jurusan = $this->ambilIdJurusan(strtolower($jurusan));

                    foreach ($key as $keyUpload) {
                        $imageFile = pathinfo($keyUpload);
                        $path = Storage::putFile('public/photo_groups_putbu', $imageFile['dirname'] . '/'. $imageFile['basename']);
                        $upload = [
                            'class_id' => $id_jurusan . $id_kelas,
                            'photo' => $path,
                            'type_foto' => 2,
                        ];
                        PhotoGroup::create($upload);
                    }
                }
            }




            // // Mengupload 5 Foto Kelompok
            $selectedPhotoKelompok = [];
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

            foreach ($selectedPhotoKelompok as $key) {
                if ( !empty($key) ) {
                    $path = $key[0];
                    $parts = explode('/', $path);
        
                    $jurusan = $parts[3];
                    $kelas = $parts[4];
                    $id_kelas = $this->cekKelas($kelas);
                    $id_jurusan = $this->ambilIdJurusan(strtolower($jurusan));

                    foreach ($key as $keyUpload) {
                        $imageFile = pathinfo($keyUpload);
                        $path = Storage::putFile('public/photo_groups_kelompok', $imageFile['dirname'] . '/'. $imageFile['basename']);
                        $upload = [
                            'class_id' => $id_jurusan . $id_kelas,
                            'photo' => $path,
                            'type_foto' => 3,
                        ];
                        PhotoGroup::create($upload);
                    }

                }
            }


            // Mengupload Foto Individu
            $dataIndividu = [];
            foreach ($pathJurusan as $key) {
                $pathKelas = glob( $key . '/*' );
                    foreach ($pathKelas as $keyKelas) {
                        $pathIndividu = glob($keyKelas . '/individu/*');
                        $dataIndividu[] = $pathIndividu;
                    }
            }

            foreach ($dataIndividu as $key) {
                $path = $key[0];
                $parts = explode('/', $path);

                $jurusan = $parts[3];
                $kelas = $parts[4];

                $id_jurusan = $this->ambilIdJurusan(strtolower($jurusan));
                $id_kelas = $this->cekKelas($kelas);

                foreach ($key as $keyUpload) {
                    $imageFile = pathinfo($keyUpload);
                    $path = Storage::putFile('public/photo_individual', $imageFile['dirname'] . '/'. $imageFile['basename']);
                    $upload =  [
                        'student_name' => $this->cleanString(strtoupper( $imageFile['filename'] )),
                        'quotes' => 'Dummy',
                        'photo' => $path,
                        'class_id' => $id_jurusan . $id_kelas,
                    ];

                    MasterStudent::create($upload);
                }
            }

        } catch(\Exception $exception) {
            dd($exception);
        }
    }

    public function aksiMasukanQuotes( Request $request ) 
    {
        ini_set('max_execution_time', '0');
        $this->excelImportService->import();
    }

    public function aksiMembuatPDF( Request $request ) 
    {
        // Buat objek PHPPresentation
        $objPHPPresentation = new PhpPresentation();
        $objPHPPresentation->setLayout((new DocumentLayout)->setDocumentLayout(DocumentLayout::LAYOUT_SCREEN_16X10));
        

        // Ambil data siswa dari database
        // $students = MasterStudent::where('class_id', '=',  '01.02.04.')->take(5)->get();
        $student = MasterStudent::where('class_id', '=', '01.01.03.')->get();

        $slide = $objPHPPresentation->getActiveSlide();
        $x = 100;

        foreach ($student as $key => $value) {
            if ( $key > 3 ) {
                $slide->createDrawingShape()
                            ->setName('photo' . $key)
                            ->setPath(storage_path('app/' . $value->photo))
                            ->setWidth(200)
                            ->setHeight(200)
                            ->setOffsetX( $x - 800)
                            ->setOffsetY(300);
                            
                // Masukan Nama Siswa
                $shape = $slide->createRichTextShape()
                                    ->setHeight(40)
                                    ->setWidth(150)
                                    ->setOffsetX( $x  - 800 )
                                    ->setOffsetY(500);

                $textRun = $shape->createTextRun($value->student_name);
                $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER );
                $textRun->getFont()->setBold(true)
                            ->setSize(10)
                            ->setColor(new Color(Color::COLOR_BLACK));
                            
                $x = $x + 200;
            }else{
                $slide->createDrawingShape()
                            ->setName('photo' . $key)
                            ->setPath(storage_path('app/' . $value->photo))
                            ->setWidth(200)
                            ->setHeight(200)
                            ->setOffsetX( $x )
                            ->setOffsetY(50);
                // Masukan Nama Siswa
                $shape = $slide->createRichTextShape()
                                    ->setHeight(40)
                                    ->setWidth(150)
                                    ->setOffsetX( $x )
                                    ->setOffsetY(250);

                $textRun = $shape->createTextRun($value->student_name);
                $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER );
                $textRun->getFont()->setBold(true)
                            ->setSize(10)
                            ->setColor(new Color(Color::COLOR_BLACK));
                
                $x = $x + 200;
            }

            if ( $key == 7) {
                break;
            }
        }

        $slide = $objPHPPresentation->createSlide();
        $x = 100;
        foreach ($student as $key => $value) {
            if ( $key > 7  && $key <= 11 ) {
                $slide->createDrawingShape()
                            ->setName('photo' . $key)
                            ->setPath(storage_path('app/' . $value->photo))
                            ->setWidth(200)
                            ->setHeight(200)
                            ->setOffsetX( $x )
                            ->setOffsetY(50);
                // Masukan Nama Siswa
                $shape = $slide->createRichTextShape()
                                    ->setHeight(40)
                                    ->setWidth(150)
                                    ->setOffsetX( $x )
                                    ->setOffsetY(250);

                $textRun = $shape->createTextRun($value->student_name);
                $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER );
                $textRun->getFont()->setBold(true)
                            ->setSize(10)
                            ->setColor(new Color(Color::COLOR_BLACK));
                
                $x = $x + 200;
            }

            if (  $key > 11 ) {
                $slide->createDrawingShape()
                            ->setName('photo' . $key)
                            ->setPath(storage_path('app/' . $value->photo))
                            ->setWidth(200)
                            ->setHeight(200)
                            ->setOffsetX( $x - 800)
                            ->setOffsetY(300);
                            
                // Masukan Nama Siswa
                $shape = $slide->createRichTextShape()
                                    ->setHeight(40)
                                    ->setWidth(150)
                                    ->setOffsetX( $x  - 800 )
                                    ->setOffsetY(500);

                $textRun = $shape->createTextRun($value->student_name);
                $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER );
                $textRun->getFont()->setBold(true)
                            ->setSize(10)
                            ->setColor(new Color(Color::COLOR_BLACK));
                            
                $x = $x + 200;
            }


            if ($key == 15) {
                break;
            }
        }

        $slide = $objPHPPresentation->createSlide();
        $x = 100;
        foreach ($student as $key => $value) {
            if ( $key > 15  && $key <= 19 ) {
                $slide->createDrawingShape()
                            ->setName('photo' . $key)
                            ->setPath(storage_path('app/' . $value->photo))
                            ->setWidth(200)
                            ->setHeight(200)
                            ->setOffsetX( $x )
                            ->setOffsetY(50);
                // Masukan Nama Siswa
                $shape = $slide->createRichTextShape()
                                    ->setHeight(40)
                                    ->setWidth(150)
                                    ->setOffsetX( $x )
                                    ->setOffsetY(250);

                $textRun = $shape->createTextRun($value->student_name);
                $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER );
                $textRun->getFont()->setBold(true)
                            ->setSize(10)
                            ->setColor(new Color(Color::COLOR_BLACK));
                
                $x = $x + 200;
            }

            if (  $key > 19 ) {
                $slide->createDrawingShape()
                            ->setName('photo' . $key)
                            ->setPath(storage_path('app/' . $value->photo))
                            ->setWidth(200)
                            ->setHeight(200)
                            ->setOffsetX( $x - 800)
                            ->setOffsetY(300);
                            
                // Masukan Nama Siswa
                $shape = $slide->createRichTextShape()
                                    ->setHeight(40)
                                    ->setWidth(150)
                                    ->setOffsetX( $x  - 800 )
                                    ->setOffsetY(500);

                $textRun = $shape->createTextRun($value->student_name);
                $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER );
                $textRun->getFont()->setBold(true)
                            ->setSize(10)
                            ->setColor(new Color(Color::COLOR_BLACK));
                            
                $x = $x + 200;
            }


            if ($key == 22) {
                break;
            }
        }

        


        // foreach ($student as $studentt) {
        //     // Buat slide baru untuk setiap siswa
        //     $slide = $objPHPPresentation->createSlide();

        //     // Tambahkan nama siswa ke slide
        //     $shape = $slide->createRichTextShape()
        //         ->setHeight(512)
        //         ->setWidth(1024);

        //     $shape->getActiveParagraph()->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        //     $textRun = $shape->createTextRun($studentt->student_name);
        //     $textRun->getFont()->setBold(true)
        //         ->setSize(60)
        //         ->setColor(new Color(Color::COLOR_BLACK));

        //     // Tambahkan foto siswa ke slide
        //     if (file_exists(storage_path('app/' . $studentt->photo))) {
        //         $slide->createDrawingShape()
        //             ->setName('Photo')
        //             ->setPath(storage_path('app/' . $studentt->photo))
        //             ->setWidth(300)
        //             ->setHeight(300)
        //             ->setOffsetX(220)
        //             ->setOffsetY(150);
        //     }
        // }
        
        // Simpan file PowerPoint
        $oWriterPPTX = IOFactory::createWriter($objPHPPresentation, 'PowerPoint2007');
        $fileName = 'yearbook_' . date('Y_m_d_H_i_s') . '.pptx';
        $oWriterPPTX->save(storage_path('app/public/' . $fileName));

        return response()->download(storage_path('app/public/' . $fileName))->deleteFileAfterSend(true);
    }

    public function aksiMasukanGuru( Request $request ) 
    {
        ini_set('max_execution_time', '0');
        $pathGuru = glob('D:/Kimi Martua/BTS/Guru Fix/*');

        function extractNumber($filename) {
            preg_match('/(\d+)/', basename($filename), $matches);
            return $matches[1] ?? 0;
        }

        usort($pathGuru, function($a, $b) {
            return extractNumber($a) - extractNumber($b);
        });
        foreach($pathGuru as $key => $image){
            $imageFile = pathinfo($image);
            $explode = explode('_', $imageFile['filename']);
            $path = Storage::putFile('public/photo_teachers', $imageFile['dirname'] . '/'. $imageFile['basename']);
            if ( $key <= 5) {
                MasterTeacher::create([
                    'teacher_name' => $explode[1],
                    'teacher_description' =>  $explode[2],
                    'photo' => $path,
                ]);
            }else{
                MasterTeacher::create([
                    'teacher_name' => $explode[1],
                    'teacher_description' =>  'XII ' . $explode[2],
                    'photo' => $path,
                ]);
            }
        }
    }

    public function makeUuid( ) 
    {
         // Buat hash menggunakan uniqid yang digabungkan dengan microtime
            $hash = sha1(uniqid(mt_rand(), true));
            
            // Encode hash ke Base64
            $base64 = base64_encode(hex2bin($hash));
            
            // Hapus karakter '=' dari Base64 encoding
            $base64 = rtrim($base64, '=');
            
            
            return $base64;
    }

    public function cekKelas( $kelas ) 
    {
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

        return $id_kelas;
    }
}
