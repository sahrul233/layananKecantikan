@extends('layout.template_admin')

@section('content')
    <div class="container mt-4">
        <h4 class="text-center mb-4">Edit Layanan</h4>

        <form action="{{ url('/layanan/update/' . $layanan->id) }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama_layanan">Nama Layanan</label>
                <input type="text" class="form-control" id="nama_layanan" name="nama_layanan"
                    value="{{ old('nama_layanan', $layanan->nama_layanan) }}" required>
            </div>

            <div class="mb-3">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori"
                    value="{{ old('kategori', $layanan->kategori) }}" required>
            </div>

            <div class="mb-3">
                <label for="durasi">Durasi</label>
                <input type="text" class="form-control" id="durasi" name="durasi"
                    value="{{ old('durasi', $layanan->durasi) }}" required>
            </div>

            <div class="mb-3">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga"
                    value="{{ old('harga', $layanan->harga) }}" required>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="/layanan/data_layanan" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
