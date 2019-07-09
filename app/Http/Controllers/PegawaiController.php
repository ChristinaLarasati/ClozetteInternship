<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    
    public function index () {
        //mengirim data dari tabel pegawai
        $pegawai = DB::table('pegawai') -> paginate(10);

        //mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah ()
    {
        return view ('tambah');
    }

    public function store (Request $request)
    {
        //insert data ke tabel pegawai
        DB::table('pegawai') -> insert ([
            'pegawai_nama' => $request -> nama,
            'pegawai_jabatan' => $request -> jabatan,
            'pegawai_umur' => $request -> umur,
            'pegawai_alamat' => $request -> alamat
        ]);

        return redirect('/pegawai');
    }

    public function edit ($id) {
        //mengambil data pegawai berdasarkan id pegawai yang dipilih
        $pegawai = DB::table('pegawai') -> where('pegawai_id', $id) -> get();

        //passing data pegawai yang didapat ke view wdit.blade.php
        return view('edit', ['pegawai' => $pegawai]);

    }

    public function update (Request $request)
    {
        //update date pegawai
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama'=> $request -> nama,
            'pegawai_jabatan'=> $request -> jabatan,
            'pegawai_umur' => $request -> umur,
            'pegawai_alamat'=> $request -> alamat,
        ]);

        return redirect ('/pegawai');
    }

    public function hapus ($id) {
        
        //menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai') -> where ('pegawai_id',$id) -> delete();

        //alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    public function cari (Request $request) {
        //menangkap data pencarian
        $cari = $request->cari;

        //mengambil data dari tabel pegawai sesuai
        $pegawai = DB::table('pegawai')
        -> where ('pegawai_nama', 'like', "%".$cari."%") -> paginate();

        //mengirim data pegawai ke view index
        return view ('index', ['pegawai' => $pegawai]);


    }
    

    // public function formulir () {
    //     return view ('formulir');
    // }

    // public function proses (Request $request){
    //     $nama = $request -> input('nama');
    //     $alamat = $request -> input('alamat');
    //     return "Nama : ".$nama. ", Alamat : ".$alamat;
    //}
}