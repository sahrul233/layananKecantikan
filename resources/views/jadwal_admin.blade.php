@extends('layout.template_admin')

@section('content')
<div class="container mt-4">
    <h4 class="text-center">Jadwal Pelanggan (Admin)</h4>
    <div class="mb-3">
        <a href="{{ route('jadwal_admin.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
     <style>
    .table td, .table th {
    vertical-align: middle;
    }

    .btn-sm {
    margin-right: 4px;
    }
    .judul-jadwal {
    text-align: center;
    font-weight: bold;
    margin-bottom: 20px;
    }
    </style>

    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Nama Karyawan</th>
                <th>Tempat</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($jadwalPelanggan as $index => $jadwal)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $jadwal->pelanggan->nama_lengkap }}</td>
                <td>{{ $jadwal->jadwalAdmin->tanggal }}</td>
                <td>{{ $jadwal->jadwalAdmin->jam }}</td>
                <td>{{ $jadwal->karyawan->nama }}</td>
                <td>{{ $jadwal->tempat }}</td>
                <td>{{ $jadwal->status }}</td>
                <td>
                    <form action="{{ route('jadwal-pelanggan.destroy', $jadwal->id) }}" method="POST" onsubmit="return confirm('Batalkan jadwal ini?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Batal</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center">Belum ada jadwal.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

