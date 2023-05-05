<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class User extends Controller
{
    public function index(){
        $data= jadwalibadah::all();
        return view('user.jadwalibadah',compact('data'));
    }
}
