@extends('layout.template_pelanggan')

@section('content')
<div class="container mt-4">
    <h4 class="text-center mb-4">Edit Data Pelanggan</h4>

    <form action="{{ url('/pelanggan/update/' . $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                value="{{ old('nama_lengkap', $pelanggan->nama_lengkap) }}" required>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp"
                value="{{ old('no_hp', $pelanggan->no_hp) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                value="{{ old('email', $pelanggan->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required>{{ old('alamat', $pelanggan->alamat) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="number" class="form-control" id="umur" name="umur"
                value="{{ old('umur', $pelanggan->umur) }}" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-laki" {{ old('jenis_kelamin', $pelanggan->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin', $pelanggan->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="karyawan_id" class="form-label">Karyawan</label>
            <select class="form-control" id="karyawan_id" name="karyawan_id" required>
                <option value="" disabled>-- Pilih Karyawan --</option>
                @foreach($karyawans as $karyawan)
                    <option value="{{ $karyawan->id }}" {{ old('karyawan_id', $pelanggan->karyawan_id) == $karyawan->id ? 'selected' : '' }}>
                        {{ $karyawan->nama }} - {{ $karyawan->jabatan }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tempat" class="form-label">Tempat</label>
            <select class="form-control" id="tempat" name="tempat" required>
                <option value="" disabled>Pilih Tempat</option>
                <option value="Rumah" {{ old('tempat', $pelanggan->tempat) == 'Rumah' ? 'selected' : '' }}>Rumah</option>
                <option value="Salon" {{ old('tempat', $pelanggan->tempat) == 'Salon' ? 'selected' : '' }}>Salon</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="data_layanan_id" class="form-label">Layanan</label>
            <select class="form-control" id="data_layanan_id" name="data_layanan_id" required>
                <option value="" disabled>-- Pilih Layanan --</option>
                @foreach($layanans as $layanan)
                    <option value="{{ $layanan->id }}" {{ old('data_layanan_id', $pelanggan->data_layanan_id) == $layanan->id ? 'selected' : '' }}>
                        {{ $layanan->nama }} (Rp {{ number_format($layanan->harga, 0, ',', '.') }})
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Perbarui</button>
        <a href="{{ url('/pelanggan/data_pelanggan') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
