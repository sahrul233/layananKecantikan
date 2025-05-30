@extends('layout.template_admin')
@section('content')
<div class="container">
    <h2>Riwayat Layanan yang Dipesan</h2>

    @if ($pesanan->count())
        <ul>
            @foreach ($pesanan as $item)
                <li>
                    <strong>{{ $item->layanan->nama }}</strong> - Rp {{ number_format($item->layanan->harga, 0, ',', '.') }}
                    <br>
                    <small>Dipesan pada: {{ $item->created_at->format('d M Y') }}</small>
                </li>
            @endforeach
        </ul>
    @else
        <p>Belum ada layanan yang dipesan.</p>
    @endif
</div>
@endsection
