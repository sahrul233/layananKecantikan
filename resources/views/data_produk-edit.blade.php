@extends('layout.template_admin')

@section('content')
<form class="card" action="/data_produk/edit" method="POST">
    @csrf
    <style>
        .judul-jadwal {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
    <div class="card-header">
        <h4 class="judul-jadwal">Edit Produk</h4>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok">
        </div>
        <div class="card-footer mt-4">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="/data_produk" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</form>
@endsection
