<?php

use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::get('/', [StaticController::class, 'index']);
Route::get('/navpage', [StaticController::class,'navpage']);
Route::get('/users',[StaticController::class, 'users']);
Route::get('/posts',[StaticController::class, 'posts']);
Route::get('/about',[StaticController::class, 'about']);
Route::get('/portFolio',[StaticController::class, 'portFolio']);
Route::get('/contact',[StaticController::class,'contact']);
Route::get('/store/{categor?}/{itmes?}',[StaticController::class, 'store']);
Route::get('/contorllPath',[StaticController::class, 'contorllPath']);





// Route::post('users',function (Request $request){
//     return $request;
// });
// Route::get('users/{name}',function ( string $name){
//     if ($name ===  'nashwan')
//     {
//         return "admin";
//     }
//     else{
//         return "Users";
//     }

// });






