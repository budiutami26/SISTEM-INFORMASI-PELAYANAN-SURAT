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
                        <form method="POST" action="{{ route('update_lpj', $data->id) }}">
                            @csrf

                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <input type="date" class="form-control" name="tanggal_masuk"
                                    value="{{ $data->tanggal_masuk }}">
                            </div>
                            <div class="form-group">
                                <label>NPM</label>
                                <input type="text" class="form-control" name="npm" value="{{ $data->npm }}">
                            </div>
                            <div class="form-group">
                                <label>Nama Mahasiswa</label>
                                <input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
                            </div>
                            <div class=" form-group">
                                <label for="semester" class="form-label">Semester</label>
                                <select class="form-select" id="semester" name="semester">
                                    <option disabled value>Pilih Semester</option>
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
                                <label>Nama Kegiatan</label>
                                <input type="text" class="form-control" name="nama_kegiatan"
                                    value="{{ $data->nama_kegiatan }}">
                            </div>
                            <div class="form-group">
                                <label>Nama Ketua Pelaksana</label>
                                <input type="text" class="form-control" name="nama_ketua_pelaksana"
                                    value="{{ $data->nama_ketua_pelaksana }}">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pelaksanaan</label>
                                <input type="date" class="form-control" name="tanggal_pelaksana"
                                    value="{{ $data->tanggal_pelaksana }}">
                            </div>
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" class="form-control" name="nohp" value="{{ $data->nohp }}">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Dana Yang Disetujui</label>
                                <input type="text" class="form-control" name="jml_dana_disetujui"
                                    value="{{ $data->jml_dana_disetujui }}">
                            </div>
                            <div class="form-group">
                                <label>Penggunaan Dana</label>
                                <input type="text" class="form-control" name="penggunaan_dana"
                                    value="{{ $data->penggunaan_dana }}">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" name="keterangan"
                                    value="{{ $data->keterangan }}">
                            </div>
                            <div class=" form-group">
                                @if (auth()->user()->role == 'petugas')
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status">
                                        <option disabled value>Status</option>
                                        <option value="diterima" @if ($data->status == 'Diterima') selected @endif>
                                            Diterima</option>
                                        <option value="ditolak" @if ($data->status == 'Ditolak') selected @endif>
                                            Ditolak</option>
                                        <option value="proses" @if ($data->status == 'proses') selected @endif>
                                            Proses</option>
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
