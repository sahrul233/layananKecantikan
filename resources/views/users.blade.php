@extends('layout.template_admin')
@section('content')
    <div class="cand">
        <div class="card-header">
            <h4 class="judul-jadwal">Users</h4>
            <div class="col mt-3">
                <a href="/users/tambah" class="btn btn-primary">Tambah Users</a>
            </div>
        </div>
        <style>
            .judul-jadwal {
                text-align: center;
                font-weight: bold;
                margin-bottom: 20px;
                }
        </style>
        <div class="card-body">
            <div class="container-fluid mt-6">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Created At</th>
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
                                    <a href="/users/edit" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="/users/hapus" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
