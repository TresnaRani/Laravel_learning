<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/Name/{firstName}/{middleName}/{lastName}', [DemoController::class, 'MyName']);
Route::get('/', [DemoController::class, 'Home']);
Route::get('/about',[DemoController::class, 'About']);
Route::get('/contact',[DemoController::class, 'Contact']);


