@extends('layouts.main')

@section('content')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Laporan Proposal Kegiatan</li>
        </ol>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Laporan Proposal Kegiatan</div>
                    <div class="card-body">
                        {{--  action="{{ ('observasi') }}" mengambil data dari route name() --}}
                        <form method="POST" action="{{ route('update_proposal', $data->id) }}">
                            @csrf

                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <input type="date" class="form-control" name="tanggal_masuk"
                                    value="{{ $data->tanggal_masuk }}">
                            </div>
                            <div class="form-group">
                                <label>Nama Kegiatan</label>
                                <input type="text" class="form-control" name="nama_kegiatan"
                                    value="{{ $data->nama_kegiatan }}">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pelaksanaan</label>
                                <input type="date" class="form-control" name="tanggal_pelaksana"
                                    value="{{ $data->tanggal_pelaksana }}">
                            </div>
                            <div class="form-group">
                                <label>Nama Ketua Pelaksana</label>
                                <input type="text" class="form-control" name="nama_ketua_pelaksana"
                                    value="{{ $data->nama_ketua_pelaksana }}">
                            </div>
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" class="form-control" name="nohp" value="{{ $data->nohp }}">
                            </div>
                            <div class="form-group">
                                <label>Penggunaan Dana</label>
                                <input type="text" class="form-control" name="penggunaan_dana"
                                    value="{{ $data->penggunaan_dana }}">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Dana Yang Disetujui</label>
                                <input type="text" class="form-control" name="jml_dana_disetujui"
                                    value="{{ $data->jml_dana_disetujui }}">
                            </div>
                            <div class="form-group">`
                                <label>Keterangan</label>
                                <input type="text" class="form-control" name="keterangan"
                                    value="{{ $data->keterangan }}">
                            </div>
                            <div class=" form-group">
                                @if (auth()->user()->role == 'petugas')
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status">
                                        <option disabled value>Status</option>
                                        <option @if ($data->status == 'ditolak') selected @endif value="ditolak">ditolak
                                        </option>
                                        <option @if ($data->status == 'diterima') selected @endif value="diterima">diterima
                                        </option>
                                        <option @if ($data->status == 'proses') selected @endif value="proses">Proses
                                        </option>
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
