<?php

namespace App\Http\Controllers;

use App\Models\warta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

class WartaController extends Controller
{   
    public function index()
    {
            $data = warta::latest()->paginate(5);
            return view('admin.wartajemaat',compact('data'));
        
    }
public function tambahwarta(){
        return view('admin.tambahwarta');
    }

    public function insertwarta(Request $request){
        $validated= $request->validate([
            'judul' =>'required|unique:wartas|min:2',
            'keterangan' =>'max:100',
            'tanggal' =>'required',
            'photo' =>  'required|mimes:jpg,jpeg,png',
        ],
        [
            'judul.required' =>'Judul tidak boleh kosong',
            'judul.min' => ' maksimal 20 karakter',
            'keterangan.max'=> ' Keterangan maksimal 100 karakter',
            'photo.required' => 'Photo Tidak boleh Kosong', 
            'tanggal.required' => 'tanggal Tidak boleh Kosong', 
            'photo.mimes'=> 'Photo tidak dapat digunakan',    
        ]);
        $photo = $request->file('photo');

        $name_gen =hexdec(uniqid());
        $img_ext = strtolower($photo->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $lokasi ='image/warta/';
        $image = $lokasi.$img_name;
        $photo->move($lokasi,$img_name);

        warta::insert([
            'judul' =>  $request->judul,
            'keterangan' => $request->keterangan,
            'photo' => $image,
            'tanggal' => $request->tanggal,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('wartajemaat')->with('success','Data berhasil dimasukkan');
    }

    public function tampilkanwarta($id){
        $data = warta::find($id);
        return view('admin.tampilwarta',compact('data')); 

    }
    
    public function updatewarta(Request $request, $id){

        $validated= $request->validate([
            'judul' =>'required|min:4',
            'keterangan' =>'required|max:255',
        ],
        [
            'judul.required' =>'Judul tidak boleh kosong',
            'judul.min' => ' maksimal 4 karakter',
            'keterangan.required' => 'Keterangan tidak boleh kosong',
            'keterangan.max' => 'Keterangan Maksimal 255 karakter',
            
        ]);

        $photolama = $request->photolama;
        $photo = $request->file('photo');

        if($photo){
            
            $name_gen =hexdec(uniqid());
            $img_ext = strtolower($photo->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $lokasi ='image/warta/';
            $image = $lokasi.$img_name;
            $photo->move($lokasi,$img_name);
            
            unlink($photolama);
            warta::find($id)->update([
            'judul' =>  $request->judul,
            'keterangan' => $request->keterangan,
           'photo' => $image,
            'created_at' => Carbon::now()
            ]);
            
            return redirect()->route('wartajemaat')->with('success','Data berhasil diupdate');
        }
        else{
            warta::find($id)->update([
           'judul' =>  $request->judul,
            'keterangan' => $request->keterangan,
            'created_at' => Carbon::now()
        ]);
         return redirect()->route('wartajemaat')->with('success','Data berhasil diupdate');      
         }}


    public function deletewarta($id){
    
        $photo = Warta::find($id);
        $photolama = $photo->photo;
        unlink($photolama);
        Warta::find($id)->delete();
        return redirect()->route('wartajemaat')->with('success','Data berhasil dihapus');
    }
 
      
    public function indexx()
    {
            $data = warta::latest()->paginate(6);
            return view('user.wartajemaat',compact('data'));
        
    }

    public function wartadetails($id)
    {
        $data = Warta::find($id);
        return view('user.wartajemaatdetails',compact('data'));
        
    }

}
