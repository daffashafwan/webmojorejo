<?php

namespace App\Http\Controllers;

use App\Models\Berita;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $berita = Berita::latest()->where('status', 'Aktif')->get();
        return view('index', compact('berita'));
    }

    public function lihatBerita($id){
        $berita = Berita::where('id', $id)->first();
        return view('admin.lihat-berita2', compact('berita'));
    }
}
