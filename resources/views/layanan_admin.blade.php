@extends('layout.template_admin')
@section('content')
<div class="cand">
    <div class="card-header text-center mt-4">
        <h4 class="judul-jadwal">Daftar Layanan</h4>
    </div>
    <div class="col mt-3">
        <a href="/layanan_admin/tambah" class="btn btn-primary">Tambah Layanan</a>
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
            <div class="layanan-card">
                <img src="{{ asset('storage/haircare.jpg') }}" alt="Hair Care" style="width:100%; border-radius: 12px; margin-bottom: 12px;">
                <p>Hair Care</p>
                <p>Deskripsi</p>
                <p>Rp 100.000</p>
                <button class="btn btn-primary">Pesan</button>
            </div>
            <div class="layanan-card">
                <img src="{{ asset('storage/facialcare.jpg') }}" alt="Facial Care" style="width:100%; border-radius: 12px; margin-bottom: 12px;">
                <p>Facial Care</p>
                <p>Deskripsi</p>
                <p>Rp 120.000</p>
                <button class="btn btn-primary">Pesan</button>
            </div>
            <div class="layanan-card">
                <img src="{{ asset('storage//nailcare.jpg') }}" alt="Nail Care" style="width:100%; border-radius: 12px; margin-bottom: 12px;">
                <p>Nail Care</p>
                <p>Deskripsi</p>
                <p>Rp 80.000</p>
                <button class="btn btn-primary">Pesan</button>
            </div>
            <div class="layanan-card">
                <img src="{{ asset('storage/makeup.jpg') }}" alt="Makeup" style="width:100%; border-radius: 12px; margin-bottom: 12px;">
                <p>Makeup</p>
                <p>Deskripsi</p>
                <p>Rp 150.000</p>
                <button class="btn btn-primary">Pesan</button>
            </div>
            <div class="layanan-card">
                <img src="{{ asset('storage/bodytreatment.jpg') }}" alt="Body Treatment" style="width:100%; border-radius: 12px; margin-bottom: 12px;">
                <p>Body Treatment</p>
                <p>Deskripsi</p>
                <p>Rp 180.000</p>
                <button class="btn btn-primary">Pesan</button>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="/layanan_admin" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</div>
@endsection
