@extends('layout.template_pelanggan')

@section('content')
<div class="container mt-5">
    <div class="card p-4 shadow-lg rounded">
        <h3 class="text-center mb-4">Pembayaran</h3>

        <div class="mb-3">
            <h5>Detail Layanan</h5>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Nama Layanan
                    <span>Rp </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center fw-bold">
                    Total
                    <span>Rp </span>
                </li>
            </ul>
        </div>

        <form action="" method="POST">
            @csrf
            <input type="hidden" name="layanan_id" value="">
            <input type="hidden" name="total_harga" value="">

            <div class="mb-3 mt-4">
                <label for="metode_pembayaran" class="form-label">Pilih Metode Pembayaran</label>
                <select name="metode_pembayaran" id="metode_pembayaran" class="form-select" required>
                    <option value="" disabled selected>-- Pilih Metode --</option>
                    <option value="transfer">Transfer Bank</option>
                    <option value="e-wallet">E-Wallet (OVO, Gopay, dll)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="catatan" class="form-label">Catatan Tambahan (Opsional)</label>
                <textarea name="catatan" id="catatan" rows="3" class="form-control" placeholder="Contoh: Tolong datang jam 10 pagi."></textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Konfirmasi Pembayaran</button>
            </div>
        </form>
    </div>
</div>
@endsection
