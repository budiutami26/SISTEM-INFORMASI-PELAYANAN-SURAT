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
                    <form method="POST" action="{{ ('observasi') }}">
                        @csrf
 
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" class="form-control" name="nim" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" class="form-control" name="kelas" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pengajuan</label>
                            <input type="date" class="form-control" name="tgl_pengajuan" value="{{ old('tgl_pengajuan') }}">
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
                            <label>Tempat Observasi</label>
                            <input type="text" class="form-control" name="tempat_observasi" value="{{ old('pimpinantuju') }}">
                         </div>
                        <div class="form-group">
                            <label>Pimpinan Yang Dituju</label>
                            <input type="text" class="form-control" name="pimpinantuju" value="{{ old('pimpinantuju') }}">
                         </div>
                        <div class="form-group">
                            <label>Judul Tugas Akhir</label>
                            <input type="text" class="form-control" name="judul_tugasakhir" value="{{ old('judul_tugasakhir') }}">
                         </div>
                
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