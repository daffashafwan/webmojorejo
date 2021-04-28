<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class TampilController extends Controller
{
    public function lihatBerita($id){
        $berita = Berita::where('id', $id)->first();
        return view('lihat-berita', compact('berita'));
    }
}
