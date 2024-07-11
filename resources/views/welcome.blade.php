<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sulawesi Halal Food</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #f8f9fa;
        padding: 10px 0;
        text-align: center;
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

    .banner {
        text-align: center;
        background: url('https://arsitagx-master.s3.ap-southeast-1.amazonaws.com/img_medium/2810/4225/29432/photo-view-1-rumah-makan-ikan-goreng-cianjur-desain-arsitek-oleh-liska-yulianti.jpeg') no-repeat;
        background-size: cover;
        background-position: center;
        color: #fff;
        padding: 100px 20px;
        height: 500px;
        position: relative;
    }

    .banner-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 100%;
    }

    .banner h1 {
        background-color: rgba(0, 0, 0, 0.5);
        display: inline-block;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .products,
    .testimonials {
        margin: 20px auto;
        text-align: center;
        max-width: 1200px;
    }

    .products img,
    .testimonials img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .products div,
    .testimonials div {
        display: inline-block;
        margin: 15px;
    }

    footer {
        background-color: #f8f9fa;
        padding: 20px 0;
        text-align: center;
    }

    .footer-content {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .footer-content div {
        margin: 10px 0;
        text-align: left;
        padding-left: 20px;
    }

    .footer-content img {
        height: 50px;
        margin: 5px;
    }
    </style>
</head>

<body>
    <header>
    </header>
    <nav>
        <div class="nav-left">
            <span>Sulawesi Halal Food</span>
        </div>
        <div class="nav-right">
            <a href="/">Home</a>
            <a href="{{ route('TentangKami') }}">Tentang Kami</a>
            <a href="{{ route('Produk') }}">Produk</a>
            <a href="{{ route('Kontak') }}">Kontak</a>
            <a href="{{ route('Masuk') }}">Masuk</a>
        </div>
    </nav>

    <div class="banner">
        <div class="banner-content">
            <h1>Selamat Datang di Sulawesi Halal Food</h1>
            <p>Menyajikan Makanan Halal Khas Sulawesi</p>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div>
                <h3>Kontak Kami</h3>
                <p>Alamat: Jl. Bahteramas, Mokoau, Kec. Kambu, Kota Kendari </p>
                <p>Telepon: (0401) 123456</p>
                <p>Email: info@sulawesihalalfood.com</p>
            </div>
            <div>
                <p>
                    <img src="https://www.bi.go.id/SiteAssets/logo-bi@2x.png" alt="Bank Indonesia">
                    <img src="https://alhazenschool.com/wp-content/uploads/2024/03/logo.png" alt="Alhazen School">
                    <img src="https://isef.co.id/wp-content/uploads/2021/07/logo_isef_dark.png" alt="ISEF">
                    <img src="https://seeklogo.com/images/F/fesyar-logo-47F801E5C7-seeklogo.com.png" alt="FESyar">
                    <img src="https://seeklogo.com/images/E/ekonomi-syariah-logo-C2E3808517-seeklogo.com.png"
                        alt="Ekonomi Syariah">
                </p>
            </div>
        </div>
    </footer>
</body>

</html>