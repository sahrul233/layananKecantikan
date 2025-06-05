<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Pelanggan;
use App\Models\DataLayanan;
class DashboardAdminController extends Controller
{
    public function index()
    {
        $jumlahkaryawan = Karyawan::count();
        $jumlahpelanggan = Pelanggan::count();
        $jumlahlayanan = DataLayanan::count();

        return view('dashboard_admin', [
            'jumlahkaryawan' => $jumlahkaryawan,
            'jumlahpelanggan' => $jumlahpelanggan,
            'jumlahlayanan' => $jumlahlayanan,
    ]);
    }
}
