@extends('layout.template_pelanggan')
@section('content')
    <div class="cand">
        <div class="card-header">
            <h4 class="judul-jadwal">Rating Dan Ulasan</h4>
        <style>
            .judul-jadwal {
                text-align: center;
                font-weight: bold;
                margin-bottom: 20px;
                }
        </style>
            <div class="col mt-3">
                <a href="/rating_pelanggan/tambah" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid mt-6">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Ulasan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
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
                                    <a href="/rating_pelanggan/edit" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="/rating_pelanggan/hapus" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
