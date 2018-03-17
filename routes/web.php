<?php

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
    $allFiles = collect(Storage::disk('s3')->files());

    $allImages = $allFiles->filter(function($item, $key){
        $ext = pathinfo($item, PATHINFO_EXTENSION);
        if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif']))
            return $item;
    })->toArray();
    
    $files = [];
    foreach($allImages as $file){
        $files[] = Storage::disk('s3')->url($file);
    }
    
    return view('welcome', compact('files'));
});
