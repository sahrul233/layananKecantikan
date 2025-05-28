<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranAdminModel;

class PembayaranAdminController extends Controller
{
    public function index()
    {
        return view('/pembayaran_admin');
    }

    public function show($id)
    {
        $pembayaran = PembayaranAdminModel::with('layanan')->findOrFail($id);
        return view('/pembayaran_admin-detail', compact('pembayaran'));
    }

    public function updateStatus(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|string|in:pending,berhasil,gagal',
        ]);

        $pembayaran = PembayaranAdminModel::findOrFail($id);
        $pembayaran->status = $validatedData['status'];
        $pembayaran->save();

        return redirect()->route('pembayaran_admin.index')->with('success', 'Status pembayaran berhasil diperbarui.');
    }
}
