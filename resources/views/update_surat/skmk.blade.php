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
                    <form method="POST" action="{{ route('update_skmk', $data->id) }}">
                        @csrf

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="{{ $data->tanggal }}">
                         </div>
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" class="form-control" name="npm" value="{{ $data->npm }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama_mhs" value="{{ $data->nama_mhs }}">
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" class="form-control" name="kelas" value="{{ $data->kelas }}">
                         </div>
                         <div class=" form-group">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-select" id="semester" name="semester"
                                value="{{ Session::get('semester') }}">
                                <option  disabled value>Pilih Semester</option>
                                <option value="1" @if ($data->semester == '1') selected @endif>1</option>
                                <option value="2" @if ($data->semester == '2') selected @endif>2</option>
                                <option value="3" @if ($data->semester == '3') selected @endif>3</option>
                                <option value="4" @if ($data->semester == '4') selected @endif>4</option>
                                <option value="5" @if ($data->semester == '5') selected @endif>5</option>
                                <option value="6" @if ($data->semester == '6') selected @endif>6</option>
                                <option value="7" @if ($data->semester == '7') selected @endif>7</option>
                                <option value="8" @if ($data->semester == '8') selected @endif>8</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Orang Tua</label>
                            <input type="text" class="form-control" name="nama_ortu" value="{{ $data->nama_ortu }}">
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" name="nip" value="{{ $data->nip }}">
                        </div>
                        <div class="form-group">
                            <label>Golongan</label>
                            <input type="text" class="form-control" name="golongan" value="{{ $data->golongan }}">
                        </div>
                        <div class="form-group">
                            <label>Institusi</label>
                            <input type="text" class="form-control" name="institusi" value="{{ $data->institusi }}">
                         </div>
                         <div class=" form-group">
                            @if(auth()->user()->role == 'petugas')
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status"
                                value="{{ Session::get('status') }}">
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
