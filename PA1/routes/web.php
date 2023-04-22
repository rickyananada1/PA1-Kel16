<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatajemaatController;
use App\Http\Controllers\JadwalibadahController;

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
    return view('user.dashboard');
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
