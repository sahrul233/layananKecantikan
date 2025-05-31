@extends('layout.template_pelanggan')

@section('content')
<div class="container mt-4">
    <h4 class="text-center mb-3">Jadwal Anda</h4>
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
            @forelse($jadwal as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->pelanggan->nama_lengkap }}</td>
                <td>{{ $item->jadwalAdmin->tanggal }}</td>
                <td>{{ $item->jadwalAdmin->jam }}</td>
                <td>{{ $item->karyawan->nama }}</td>
                <td>{{ $item->tempat }}</td>
                <td>{{ $item->status }}</td>
                <td>
                    <form action="{{ route('jadwal-pelanggan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Batalkan jadwal ini?')">
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
