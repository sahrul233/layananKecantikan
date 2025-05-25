@extends('layout.template_admin')

@section('content')
<div class="cand">
    <div class="card-header">
        <h4 class="text-center">JADWAL</h4>
    </div>
     <style>
    .table td, .table th {
    vertical-align: middle;
    }

    .btn-sm {
    margin-right: 4px;
    }
    .judul-jadwal {
    text-align: center;
    font-weight: bold;
    margin-bottom: 20px;
    }
    </style>
    <div class="card-body">
        <div class="container-fluid mt-4">
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Nama Karyawan</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="/" class="btn btn-sm btn-primary">Edit</a>
                            <form>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Batalkan jadwal ini?')">Batal</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-center">Belum ada jadwal reservasi.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
