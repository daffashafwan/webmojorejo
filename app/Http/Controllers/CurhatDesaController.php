<?php

namespace App\Http\Controllers;

use App\Models\CurhatDesa;

use Illuminate\Http\Request;

class CurhatDesaController extends Controller
{
	public function index(){
        return view('curhatdesa');
    }
	public function createCurhat(Request $request) {
      return view('curhatdesa');
    }

    // Store CurhatDesa Form data
    public function CurhatForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
			'alamat'=>'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required'
         ]);

        //  Store data in database
        CurhatDesa::create($request->all());

        // 
        return back()->with('success', 'Terkirim!!! Terimakasih sudah memberikan kritik dan saran untuk desa Mojorejo');
    }
}