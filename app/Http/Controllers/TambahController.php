<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; // Sesuaikan dengan model yang Anda gunakan untuk produk
use App\Models\Kategori; // Sesuaikan dengan model yang Anda gunakan untuk kategori

class TambahController extends Controller
{
    public function tambahProduk()
    {
        return view('Admin.Tambah');
    }

}