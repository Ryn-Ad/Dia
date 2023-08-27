<?php

use App\Http\Controllers\diagnoseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [diagnoseController::class, 'homeView']);
Route::get('/diagnose', [diagnoseController::class, 'diagnoseView']);
Route::post('/proses-diagnose', [diagnoseController::class, 'prosesDiagnose']);
Route::get('/disease', [diagnoseController::class, 'diseaseView']);
Route::get('/guestsolusi/{penyakit}', [diagnoseController::class, 'guestSolusi'])->name('Solusi');
Route::get('/404disease', function () {return view('404disease');});

Route::get('/admin', function () {return view('adminlog');});
Route::get('/dashboard', function () {return view('dashboard');});
Route::get('/gejala', [diagnoseController::class, 'gejalaView']);
Route::get('/penyakit', [diagnoseController::class, 'penyakitView']);
Route::get('/cek-solusi/{penyakit}', [diagnoseController::class, 'solusiView']);
Route::get('/aturan', [diagnoseController::class, 'ruleView']);

Route::get('/insert-gejala', [diagnoseController::class, 'insertGejalaView']);
Route::post('/proses-gejala', [diagnoseController::class, 'prosesGejala']);
Route::get('/edit-gejala/{gejala}', [diagnoseController::class, 'editGejala']);
Route::put('/edit-gejala/{gejala}', [diagnoseController::class, 'updateGejala']);
Route::delete('/delete-gejala/{gejala}', [diagnoseController::class, 'deleteGejala']);
Route::get('/insert-penyakit', [diagnoseController::class, 'insertPenyakitView']);
Route::post('/proses-penyakit', [diagnoseController::class, 'prosesPenyakit']);
Route::get('/edit-penyakit/{penyakit}', [diagnoseController::class, 'editPenyakit']);
Route::put('/edit-penyakit/{penyakit}', [diagnoseController::class, 'updatePenyakit']);
Route::delete('/delete-penyakit/{penyakit}', [diagnoseController::class, 'deletePenyakit']);

Route::post('/admin-login', [diagnoseController::class, 'adminLogin']);
Route::get('/logout', [diagnoseController::class, 'logout']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
