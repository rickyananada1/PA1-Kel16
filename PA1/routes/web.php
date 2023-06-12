<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatajemaatController;
use App\Http\Controllers\JadwalibadahController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\GaleriController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\WartaController;
use App\Models\datajemaat;
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
    return view('welcome2');
});




// Route::get('/ayam', function () {
//     return view('layout.admin');
// });


Route::get('/dashboard', function () {
    $jumlahjemaat = datajemaat::count();
    return view('admin.index',compact('jumlahjemaat'));
})->middleware(['auth'])->name('dashboard');

Route::get('/logout',[GaleriController::class,'perform'])->name('logout');

 
Route::get('/jadwalibadahh',[JadwalibadahController::class ,'indexx'])->name('jadwalibadahh');
Route::get('/datajemaatt',[DatajemaatController::class ,'indexx'])->name('datajemaatt');
Route::get('/keuangann',[KeuanganController::class ,'indexx'])->name('keuangann');
Route::get('/donasii',[DonasiController::class ,'indexx'])->name('donasii');
Route::get('/photoo',[GaleriController::class ,'indexx'])->name('photoo');
Route::get('/wartajemaatt',[WartaController::class ,'indexx'])->name('wartaa');
Route::get('/wartadetails',[WartaController::class ,'wartadetails'])->name('wartadetails');




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


Route::get('/wartajemaat',[WartaController::class ,'index'])->middleware(['auth'])->name('wartajemaat');
Route::get('/tambahwarta',[WartaController::class ,'tambahwarta'])->middleware(['auth'])->name('tambahwarta');
Route::post('/insertwarta',[WartaController::class ,'insertwarta'])->middleware(['auth'])->name('insertwarta');
Route::get('/tampilkanwarta/{id}',[WartaController::class ,'tampilkanwarta'])->middleware(['auth'])->name('tampilkanwarta');
Route::post('/updatewarta/{id}',[WartaController::class ,'updatewarta'])->middleware(['auth'])->name('updatewarta');
Route::get('/deletewarta/{id}',[WartaController::class ,'deletewarta'])->middleware(['auth'])->name('deletewarta');


Route::get('/photo',[GaleriController::class ,'index'])->middleware(['auth'])->name('photo');
Route::get('/tambahphoto',[GaleriController::class ,'tambahphoto'])->middleware(['auth'])->name('tambahphoto');
Route::post('/insertphoto',[GaleriController::class ,'insertphoto'])->middleware(['auth'])->name('insertphoto');
Route::get('/tampilkanphoto/{id}',[GaleriController::class ,'tampilkanphoto'])->middleware(['auth'])->name('tampilkanphoto');
Route::post('/updatephoto/{id}',[GaleriController::class ,'updatephoto'])->middleware(['auth'])->name('updatephoto');
Route::get('/deletephoto/{id}',[GaleriController::class,'deletephoto'])->middleware(['auth'])->name('deletephoto');



Route::get('/testadmin', function () {
    return view('layout.admin2');
});