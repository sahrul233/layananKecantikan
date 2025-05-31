@extends('layout.template_owner')
@section('content')
    <div class="cand">
        <div class="card-header">
            <h4 class="judul-jadwal">Data Pelanggan</h4>
        <style>
            .judul-jadwal {
                text-align: center;
                font-weight: bold;
                margin-bottom: 20px;
                }
        </style>
        </div>
        <div class="card-body">
            <div class="container-fluid mt-6">
                <table class="table table-hover table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Nomor HP</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Karyawan</th>
                            <th>Tempat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data_pelanggan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->umur }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->karyawan->nama ?? '-' }}</td> {{-- nama karyawan via relasi --}}
                                <td>{{ $item->tempat }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">Belum ada data pelanggan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
