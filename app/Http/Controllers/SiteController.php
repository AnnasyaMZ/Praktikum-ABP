<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function auth(Request $request)
    {
        // Logika sederhana untuk mengecek input
        $credentials = $request->only('email', 'password');

        if ($credentials['email'] == 'admin@gmail.com' && $credentials['password'] == '123') {
            return "Login Berhasil! Selamat datang.";
        }

        return back()->with('error', 'Login Gagal!');
    }
}
