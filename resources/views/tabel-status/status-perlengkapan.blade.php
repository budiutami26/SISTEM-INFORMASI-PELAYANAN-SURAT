@extends('layouts.main')

@section('content')
<nav>
    <h4>Daftar Status Pengajuan Peminjaman Perlengkapan</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Status</li>
      <li class="breadcrumb-item active">Peminjaman Perlengkapan</li>
    </ol>
</nav>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Nama Penanggung Jawab</th>
                          <th scope="col">Nama Barang</th>
                          <th scope="col">Nama Kegiatan</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                          @php
                              $no = 1;
                          @endphp
                          @foreach ($dtperlengkapan as $item)
                              <tr>
                                  <td>{{ $no++ }}.</td>
                                  <td>{{ ($item->nama_penanggungjawab) }}</td>
                                  <td>{{ ($item->nama_barang) }}</td>
                                  <td>{{ ($item->nama_kegiatan) }}</td>
                                  <td>
                                      @if ($item->status == 'diterima')
                                          <div class="badge bg-success">diterima</div>
                                      @elseif($item->status == 'ditolak')
                                      <div class="badge bg-danger">ditolak</div>
                                      @else
                                      <div class="badge bg-warning">proses</div>
                                      @endif
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection