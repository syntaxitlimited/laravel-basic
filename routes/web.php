<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController1;

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


Route::get('/home', [HomeController::class, 'home']);

Route::get('/crud', [CrudController::class, 'index'])->name('crud');
Route::get('/crud/{id}', [CrudController::class, 'edit'])->name('edit');
Route::post('/crud/delete/{id}', [CrudController::class, 'delete'])->name('delete');
Route::get('/create', [CrudController::class, 'create'])->name('create');
Route::post('/crud/store', [CrudController::class, 'store'])->name('store');
Route::post('/crud/update', [CrudController::class, 'update'])->name('update');


// Eloquent ORM

Route::get('/crud1', [CrudController1::class, 'index'])->name('crud1');
Route::get('/teacher/create', [CrudController1::class, 'create'])->name('teacher.create');
Route::post('/teacher/store', [CrudController1::class, 'store'])->name('teacher.store');
Route::get('/teacher/{id}', [CrudController1::class, 'edit'])->name('teacher.edit');
Route::post('/teacher/delete/{id}', [CrudController1::class, 'delete'])->name('teacher.delete');
Route::post('/teacher/update', [CrudController1::class, 'update'])->name('teacher.update');



Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/post-details', [HomeController::class, 'post_details']);

Route::get('/', function () {
    return view('index');
});


