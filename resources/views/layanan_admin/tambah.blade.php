@extends('layout.template_admin')
@section('content')
<div class="container mt-4">
    <h4>Tambah Layanan</h4>
    <form action="{{ url('/layanan_admin/tambah') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label class="form-label">Nama Layanan</label>
        <input type="text" name="nama" class="form-control" required>

        <label class="form-label">Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>

        <label class="form-label">Harga</label>
        <input type="number" name="harga" class="form-control" required>

        <label class="form-label">Gambar</label>
        <input type="file" name="gambar" class="form-control">

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        <a href="/layanan_admin/data_layanan" class="btn btn-danger mt-3">Kembali</a>
    </form>
</div>
@endsection
