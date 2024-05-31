<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Mengarahkan ke view login.blade.php
    }

    public function login(Request $request)
    {
        $request->validate([
            'nomorwa' => 'required|numeric',
            'password' => 'required',
        ]);

        $credentials = [
            'nomorwa' => $request->nomorwa,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, arahkan ke halaman pengunjung
            return redirect()->intended('dashboard');
        }

        // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
        return redirect()->back()->withErrors(['nomorwa' => 'Nomor WA atau password salah.'])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
