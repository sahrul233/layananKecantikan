@extends('layout.template_karyawan')
@section('content')
    <div class="cand">
        <div class="card-header">
            <h4 class="judul-jadwal">Data Pelanggan</h4>
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
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tempat</th>
                            <th scope="col">Layanan</th>
                            <th scope="col">Jam</th>
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
                                <td> </td>
                                <td> </td>
                                <td>
                                    <a href="/pelanggan_karyawan/hapus" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
