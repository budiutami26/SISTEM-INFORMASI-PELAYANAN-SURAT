@extends('layouts.main')

@section('content')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Observasi</li>
        </ol>
    </nav>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Surat Permohonan Observasi</div>

                    <div class="card-body">
                        {{--  action="{{ ('observasi') }}" mengambil data dari route name() --}}
                        <form method="POST" action="{{ route('update_observasi', $data->id) }}">
                            @csrf

                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" class="form-control" name="nim" value="{{ $data->nim }}">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" class="form-control" name="kelas" value="{{ $data->kelas }}">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pengajuan</label>
                                <input type="date" class="form-control" name="tgl_pengajuan"
                                    value="{{ $data->tgl_pengajuan }}">
                            </div>
                            <div class=" form-group">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select class="form-select" id="jurusan" name="jurusan">
                                    <option disabled value>Pilih Jurusan</option>
                                    <option @if ($data->jurusan == 'Teknik Informatika') selected @endif value="Teknik Informatika">Teknik Informatika</option>
                                    <option @if ($data->jurusan == 'Teknik Elektronika') selected @endif value="Teknik Elektronika">Teknik Elektronika</option>
                                    <option @if ($data->jurusan == 'Teknik Listrik') selected @endif value="Teknik Listrik">Teknik Listrik</option>
                                    <option @if ($data->jurusan == 'Teknik Pengendalian Pencemaran Lingkungan') selected @endif value="Teknik Pengendalian Pencemaran Lingkungan">Teknik Pengendalian Pencemaran Lingkungan</option>
                                    <option @if ($data->jurusan == 'Pengembangan Produk Agroindustri') selected @endif value="Pengembangan Produk Agroindustri">Pengembangan Produk Agroindustri
                                    </option>
                                    <option @if($data->jurusan == 'Mekatronika') selected @endif value="Mekatronika">Mekatronika</option>
                                    <option @if($data->jurusan == 'Multimedia') selected @endif value="Multimedia">Multimedia</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Tempat Observasi</label>
                                <input type="text" class="form-control" name="tempat_observasi"
                                    value="{{ $data->pimpinantuju }}">
                            </div>
                            <div class="form-group">
                                <label>Pimpinan Yang Dituju</label>
                                <input type="text" class="form-control" name="pimpinantuju"
                                    value="{{ $data->pimpinantuju }}">
                            </div>
                            <div class="form-group">
                                <label>Judul Tugas Akhir</label>
                                <input type="text" class="form-control" name="judul_tugasakhir"
                                    value="{{ $data->judul_tugasakhir }}">
                            </div>
                            <div class=" form-group">
                                @if (auth()->user()->role == 'petugas')
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option disabled value>Status</option>
                                    <option @if($data->status == "diterima") selected @endif value="diterima">Silahkan ambil di BAAK</option>
                                    <option @if($data->status == "ditolak") selected @endif value="ditolak">ditolak</option>
                                    <option @if($data->status == "proses") selected @endif value="proses">proses</option>
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
