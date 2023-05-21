<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\HomeController;

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


Route::get('/crud', [CrudController::class, 'index'])->name('crud');
Route::get('/create', [CrudController::class, 'create'])->name('create');
Route::post('/crud/store', [CrudController::class, 'store'])->name('store');



Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/post-details', [HomeController::class, 'post_details']);

Route::get('/', function () {
    return view('index');
});

