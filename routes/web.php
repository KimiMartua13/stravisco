<?php

use Illuminate\Support\Facades\Route;
use Spatie\Image\Image;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndividuPhotoController;
use App\Http\Controllers\GuruController;

Route::get('/', [UserController::class, 'index']);
Route::get('/jurusan', [JurusanController::class, 'index']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/test', function () {
    return view('user/kelas/singlekelascopy');
});
// Route::get('/jurusan/{jurusan}', [ClassController::class, 'index']);

Route::get('/guru', [GuruController::class, 'index']);

Route::prefix('jurusan')->group(function () {
    Route::prefix('{jurusan}')->group(function () {
        Route::get('/', [JurusanController::class, 'jurusanWithName']);
        Route::get('/{kelas}', [JurusanController::class, 'aksiAmbilKelas']);
        Route::get('/{kelas}/{filter}', [JurusanController::class, 'aksiAmbilKelas']);
        Route::get('/{kelas}/{filter}/download', [JurusanController::class, 'aksiDownloadPDF']);
    });
});

Route::prefix('dashboard')->middleware('auth')->group( function(){
    Route::get('/', [AdminController::class, 'index']);
    Route::prefix('photo')->group(function () {
        // Route::get('group', [AdminController::class, 'aksiTampilFotoGroup']);
        Route::prefix('group')->group(function () {
            Route::get('/',[AdminController::class, 'aksiTampilFotoGroup'] );
            Route::get('/{jurusan}/', [AdminController::class, 'aksiTampilFotoGroup']);
            Route::get('/{jurusan}/{filter}', [AdminController::class, 'aksiTampilFotoGroup']);
        });

        Route::get('/tambah/group/{jurusan}', [AdminController::class, 'aksiTambahFotoGroup']);
        Route::post('/tambah/group/aksiTambah', [AdminController::class,'tambahFotoGroup']);
        Route::post('/hapus/group', [AdminController::class,'aksiHapusFotoGroup']);
        
        Route::prefix('individual')->group(function(){
            Route::get('/', [AdminController::class, 'aksiTampilFotoIndividual']);
            Route::get('/{filter}', [AdminController::class, 'aksiTampilFotoIndividual']);
            Route::get('/{filter}/{kelas}/tambah', [AdminController::class, 'aksiTambahFotoIndividual']);
            Route::get('/{filter}/{kelas}/hapus/{siswa}', [AdminController::class, 'aksiHapusFotoIndividual']);
            Route::post('/aksiTambahSiswa', [AdminController::class, 'aksiTambahSiswa'] );
            
            
            Route::post('/edit', [AdminController::class, 'aksiEditSiswa']);
            Route::post('/aksiEditIndividual', [AdminController::class, 'aksiEditIndividual']);

            Route::post('/hapus', [AdminController::class, 'aksiHapusFotoIndividual']);
        });
    });

    Route::prefix('teachers')->group(function(){
        Route::get('/', [AdminController::class, 'aksiTampilGuru']);
    });

    Route::prefix('register')->group(function(){
        Route::get('/', [AdminController::class, 'aksiTampilRegister']);
        Route::post('/aksiRegister', [AdminController::class, 'aksiRegisterUser']);
    });

});

Route::get('masukanfoto/', [IndividuPhotoController::class, 'aksiMasukanFoto']);
Route::get('masukanquotes', [IndividuPhotoController::class , 'aksiMasukanQuotes']);

Route::prefix('login')->middleware('guest')->group(function () {
    Route::get('/', [AdminController::class, 'aksiTampilLogin'])->name('login');
    Route::post('/aksiLogin', [AdminController::class, 'aksiLoginAplikasi']);
});




































// Route::get('/reduce-image/{jurusan}', function ( $jurusan ) {
    // $imagePath = glob('C:/photo/Foto Stravisco/' . $jurusan . '/*');
    // dd($imagePath);
    
//     foreach( $imagePath as $image ){
//         $filePhoto = pathinfo($image);
//         if ( array_key_exists('extension',  $filePhoto) ) {
//             Image::load($image)
//             ->optimize()
//             ->save('C:\\photo\\The Boys\\Reduce\\' . $filePhoto['basename']);
//         }
//     }

//     return 'Image resized successfully!';
// });

// Route::get('/uploadFoto/{jurusan}', function( $jurusan ) {
//     $paths = glob('C:/photo/Foto Stravisco/' . $jurusan . '/*');
    
//     foreach ($paths as $path) {
//         $newPaths = glob($path . '/*');
//         foreach ($newPaths as $newPath) {
//             $pathInfo = pathinfo($newPath);
//             if ( array_key_exists('extension', $pathInfo) ) {
//                 dump('ditemukan foto bareng');
//                 // dump($pathInfo);
//                 // Image::load($)
//                 // ->optimize()
//                 // ->save('C:\\photo\\The Boys\\Reduce\\' . $filePhoto['basename']);
//             }else{
//                 $veryNewPaths = glob($newPath . '/*');
//                 foreach ($veryNewPaths as $veryNewPath) {
//                     $newPathInfo = pathinfo($veryNewPath);
//                     dump('ditemukan foto individu');
//                     dump($newPathInfo);
//                 }
                
//             }
//         }
//     }
// });