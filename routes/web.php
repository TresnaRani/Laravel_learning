<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;



Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/home','Homecontroller@Home');
Route::get('/a',[Homecontroller::class,'About']);
Route::get('/contact',[Homecontroller::class,'Contact']);



