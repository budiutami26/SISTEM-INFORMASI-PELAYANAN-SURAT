@extends('layouts.main')

@section('content')

<nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
      <li class="breadcrumb-item active">Surat SKMK</li>
    </ol>
  </nav>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Surat SKMK</div>
                <div class="card-body">
                    {{--  action="{{ ('observasi') }}" mengambil data dari route name() --}}
                    <form method="POST" action="{{ ('skmk') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="{{ old('tanggal') }}">
                         </div>
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" class="form-control" name="npm" value="{{ old('npm') }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama_mhs" value="{{ old('nama_mhs') }}">
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" class="form-control" name="kelas" value="{{ old('kelas') }}">
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
                            <label>Nama Orang Tua</label>
                            <input type="text" class="form-control" name="nama_ortu" value="{{ old('nama_ortu') }}">
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" name="nip" value="{{ old('nip') }}">
                        </div>
                        <div class="form-group">
                            <label>Golongan</label>
                            <input type="text" class="form-control" name="golongan" value="{{ old('golongan') }}">
                        </div>
                        <div class="form-group">
                            <label>Institusi</label>
                            <input type="text" class="form-control" name="institusi" value="{{ old('institusi') }}">
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