@extends('layout.template_admin')

@section('content')
<form class="card" action="/rating_ulasan/tambah" method="POST">
    @csrf
    <div class="card-header">
        <h4 class="judul-jadwal">Tambah Rating Dan Ulasan</h4>
    </div>
     <style>
        .judul-jadwal {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .star {
        font-size: 7rem;
        color: #ccc;
        cursor: pointer;
        transition: color 0.2s;
        padding: 0 5px;
        }

        input:checked ~ label,
        input:checked + label,
        .rating-select:hover label:hover,
        .rating-select:hover label:hover ~ label {
            color: gold !important;
        }
    </style>

    <div class="card-body">
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label class="form-label">Rating</label>
            <div class="rating-select d-flex flex-row-reverse justify-content-center">
                @for ($i = 5; $i >= 1; $i--)
                    <input type="radio" id="bintang{{ $i }}" name="rating" value="{{ $i }}" hidden>
                    <label for="bintang{{ $i }}" class="star">&#9733;</label>
                @endfor
            </div>
        </div>
         <div class="mb-3">
            <label for="ulasan" class="form-label">Ulasan</label>
            <textarea class="form-control" id="ulasan" name="ulasan" rows="4" placeholder="Tulis pengalaman Anda..."></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Ulasan</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="card-footer mt-4">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="/rating_ulasan" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</form>
@endsection
