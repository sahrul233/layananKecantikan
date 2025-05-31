@extends('layout.template_owner')

@section('content')
<div class="cand">
    <div class="card-header">
        <h4 class="text-center">JADWAL</h4>
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
    <div class="card-body">
        <div class="container-fluid mt-4">
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Nama Karyawan</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                 <tbody>
                    @forelse($data_jadwal as $index => $item)
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
    </div>
</div>
@endsection
