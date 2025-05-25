@extends('layout.template_admin')
@section('content')
    <div class="cand">
        <div class="card-header">
            <h4 class="text-center mt-3">Data Karyawan</h4>
            <div class="col mt-3">
                <a href="/data_karyawan/tambah" class="btn btn-primary">Tambah Data</a>
            </div>
            <style>
            .judul-jadwal {
                text-align: center;
                font-weight: bold;
                margin-bottom: 20px;
                }
            </style>
        </div>
        <div class="card-body">
            <div class="container-fluid mt-6">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Nomor HP</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th ></th>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td>
                                    <a href="/data_karyawan/edit" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="/data_karyawan/hapus" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
