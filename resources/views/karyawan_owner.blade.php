@extends('layout.template_owner')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Karyawan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Nomor HP</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data_karyawan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->email }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Belum ada data karyawan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
