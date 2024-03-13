<?php

use Illuminate\Support\Facades\Route;
use Spatie\Image\Image;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
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
                // dump('ditemukan foto bareng');
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
