<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Audrey'], ['title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', [
        'instagram' => '@audreysw',
        'phone' => '081392829',
        'title' => 'Contact'
    ]);
});
