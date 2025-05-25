@extends('layout.template_admin')
@section('content')
    <form class="card", action="/reservasi/edit" method="POST">
        @csrf
        <div class="card-header">
            <h4 class="text-center mt-3">Edit </h4>
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
                <label for="formGrubExampleInput" class="form-label">Nama</label>
                <input type="text" class="form-control" id="formGrubExampleInput" name="nama">
            </div>
            <div class="mb-3">
                <label for="formGrubExampleInput" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="formGrubExampleInput" name="abjatan">
            </div>
            <div class="mb-3">
                <label for="formGrubExampleInput" class="form-label">Nomer Telfon</label>
                <input type="number" class="form-control" id="formGrubExampleInput" name="nomer_telfon">
            </div>
            <div class="mb-3">
                <label for="formGrubExampleInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="formGrubExampleInput" name="">email
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="/data_karyawan" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
@endsection
