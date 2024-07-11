<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            // Jika pengguna belum terautentikasi, redirect ke halaman login
            return redirect()->route('masuk')->withErrors([
                'credentials' => 'You must be logged in to access this page.',
            ]);
        }

        // Jika pengguna terautentikasi, lanjutkan permintaan
        return $next($request);
    }
}