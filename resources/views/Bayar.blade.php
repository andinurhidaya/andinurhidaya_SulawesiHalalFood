<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar Produk - Sulawesi Halal Food</title>
    <style>
    /* CSS Styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    nav {
        background-color: #ff0000;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav-left {
        display: flex;
        align-items: center;
    }

    .nav-left img {
        height: 50px;
        margin-right: 10px;
    }

    .nav-left span {
        color: #fff;
        font-size: 1.5em;
        font-weight: bold;
    }

    .nav-right a {
        margin: 0 15px;
        text-decoration: none;
        color: #fff;
        font-weight: bold;
    }

    .container {
        max-width: 1200px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .product-info {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #ccc;
    }

    .product-info img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 8px;
        margin-right: 20px;
    }

    .product-info h2 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .product-info p {
        margin: 0;
        font-weight: bold;
    }

    .payment-form {
        margin-top: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 1em;
    }

    .form-group textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 1em;
        resize: vertical;
        /* Memastikan textarea dapat di-resize secara vertikal */
    }

    .form-group input[type="submit"] {
        background-color: #ff0000;
        color: #fff;
        border: none;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-group input[type="submit"]:hover {
        background-color: #cc0000;
    }

    .form-group select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 1em;
    }

    .confirmation-message {
        display: none;
        text-align: center;
        background-color: #d4edda;
        color: #155724;
        padding: 15px;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <nav>
        <div class="nav-left">
            <span>Sulawesi Halal Food</span>
        </div>
        <div class="nav-right">
            <a href="/">Home</a>
            <a href="{{ route('TentangKami') }}">Tentang Kami</a>
            <a href="{{ route('Produk') }}">Produk</a>
            <a href="{{ route('Kontak') }}">Kontak</a>
        </div>
    </nav>

    <div class="container">
        <div class="product-info">
            <img src="https://disbudpar.sulselprov.go.id/uploads/wisata/R.png" alt="Product Image">
            <div>
                <h2>Coto Makassar</h2>
                <p class="price">Rp 25.000,00</p>
            </div>
        </div>

        <div id="confirmation-message" class="confirmation-message">
            Pesanan Anda Berhasil!
        </div>

        <form id="payment-form" action="{{ route('bayar', ['productId' => 1]) }}" method="POST" class="payment-form">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea id="address" name="address" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="payment_method">Metode Pembayaran</label>
                <select name="payment_method" id="payment_method" required>
                    <option value="">Pilih Metode Pembayaran</option>
                    <option value="bank_transfer">BCA</option>
                    <option value="gopay">GoPay</option>
                    <option value="ovo">OVO</option>
                    <option value="cod">Bayar di Tempat</option>
                </select>
            </div>
            <input type="hidden" name="product_id" value="1"> <!-- Contoh ID Produk -->
            <div class="form-group">
                <input type="submit" value="Bayar">
            </div>
        </form>
    </div>

    <script>
    document.getElementById('payment-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman form default
        document.getElementById('confirmation-message').style.display = 'block'; // Tampilkan pesan konfirmasi
        setTimeout(function() {
            document.getElementById('payment-form').submit(); // Kirim form setelah 5 menit
        }, 300000); // Mengatur delay 5 menit (300.000 milidetik) sebelum pengiriman form
    });
    </script>
</body>

</html>