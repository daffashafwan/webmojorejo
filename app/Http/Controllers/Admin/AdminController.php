<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function berita(){
        $berita = Berita::all();
        return view('admin.berita', compact('berita'));
    }

    public function tambahBerita(){
        return view('admin.tambah-berita');
    }

    public function lihatBerita($id){
        $berita = Berita::where('id', $id)->first();
        return view('admin.lihat-berita', compact('berita'));
    }

	public function lihatBerita2($id){
        $berita = Berita::where('id', $id)->first();
        return view('admin.lihat-berita2', compact('berita'));
    }
	
    public function editBerita($id){
        $berita = Berita::where('id', $id)->first();
        return view('admin.edit-berita', compact('berita'));
    }

    public function editBeritaPost(Request $request){
        $data = $request->input();
        $berita = Berita::find(request()->route('id'));
        switch ($data['action']) {
            case 'gambar':
                $file = $request->file('gambar');
                $nama_file = time()."_".$file->getClientOriginalName();
                
                        // isi dengan nama folder tempat kemana file diupload
                $tujuan_upload = 'userfiles/images';
                $file->move($tujuan_upload,$nama_file);
                $berita->gambar = $nama_file;
                $berita->save();
                break;
            case 'judul':
                $berita->judul_berita = $data['judul_berita'];
                $berita->save();
                break;
            case 'isi':
                $berita->isi_berita = $data['isi_berita'];
                $berita->save();
                break;
        }
        return redirect(route('admin.berita.edit', ['id'=>request()->route('id')]))->with('success', 'Berhasil Ganti Berita');
    }

    public function hapusBerita(){
        try {
            Berita::destroy(request()->route('id'));
            return redirect(route('admin.berita.index'))->with('success', 'berhasil hapus berita');
        } catch (Exception $e) {
            return redirect(route('admin.berita.index'))->with('danger', 'gagal hapus berita');
        }
    }

    public function store(Request $request){
        $data = $request->input();
        try {
            $berita = new Berita();
                // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('gambar');
            $nama_file = time()."_".$file->getClientOriginalName();
            
                    // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'userfiles/images';
            $file->move($tujuan_upload,$nama_file);
            $berita->gambar = $nama_file;
            $berita->judul_berita = $data["judul_berita"];
            $berita->isi_berita = $data["isi_berita"];
            $berita->tanggal_post = \Carbon\Carbon::now();
            
            switch ($request->input('action')) {
                case 'simpan':
                    $berita->status = 'Tidak Aktif';
                    $berita->save();
                    break;
                
                case 'publish':
                    $berita->status = 'Aktif';
                    $berita->save();
                    break;
                    
            }
            return redirect(route('admin.berita.index'))->with('success', 'berhasil simpan berita');
            

        } catch (Exception $e) {
            dd('oi');
            return redirect(route('admin.berita.tambah'))->with('danger', 'gagal simpan berita');
        }

        
        
    }
}
