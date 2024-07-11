<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan halaman masuk.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.masuk'); // Pastikan view 'auth.masuk' disesuaikan dengan nama view Anda
    }

    /**
     * Handle masuk request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect()->intended('/dashboard'); // Ganti '/dashboard' dengan halaman yang ingin Anda arahkan setelah masuk berhasil
        }

        // Jika autentikasi gagal
        return back()->withErrors(['email' => 'Email atau kata sandi salah.']); // Redirect kembali dengan pesan error
    }
}