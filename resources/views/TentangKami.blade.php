<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Sulawesi Halal Food</title>
    <style>
    /* CSS */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
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

    .about-section {
        padding: 50px 20px;
        background-color: #f8f9fa;
        text-align: center;
    }

    .container {
        max-width: 1200px;
        /* Lebar container diperbesar */
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .about-left {
        width: 60%;
        text-align: left;
    }

    .about-right {
        width: 40%;
        /* Lebar kanan diperbesar */
        text-align: left;
    }

    .about-section h2 {
        margin-bottom: 20px;
        font-size: 2em;
    }

    .about-section p {
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .about-section ul {
        list-style-type: none;
        padding-left: 0;
    }

    .about-section ul li {
        margin-bottom: 10px;
    }

    .about-right img {
        max-width: 100%;
        /* Gambar menyesuaikan lebar container */
        height: auto;
        display: block;
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

    <section class="about-section">
        <div class="container">
            <div class="about-left">
                <h2>Sejarah dan Latar Belakang</h2>
                <p>Sejak tahun 1998, Sulawesi Halal Food didirikan dengan tujuan utama untuk menyediakan makanan halal
                    berkualitas tinggi kepada masyarakat Sulawesi dan sekitarnya. Kami berkomitmen untuk memastikan
                    bahwa setiap produk yang kami tawarkan tidak hanya halal tetapi juga aman dan bermutu. Dengan
                    berbagai pilihan makanan yang kami sediakan, kami berusaha memenuhi kebutuhan konsumen yang peduli
                    akan kehalalan dan kualitas produk makanan.</p>

                <h2>Nilai-nilai</h2>
                <ul>
                    <li>Halal</li>
                    <li>Kualitas</li>
                    <li>Pelayanan Terbaik</li>
                </ul>
            </div>
            <div class="about-right">
                <img src="https://arsitagx-master.s3.ap-southeast-1.amazonaws.com/img_medium/2810/4225/29432/photo-view-1-rumah-makan-ikan-goreng-cianjur-desain-arsitek-oleh-liska-yulianti.jpeg"
                    alt="About Image">
            </div>
        </div>
    </section>
</body>

</html>