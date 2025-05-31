@extends('layout.template_admin')

@section('content')
<div class="container mt-4">
    <h4 class="text-center mb-3">Tambah Jadwal Admin</h4>
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
    <form action="{{ route('jadwal_admin.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jam" class="form-label">Jam</label>
            <input type="time" name="jam" class="form-control" required>
        </div>
        <button class="btn btn-primary">Simpan</button>
        <a href="/jadwal_admin" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
