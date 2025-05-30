@extends('layout.template_admin')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center">
                <h4>Data Layanan</h4>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a href="/layanan/tambah" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Layanan</th>
                                <th>Kategori</th>
                                <th>Durasi</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($layanan as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_layanan }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td>{{ $item->durasi }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>
                                        <a href="/layanan/edit/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a>

                                        <form action="{{ url('/layanan/hapus/' . $item->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada data layanan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
