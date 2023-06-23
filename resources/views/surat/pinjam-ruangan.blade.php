@extends('layouts.main')

@section('content')
<nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
      <li class="breadcrumb-item active">Surat Peminjaman Ruangan</li>
    </ol>
  </nav>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Surat Peminjaman Ruangan</div>
                <div class="card-body">
                    {{--  action="{{ ('observasi') }}" mengambil data dari route name() --}}
                    <form method="POST" action="{{ ('ruangan') }}">
                        @csrf
 
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="{{ old('tanggal') }}">
                         </div>
                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input type="text" class="form-control" name="nama_kegiatan" value="{{ old('nama_kegiatan') }}">
                        </div>
                        <div class=" form-group">
                            <label for="hari" class="form-label">Hari</label>
                            <select class="form-select" id="hari" name="hari"
                                value="{{ Session::get('hari') }}">
                                <option selected disabled value>Pilih Hari</option>
                                <option value="senin">senin</option>
                                <option value="selasa">selasa</option>
                                <option value="rabu">rabu</option>
                                <option value="kamis">kamis</option>
                                <option value="jumat">jumat</option>
                                <option value="sabtu">sabtu</option>
                                <option value="minggu">minggu</option>
                            </select>
                        </div>
                          <div class="form-group">
                             <label>Tanggal Pelaksanaan</label>
                            <input type="date" class="form-control" name="tanggal_pelaksana" value="{{ old('tanggal_pelaksana') }}">
                         </div>
                        <div class="form-group">
                            <label>Ruangan</label>
                            <input type="text" class="form-control" name="ruangan" value="{{ old('ruangan') }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Penanggung Jawab</label>
                            <input type="text" class="form-control" name="nama_penanggungjwb" value="{{ old('nama_penanggungjwb') }}">
                        </div>
                        <div class="form-group">
                            <label>No HP</label>
                            <input type="text" class="form-control" name="nohp" value="{{ old('nohp') }}">
                         </div>
                        <div class="form-group">
                            <label>Keterrangan</label>
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