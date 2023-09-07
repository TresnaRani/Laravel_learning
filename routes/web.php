<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/Name/{firstName}/{middleName}/{lastName}', [DemoController::class, 'MyName']);
Route::get('/', [DemoController::class, 'Home']);


Route::group(['prefix'='account'],function(){

Route::get('/profile',function{
    return "profile";

});
Route::get('/login',function{
    return "login";
});
Route::get('/logout',function{
    return "logout";
});
Route::get('/signup',function{
    return "signup";

});
Route::get('/updateProfile',function{
    return "updateProfile";

});

});




