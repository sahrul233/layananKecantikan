@extends('layout.template_owner')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Pelanggan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
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
                            <th>Layanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pelanggan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->umur }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->karyawan->nama ?? '-' }}</td>
                                <td>{{ $item->tempat }}</td>
                                <td>
                                    @if($item->layanan)
                                        {{ $item->layanan->nama }}
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('/pelanggan/edit/' . $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ url('/pelanggan/hapus/' . $item->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="11" class="text-center">Belum ada data pelanggan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
