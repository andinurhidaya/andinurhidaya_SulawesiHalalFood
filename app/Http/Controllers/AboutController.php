<?php

// app/Http/Controllers/AboutController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('TentangKami');
    }
    public function produk()
    {
        return view('Produk');
    }
    public function kontak()
    {
        return view('Kontak');
    }
    public function masuk()
    {
        return view('Masuk');
    }
    
    
}