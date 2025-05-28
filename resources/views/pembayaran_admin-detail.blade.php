@extends('layout.template_admin')

@section('content')
<div class="container mt-5">
    <h3 class="text-center mb-4">Detail Pembayaran</h3>
    <div class="card p-4">
        <h5>Nama Layanan: {{ $pembayaran->layanan->nama }}</h5>
        <p>Metode Pembayaran: {{ $pembayaran->metode_pembayaran }}</p>
        <p>Total Harga: Rp {{ number_format($pembayaran->total_harga, 2) }}</p>
        <p>Status: {{ $pembayaran->status }}</p>
        <p>Catatan: {{ $pembayaran->catatan }}</p>

        <form action="{{ route('admin.pembayaran.updateStatus', $pembayaran->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="status" class="form-label">Ubah Status</label>
                <select name="status" id="status" class="form-select" required>
                    <option value="pending" {{ $pembayaran->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="berhasil" {{ $pembayaran->status == 'berhasil' ? 'selected' : '' }}>Berhasil</option>
                    <option value="gagal" {{ $pembayaran->status == 'gagal' ? 'selected' : '' }}>Gagal</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui Status</button>
        </form>
    </div>
</div>
@endsection
