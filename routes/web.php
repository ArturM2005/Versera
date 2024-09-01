<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('courses');
});
Route::get('/compare', function () {
    return view('compare');
});
Route::get('/favorites', function () {
    return view('favorites');
});
Route::get('/contacts', function () {
    return view('contacts');
});


