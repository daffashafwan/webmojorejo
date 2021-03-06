<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;
use App\Models\Galeri;
use App\Models\Perangkat;
use App\Models\Jabatan;
use App\Models\MasaJabatan;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function berita(){
        $berita = Berita::all();
        return view('admin.berita.index', compact('berita'));
    }

    public function galeri(){
        $galeri = Galeri::all();
        return view('admin.galeri.index', compact('galeri'));
    }

    public function tambahGaleri(){
        return view('admin.galeri.tambah-gambar');
    }

    public function tambahBerita(){
        return view('admin.berita.tambah-berita');
    }

    public function lihatBerita($id){
        $berita = Berita::where('id', $id)->first();
        return view('admin.berita.lihat-berita', compact('berita'));
    }
	
    public function editBerita($id){
        $berita = Berita::where('id', $id)->first();
        return view('admin.berita.edit-berita', compact('berita'));
    }

    public function perangkat(){
        $masa_jabatan = MasaJabatan::all();
        $jabatan = Jabatan::all();
        $perangkat = Perangkat::all();
        return view('admin.perangkat.index', compact('perangkat', 'jabatan', 'masa_jabatan'));
    }

    public function kelola(){
        $jabatan = Jabatan::all();
        $masa_jabatan = MasaJabatan::all();
        $perangkat = Perangkat::all();
        return view('admin.perangkat.kelola', compact('jabatan', 'masa_jabatan', 'perangkat'));
    }

    public function postPerangkat(Request $request){
        $data = $request->input();
        try {
            switch ($data['action']) {
                case 'tambah':
                    $perangkat = new Perangkat();
                    $perangkat->nama_perangkat = $data['nama_perangkat'];
                    $perangkat->jabatan = $data['jabatan'];
                    $perangkat->masa_jabatan = $data['masa_jabatan'];
                    $perangkat->status = $data['status'];
                    $file = $request->file('gambar');
                    $nama_file = time()."_".$file->getClientOriginalName();
                    $tujuan_upload = 'userfiles/images';
                    $file->move($tujuan_upload,$nama_file);
                    $perangkat->foto = $nama_file;
                    $perangkat->save();
                    //dd($perangkat);
                    break;
                case 'edit':
                    $perangkat = Perangkat::find($data['id_nama_jabatan']);
                    $perangkat->nama_jabatan = $data['edit_nama_jabatan'];
                    $perangkat->save();
                    break;
            }
            return redirect(route('admin.perangkat.index'))->with('success', 'Berhasil Melakukan Aksi');
        } catch (Exception $e) {
            return redirect(route('admin.perangkat.index'))->with('danger', 'Gagal Melakukan Aksi');
        }
    }

    public function hapusPerangkat($id){
        try {
            Perangkat::destroy($id);
            return redirect(route('admin.perangkat.index'))->with('success', 'Berhasil Melakukan Aksi');
        } catch (Exception $e) {
            return redirect(route('admin.perangkat.index'))->with('danger', 'Berhasil Melakukan Aksi');
        }
    }

    public function hapusGambar($id){
        try {
            Galeri::destroy($id);
            return redirect(route('admin.galeri.index'))->with('success', 'Berhasil Melakukan Aksi');
        } catch (Exception $e) {
            return redirect(route('admin.galeri.index'))->with('danger', 'Berhasil Melakukan Aksi');
        }
    }

    public function postKelola(Request $request){
        $data = $request->input();
        try {
            switch ($data['action']) {
                case 'tambah-jabatan':
                    $jabatan = new Jabatan();
                    $jabatan->nama_jabatan = $data['nama_jabatan'];
                    $jabatan->save();
                    break;
                case 'edit-jabatan':
                    $jabatan = Jabatan::find($data['id_nama_jabatan']);
                    $jabatan->nama_jabatan = $data['edit_nama_jabatan'];
                    $jabatan->save();
                    break;
                case 'tambah-masa-jabatan':
                    $masajabatan = new MasaJabatan();
                    $masajabatan->tahun_mulai = $data['masa_jabatan_mulai'];
                    $masajabatan->tahun_selesai = $data['masa_jabatan_selesai'];
                    $masajabatan->status = 1;
                    $masajabatan->save();
                    break;
                case 'edit-masa-jabatan':
                    $masajabatan = MasaJabatan::find($data['id_masa_jabatan']);
                    $masajabatan->tahun_mulai = $data['masa_jabatan_mulai'];
                    $masajabatan->tahun_selesai = $data['masa_jabatan_selesai'];
                    $masajabatan->status = $data['status'];
                    $masajabatan->save();
                    break;
            }
            return redirect(route('admin.perangkat.kelola'))->with('success', 'Berhasil Melakukan Aksi');
        } catch (Exception $e) {
            return redirect(route('admin.perangkat.kelola'))->with('danger', 'Gagal Melakukan Aksi');
        }
    }

    public function hapusJabatan($jid){
        try {
            Jabatan::destroy($jid);
            return redirect(route('admin.perangkat.kelola'))->with('success', 'Berhasil Melakukan Aksi');
        } catch (Exception $e) {
            return redirect(route('admin.perangkat.kelola'))->with('danger', 'Berhasil Melakukan Aksi');
        }
        
    }

    public function hapusMasaJabatan($mjid){
        try {
            MasaJabatan::destroy($mjid);
            return redirect(route('admin.perangkat.kelola'))->with('success', 'Berhasil Melakukan Aksi');
        } catch (Exception $e) {
            return redirect(route('admin.perangkat.kelola'))->with('danger', 'Berhasil Melakukan Aksi');
        }
        
    }

    public function jabatan(Request $request){
        $data = $request->input();
        switch ($data['action']) {
            case 'tambah':
                $jabatan = new Jabatan();
                $jabatan->nama_jabatan = $data['nama_jabatan'];
                $jabatan->save();
                break;
            case 'edit':
                
                break;
            case 'hapus':
                
                break;
        }
        return redirect(route('admin.perangkat.kelola'));
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

    public function hapusBerita($id){
        try {
            Berita::destroy($id);
            return redirect(route('admin.berita.index'))->with('success', 'berhasil hapus berita');
        } catch (Exception $e) {
            return redirect(route('admin.berita.index'))->with('danger', 'gagal hapus berita');
        }
    }

    public function ubahStatusBerita(Request $request){
        $data = $request->input();
        try {
            $berita = Berita::find($data['id']);
            switch ($data['gantistatus']) {
                case '1':
                    $berita->status = 'Tidak Aktif';
                    $berita->save();
                    break;
                case '0':
                    $berita->status = 'Aktif';
                    $berita->save();
                    break;
            }
            return redirect(route('admin.berita.index'))->with('success', 'berhasil ganti status berita');
        } catch (Exception $e) {
            return redirect(route('admin.berita.index'))->with('danger', 'gagal ganti status berita');
        }
    }

    public function ubahStatusGambar(Request $request){
        $data = $request->input();
        try {
            $gambar = Galeri::find($data['id']);
            switch ($data['gantistatus']) {
                case '1':
                    $gambar->status = 'Tidak Aktif';
                    $gambar->save();
                    break;
                case '0':
                    $gambar->status = 'Aktif';
                    $gambar->save();
                    break;
            }
            return redirect(route('admin.galeri.index'))->with('success', 'berhasil ganti status gambar');
        } catch (Exception $e) {
            return redirect(route('admin.galeri.index'))->with('danger', 'gagal ganti status gambar');
        }
    }

    public function ubahStatusPerangkat(Request $request){
        $data = $request->input();
        
        try {
            $perangkat = Perangkat::find($data['id']);
            switch ($data['gantistatus']) {
                
                case 'aktif':
                    $perangkat->status = 0;
                    
                    $perangkat->save();
                    break;
                case 'tidak aktif':
                    $perangkat->status = 1;
                    $perangkat->save();
                    break;
            }
            return redirect(route('admin.perangkat.index'))->with('success', 'berhasil ganti status perangkat');
        } catch (Exception $e) {
            return redirect(route('admin.perangkat.index'))->with('danger', 'gagal ganti status perangkat');
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

    public function storeGambar(Request $request){
        $data = $request->input();
        try {
            $galeri = new Galeri();
                // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('gambar');
            $nama_file = time()."_".$file->getClientOriginalName();
            
                    // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'userfiles/images/galeri';
            $file->move($tujuan_upload,$nama_file);
            $galeri->path = $nama_file;
            $galeri->judul_gambar = $data["judul_gambar"];
            $galeri->kategori = $data["kategori"];
            
            switch ($request->input('action')) {
                case 'simpan':
                    $galeri->status = 'Tidak Aktif';
                    $galeri->save();
                    break;
                
                case 'publish':
                    $galeri->status = 'Aktif';
                    $galeri->save();
                    break;
            }
            return redirect(route('admin.galeri.index'))->with('success', 'berhasil simpan gambar');
        } catch (Exception $e) {
            dd('oi');
            return redirect(route('admin.galeri.tambah'))->with('danger', 'gagal simpan gambar');
        }
    }
}
