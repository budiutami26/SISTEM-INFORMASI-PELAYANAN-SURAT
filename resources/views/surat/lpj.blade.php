@extends('layouts.main')

@section('content')

<nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
      <li class="breadcrumb-item active">Laporan Pertanggung Jawaban</li>
    </ol>
  </nav>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulir</div>
                <div class="card-body">
                    {{--  action="{{ ('observasi') }}" mengambil data dari route name() --}}
                    <form method="POST" action="{{ ('lpj') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label>Tanggal Masuk</label>
                            <input type="date" class="form-control" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}">
                         </div>
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" class="form-control" name="npm" value="{{ old('npm') }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                        </div>
                         <div class=" form-group">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-select" id="semester" name="semester"
                                value="{{ Session::get('semester') }}">
                                <option selected disabled value>Pilih Semester</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">8</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input type="text" class="form-control" name="nama_kegiatan" value="{{ old('nama_kegiatan') }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Ketua Pelaksana</label>
                            <input type="text" class="form-control" name="nama_ketua_pelaksana" value="{{ old('nama_ketua_pelaksana') }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pelaksanaan</label>
                            <input type="date" class="form-control" name="tanggal_pelaksana" value="{{ old('tanggal_pelaksana') }}">
                        </div>
                        <div class="form-group">
                            <label>No HP</label>
                            <input type="text" class="form-control" name="nohp" value="{{ old('nohp') }}">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Dana Yang Disetujui</label>
                            <input type="text" class="form-control" name="jml_dana_disetujui" value="{{ old('jml_dana_disetujui') }}">
                         </div>
                        <div class="form-group">
                            <label>Penggunaan Dana</label>
                            <input type="text" class="form-control" name="penggunaan_dana" value="{{ old('penggunaan_dana') }}">
                         </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ old('keterangan') }}">
                         </div>
                         <div class=" form-group">
                            {{-- @if(auth()->user()->role == 'petugas') --}}
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status"
                                value="{{ Session::get('status') }}">
                                <option selected disabled value>Status</option>
                                <option value="diterima">diterima</option>
                                <option value="ditolak">ditolak</option>
                                <option value="proses">proses</option>
                            </select>
                            {{-- @endif --}}
                         </div>
                         <br>
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection