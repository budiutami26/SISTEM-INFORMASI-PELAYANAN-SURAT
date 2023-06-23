<?php

namespace App\Http\Controllers;
// use App\Models\Surat;
use App\Models\Surat;
use App\Models\Perlengkapan;
use App\Models\Ruangan;
use App\Models\Proposal;
use App\Models\SKMK;
use App\Models\LPJ;
use App\Models\Prestasi;

// jangan lupa panggil nama mode didalam controller ya
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function status()
    {
        $data = Surat::all();
        return view('tabel-status.daftar-status', compact('data')); //compact('') berfungsi untuk mendaftarkan variabel yang akan digunakan didalam view
    }
    public function statusperlengkapan()
    {
        $dtperlengkapan = Perlengkapan::all();
        return view('tabel-status.status-perlengkapan', compact('dtperlengkapan')); //compact('') berfungsi untuk mendaftarkan variabel yang akan digunakan didalam view
    }
    public function statusruangan()
    {
        $dtruangan = Ruangan::all();
        return view('tabel-status.status-ruangan', compact('dtruangan')); //compact('') berfungsi untuk mendaftarkan variabel yang akan digunakan didalam view
    }
    public function statusskmk()
    {
        $dtskmk = SKMK::all();
        return view('tabel-status.status-skmk', compact('dtskmk')); //compact('') berfungsi untuk mendaftarkan variabel yang akan digunakan didalam view
    }
    public function statuslaporanmhs()
    {
        $dtproposalmhs = Proposal::all();
        return view('tabel-status.status-laporanproposalkegiatan', compact('dtproposalmhs')); //compact('') berfungsi untuk mendaftarkan variabel yang akan digunakan didalam view
    }
    public function statuslaporanlpj()
    {
        $dtlpj = LPJ::all();
        return view('tabel-status.status-laporanlpj', compact('dtlpj')); //compact('') berfungsi untuk mendaftarkan variabel yang akan digunakan didalam view
    }
    public function statusprestasi()
    {
        $dtprestasi = Prestasi::all();
        return view('tabel-status.status-prestasi', compact('dtprestasi')); //compact('') berfungsi untuk mendaftarkan variabel yang akan digunakan didalam view
    }

    // fungsi untuk menambah dan menampilkan data surat observasi
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
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard');
    }

    // fungsi untuk menambah dan menampilkan data surat peminjaman perlengkapan
    public function perlengkapan(){
        return view('surat.pinjam-perlengkapan');
    }

    public function store_perlengkapan(Request $request){
        $data = Perlengkapan::create([
        'nama_kegiatan' => $request->nama_kegiatan,
        'nama_penanggungjawab' => $request->nama_penanggungjawab,
        'nama_barang' => $request->nama_barang,
        'jumlah' => $request->jumlah,
        'keterangan' => $request->keterangan,
        'tgl_pengambilan' => $request->tgl_pengambilan,
        'tgl_pengembalian' => $request->tgl_pengembalian,
        'status' => $request->status,

        ]);
        return redirect()->route('dashboard');
    }

    // fungsi untuk menambah dan menampilkan data surat peminjaman ruangan
    public function ruangan(){
        return view('surat.pinjam-ruangan');
    }

    public function store_ruangan(Request $request){
        $data = Ruangan::create([
        'tanggal' => $request->tanggal,
        'nama_kegiatan' => $request->nama_kegiatan,
        'hari' => $request->hari,
        'tanggal_pelaksana' => $request->tanggal_pelaksana,
        'ruangan' => $request->ruangan,
        'nama_penanggungjwb' => $request->nama_penanggungjwb,
        'nohp' => $request->nohp,
        'keterangan' => $request->keterangan,
        'status' => $request->status,

        ]);
        return redirect()->route('dashboard');
    }

    // fungsi untuk menambah dan menampilkan data laporan proposal kegiatan
    public function proposal(){
        return view('surat.proposal');
    }
    public function store_proposal(Request $request){
        $data = Proposal::create([
        'tanggal_masuk' => $request->tanggal_masuk,
        'nama_kegiatan' => $request->nama_kegiatan,
        'tanggal_pelaksana' => $request->tanggal_pelaksana,
        'nama_ketua_pelaksana' => $request->nama_ketua_pelaksana,
        'nohp' => $request->nohp,
        'penggunaan_dana' => $request->penggunaan_dana,
        'jml_dana_disetujui' => $request->jml_dana_disetujui,
        'keterangan' => $request->keterangan,
        'status' => $request->status,

        ]);
        return redirect()->route('dashboard');
    }
    
    // fungsi untuk menambah dan menampilkan data surat skmk
    public function skmk(){
        return view('surat.skmk');
    }

    public function store_skmk(Request $request){
        $data = SKMK::create([
        'tanggal' => $request->tanggal,
        'kelas' => $request->kelas,
        'npm' => $request->npm,
        'nama_mhs' => $request->nama_mhs,
        'semester' => $request->semester,
        'nama_ortu' => $request->nama_ortu,
        'nip' => $request->nip,
        'golongan' => $request->golongan,
        'institusi' => $request->institusi,
        'status' => $request->status,

        ]);
        return redirect()->route('dashboard');
    }
    
    // fungsi untuk menambah dan menampilkan data laporan lpj
    public function lpj(){
        return view('surat.lpj');
    }
    public function store_lpj(Request $request){
        $data = LPJ::create([
        'tanggal_masuk' => $request->tanggal_masuk,
        'npm' => $request->npm,
        'nama' => $request->nama,
        'semester' => $request->semester,
        'nama_kegiatan' => $request->nama_kegiatan,
        'tanggal_pelaksana' => $request->tanggal_pelaksana,
        'nohp' => $request->nohp,
        'jml_dana_disetujui' => $request->jml_dana_disetujui,
        'keterangan' => $request->keterangan,
        'status' => $request->status,

        ]);
        return redirect()->route('dashboard');
    }

    // fungsi untuk menambah dan menampilkan data surat laporan prestasi mahasiswa
    public function prestasi(){
        return view('surat.prestasi-mhs');
    }
    public function store_prestasi(Request $request){
        $data = Prestasi::create([
        'npm' => $request->npm,
        'nama_mhs' => $request->nama_mhs,
        'program_studi' => $request->program_studi,
        'prestasi' => $request->prestasi,
        'tingkat' => $request->tingkat,
        'tahun' => $request->tahun,
        'status' => $request->status,

        ]);
        return redirect()->route('dashboard');
    }
    
}
