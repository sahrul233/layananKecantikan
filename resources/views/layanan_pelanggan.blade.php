@extends('layout.template_pelanggan')
@section('content')
<div class="cand">
    <div class="card-header text-center mt-4">
        <h4 class="judul-jadwal">Layanan</h4>
    </div>
    <div class="container">
        <style>
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 30px 20px;
                font-family: 'Segoe UI', sans-serif;
            }

            .layanan-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
                gap: 24px;
                margin-top: 30px;
            }

            .layanan-card {
                background: #f9f9f9;
                border-radius: 16px;
                padding: 20px;
                box-shadow: 0 6px 16px rgba(0, 0, 0, 0.06);
                transition: all 0.3s ease;
                text-align: center;
            }

            .layanan-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
            }

            .layanan-card h2 {
                font-size: 20px;
                font-weight: bold;
                margin-bottom: 12px;
                color: #2c3e50;
            }

            .layanan-card p {
                font-size: 14px;
                color: #555;
                margin-bottom: 8px;
            }

            .btn {
                padding: 10px 18px;
                font-size: 14px;
                font-weight: 600;
                border: none;
                border-radius: 10px;
                cursor: pointer;
                transition: background 0.2s ease-in-out;
            }

            .btn-primary {
                background-color: #3498db;
                color: white;
            }

            .btn-primary:hover {
                background-color: #2980b9;
            }

            .btn-danger {
                background-color: #e74c3c;
                color: white;
            }

            .btn-danger:hover {
                background-color: #c0392b;
            }

            .form-label {
                font-weight: 600;
                margin-top: 24px;
                display: block;
                color: #34495e;
            }

            .form-select {
                padding: 10px;
                border-radius: 10px;
                border: 1px solid #ccc;
                width: 100%;
                font-size: 14px;
            }

            .card-footer {
                margin-top: 30px;
                text-align: center;
            }

            .judul-jadwal {
                font-size: 26px;
                font-weight: bold;
                color: #2c3e50;
            }
        </style>

        <div class="layanan-grid">
    @foreach ($layanan as $item)
        <div class="layanan-card">
            @if ($item->gambar)
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}" style="width:100%;">
            @else
                <img src="{{ asset('default-image.jpg') }}" alt="Default" style="width:100%;">
            @endif
            <h3>{{ $item->nama }}</h3>
            <p>{{ $item->deskripsi }}</p>
            <p>Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
        </div>
    @endforeach
</div>

@endsection
