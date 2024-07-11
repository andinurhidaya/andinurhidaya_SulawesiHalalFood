<?php

// app/Http/Controllers/BayarController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BayarController extends Controller
{
    public function showBayar($productId)
    {
        // Fetch product details using $productId from database if needed
        // Example: $product = Product::find($productId);
        
        return view('bayar', compact('productId'));
    }
}