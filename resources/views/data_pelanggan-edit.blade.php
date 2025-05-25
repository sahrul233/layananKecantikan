@extends('layout.template_admin')

@section('content')
<form class="card" action="/data_pelanggan/edit" method="POST">
    @csrf

    <style>
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

        .judul-jadwal {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>

    <div class="card-header">
        <h4 class="judul-jadwal">Edit Pelanggan</h4>
    </div>

    <div class="card-body">
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
        </div>
        <div class="mb-3">
            <label for="nomer_telfon" class="form-label">Nomor Telepon</label>
            <input type="number" class="form-control" id="nomer_telfon" name="nomer_telfon">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
            <label for="tempat" class="form-label">Tempat</label>
            <select class="form-select" id="tempat" name="tempat">
                <option selected disabled>Pilihan Tempat</option>
                <option value="salon">Salon</option>
                <option value="rumah">Rumah</option>
            </select>
        </div>
        <div class="layanan-grid">
            <div class="layanan-card">
                <h2>Layanan A</h2>
                <p>Hair Care</p>
                <p>Rp 100.000</p>
                <button type="button" class="btn btn-primary">Pesan</button>
            </div>
            <div class="layanan-card">
                <h2>Layanan B</h2>
                <p>Facial Care</p>
                <p>Rp 120.000</p>
                <button type="button" class="btn btn-primary">Pesan</button>
            </div>
            <div class="layanan-card">
                <h2>Layanan C</h2>
                <p>Nail Care</p>
                <p>Rp 80.000</p>
                <button type="button" class="btn btn-primary">Pesan</button>
            </div>
            <div class="layanan-card">
                <h2>Layanan D</h2>
                <p>Makeup</p>
                <p>Rp 150.000</p>
                <button type="button" class="btn btn-primary">Pesan</button>
            </div>
            <div class="layanan-card">
                <h2>Layanan E</h2>
                <p>Body Treatment</p>
                <p>Rp 180.000</p>
                <button type="button" class="btn btn-primary">Pesan</button>
            </div>
        </div>

        <div class="card-footer mt-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/data_pelanggan" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</form>
@endsection
