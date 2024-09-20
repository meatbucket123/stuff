<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/register', [StudentController::class, 'showForm'])->name('registration.form');
Route::post('/register', [StudentController::class, 'submitForm'])->name('registration.submit');

Route::get('/viewinfo', [StudentController::class, 'viewInfo'])->name('viewInfo');
Route::get('/test', [StudentController::class, 'TestURL'])->name('test.page');
