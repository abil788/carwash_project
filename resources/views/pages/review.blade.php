<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reviews</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
        :root {
            --light-color: #fff; /* Putih untuk teks */
            --hover-color: #ff4500; /* Warna untuk hover */
            --underline-color: #ff4500; /* Warna underline untuk hover */
            --primary-color: #001f3f; /* Biru Dongker */
            --secondary-color: #004080; /* Biru Lebih Terang */
            --background-color: #001f3f; /* Background biru dongker untuk body */
            --container-background: #333; /* Background hitam untuk container */
            --text-color: #fff; /* Warna Teks Default Putih */
            --input-background: #fff; /* Warna background untuk input */
            --input-border: #666; /* Warna border untuk input */
        }

        body {
            font-family: 'Roboto', sans-serif; /* Terapkan font modern ke seluruh body */
            background-color: var(--background-color); /* Background biru dongker */
            color: var(--text-color); /* Warna Teks Putih */
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
            max-width: 1200px; /* Membatasi lebar container */
            margin: 0 auto; /* Mengatur container agar berada di tengah */
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
        }

        .navbar-nav {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
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

        .container {
            margin-top: 80px; /* untuk menghindari overlap dengan navbar tetap */
            padding: 2rem;
            max-width: 1200px; /* Lebar maksimum container */
            margin: 0 auto; /* Tengah-tengah pada halaman */
        }

        h1 {
            margin-bottom: 1.5rem;
            text-align: center;
            color: var(--secondary-color);
        }

        .review-table {
            width: 100%;
            border-collapse: collapse;
        }

        .review-table thead {
            background-color: var(--secondary-color);
            color: var(--light-color);
        }

        .review-table th, .review-table td {
            padding: 1rem;
            border: 1px solid #444;
            text-align: left;
        }

        .review-table tr:nth-child(even) {
            background-color: #444;
        }

        .review-table tr:hover {
            background-color: var(--hover-color);
            color: var(--light-color);
        }

        .review-table th {
            text-transform: uppercase;
            letter-spacing: 0.1rem;
            font-weight: 700;
        }

        .review-table td {
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .rating {
            display: flex;
            align-items: center;
        }

        .rating img {
            width: 20px;
            height: 20px;
            margin-right: 2px;
        }

        .review-summary {
            margin-top: 2rem;
            padding: 1rem;
            background-color: var(--primary-color);
            border-radius: 8px;
        }

        .review-summary h2 {
            margin-top: 0;
            text-align: center;
            color: var(--light-color);
        }

        .review-summary p {
            font-size: 1rem;
            color: var(--light-color);
            text-align: center;
        }
    </style>
</head>
<body class="antialiased">
    <nav class="navbar">
        <div class="container">
            <a href="home" class="navbar-brand"><img src="{{ asset('image/logoo.png') }}" alt="logo" height="50px"></a>
            <div class="spacer"></div>
            <ul class="navbar-nav nav-center">
                <li class="nav-item"><a href="services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="about" class="nav-link">About us</a></li>
                <li class="nav-item"><a href="review" class="nav-link">See review</a></li>
            </ul>
            <div class="spacer"></div>
        </div>
    </nav>
    <div class="container">
        <h1>Customer Reviews</h1>
        <table class="review-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Rating</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh ulasan palsu -->
                <tr>
                    <td>1</td>
                    <td>repan putra</td>
                    <td class="rating">
                        <!-- Rating: 5 stars -->
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                    </td>
                    <td>paten kinclog kali.</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>almas tripandi</td>
                    <td class="rating">
                        <!-- Rating: 4 stars -->
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                    </td>
                    <td>pegawai nya ramah brutal</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>iwan mullet</td>
                    <td class="rating">
                        <!-- Rating: 5 stars -->
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                        <img src="{{ asset('image/bintang.png') }}" alt="star">
                    </td>
                    <td>Absolutely cun kali.</td>
                </tr>
            </tbody>
        </table>

        <div class="review-summary">
            <h2>Summary</h2>
            <p>We value your feedback and are always striving to improve our services. Thank you for sharing your experiences with us!</p>
        </div>
    </div>
</body>
</html>
