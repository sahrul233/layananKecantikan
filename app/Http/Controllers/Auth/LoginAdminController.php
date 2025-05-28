<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login_admin');
    }

    public function login_proses(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role' => 'required|string|in:admin,karyawan,owner',
        ]);

        $credentials = $request->only('email', 'password');

        // Cek apakah kredensial valid
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role === $request->role) {
                switch ($user->role) {
                    case 'admin':
                        return redirect()->route('dashboard_admin');
                    case 'karyawan':
                        return redirect()->route('dashboard_karyawan');
                    case 'owner':
                        return redirect()->route('dashboard_owner');
                    default:
                        Auth::logout();
                        return back()->withErrors([
                            'role' => 'Role tidak sesuai.',
                        ])->onlyInput('email');
                }
            } else {
                Auth::logout();
                return back()->withErrors([
                    'role' => 'Role tidak sesuai.',
                ])->onlyInput('email');
            }
        }

        // Jika gagal login
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logout berhasil!');
    }
}
