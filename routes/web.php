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

Route::get('/reduce-image', function () {
    $imagePath = glob('C:/photo/The Boys/*');

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