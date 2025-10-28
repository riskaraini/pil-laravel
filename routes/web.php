<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/profile', function () {
    $nama = 'Riska';
    //return view('profile' , compact ('nama'));
    return view('profile')->with('nama', $nama);
});

Route::get('/array', function () {
    for ($i=1; $i <= 5; $i++){
        echo 'Hello Wordl' . $i . 'x<br>';
    }
});
