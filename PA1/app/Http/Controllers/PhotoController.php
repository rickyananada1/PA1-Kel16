<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Models\photo;

class PhotoController extends Controller
{

    public function index(){
        $data = photo::all();
        return view('admin.photo',compact('data'));
    } 
    public function tambahphoto(){
        return view('admin.tambahphoto');
    }
    public function insertphoto(Request $request)
    { 
    // Validasi data yang dikirimkan melalui form
    $request->validate([
    'nama' => 'required',
    'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // maksimum 5MB
    ], [
    'photo.max' => 'Ukuran file tidak boleh melebihi 5MB',
    ]);
    // Ambil file photo dari form
    $file = $request->file('photo');
    // Generate nama file baru dengan ekstensi yang sesuai
    $nama_file = time()."_".$file->getClientOriginalName();
    // Simpan file ke folder penyimpanan
    $tujuan_upload = 'storage/photo';
    $file->move($tujuan_upload,$nama_file);
    // Buat data baru untuk photo
    $photo = new Photo;
    $photo->nama = $request->nama;
    $photo->photo = $nama_file;
    // Simpan data ke database
    $photo->save();
    return redirect()->route('photo')->with('success','Data Berhasil ditambahkan'); 
    }
    public function deletephoto(Request $request ,$id)
    {
    $photo = photo::find($id);

    // Hapus foto dari storage
    Storage::delete('public/storage/photo/'.$photo->photo);

    // Hapus record dari database
    $photo->delete();

    // Redirect ke halaman utama dengan pesan sukses
    return redirect()->route('photo')->with('success', 'Foto berhasil dihapus');
    }   
    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }

    public function indexx(){
        $data = photo::all();
        return view('user.galeri',compact('data'));
    } 

}
//     public function tampilkanphoto($id)
//     {
//     $photo = photo::find($id);
//     return view('admin.tampilphoto', ['photo' => $photo]);
//    }  
