@extends('layouts.main')

@section('content')
<nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
      <li class="breadcrumb-item active">Surat Peminjaman Perlengkapan</li>
    </ol>
  </nav>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Surat Peminjaman Perlengkapan</div>
                <div class="card-body">
                    {{--  action="{{ ('observasi') }}" mengambil data dari route name() --}}
                    <form method="POST" action="{{ route('update_perlengkapan', $data->id) }}">
                        @csrf

                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input type="text" class="form-control" name="nama_kegiatan" value="{{ $data->nama_kegiatan }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Penanggung Jawab</label>
                            <input type="text" class="form-control" name="nama_penanggungjawab" value="{{ $data->nama_penanggungjawab }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ $data->nama_barang }}">
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="{{ $data->jumlah }}">
                        </div>
                        <div class=" form-group">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select" id="jurusan" name="jurusan" >
                                <option disabled value>Pilih Jurusan</option>
                                <option @if($data->jurusan == 'Teknik Informatika') selected @endif value="Teknik Informatika">Teknik Informatika</option>
                                <option @if($data->jurusan == 'Teknik Elektronika') selected @endif value="Teknik Elektronika">Teknik Elektronika</option>
                                <option @if($data->jurusan == 'Teknik Listrik') selected @endif value="Teknik Listrik">Teknik Listrik</option>
                                <option @if($data->jurusan == 'Teknik Pengendalian Pencemaran Lingkungan') selected @endif value="Teknik Pengendalian Pencemaran Lingkungan">Teknik Pengendalian Pencemaran Lingkungan</option>
                                <option @if($data->jurusan == 'Pengembangan Produk Agroindustri') selected @endif value="Pengembangan Produk Agroindustri">Pengembangan Produk Agroindustri</option>
                                <option @if($data->jurusan == 'Mekatronika') selected @endif value="Mekatronika">Mekatronika</option>
                                <option @if($data->jurusan == 'Multimedia') selected @endif value="Multimedia">Multimedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ $data->keterangan }}">
                         </div>
                        <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <input type="date" class="form-control" name="tgl_pengambilan" value="{{ $data->tgl_pengambilan }}">
                         </div>
                        <div class="form-group">
                            <label>Tanggal Pengembalian</label>
                            <input type="date" class="form-control" name="tgl_pengembalian" value="{{ $data->tgl_pengembalian }}">
                         </div>
                         <div class=" form-group">
                            @if(auth()->user()->role == 'petugas')
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status">
                                <option disabled value>Status</option>
                                ifdata proses
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
