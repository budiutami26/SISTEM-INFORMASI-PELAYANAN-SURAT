@extends('layouts.main')
@section('content')
<nav>
    <h4>Daftar Status Pengajuan</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Status</li>
    </ol>
  </nav>
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table">
                          <h5>Tabel Observasi</h5>
                          <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Pengajuan</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $no++ }}.</td>
                                    <td>{{ ($item->nim) }}</td>
                                    <td>{{ ($item->nama) }}</td>
                                    <td>Observasi</td>
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