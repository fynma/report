<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // Jika pengguna sudah login, arahkan ke halaman beranda
        if (Auth::check()) {
            return redirect()->route('index');
        }

        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Cek autentikasi menggunakan Laravel Auth
        if (Auth::attempt($credentials)) {
            if (Auth::user()->level === 'user') {
                return redirect()->route('user');
            } else if (Auth::user()->level === 'admin') {
                return redirect()->route('admin');
            } else {
                return "Error: level pengguna tidak valid";
            }
        } else {
            return "Error: username atau password salah";
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
