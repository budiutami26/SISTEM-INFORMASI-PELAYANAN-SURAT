@extends('layouts.main')
@section('content')
<div class="pagetitle">
  <h1>Selamat Datang</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div>
<div class="col-12">
  <div class="card overflow-auto">
    <div class="card-body">
      <h5 class="card-title"><i class="bi bi-pencil-square"></i>Silakan Pilih Layanan<span></span></h5>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Formulir</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><a>1</a></th>
            <td>Surat Permohonan Observasi</td>
              <td>
                <a href="{{route('tambah_observasi')}}"><button class="btn btn-primary"><i class="ri-ball-pen-fill"></i> Pilih</button></a>
              </td>
          </tr>
            <th scope="row"><a>2</a></th>
            <td>Surat Peminjaman Perlengkapan</td>
            <td>
              <a href="{{route('tambah_perlengkapan')}}"><button class="btn btn-primary"><i class="ri-ball-pen-fill"></i> Pilih</button></a>
            </td>
          </tr>
          <tr>
            <th scope="row"><a>3</a></th>
            <td>Surat Peminjaman Ruangan Mahasiswa</td>
            <td>
              <a href="{{route('tambah_ruangan')}}"><button class="btn btn-primary"><i class="ri-ball-pen-fill"></i> Pilih</button></a>
            </td>
          </tr>
          <tr>
            <th scope="row"><a>5</a></th>
            <td>Surat SKMK</td>
            <td>
              <a href="{{route('tambah_skmk')}}"><button class="btn btn-primary"><i class="ri-ball-pen-fill"></i> Pilih</button></a>
            </td>
          </tr>
          <tr>
            <th scope="row"><a>4</a></th>
            <td> Laporan Proposal Kegiatan</td>
            <td>
              <a href="{{route('tambah_proposal')}}"><button class="btn btn-primary"><i class="ri-ball-pen-fill"></i> Pilih</button></a>
            </td>
          </tr>
          <tr>
            <th scope="row"><a>6</a></th>
            <td> Laporan LPJ Mahasiswa </td>
            <td>
              <a href="{{route('tambah_lpj')}}"><button class="btn btn-primary"><i class="ri-ball-pen-fill"></i> Pilih</button></a>
            </td>
          </tr>
          <tr>
            <th scope="row"><a>7</a></th>
            <td>Surat Prestasi Mahasiswa</td>
            <td>
              <a href="{{route('tambah_prestasi')}}"><button class="btn btn-primary"><i class="ri-ball-pen-fill"></i> Pilih</button></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection