@extends('layouts.main')

@section('content')
    <nav>
        <h4>Daftar Status Pengajuan Surat SKMK</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Status</li>
            <li class="breadcrumb-item active">Surat SKMK </li>
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
                                    <th scope="col">Nama Mahasiswa</th>
                                    <th scope="col">Kelas</th>
                                    @if(Auth::user()->role == 'mahasiswa')
                                    <th scope="col">Status</th>
                                    @endif
                                    @if (Auth::user()->role == 'petugas')
                                    <th scope="col">Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($dtskmk as $item)
                                    <tr>
                                        <td>{{ $no++ }}.</td>
                                        <td>{{ $item->nama_mhs }}</td>
                                        <td>{{ $item->kelas }}</td>
                                        @if(Auth::user()->role == 'mahasiswa')
                                        <td>
                                            @if ($item->status == 'diterima')
                                                <div class="badge bg-success">diterima</div>
                                            @elseif($item->status == 'ditolak')
                                                <div class="badge bg-danger">ditolak</div>
                                            @else
                                                <div class="badge bg-warning">proses</div>
                                            @endif
                                        </td>
                                        @endif
                                        @if (Auth::user()->role == 'petugas')
                                        <td>
                                            <a href="{{ route('edit_skmk', $item->id) }}" class="btn btn-primary">Edit</a>
                                            <br>
                                            <form method="POST" action="{{ route('hapus_skmk', $item->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus pengajuan surat ini?')">Delete</button>
                                            </form>
                                        </td>
                                        @endif
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
