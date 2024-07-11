<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Sulawesi Halal Food</title>
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

    .contact-section {
        padding: 50px 20px;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .contact-form,
    .contact-info {
        flex: 1;
        min-width: 300px;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .contact-form h2,
    .contact-info h2 {
        margin-bottom: 20px;
    }

    .contact-form label,
    .contact-info p {
        display: block;
        margin-bottom: 10px;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .contact-form button {
        background-color: #ff0000;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .contact-form button:hover {
        background-color: #cc0000;
    }

    .map {
        margin-bottom: 20px;
    }

    .hours,
    .social-media {
        margin-top: 20px;
    }

    .social-media a {
        margin-right: 10px;
        text-decoration: none;
        color: #ff0000;
    }

    .social-media a img {
        width: 30px;
        height: 30px;
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

    <section class="contact-section">
        <div class="container">
            <div class="contact-form">
                <h2>Formulir Kontak</h2>
                <form action="/submit_contact" method="POST">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="subject">Subjek:</label>
                    <input type="text" id="subject" name="subject" required>

                    <label for="message">Pesan:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>

                    <button type="submit">Kirim</button>
                </form>
            </div>
            <div class="contact-info">
                <h2>Informasi Kontak</h2>
                <p>Alamat: Jl. Bahteramas, Mokoau, Kec. Kambu, Kota Kendari</p>
                <p>Nomor Telepon: (0401) 1234567</p>
                <p>Alamat Email: info@sulawesihalalfood.com</p>

                <div class="map">
                    <h2>Lokasi Kami</h2>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.780900049477!2d122.515803!3d-4.003644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da49e8b8b8e3c29%3A0x8d08e4f36c3de4e5!2sKendari%2C%20Kota%20Kendari%2C%20Sulawesi%20Tenggara!5e0!3m2!1sen!2sid!4v1657685762325!5m2!1sen!2sid"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="hours">
                    <h2>Jam Operasional</h2>
                    <p>Senin - Jumat: 09.00 - 17.00</p>
                    <p>Sabtu: 09.00 - 14.00</p>
                    <p>Minggu: Tutup</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>