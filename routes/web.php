<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/tourinfo', function () {
    return view('tourinfo');
});
Route::get('/tourscontainer', function () {
    return view('tourscontainer');
});
Route::get('/suiteinfo', function () {
    return view('suiteinfo');
});
Route::get('/suitescontainer', function () {
    return view('suitescontainer');
});
