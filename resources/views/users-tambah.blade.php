@extends('layout.template_admin')
@section('content')
<form class="card" action="/users/tambah" method="POST">
        @csrf
        <div class="card-header">
            <h4 class="judul-jadwal">Tambah Users</h4>
        </div>
        <style>
            .judul-jadwal {
                text-align: center;
                font-weight: bold;
                margin-bottom: 20px;
                }
        </style>
        <div class="card-body">
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" name="role" required>
                    <option selected disabled>Role</option>
                    <option value="admin">Admin</option>
                    <option value="owner">Owner</option>
                    <option value="karyawan">Karyawan</option>
                    <option value="pelanggan">Pelanggan</option>
                </select>
            </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="/users" class="btn btn-danger">Kembali</a>
        </div>
    </form>
@endsection
