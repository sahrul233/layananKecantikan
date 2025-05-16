@extends('layout.tempete_admin')
@section('content')
    <form class="card", action="/reservasi/tambah" method="POST">
        @csrf
        <div class="card-header">
            <h4>Tambah Data </h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="formGrubExampleInput" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="formGrubExampleInput" name="nama_lengkap">
            </div>
            <div class="mb-3">
                <label for="formGrubExampleInput" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="formGrubExampleInput" name="alamat">
            </div>
            <div class="mb-3">
                <label for="formGrubExampleInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="formGrubExampleInput" name="">email
            </div>
            <div class="mb-3">
                <label for="formGrubExampleInput" class="form-label">Nomer Telfon</label>
                <input type="number" class="form-control" id="formGrubExampleInput" name="nomer_telfon">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                    <option selected>Jenis Kelamin</option>
                    <option value="laki-laki">laki-laki</option>
                    <option value="perempuan">perempuan</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="formGrubExampleInput" class="form-label">Umur</label>
                <input type="number" class="form-control" id="formGrubExampleInput" name="umur">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="pilihan_tempat">
                    <option selected>Pilihan Tempat</option>
                    <option value="salon">Salon</option>
                    <option value="rumah">Rumah</option>
                  </select>
            </div>
            <div class="mb-3">
                <select name="kategori" multiple size="5">
                    <option value="Hair Care">Hair Care</option>
                    <option value="Facial Care">Facial Care</option>
                    <option value="Nail Care">Nail Care</option>
                    <option value="Makeup">Makeup</option>
                    <option value="Body Treatment">Body Treatment</option>
                </select>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="/reservasi" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
@endsection
