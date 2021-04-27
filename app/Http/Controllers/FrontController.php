<?php

namespace App\Http\Controllers;

use App\Models\Berita;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $berita = Berita::all()->take(6);
        return view('index', compact('berita'));
    }

}
