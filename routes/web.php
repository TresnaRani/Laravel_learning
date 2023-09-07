<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/Name/{firstName}/{middleName}/{lastName}', [DemoController::class, 'MyName']);
Route::get('/', [DemoController::class, 'Home']);


Route::group(['prefix'='account'],function(){

Route::get('/profile',function{

});
Route::get('/login',function{

});
Route::get('/logout',function{

});
Route::get('/signup',function{

});
Route::get('/updateProfile',function{
    
});

});




