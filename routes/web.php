<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
Route::post('/login', [AccountController::class,"login"]);
Route::get('/logout', [AccountController::class,"logout"]);



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
Route::get('/loginform', function () {
    return view('loginform');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('home');
});

use App\Http\Controllers\PatientController;
Route::resource('patients', PatientController::class);

use App\Http\Controllers\DoctorController;
Route::resource('doctors', DoctorController::class);

use App\Http\Controllers\IllController;
Route::resource('ills', IllController::class);


use App\Http\Controllers\ConsultController;
Route::resource('consults', ConsultController::class);

use App\Http\Controllers\ProductController;
Route::resource('products', ProductController::class);
