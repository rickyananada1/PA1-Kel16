<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatajemaatController;
use App\Http\Controllers\JadwalibadahController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WartaController;
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


Route::get('/dashboard', function () {
    return view('layout.admin');
})->middleware(['auth'])->name('dashboard');

Route::get('/logout',[PhotoController::class,'perform'])->name('logout');

 
Route::get('/jadwalibadahh',[JadwalibadahController::class ,'indexx'])->name('jadwalibadahh');
Route::get('/datajemaatt',[DatajemaatController::class ,'indexx'])->name('datajemaatt');
Route::get('/keuangann',[KeuanganController::class ,'indexx'])->name('keuangann');
Route::get('/donasii',[DonasiController::class ,'indexx'])->name('donasii');
Route::get('/photoo',[PhotoController::class ,'indexx'])->name('photoo');



require __DIR__.'/auth.php';

Route::get('/datajemaat',[DatajemaatController::class ,'index'])->middleware(['auth'])->name('datajemaat');
Route::get('/tambahjemaat',[DatajemaatController::class ,'tambahjemaat'])->middleware(['auth'])->name('tambahjemaat');
Route::post('/insertdata',[DatajemaatController::class ,'insertdata'])->middleware(['auth'])->name('insertdata');
Route::get('/tampilkandata/{id}',[DatajemaatController::class ,'tampilkandata'])->middleware(['auth'])->name('tampilkandata');
Route::post('/updatedata/{id}',[DatajemaatController::class ,'updatedata'])->middleware(['auth'])->name('updatedata');
Route::get('/deletedata/{id}',[DatajemaatController::class ,'deletedata'])->middleware(['auth'])->name('deletedata');


Route::get('/jadwalibadah',[JadwalibadahController::class ,'index'])->middleware(['auth'])->name('jadwalibadah');
Route::get('/tambahjadwal',[JadwalibadahController::class ,'tambahjadwal'])->middleware(['auth'])->name('tambahjadwal');
Route::post('/insertjadwal',[JadwalibadahController::class ,'insertjadwal'])->middleware(['auth'])->name('insertjadwal');
Route::get('/tampilkanjadwal/{id}',[JadwalibadahController::class ,'tampilkanjadwal'])->middleware(['auth'])->name('tampilkanjadwal');
Route::post('/updatejadwal/{id}',[JadwalibadahController::class ,'updatejadwal'])->middleware(['auth'])->name('updatejadwal');
Route::get('/deletejadwal/{id}',[JadwalibadahController::class ,'deletejadwal'])->middleware(['auth'])->name('deletejadwal');

Route::get('/keuangan',[KeuanganController::class ,'index'])->middleware(['auth'])->name('keuangan');
Route::get('/tambahkeuangan',[KeuanganController::class ,'tambahkeuangan'])->middleware(['auth'])->name('tambahkeuangan');
Route::post('/insertkeuangan',[KeuanganController::class ,'insertkeuangan'])->middleware(['auth'])->name('insertkeuangan');
Route::get('/tampilkankeuangan/{id}',[KeuanganController::class ,'tampilkankeuangan'])->middleware(['auth'])->name('tampilkankeuangan');
Route::post('/updatekeuangan/{id}',[KeuanganController::class ,'updatekeuangan'])->middleware(['auth'])->name('updatekeuangan');
Route::get('/deletekeuangan/{id}',[KeuanganController::class ,'deletekeuangan'])->middleware(['auth'])->name('deletekeuangan');

Route::get('/donasi',[DonasiController::class ,'index'])->middleware(['auth'])->name('donasi');
Route::get('/tambahdonasi',[DonasiController::class ,'tambahdonasi'])->middleware(['auth'])->name('tambahdonasi');
Route::post('/insertdonasi',[DonasiController::class ,'insertdonasi'])->middleware(['auth'])->name('insertdonasi');
Route::get('/tampilkandonasi/{id}',[DonasiController::class ,'tampilkandonasi'])->middleware(['auth'])->name('tampilkandonasi');
Route::post('/updatedonasi/{id}',[DonasiController::class ,'updatedonasi'])->middleware(['auth'])->name('updatedonasi');
Route::get('/deletedonasi/{id}',[DonasiController::class ,'deletedonasi'])->middleware(['auth'])->name('deletedonasi');

Route::get('/photo',[PhotoController::class ,'index'])->middleware(['auth'])->name('photo');
Route::get('/tambahphoto',[PhotoController::class ,'tambahphoto'])->middleware(['auth'])->name('tambahphoto');
Route::post('/insertphoto',[PhotoController::class ,'insertphoto'])->middleware(['auth'])->name('insertphoto');
Route::get('/deletephoto/{id}',[PhotoController::class,'deletephoto'])->middleware(['auth'])->name('deletephoto');

Route::get('/wartajemaat',[WartaController::class ,'index'])->middleware(['auth'])->name('wartajemaat');
Route::get('/tambahwarta',[WartaController::class ,'tambahwarta'])->middleware(['auth'])->name('tambahwarta');
Route::post('/insertwarta',[WartaController::class ,'insertwarta'])->middleware(['auth'])->name('insertwarta');
Route::get('/tampilkanwarta/{id}',[WartaController::class ,'tampilkanwarta'])->middleware(['auth'])->name('tampilkanwarta');
Route::post('/updatewarta/{id}',[WartaController::class ,'updatewarta'])->middleware(['auth'])->name('updatewarta');

