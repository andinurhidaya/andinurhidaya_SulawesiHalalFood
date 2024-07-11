<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Sulawesi Halal Food</title>
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

    .products-section {
        padding: 50px 20px;
        background-color: #f8f9fa;
        text-align: center;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .product-category {
        margin-bottom: 50px;
    }

    .products {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .product {
        width: 300px;
        height: 450px;
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .product img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;
    }

    .product h3 {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .price {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .buy-btn {
        background-color: #ff0000;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 10px;
        /* Mengurangi margin-top untuk menaikkan tombol beli */
    }

    .buy-btn:hover {
        background-color: #cc0000;
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

    <section class="products-section">
        <div class="container">
            <div class="product-category">
                <h2>Kategori Makanan Khas Sulawesi</h2>
                <div class="products">
                    <div class="product">
                        <img src="https://disbudpar.sulselprov.go.id/uploads/wisata/R.png" alt="Product 1">
                        <h3>Coto Makassar</h3>
                        <p class="price">Rp 25.000,00</p>
                        <a href="{{ route('bayar', ['productId' => 1]) }}">
                            <button class="buy-btn">Beli</button>
                        </a>
                    </div>
                    <div class="product">
                        <img src="https://kids.kiddle.co/images/thumb/0/01/Papeda%2C_Kuah_Kuning%2C_Ikan_Tude_Bakar_2.jpg/250px-Papeda%2C_Kuah_Kuning%2C_Ikan_Tude_Bakar_2.jpg"
                            alt="Product 2">
                        <h3>Sinonggi</h3>
                        <p class="price">Rp 25.000,00</p>
                        <a href="{{ route('bayar', ['productId' => 2]) }}">
                            <button class="buy-btn">Beli</button>
                        </a>
                    </div>
                    <div class="product">
                        <img src="https://th.bing.com/th/id/OIP.SQ2snT8cMoGq9kYLdFm4NgAAAA?rs=1&pid=ImgDetMain"
                            alt="Product 3">
                        <h3>Bubur Manado</h3>
                        <p class="price">Rp 20.000,00</p>
                        <a href="{{ route('bayar', ['productId' => 3]) }}">
                            <button class="buy-btn">Beli</button>
                        </a>
                    </div>
                    <div class="product">
                        <img src="https://4.bp.blogspot.com/-uKsQRdAancE/UzRiBXAbDtI/AAAAAAAAAAg/YIklrcPAqiQ/s1600/kk.jpg"
                            alt="Product 4">
                        <h3>Kasuami</h3>
                        <p class="price">Rp 15.000,00</p>
                        <a href="{{ route('bayar', ['productId' => 4]) }}">
                            <button class="buy-btn">Beli</button>
                        </a>
                    </div>
                    <div class="product">
                        <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/05/11/pallu-basa-2503638669.png"
                            alt="Product 5">
                        <h3>Pallu Basa</h3>
                        <p class="price">Rp 25.000,00</p>
                        <a href="{{ route('bayar', ['productId' => 5]) }}">
                            <button class="buy-btn">Beli</button>
                        </a>
                    </div>
                    <div class="product">
                        <img src="https://i1.wp.com/resepkoki.id/wp-content/uploads/2016/03/Resep-Pisang-Ijo.jpg?fit=1655%2C1573&ssl=1"
                            alt="Product 6">
                        <h3>Pisang Ijo</h3>
                        <p class="price">Rp 15.000,00</p>
                        <a href="{{ route('bayar', ['productId' => 6]) }}">
                            <button class="buy-btn">Beli</button>
                        </a>
                    </div>
                    <div class="product">
                        <img src="https://2.bp.blogspot.com/-psAMbcI_Yek/XKrCOOhRuOI/AAAAAAAAFSw/SPjQOQPkw2QXHtpEbnMLcyUAcN4mICWHgCK4BGAYYCw/s1600/resep-mie-titi.jpg"
                            alt="Product 7">
                        <h3>Mie Titi</h3>
                        <p class="price">Rp 20.000,00</p>
                        <a href="{{ route('bayar', ['productId' => 7]) }}">
                            <button class="buy-btn">Beli</button>
                        </a>
                    </div>
                    <div class="product">
                        <img src="https://s2.bukalapak.com/uploads/content_attachment/72c72bbd15e8d76216db64c5/original/Makanan-Khas-Sulawesi-Barat5.jpg"
                            alt="Product 8">
                        <h3>Tumpi-tumpi</h3>
                        <p class="price">Rp 15.000,00</p>
                        <a href="{{ route('bayar', ['productId' => 8]) }}">
                            <button class="buy-btn">Beli</button>
                        </a>
                    </div>
                    <div class="product">
                        <img src="https://dimensiindonesia.com/wp-content/uploads/2022/04/kapurung.jpg" alt="Product 9">
                        <h3>Kapurrung</h3>
                        <p class="price">Rp 20.000,00</p>
                        <a href="{{ route('bayar', ['productId' => 9]) }}">
                            <button class="buy-btn">Beli</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>