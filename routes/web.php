<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\nilaiKuliahController;
use App\Http\Controllers\penggarisController;
use App\Http\Controllers\easController;

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

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/latihan1', function () {
    return view('latihan1');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/tes', function () {
    return view('tes');
});

Route::get('/linktree', function () {
    return view('linktree');
});

// Route::get('/ujian-tengah-semester', function () {
//     return view('resources/views/uts.blade.php');
// });

// Route::get('/uts', [DosenController::class, 'getUts']);

Route::get('/ujian-tengah-semester', 'App\Http\Controllers\DosenController@showuts');

Route::get('/uts/validation', function () {
    return view('validation');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showblog');

Route::get('/pegawai/{nama}', [DosenController::class, 'showNama']);

Route::get('/formulir', [DosenController::class, 'formulir']);
Route::post('/formulir/proses', [DosenController::class, 'proses']);

Route::get('/master', function() {
    return view('master');
});

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('/dosen/index', [DosenController::class, 'getDosen']);

Route::get('/dosen/add', [DosenController::class, 'viewAddDosen']);
Route::post('/dosen/add-dosen', [DosenController::class, 'addDosen']);

Route::get('/dosen/edit/{id}', [DosenController::class, 'viewUpdateDosen']);
Route::post('/dosen/edit-dosen', [DosenController::class, 'UpdateDosen']);

Route::get('/dosen/delete-dosen/{id}', [DosenController::class, 'deleteDosen']);

Route::get('/dosen/cari', [DosenController::class, 'cariDosen']);

Route::get('/dosen/view/{id}', [DosenController::class, 'viewDosen']);

Route::get('/nilai/index', [nilaiKuliahController::class, 'indexNilai']);
Route::post('/nilai/add', [nilaiKuliahController::class, 'tambahNilai']);
Route::get('/nilai/add', [nilaiKuliahController::class, 'tambahNilaiView']);

Route::get('/penggaris/index', [penggarisController::class, 'indexPenggaris']);
Route::post('/penggaris/add', [penggarisController::class, 'tambahPenggaris']);
Route::get('/penggaris/add', [penggarisController::class, 'tambahPenggarisView']);
Route::post('/penggaris/edit', [penggarisController::class, 'editPenggaris']);
Route::get('/penggaris/edit/{id}', [penggarisController::class, 'editPenggarisView']);
Route::get('/penggaris/delete/{id}', [penggarisController::class, 'deletePenggaris']);

Route::get('/eas/index', [easController::class, 'index']);
Route::get('/eas/delete/{kodepegawai}', [easController::class, 'delete']);
Route::post('/eas/insert', [easController::class, 'insert']);
Route::get('/eas/insert', [easController::class, 'viewInsert']);
