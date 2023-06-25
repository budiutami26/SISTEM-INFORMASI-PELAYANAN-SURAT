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
                    <form method="POST" action="{{ ('perlengkapan') }}">
                        @csrf

                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input type="text" class="form-control" name="nama_kegiatan" value="{{ old('nama_kegiatan') }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Penanggung Jawab</label>
                            <input type="text" class="form-control" name="nama_penanggungjawab" value="{{ old('nama_penanggungjawab') }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ old('nama_barang') }}">
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="{{ old('jumlah') }}">
                        </div>
                        <div class=" form-group">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select" id="jurusan" name="jurusan"
                                value="{{ Session::get('jurusan') }}">
                                <option selected disabled value>Pilih Jurusan</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Elektronika">Teknik Elektronika</option>
                                <option value="Teknik Listrik">Teknik Listrik</option>
                                <option value="Teknik Pengendalian Pencemaran Lingkungan">Teknik Pengendalian Pencemaran Lingkungan</option>
                                <option value="Pengembangan Produk Agroindustri">Pengembangan Produk Agroindustri</option>
                                <option value="Mekatronika">Mekatronika</option>
                                <option value="Multimedia">Multimedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ old('keterangan') }}">
                         </div>
                        <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <input type="date" class="form-control" name="tgl_pengambilan" value="{{ old('tgl_pengambilan') }}">
                         </div>
                        <div class="form-group">
                            <label>Tanggal Pengembalian</label>
                            <input type="date" class="form-control" name="tgl_pengembalian" value="{{ old('tgl_pengembalian') }}">
                         </div>
                         <div class=" form-group">
                            @if(auth()->user()->role == 'petugas')
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status"
                                value="{{ Session::get('status') }}">
                                <option selected disabled value>Status</option>
                                <option value="diterima">diterima</option>
                                <option value="ditolak">ditolak</option>
                                <option value="proses">proses</option>
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
