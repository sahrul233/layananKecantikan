@extends('layout.tempete_admin')
@section('content')
    <div class="cand">
        <div class="card-header">
            <h4>Layanan</h4>
            <div class="col mt-3">
                <a href="/layanan/tambah" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        <div class="container">
            <div class="layanan-grid">
                <div class="layanan-card">
                    <h2>Layanan A</h2>
                    <p>Deskripsi layanan A</p>
                    <button href="" type="submit" class="btn btn-primary">Pesan</button>
                </div>
                <div class="layanan-card">
                    <h2>Layanan B</h2>
                    <p>Deskripsi layanan B</p>
                    <button href="" type="submit" class="btn btn-primary">Pesan</button>
                </div>
                <div class="layanan-card">
                    <h2>Layanan C</h2>
                    <p>Deskripsi layanan C</p>
                    <button href="" type="submit" class="btn btn-primary">Pesan</button>
                </div>
                <div class="layanan-card">
                    <h2>Layanan D</h2>
                    <p>Deskripsi layanan D</p>
                    <button>Pesan href="" type="submit" class="btn btn-primary"</button>
                </div>
            </div>
        </div>
    </div>
@endsection
