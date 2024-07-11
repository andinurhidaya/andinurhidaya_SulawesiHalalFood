<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MasukController extends Controller
{
    /**
     * Show the form for logging in.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.Masuk');
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function postMasuk(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/HomeAdmin');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('username'));
    }

    /**
     * Show the admin home page.
     *
     * @return \Illuminate\View\View
     */
    public function homeAdmin()
    {
        return view('admin.HomeAdmin');
    }
}