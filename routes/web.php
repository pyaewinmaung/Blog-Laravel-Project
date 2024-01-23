<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BLogController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('blog',[BlogController::class,'index'])->name('blog.index');
Route::get('blog/create',[BlogController::class,'create'])->name('blog.create');
Route::post('blog/store',[BlogController::class,'store'])->name('blog.store');
Route::get('blog/{id}/edit',[BlogController::class,'edit'])->name('blog.edit');
Route::post('blog/{id}/update',[BlogController::class,'update'])->name('blog.update');
Route::get('blog/{id}/delete',[BlogController::class,'delete'])->name('blog.delete');


Route::resource('post', PostController::class);

Route::get('chart',function(){
    return view('chart');
})->name('chart');

Route::get('table',function(){
    return view('table');
})->name('table');

Route::get('form',function(){
    return view('form');
})->name('form');

Route::get('state',function(){
    return view('state');
})->name('state');

Route::get('townsip',function(){
    return view('township');
})->name('township');

// Auth::routes();
Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
