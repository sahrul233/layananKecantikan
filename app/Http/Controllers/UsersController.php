<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;

class UsersController extends Controller
{
   public function index()
    {
        $data = [
            'no' => 1
        ];

        return view('users', $data);
    }

    public function tambah()
    {
        return view('users-tambah');
    }

    public function action_tambah(Request $request)
    {
        $users = new UsersModel();
        $users->nama = $request->nama;
        $users->email = $request->email;
        $users->Role = $request->Role;


        $users->save();
        return redirect('/users')->with('success', 'Data users berhasil ditambah.');
    }
    public function edit($id)
    {
        $data = [
            'detail' => UsersModel::findOrFail($id)
        ];
        return view('users-edit', $data);
    }

    public function action_edit($id, Request $request)
    {
        $users = UsersModel::findOrFail($id);
        $users->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'Role' => $request->Role
        ]);
        return redirect('/users')->with('success', 'Data users berhasil diedit.');
    }

    public function hapus($id)
    {
        $users = UsersModel::findOrFail($id);
        $users->delete();

        return back()->with('success', 'Data users berhasil dihapus.');
    }
}
