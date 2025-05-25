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
            <div class="layanan-card">
                <h2>Layanan A</h2>
                <p>Hair Care</p>
                <p>Rp 100.000</p>
                <button class="btn btn-primary">Pesan</button>
            </div>
            <div class="layanan-card">
                <h2>Layanan B</h2>
                <p>Facial Care</p>
                <p>Rp 120.000</p>
                <button class="btn btn-primary">Pesan</button>
            </div>
            <div class="layanan-card">
                <h2>Layanan C</h2>
                <p>Nail Care</p>
                <p>Rp 80.000</p>
                <button class="btn btn-primary">Pesan</button>
            </div>
            <div class="layanan-card">
                <h2>Layanan D</h2>
                <p>Makeup</p>
                <p>Rp 150.000</p>
                <button class="btn btn-primary">Pesan</button>
            </div>
            <div class="layanan-card">
                <h2>Layanan E</h2>
                <p>Body Treatment</p>
                <p>Rp 180.000</p>
                <button class="btn btn-primary">Pesan</button>
            </div>
        </div>

        <div class="mb-3">
            <label for="pilihan_tempat" class="form-label">Pilih Tempat</label>
            <select class="form-select" id="pilihan_tempat" name="pilihan_tempat" required>
                <option selected disabled>Pilihan Tempat</option>
                <option value="salon">Salon</option>
                <option value="rumah">Rumah</option>
            </select>
        </div>

        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="/dashboard_pelanggan" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</div>
@endsection
