@extends('layout.template_admin')
@section('content')
<div class="container mt-4">
    <h4>Edit Layanan</h4>
    <form action="/layanan_admin/update/{{ $layanan->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label class="form-label">Nama Layanan</label>
        <input type="text" name="nama" class="form-control" value="{{ $layanan->nama }}" required>

        <label class="form-label">Deskripsi</label>
        <textarea name="deskripsi" class="form-control">{{ $layanan->deskripsi }}</textarea>

        <label class="form-label">Harga</label>
        <input type="number" name="harga" class="form-control" value="{{ $layanan->harga }}" required>

        <label class="form-label">Gambar</label>
        @if($layanan->gambar)
            <img src="{{ asset('storage/'.$layanan->gambar) }}" alt="" width="100" class="mb-2 d-block">
        @endif
        <input type="file" name="gambar" class="form-control">

        <button type="submit" class="btn btn-primary mt-3">Update</button>
        <a href="/layanan_admin/data_layanan" class="btn btn-danger mt-3">Kembali</a>
    </form>
</div>
@endsection
