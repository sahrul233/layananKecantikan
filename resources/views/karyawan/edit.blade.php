@extends('layout.template_admin')

@section('content')
    <div class="container mt-4">
        <h4 class="text-center mb-4">Edit Karyawan</h4>

        <form action="{{ url('/karyawan/update/' . $karyawan->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $karyawan->nama) }}" required>
            </div>

            <div class="mb-3">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan', $karyawan->jabatan) }}" required>
            </div>

            <div class="mb-3">
                <label for="no_hp">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp', $karyawan->no_hp) }}" required>
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $karyawan->email) }}">
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="/karyawan/data_karyawan" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection

