@extends('layout.template_admin')
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
            <a href="/rating_ulasan/tambah" class="btn btn-primary">Tambah Data</a>
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
                    @foreach ($data_rating as $item)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->rating }}</td>
                        <td>{{ $item->ulasan }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>
                            {{-- Periksa tabel asal dengan kondisi --}}
                            @php
                                $isPelanggan = \App\Models\RatingPelangganModel::find($item->id) !== null;
                            @endphp
                            @if ($isPelanggan)
                                <a href="/rating_pelanggan/{{ $item->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/rating_pelanggan/{{ $item->id }}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            @else
                                <a href="/rating_ulasan/{{ $item->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/rating_ulasan/{{ $item->id }}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
