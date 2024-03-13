<?php

use Illuminate\Support\Facades\Route;
use Spatie\Image\Image;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('/user/home/index');
});

Route::get('/reduce-image/{jurusan}', function ( $jurusan ) {
    $imagePath = glob('C:/photo/Foto Stravisco/' . $jurusan . '/*');
    dd($imagePath);
    
    foreach( $imagePath as $image ){
        $filePhoto = pathinfo($image);
        if ( array_key_exists('extension',  $filePhoto) ) {
            Image::load($image)
            ->optimize()
            ->save('C:\\photo\\The Boys\\Reduce\\' . $filePhoto['basename']);
        }
    }

    return 'Image resized successfully!';
});

Route::get('/uploadFoto/{jurusan}', function( $jurusan ) {
    $paths = glob('C:/photo/Foto Stravisco/' . $jurusan . '/*');
    
    foreach ($paths as $path) {
        $newPaths = glob($path . '/*');
        foreach ($newPaths as $newPath) {
            $pathInfo = pathinfo($newPath);
            if ( array_key_exists('extension', $pathInfo) ) {
                dump('ditemukan foto bareng');
                // dump($pathInfo);
                // Image::load($)
                // ->optimize()
                // ->save('C:\\photo\\The Boys\\Reduce\\' . $filePhoto['basename']);
            }else{
                $veryNewPaths = glob($newPath . '/*');
                foreach ($veryNewPaths as $veryNewPath) {
                    $newPathInfo = pathinfo($veryNewPath);
                    dump('ditemukan foto individu');
                    dump($newPathInfo);
                }
                
            }
        }
    }
});

Route::prefix('dashboard')->group( function(){
    Route::get('/', [AdminController::class, 'index']);
    Route::prefix('photo')->group(function () {
        Route::get('/', [AdminController::class, 'aksiTampilFoto']);
    });
});
