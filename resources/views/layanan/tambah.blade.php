@extends('layout.template_admin')

@section('content')
    <div class="container mt-4">
        <h4 class="text-center mb-4">Tambah Data Layanan</h4>

        <form action="{{ url('/layanan/tambah') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama_layanan" class="form-label">Nama Layanan</label>
                <input type="text" class="form-control" id="nama_layanan" name="nama_layanan" required>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" required>
            </div>

            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi</label>
                <input type="text" class="form-control" id="durasi" name="durasi" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ url('/layanan/data_layanan') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
