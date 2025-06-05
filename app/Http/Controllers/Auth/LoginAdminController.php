<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('auth.login_admin');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,owner,karyawan',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === $request->role) {
                return match ($user->role) {
                    'admin' => redirect()->route('dashboard_admin'),
                    'owner' => redirect()->route('dashboard_owner'),
                    'karyawan' => redirect()->route('dashboard_karyawan'),
                    default => abort(403),
                };
            } else {
                Auth::logout();
                return back()->withErrors(['role' => 'Role tidak sesuai.'])->onlyInput('email');
            }
        }

        return back()->withErrors(['email' => 'Email atau password salah.'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login_admin')->with('success', 'Logout berhasil.');
    }
}
