<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwalibadah;

class JadwalibadahController extends Controller
{
    public function index(){
        $data= jadwalibadah::all();
        return view('admin.jadwalibadah',compact('data'));
    }
    public function tambahjadwal(){
        return view('admin.tambahjadwal');
    }
    public function insertjadwal(Request $request){
     
        jadwalibadah::create($request->all());
        return redirect()->route('jadwalibadah')->with('success','Data Berhasil ditambahkan');

    }
    public function tampilkanjadwal($id){
        $data = jadwalibadah::find($id);
        //dd($data);
        return view('admin.tampiljadwal',compact('data')); 
    }
    public function updatejadwal(Request $request,$id){
        $data = jadwalibadah::find($id);
        //dd($data);
        $data->update($request->all());
        return redirect()->route('jadwalibadah')->with('success','Data berhasil diupdate');
    }
    public function deletejadwal($id){
        $data = jadwalibadah::find($id);
        $data->delete();
        return redirect()->route('jadwalibadah')->with('success','Data berhasil dihapus');
    }
}