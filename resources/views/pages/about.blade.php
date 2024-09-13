<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Import Google Fonts untuk font modern */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        :root {
            --light-color: #fff; /* Putih untuk teks */
            --hover-color: #ff4500; /* Warna untuk hover */
            --underline-color: #ff4500; /* Warna underline untuk hover */
            --primary-color: #001f3f; /* Biru Dongker */
            --secondary-color: #004080; /* Biru Lebih Terang */
            --background-color: #001f3f; /* Background gelap untuk body */
            --text-color: #fff; /* Warna Teks Default Putih */
        }

        body {
            font-family: 'Roboto', sans-serif; /* Terapkan font modern ke seluruh body */
            background-color: var(--background-color); /* Background Gelap */
            color: var(--text-color); /* Warna Teks Putih */
        }

        /* Navbar Styles */
        .navbar {
            background-color: #fff; /* Putih untuk background */
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan untuk efek modern */
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem; /* Menambahkan padding untuk memberi jarak pada logo */
        }

        .navbar .nav-center {
            display: flex;
            justify-content: center;
            flex: 1;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #000; /* Warna hitam untuk teks logo */
            text-decoration: none;
            margin-left: 1rem; /* Menambahkan jarak pada logo */
        }

        .navbar-nav {
            display: flex;
            list-style: none;
        }

        .nav-item {
            margin-left: 2rem;
        }

        .nav-link {
            color: #000; /* Warna hitam untuk teks */
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem; /* Ukuran font sedikit lebih besar untuk tampilan modern */
            position: relative;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            display: block;
            margin-top: 5px;
            right: 0;
            background: var(--underline-color);
            transition: width 0.3s ease, right 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
            right: 0;
        }

        .nav-link:hover {
            color: var(--hover-color); /* Warna menarik untuk hover */
            transform: scale(1.1); /* Efek transformasi pada hover */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); /* Efek shadow pada hover */
        }

        .spacer {
            flex: 1;
        }

        .about-us {
            text-align: center;
            padding: 60px 20px;
            background-color: #1c1f4a; /* Dongker color */
            font-family: 'Poppins', sans-serif;
            color: white;
        }

        .why-choose-us {
            margin-bottom: 50px;
            color: white;
        }

        .why-choose-us h3 {
            font-size: 2.5em;
            margin-bottom: 20px;
            position: relative;
        }

        .why-choose-us h3::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background-color: #ff4500;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .about-section {
            display: flex;
            align-items: center;
            margin-bottom: 50px;
            position: relative;
        }

        .about-section.reverse {
            flex-direction: row-reverse;
        }

        .about-image {
            flex: 1;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            padding: 5px; /* Menambahkan padding untuk jarak */
            background-color: #fff; /* Warna latar belakang putih */
        }

        .about-image img {
            width: 100%;
            height: auto;
            transition: transform 0.5s ease;
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        .about-text {
            flex: 1;
            padding: 30px;
            text-align: left;
            color: white;
            margin-left: -20px;
            position: relative;
            z-index: 1;
        }

        .about-section.reverse .about-text {
            margin-left: 0;
            margin-right: -20px;
        }

        .about-text h3 {
            font-size: 1.8em;
            margin-bottom: 15px;
            color: #ff4500;
        }

        .about-text p {
            font-size: 1.1em;
            line-height: 1.6;
        }

        .hover-sections {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px; /* Mengatur jarak antar card */
            margin-top: 50px;
        }

        .hover-section {
            position: relative;
            text-align: center;
            border-radius: 0;
            overflow: hidden; /* Menyembunyikan bagian gambar yang melewati batas */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .hover-image {
            position: relative;
            overflow: hidden;
            width: 100%;
            padding-top: 75%; /* Menjaga proporsi gambar agar persegi */
            background-color: #ffffff;
            border-radius: 10px;
        }

        .hover-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .hover-image:hover img {
            transform: scale(1.1);
        }

        .hover-text {
            position: absolute;
            bottom: -100%;
            left: 0;
            width: 100%;
            height: 100%;
            color: white;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            box-sizing: border-box;
            transition: bottom 0.5s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hover-image:hover .hover-text {
            bottom: 0;
        }

        .hover-text h3 {
            margin-bottom: 5px;
            font-size: 1.5em;
            color: #ff4500;
        }

        .hover-text p {
            margin: 0;
            font-size: 0.9em;
            line-height: 1.4;
        }
    </style>
</head>
<body class="antialiased">
    <nav class="navbar">
        <div class="container">
            <a href="home"><img src="{{ asset('image/logoo.png') }}" alt="logo" height="50px"></a>
            <div class="spacer"></div>
            <ul class="navbar-nav nav-center">
                <li class="nav-item"><a href="services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="about" class="nav-link">About us</a></li>
                <li class="nav-item"><a href="review" class="nav-link">See review</a></li>
            </ul>
            <div class="spacer"></div>
        </div>
    </nav>
    
    <br><br><br>

    <section class="about-us">
    
        <div class="why-choose-us">
            <h3>Why Choose Us</h3>
            <p>Kami menawarkan layanan cuci mobil yang cepat, bersih, dan ramah lingkungan. Kami menggunakan teknologi terkini dan produk pembersih terbaik untuk memastikan kendaraan Anda selalu dalam kondisi prima.</p>
        </div>

     

        <div class="about-section">
            </div>
            <div class="about-text">
                <h3>Our Commitment</h3>
                <p>Kami berkomitmen untuk memberikan layanan terbaik dengan tim profesional yang terlatih. Kepuasan Anda adalah prioritas kami. Dengan pengalaman bertahun-tahun di industri ini, kami memahami betapa pentingnya setiap detail dalam perawatan kendaraan Anda. Kami tidak hanya sekadar mencuci mobil; kami memastikan setiap langkah dilakukan dengan cermat dan penuh perhatian.

Tim kami terdiri dari teknisi yang ahli dalam menggunakan teknologi terbaru dan produk pembersih yang ramah lingkungan. Kami mengikuti prosedur ketat untuk memastikan bahwa setiap kendaraan yang kami tangani menerima perawatan yang optimal. Kami memprioritaskan keamanan kendaraan Anda dan memastikan bahwa setiap produk yang kami gunakan tidak hanya efektif tetapi juga aman..</p>
            </div>
        </div>

        <br>

        <div class="about-section reverse">
            <div class="about-text">
                <h3>Our Vision</h3>
                <p>Visi kami adalah menjadi penyedia layanan cuci mobil terdepan di wilayah ini, dengan fokus pada keberlanjutan dan inovasi. Kami bertekad untuk memimpin industri dengan menghadirkan solusi cuci mobil yang tidak hanya efisien dan berkualitas tinggi, tetapi juga ramah lingkungan.

Kami percaya bahwa masa depan layanan cuci mobil harus sejalan dengan prinsip keberlanjutan. Oleh karena itu, kami terus menginvestasikan waktu dan sumber daya dalam teknologi hijau dan metode yang mengurangi dampak lingkungan. Dari penggunaan produk pembersih yang biodegradable hingga sistem daur ulang air canggih, setiap aspek operasional kami dirancang untuk mendukung prinsip keberlanjutan.

Inovasi adalah inti dari misi kami. Kami secara aktif mencari cara untuk meningkatkan pengalaman pelanggan melalui teknologi terbaru dan proses yang lebih efisien. Misalnya, kami menggunakan peralatan cuci mobil mutakhir yang tidak hanya mempercepat proses pembersihan tetapi juga memastikan hasil yang konsisten dan memuaskan. Kami juga mengadopsi teknologi digital untuk memudahkan pemesanan layanan, memberikan pembaruan status secara real-time, dan menawarkan berbagai opsi layanan yang dapat disesuaikan dengan preferensi pelanggan..</p>
            </div>
         
            </div>
        </div>

        <br><br><br>

        <div class="hover-sections">
            <div class="hover-section">
                <div class="hover-image">
                    <img src="{{ asset('image/b.jpg') }}" alt="Innovative Approach">
                    <div class="hover-text">
                        <h3>ɪɴɴᴏᴠᴀᴛɪᴠᴇ ᴀᴘᴘʀᴏᴀᴄʜ</h3>
                        <p>Menawarkan solusi cuci mobil yang inovatif dan efisien.</p>
                    </div>
                </div>
            </div>
            <div class="hover-section">
                <div class="hover-image">
                    <img src="{{ asset('image/a.jpg') }}" alt="Customer Satisfaction">
                    <div class="hover-text">
                        <h3>ᴄᴜꜱᴛᴏᴍᴇʀ ꜱᴀᴛɪꜱꜰᴀᴄᴛɪᴏɴ</h3>
                        <p>Fokus kami adalah memastikan kepuasan pelanggan dalam setiap layanan.</p>
                    </div>
                </div>
            </div>
            <div class="hover-section">
                <div class="hover-image">
                    <img src="{{ asset('image/c.jpg') }}" alt="Eco-Friendly Practices">
                    <div class="hover-text">
                        <h3>ᴇᴄᴏ-ꜰʀɪᴇɴᴅʟʏ ᴘʀᴀᴄᴛɪᴄᴇꜱ</h3>
                        <p>Kami menggunakan produk dan teknologi yang ramah lingkungan.</p>
                    </div>
                </div>
            </div>
            <div class="hover-section">
                <div class="hover-image">
                    <img src="{{ asset('image/d.jpg') }}" alt="Efficient Service">
                    <div class="hover-text">
                        <h3>ᴇꜰꜰɪᴄɪᴇɴᴛ ꜱᴇʀᴠɪᴄᴇ</h3>
                        <p>Memberikan layanan yang cepat dan efisien tanpa mengurangi kualitas.</p>
                    </div>
                </div>
            </div>
            <div class="hover-section">
                <div class="hover-image">
                    <img src="{{ asset('image/e.jpg') }}" alt="Advanced Technology">
                    <div class="hover-text">
                        <h3>ᴀᴅᴠᴀɴᴄᴇᴅ ᴛᴇᴄʜɴᴏʟᴏɢʏ</h3>
                        <p>Memanfaatkan teknologi terbaru untuk hasil terbaik.</p>
                    </div>
                </div>
            </div>
            <div class="hover-section">
                <div class="hover-image">
                    <img src="{{ asset('image/f.jpg') }}" alt="Professional Team">
                    <div class="hover-text">
                        <h3>ᴘʀᴏꜰᴇꜱꜱɪᴏɴᴀʟ ᴛᴇᴀᴍ</h3>
                        <p>Tim kami terdiri dari tenaga ahli berpengalaman.</p>
                    </div>
                </div>
            </div>
            <div class="hover-section">
                <div class="hover-image">
                    <img src="{{ asset('image/g.jpg') }}" alt="Reliable Service">
                    <div class="hover-text">
                        <h3>ʀᴇʟɪᴀʙʟᴇ ꜱᴇʀᴠɪᴄᴇ</h3>
                        <p>Memberikan layanan yang dapat diandalkan setiap saat.</p>
                    </div>
                </div>
            </div>
            <div class="hover-section">
                <div class="hover-image">
                    <img src="{{ asset('image/h.jpg') }}" alt="Affordable Pricing">
                    <div class="hover-text">
                        <h3>ᴀꜰꜰᴏʀᴅᴀʙʟᴇ ᴘʀɪᴄɪɴɢ</h3>
                        <p>Harga bersaing untuk layanan berkualitas tinggi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
