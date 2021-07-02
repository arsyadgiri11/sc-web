<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\FrontController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::resource('admin', ContentController::class);
Route::get('/gambar/{image}', [ContentController::class, 'load_image']);
Route::get('/hapus/{id}', [ContentController::class, 'destroy']);
Route::get('/edit/{id}', [ContentController::class, 'edit']);
Route::get('/update/{id}', [ContentController::class, 'update']);


//frontend
//Route::resource('admin', NewsController::class);
// Route::get('/home', function () {
//     return view('front-end.index');
// });
Route::resource('home', FrontController::class);
