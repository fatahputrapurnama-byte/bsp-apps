<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardNewsController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardBimtekController;
use App\Http\Controllers\DashboardClientController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardAuditingController;
use App\Http\Controllers\DashboardPelatihanController;
use App\Http\Controllers\DashboardKajianstudyController;
use App\Http\Controllers\DashboardConsultationController;


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

Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/pelatihan/{id}', [HomeController::class, 'pelatihan']);
Route::get('/konsultasi/{id}', [HomeController::class, 'konsultasi']);
Route::get('/auditing/{id}', [HomeController::class, 'auditing']);
Route::get('/bimtek/{id}', [HomeController::class, 'bimtek']);
Route::get('/kajianstudy/{id}', [HomeController::class, 'kajianStudy']);
Route::get('/services', [HomeController::class, 'services']);
Route::post('/contact', [HomeController::class, 'contact'])->name('contact');
// Route::get('/data', [HomeController::class, 'index'])->name('index');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('/dashboard/pelatihan', [DashboardPelatihanController::class, 'index']);
// Route::post('/dashboard/pelatihan', [DashboardPelatihanController::class, 'store']);
Route::resource('/dashboard/pelatihan', DashboardPelatihanController::class)->middleware('auth');
Route::resource('/dashboard/konsultasi', DashboardConsultationController::class)->middleware('auth');
Route::resource('/dashboard/auditing', DashboardAuditingController::class)->middleware('auth');
Route::resource('/dashboard/bimtek', DashboardBimtekController::class)->middleware('auth');
Route::resource('/dashboard/kajianstudy', DashboardKajianstudyController::class)->middleware('auth');
Route::resource('/dashboard/contact', DashboardContactController::class)->middleware('auth');
Route::resource('/dashboard/client', DashboardClientController::class)->middleware('auth');
Route::resource('/dashboard/news', DashboardNewsController::class)->middleware('auth');
Route::resource('/dashboard/user', DashboardUserController::class)->except('show')->middleware('admin');


Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);