@extends('layout.app')

@section('title', 'Login')

@section('content')
<div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg">
    <h2 class="text-center mb-4">Masuk ke Akun Anda</h2>
    <form action="" method="POST" class="space-y-4">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button href="/admin_dashboard" type="submit" class="btn btn-primary w-100">Masuk</button>
    </form>
    <p class="mt-6 text-center">
        Belum punya akun?
        <a href="/registrasi_admin" class="text-pink-500 hover:underline">Daftar di sini</a>
    </p>
</div>
@endsection
