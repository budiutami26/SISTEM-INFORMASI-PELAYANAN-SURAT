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
                    <form method="POST" action="{{ ('prestasi') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" class="form-control" name="npm" value="{{ old('npm') }}">
                         </div>
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama_mhs" value="{{ old('nama_kegiatan') }}">
                        </div>
                        <div class=" form-group">
                            <label for="program_studi" class="form-label">Program Studi</label>
                            <select class="form-select" id="program_studi" name="program_studi"
                                value="{{ Session::get('program_studi') }}">
                                <option selected disabled value>Pilih Program Studi</option>
                                <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                                <option value="D3 Teknik Elektronika">D3 Teknik Elektronika</option>
                                <option value="D3 Teknik Listrik">D3 Teknik Listrik</option>
                                <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                                <option value="D4 Teknik Pengendalian Pencemaran Lingkungan">D4 Teknik Pengendalian Pencemaran Lingkungan</option>
                                <option value="D4 Pengembangan Produk Agroindustri">D4 Pengembangan Produk Agroindustri</option>
                                <option value="D4 Mekatronika">D4 Mekatronika</option>
                                <option value="D4 Multimedia">D4 Multimedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Prestasi</label>
                            <input type="text" class="form-control" name="prestasi" value="{{ old('prestasi') }}">
                         </div>
                         <div class=" form-group">
                            <label for="tingkat" class="form-label">Tingkat</label>
                            <select class="form-select" id="tingkat" name="tingkat"
                                value="{{ Session::get('tingkat') }}">
                                <option selected disabled value>Pilih Tingkat</option>
                                <option value="Kecamatan">Kecamatan</option>
                                <option value="Kabupaten">Kabupaten</option>
                                <option value="Provinsi">Provinsi</option>
                                <option value="Nasional">Nasional</option>
                                <option value="Internasional">Internasional</option>
                            </select>
                        </div>
                         <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" class="form-control" name="tahun" value="{{ old('tahun') }}">
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