<?php

namespace App\Http\Controllers\Admin;

use App\Models\Layanan;
use Illuminate\Http\Request;

public function index()
{
    $layanans = Layanan::all();
    return view('admin.layanan.index', compact('layanans'));
}

public function create()
{
    return view('admin.layanan.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'nama_layanan' => 'required|string|max:255',
        'harga' => 'required|integer',
        'gambar' => 'image|mimes:jpg,png,jpeg|max:2048',
    ]);

    if ($request->hasFile('gambar')) {
        $validated['gambar'] = $request->file('gambar')->store('layanan', 'public');
    }

    Layanan::create($validated);

    return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil ditambahkan.');
}

public function edit(Layanan $layanan)
{
    return view('admin.layanan.edit', compact('layanan'));
}

public function update(Request $request, Layanan $layanan)
{
    $validated = $request->validate([
        'nama_layanan' => 'required|string|max:255',
        'harga' => 'required|integer',
        'gambar' => 'image|mimes:jpg,png,jpeg|max:2048',
    ]);

    if ($request->hasFile('gambar')) {
        $validated['gambar'] = $request->file('gambar')->store('layanan', 'public');
    }

    $layanan->update($validated);

    return redirect()->route('admin.layanan.index')->with('success', 'Layanan diperbarui.');
}

public function destroy(Layanan $layanan)
{
    $layanan->delete();
    return redirect()->back()->with('success', 'Layanan dihapus.');
}

    public function destroy(string $id)
    {
        
    }
}
