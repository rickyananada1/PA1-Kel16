<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatajemaatController;
use App\Http\Controllers\JadwalibadahController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\DonasiController;
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
Route::get('/welcome', function () {
    return view('layout.admin');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/datajemaat',[DatajemaatController::class ,'index'])->name('datajemaat');
Route::get('/tambahjemaat',[DatajemaatController::class ,'tambahjemaat'])->name('tambahjemaat');
Route::post('/insertdata',[DatajemaatController::class ,'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}',[DatajemaatController::class ,'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[DatajemaatController::class ,'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}',[DatajemaatController::class ,'deletedata'])->name('deletedata');


Route::get('/jadwalibadah',[JadwalibadahController::class ,'index'])->name('jadwalibadah');
Route::get('/tambahjadwal',[JadwalibadahController::class ,'tambahjadwal'])->name('tambahjadwal');
Route::post('/insertjadwal',[JadwalibadahController::class ,'insertjadwal'])->name('insertjadwal');
Route::get('/tampilkanjadwal/{id}',[JadwalibadahController::class ,'tampilkanjadwal'])->name('tampilkanjadwal');
Route::post('/updatejadwal/{id}',[JadwalibadahController::class ,'updatejadwal'])->name('updatejadwal');
Route::get('/deletejadwal/{id}',[JadwalibadahController::class ,'deletejadwal'])->name('deletejadwal');

Route::get('/keuangan',[KeuanganController::class ,'index'])->name('keuangan');
Route::get('/tambahkeuangan',[KeuanganController::class ,'tambahkeuangan'])->name('tambahkeuangan');
Route::post('/insertkeuangan',[KeuanganController::class ,'insertkeuangan'])->name('insertkeuangan');
Route::get('/tampilkankeuangan/{id}',[KeuanganController::class ,'tampilkankeuangan'])->name('tampilkankeuangan');
Route::post('/updatekeuangan/{id}',[KeuanganController::class ,'updatekeuangan'])->name('updatekeuangan');
Route::get('/deletekeuangan/{id}',[KeuanganController::class ,'deletekeuangan'])->name('deletekeuangan');

Route::get('/donasi',[DonasiController::class ,'index'])->name('donasi');
Route::get('/tambahdonasi',[DonasiController::class ,'tambahdonasi'])->name('tambahdonasi');
Route::post('/insertdonasi',[DonasiController::class ,'insertdonasi'])->name('insertdonasi');
Route::get('/tampilkandonasi/{id}',[DonasiController::class ,'tampilkandonasi'])->name('tampilkandonasi');
Route::post('/updatedonasi/{id}',[DonasiController::class ,'updatedonasi'])->name('updatedonasi');
Route::get('/deletedonasi/{id}',[DonasiController::class ,'deletedonasi'])->name('deletedonasi');

