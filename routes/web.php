<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// routes/web.php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodController;

Route::get('/TentangKami', [AboutController::class, 'index'])->name('TentangKami');
Route::get('/Produk', [AboutController::class, 'produk'])->name('Produk');
Route::get('/Kontak', [AboutController::class, 'kontak'])->name('Kontak');
Route::get('/Masuk', [AboutController::class, 'masuk'])->name('Masuk');
Route::get('/HomeAdmin', [AdminController::class, 'index'])->name('HomeAdmin');


Route::get('/', function () {
    return view('welcome');
});
// web.php

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
// routes/web.php

use App\Http\Controllers\MasukController;

Route::get('/login', [MasukController::class, 'showLoginForm'])->name('masuk');
Route::post('/login', [MasukController::class, 'postMasuk'])->name('postMasuk');
Route::get('/HomeAdmin', [MasukController::class, 'homeAdmin'])->name('HomeAdmin')->middleware('auth');

use App\Http\Controllers\TambahController;

Route::resource('/Tambah', FoodController::class);
Route::get('/tambah/kategori', [TambahController::class, 'tambahKategori'])->name('tambah.kategori');
Route::post('/tambah/simpan-produk', [TambahController::class, 'simpanProduk'])->name('tambah.simpan.produk');
Route::post('/tambah/simpan-kategori', [TambahController::class, 'simpanKategori'])->name('tambah.simpan.kategori');

// routes/web.php

use App\Http\Controllers\BayarController;

Route::get('/bayar/{productId}', [BayarController::class, 'showBayar'])->name('bayar');