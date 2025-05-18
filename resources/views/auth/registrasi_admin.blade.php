@extends('layout.app')

@section('title', 'Daftar')

@section('content')
<div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg">
    <h2 class="text-center mb-4">Buat Akun Baru</h2>
    <form action="" method="POST" class="space-y-4">
        @csrf
        <div>
    <label class="form-label">Nama Lengkap</label>
    <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" >
    @error('nama')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
    @enderror
</div>
        <div>
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" >
        </div>
        <div>
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" >
        </div>
        <div>
            <label class="form-label">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" >
        </div>
        <button href="/login_admin" type="submit" class="btn btn-primary w-100">Daftar</button>
    </form>
    <p class="mt-6 text-center">
        Sudah punya akun?
        <a href="/login_admin" class="text-pink-500 hover:underline">Masuk di sini</a>
    </p>
</div>
@endsection
