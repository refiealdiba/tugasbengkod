<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('layouts.dashboard');
});

Route::get('/periksa', function () {
    return view('layouts.list-periksa');
});

Route::get('/obat', function () {
    return view('layouts.list-obat');
});
