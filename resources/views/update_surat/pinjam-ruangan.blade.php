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
                    <form method="POST" action="{{ route('update_ruangan', $data->id) }}">
                        @csrf

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="{{ $data->tanggal }}">
                         </div>
                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input type="text" class="form-control" name="nama_kegiatan" value="{{ $data->nama_kegiatan }}">
                        </div>
                        <div class=" form-group">
                            <label for="hari" class="form-label">Hari</label>
                            <select class="form-select" id="hari" name="hari" >
                                <option disabled value>Pilih Hari</option>
                                <option @if($data->hari == 'senin') selected @endif value="senin">senin</option>
                                <option @if($data->hari == 'selasa') selected @endif value="selasa">selasa</option>
                                <option @if($data->hari == 'rabu') selected @endif value="rabu">rabu</option>
                                <option @if($data->hari == 'kamis') selected @endif value="kamis">kamis</option>
                                <option @if($data->hari == 'jumat') selected @endif value="jumat">jumat</option>
                                <option @if($data->hari == 'sabtu') selected @endif value="sabtu">sabtu</option>
                                <option @if($data->hari == 'minggu') selected @endif value="minggu">minggu</option>
                            </select>
                        </div>
                          <div class="form-group">
                             <label>Tanggal Pelaksanaan</label>
                            <input type="date" class="form-control" name="tanggal_pelaksana" value="{{ $data->tanggal_pelaksana }}">
                         </div>
                        <div class="form-group">
                            <label>Ruangan</label>
                            <input type="text" class="form-control" name="ruangan" value="{{ $data->ruangan }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Penanggung Jawab</label>
                            <input type="text" class="form-control" name="nama_penanggungjwb" value="{{ $data->nama_penanggungjwb }}">
                        </div>
                        <div class="form-group">
                            <label>No HP</label>
                            <input type="text" class="form-control" name="nohp" value="{{ $data->nohp }}">
                         </div>
                        <div class="form-group">
                            <label>Keterrangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ $data->keterangan }}">
                         </div>
                         <div class=" form-group">
                            @if(auth()->user()->role == 'petugas')
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status">
                                <option disabled value>Status</option>
                                <option @if($data->status == 'ditolak') selected @endif value="ditolak">ditolak</option>
                                <option @if($data->status == 'diterima') selected @endif value="diterima">diterima</option>
                                <option @if($data->status == 'proses') selected @endif value="proses">Proses</option>
                            </select>
                            @endif
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
