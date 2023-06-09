<?php

namespace App\Http\Controllers;
// use App\Models\Surat;
use App\Models\Surat;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function status()
    {
        $data = Surat::all();
        return view('daftar-status', compact('data')); //compact('') berfungsi untuk mendaftarkan variabel yang akan digunakan didalam view
        

    }

    public function observasi()
    {
        return view('surat.observasi');
    }
    public function store(Request $request)
    {
 
        $data = Surat::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'tempat_observasi' => $request->tempat_observasi,
            'pimpinantuju' => $request->pimpinantuju,
            'judul_tugasakhir' => $request->judul_tugasakhir,
            'tgl_pengajuan' => $request->tgl_pengajuan,
            'status' => 'proses',
        ]);

        return redirect()->route('dashboard');
    }
}
