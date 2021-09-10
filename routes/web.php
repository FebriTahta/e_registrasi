<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiCont;
use App\Http\Controllers\SubController;
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
    return view('layouts.home.raw2');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
// fetching data alamat
Route::get('/fetchpp/{id}',[SubController::class, 'fetchpp']);
Route::get('/fetch/{id}',[SubController::class, 'fetch']);
Route::get('/fetch2/{id}',[SubController::class, 'fetch2']);
Route::get('/fetch3/{id}',[SubController::class, 'fetch3']);
Route::get('/fetch4/{id}',[SubController::class, 'fetch4']);
Route::get('/fetch5/{id}',[SubController::class, 'fetch5']);
Route::get('/fetch6/{id}',[SubController::class, 'fetch6']);
Route::get('/fetch7/{id}',[SubController::class, 'fetch7']);
Route::get('/fetch8/{id}',[SubController::class, 'fetch8']);

// fetching data negara
Route::get('/pilih-daftar-negara',[SubController::class, 'fetch_negara'])->name('negara');
// fetching kode telephone negara
Route::get('/phone-code-daftar-negara/{id}',[SubController::class, 'fetch_phonenegara'])->name('phonenegara');
// fetching data kabupaten
Route::get('/pilih-daftar-kabupaten',[SubController::class, 'fetch_kabupaten'])->name('kabupaten');
// fetching data lembaga
Route::get('/pilih-daftar-lembaga',[SubController::class, 'fetch_lembaga'])->name('lembaga');


// redirect ke halaman setelah mendaftar
Route::get('/pendaftaran-peserta-diklat-sukses/{program_id}/{diklat_id}/{peserta_id}', [RegistrasiCont::class,'sukses'])->name('diklat.registrasi.sukses');
// redirect ke halaman tapi terdaftar
Route::get('/pendaftaran-peserta-diklat-terdaftar/{program_id}/{diklat_id}/{peserta_id}', [RegistrasiCont::class,'terdaftar'])->name('diklat.registrasi.terdaftar');



// display form pendaftaran
// display form
Route::get('/{slug_pelatihan}',[RegistrasiCont::class, 'index']);
// prosess pendaftaran
// prosess menyimpan data peserta
Route::post('/pendaftaran-peserta-diklat',[RegistrasiCont::class, 'registrasi']);
// setelah mendaftar
// setelah sukses
