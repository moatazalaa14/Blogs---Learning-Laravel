<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

Route::get('/blogs',[BlogController::class,'index'])->name('blogs.index');

Route::get('/showerrormsg/{blog}',[BlogController::class,'showAlertMsg'])->name('blogs.destory');
Route::get('/deleteblogs/{blog}',[BlogController::class,'destory']);
Route::get('/blogs/{blog}/edit',[BlogController::class,'edit'])->name('blogs.edit');
Route::get('/blogs/{blog}',[BlogController::class,'show']);
Route::put('/blogs/{blog}',[BlogController::class,'update'])->name('blogs.update');

Route::get('/createblog',[BlogController::class,'create'])->name('blogs.create');

Route::post('/blogs',[BlogController::class,'store'])->name('blogs.store');

