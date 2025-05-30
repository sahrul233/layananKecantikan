@extends('layout.template_admin')

@section('content')
<div class="container mt-4">
    <h4 class="text-center mb-4">Tambah Data Karyawan</h4>

    <form action="/karyawan/tambah" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/karyawan/data_karyawan" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<form action="{{ url('/karyawan/data_karyawan') }}" method="POST">
    @csrf
    <!-- input fields di sini -->

</form>

@endsection
