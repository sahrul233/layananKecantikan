@extends('layout.template_owner')
@section('content')
    <div class="cand">
        <div class="card-header">
            <h4 class="judul-jadwal">Data Produk</h4>
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
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th ></th>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td>
                                    <a href="/data_produk/hapus" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
