@extends('layout.template_owner')

@section('content')
<div class="container mt-5">
    <h3 class="text-center mb-4">Detail Pembayaran</h3>
    <div class="card p-4">
        <h5>Nama Layanan: {{ $pembayaran->layanan->nama }}</h5>
        <p>Metode Pembayaran: {{ $pembayaran->metode_pembayaran }}</p>
        <p>Total Harga: Rp {{ number_format($pembayaran->total_harga, 2) }}</p>
        <p>Status: {{ $pembayaran->status }}</p>
        <p>Catatan: {{ $pembayaran->catatan }}</p>
    </div>
</div>
@endsection
