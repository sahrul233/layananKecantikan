@extends('layout.template_admin')
@section('content')
<div class="container mt-4">
    <h3>Tambah Layanan</h3>
    <form action="/layanan_admin/tambah" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama Layanan</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control">
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/layanan_admin" class="btn btn-danger">Batal</a>
    </form>
</div>
@endsection
