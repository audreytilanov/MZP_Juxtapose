<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PemilikController;

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

Route::get('/', [AuthController::class, 'home'])->name('home');
Route::get('/detail-usaha/{id}', [AuthController::class, 'detail'])->name('detail.usaha');
Route::get('/beli-saham/{id}', [AuthController::class, 'beliSaham'])->name('beli.saham');
Route::post('/beli-saham/{id}', [AuthController::class, 'beliSahamPost'])->name('beli.saham.post');



Route::get('/langkah-investasi', [GuestController::class, 'langkahInvestasi'])->name('langkah.investasi');

Route::get('/tentang-basama', [GuestController::class, 'tentangBasama'])->name('tentang.basama');

Route::get('/detail-usaha', [GuestController::class, 'usaha'])->name('usaha.detail');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('register.post');

// Route::get('/lengkapi-biodata', [AuthController::class, 'lengkapiBiodataPemilik'])->name('lengkapi.biodata');


Route::middleware('auth')->group(function () {
    Route::get('/lengkapi-biodata', [PemilikController::class, 'fase1'])->name('fase.1');
    Route::post('/lengkapi-biodata', [PemilikController::class, 'fase1post'])->name('fase.1.post');

    Route::get('/lengkapi-rekening', [PemilikController::class, 'fase2'])->name('fase.2');
    Route::post('/lengkapi-rekening', [PemilikController::class, 'fase2post'])->name('fase.2.post');

    Route::get('/form-usaha', [PemilikController::class, 'fase3'])->name('fase.3');
    Route::post('/form-usaha', [PemilikController::class, 'fase3post'])->name('fase.3.post');

    Route::get('/cari-partner-start', [PemilikController::class, 'fase4'])->name('fase.4');
    Route::get('/cari-partner-quiz', [PemilikController::class, 'fase4findpartner'])->name('fase.4.partner');
    Route::post('/cari-partner-quiz', [PemilikController::class, 'fase4findpartnerpost'])->name('fase.4.partner.post');


    Route::get('/list-detail-saham', [PemilikController::class, 'fase5'])->name('fase.5');
    Route::post('/list-detail-saham', [PemilikController::class, 'fase5post'])->name('fase.5.post');

    Route::get('/penawaran-awal', [PemilikController::class, 'fase6'])->name('fase.6');
    Route::post('/penawaran-awal', [PemilikController::class, 'fase6post'])->name('fase.6.post');

    Route::get('/penawaran-saham', [PemilikController::class, 'fase7'])->name('fase.7');
    Route::post('/penawaran-saham', [PemilikController::class, 'fase7post'])->name('fase.7.post');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    Route::get('/partner', [AuthController::class, 'partner'])->name('partner');
    Route::get('/detail-partner/{id}', [AuthController::class, 'detailPartner'])->name('detail.partner');


});