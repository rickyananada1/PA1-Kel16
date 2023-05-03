<?php

namespace App\Http\Controllers;

use App\Models\warta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class WartaController extends Controller
{
    
    public function index()
    {
            $data = warta::all();
            return view('admin.wartajemaat',compact('data'));
        
    }
}
