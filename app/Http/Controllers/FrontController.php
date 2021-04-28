<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\Perangkat;
use App\Models\Galeri;
use App\Models\Jabatan;
use App\Models\MasaJabatan;

class FrontController extends Controller
{
    public function index(){
        $berita = Berita::latest()->where('status', 'Aktif')->get();
        $masa_jabatan = MasaJabatan::all();
        $jabatan = Jabatan::all();
        $perangkat = Perangkat::where('status', 1)->get();
        $galeri = Galeri::where('status', 'Aktif')->get();
        return view('index', compact('berita', 'masa_jabatan', 'jabatan', 'perangkat','galeri'));
    }

    public function lihatBerita($id){
        $berita = Berita::where('id', $id)->first();
        return view('admin.lihat-berita2', compact('berita'));
    }

    public function berita(){
        $berita = Berita::latest()->where('status', 'Aktif')->get();
        return view('berita');
    }


}
