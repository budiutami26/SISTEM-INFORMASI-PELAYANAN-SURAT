@extends('layouts.main')

@section('content')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Laporan Prestasi Mahasiswa</li>
        </ol>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Laporan Prestasi Mahasiswa</div>
                    <div class="card-body">
                        {{--  action="{{ ('observasi') }}" mengambil data dari route name() --}}
                        <form method="POST" action="{{ route('update_prestasi', $data->id) }}">
                            @csrf

                            <div class="form-group">
                                <label>NPM</label>
                                <input type="text" class="form-control" name="npm" value="{{ $data->npm }}">
                            </div>
                            <div class="form-group">
                                <label>Nama Mahasiswa</label>
                                <input type="text" class="form-control" name="nama_mhs"
                                    value="{{ $data->nama_mhs }}">
                            </div>
                            <div class=" form-group">
                                <label for="program_studi" class="form-label">Program Studi</label>
                                <select class="form-select" id="program_studi" name="program_studi">
                                    <option disabled value>Pilih Program Studi</option>
                                    <option @if($data->program_studi == 'D3 Teknik Informatika') selected @endif value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                                    <option @if($data->program_studi == 'D3 Teknik Elektronika') selected @endif value="D3 Teknik Elektronika">D3 Teknik Elektronika</option>
                                    <option @if($data->program_studi == 'D3 Teknik Listrik') selected @endif value="D3 Teknik Listrik">D3 Teknik Listrik</option>
                                    <option @if($data->program_studi == 'D3 Teknik Mesin') selected @endif value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                                    <option @if($data->program_studi == 'D4 Teknik Pengendalian Pencemaran Lingkungan') selected @endif value="D4 Teknik Pengendalian Pencemaran Lingkungan">D4 Teknik Pengendalian Pencemaran Lingkungan</option>
                                    <option @if($data->program_studi == 'D4 Pengembangan Produk Agroindustri') selected @endif value="D4 Pengembangan Produk Agroindustri">D4 Pengembangan Produk Agroindustri</option>
                                    <option @if($data->program_studi == 'D4 Mekatronika') selected @endif value="D4 Mekatronika">D4 Mekatronika</option>
                                    <option @if($data->program_studi == 'D4 Multimedia') selected @endif value="D4 Multimedia">D4 Multimedia</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Prestasi</label>
                                <input type="text" class="form-control" name="prestasi" value="{{ $data->prestasi }}">
                            </div>
                            <div class=" form-group">
                                <label for="tingkat" class="form-label">Tingkat</label>
                                <select class="form-select" id="tingkat" name="tingkat">
                                    <option disabled value>Pilih Tingkat</option>
                                    <option @if ($data->tingkat == 'Kecamatan') selected @endif value="Kecamatan">Kecamatan</option>
                                    <option @if ($data->tingkat == 'Kabupaten') selected @endif value="Kabupaten">Kabupaten</option>
                                    <option @if ($data->tingkat == 'Provinsi') selected @endif value="Provinsi">Provinsi</option>
                                    <option @if ($data->tingkat == 'Nasional') selected @endif value="Nasional">Nasional</option>
                                    <option @if ($data->tingkat == 'Internasional') selected @endif value="Internasional">Internasional</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="text" class="form-control" name="tahun" value="{{ $data->tahun }}">
                            </div>
                            <div class=" form-group">
                                @if (auth()->user()->role == 'petugas')
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
