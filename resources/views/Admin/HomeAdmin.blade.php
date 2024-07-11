<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Sulawesi Halal Food</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    nav {
        background-color: #ff0000;
        padding: 10px 20px;
        display: flex;
        justify-content: center;
        /* Center the container */
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .nav-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .nav-left {
        display: flex;
        align-items: center;
    }

    .nav-left span {
        color: #fff;
        font-size: 1.5em;
        font-weight: bold;
    }

    .nav-right {
        display: flex;
        align-items: center;
    }

    .nav-right a {
        margin-left: 15px;
        text-decoration: none;
        color: #fff;
        font-weight: bold;
    }

    .admin-container {
        display: flex;
        margin-top: 60px;
        /* Menambahkan margin untuk mengimbangi tinggi navbar */
    }

    .sidebar {
        width: 200px;
        /* Ukuran sidebar diperkecil */
        background-color: #343a40;
        padding: 20px;
        height: calc(100vh - 60px);
        /* Mengurangi tinggi navbar dari tinggi sidebar */
        position: fixed;
        top: 60px;
        /* Posisi sidebar tepat di bawah navbar */
        overflow-y: auto;
        margin-top: 0;
        /* Tidak ada margin top pada sidebar */
        z-index: 999;
        /* Membuat sidebar berada di depan konten utama */
    }

    .sidebar a {
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .sidebar a:hover {
        background-color: #495057;
    }

    .main-content {
        margin-left: 220px;
        /* Sesuaikan margin left dengan lebar sidebar */
        padding: 20px;
        width: calc(100% - 220px);
        /* Sesuaikan lebar main content */
    }

    .dashboard,
    .product-management,
    .order-management {
        margin-bottom: 40px;
    }

    .dashboard h2,
    .product-management h2,
    .order-management h2 {
        margin-bottom: 20px;
    }

    .stats {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    .stat {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        text-align: center;
    }

    .table-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th,
    table td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    table th {
        background-color: #f8f9fa;
    }

    .btn {
        padding: 10px 20px;
        background-color: #ff0000;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        margin-top: 10px;
    }

    .btn:hover {
        background-color: #cc0000;
    }
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <div class="nav-content">
                <div class="nav-left">
                    <span>Admin Panel - Sulawesi Halal Food</span>
                </div>
                <div class="nav-right">
                    <a href="{{ route('welcome') }}">Logout</a> <!-- Mengarahkan logout ke halaman welcome -->
                </div>
            </div>
        </div>
    </nav>

    <div class="admin-container">
        <div class="sidebar">
            <a href="#dashboard">Dashboard</a>
            <a href="#product-management">Manajemen Produk</a>
            <a href="#order-management">Manajemen Pesanan</a>
        </div>

        <div class="main-content">
            <div id="dashboard" class="dashboard">
                <h2>Dashboard</h2>
                <div class="stats">
                    <div class="stat">
                        <h3>Statistik Penjualan</h3>
                        <p>Jumlah Penjualan: 150</p>
                    </div>
                    <div class="stat">
                        <h3>Jumlah Pengguna</h3>
                        <p>Pengguna Terdaftar: 120</p>
                    </div>
                    <div class="stat">
                        <h3>Produk Paling Laris</h3>
                        <p>Coto Makassar</p>
                    </div>
                </div>
            </div>

            <div id="product-management" class="product-management">
                <h2>Manajemen Produk</h2>
                <a href="{{ route('Tambah.create') }}" class="btn">Tambah Produk</a>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Foto</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Coto Makassar</td>
                                <td><img src="https://disbudpar.sulselprov.go.id/uploads/wisata/R.png"
                                        alt="Coto Makassar" width="100"></td>
                                <td>Rp 25.000,00</td>
                                <td>
                                    <a href="#delete-product" class="btn">Hapus</a>
                                </td>
                            </tr>
                            <!-- Tambahkan produk lain di sini -->
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="order-management" class="order-management">
                <h2>Manajemen Pesanan</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID Pesanan</th>
                                <th>Nama Pelanggan</th>
                                <th>Produk</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Andi</td>
                                <td>Coto Makassar</td>
                                <td>Diproses</td>
                                <td>
                                    <a href="#update-status" class="btn">Update Status</a>
                                </td>
                            </tr>
                            <!-- Tambahkan pesanan lain di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>