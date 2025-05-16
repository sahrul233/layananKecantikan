@extends('layout.tempete_admin')
@section('content')
    <div class="cand">
        <div class="card-header">
            <h4>Data Reservasi</h4>
            <div class="col mt-3">
                <a href="/reservasi/tambah" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid mt-6">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NAMA LENGKAP</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomer Telfon</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Pilihan Tempat</th>
                            <th scope="col">Kategori Layanan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th> </th>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td>
                                    <a href="/reservasi/edit" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="/reservasi/hapus" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
