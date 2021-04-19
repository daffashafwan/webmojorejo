<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function berita(){
        $berita = Berita::all();
        return view('admin.berita', compact('berita'));
    }
}
