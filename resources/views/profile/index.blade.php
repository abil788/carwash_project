<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Elegant Carwash</title>
        <style>
            /* Import Google Fonts untuk font modern */
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

:root {
    --light-color: #fff; /* Putih untuk teks */
    --hover-color: #ff4500; /* Warna untuk hover */
    --underline-color: #ff4500; /* Warna underline untuk hover */
    --primary-color: #001f3f; /* Biru Dongker */
    --secondary-color: #004080; /* Biru Lebih Terang */
    --background-color: #333; /* Background gelap untuk body */
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

/* Hero Section Styles */
.hero {
    padding: 8rem 0 4rem;
    text-align: center;
    background: var(--primary-color); /* Background Biru Dongker */
    color: var(--light-color); /* Warna Teks Putih */
}

.hero h1 {
    font-size: 3.5rem;
    margin-bottom: 1rem;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Shadow pada Teks */
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Shadow pada Teks */
}

.hero .btn {
    padding: 1rem 2rem;
    background-color: var(--secondary-color); /* Background Tombol Biru Lebih Terang */
    color: var(--light-color); /* Warna Teks Putih */
    text-decoration: none;
    border-radius: 50px;
    font-weight: bold;
    transition: background-color 0.3s ease, color 0.3s ease; /* Transisi untuk Efek Hover */
}

.hero .btn:hover {
    background-color: var(--hover-color); /* Background Tombol Saat Hover Oranye */
    color: white; /* Warna Teks Saat Hover Putih */
}

/* Services Section Styles */
.services {
    padding: 4rem 0;
    background-color: var(--primary-color); /* Background Biru Dongker */
}

.services h2 {
    text-align: center;
    margin-bottom: 3rem;
    color: var(--light-color); /* Warna Teks Putih */
    font-size: 2.5rem;
    position: relative;
}

.services h2::after {
    content: '';
    width: 100px;
    height: 3px;
    background: var(--hover-color); /* Underline Oranye */
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.service-card {
    background-color: var(--secondary-color); /* Background Kartu Biru Lebih Terang */
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Shadow pada Kartu */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transisi untuk Efek Hover */
}

.service-card:hover {
    transform: translateY(-5px); /* Efek Hover Kartu */
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15); /* Shadow Saat Hover */
}

.service-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.service-content {
    padding: 1.5rem;
}

.service-content h3 {
    margin-bottom: 0.5rem;
    color: var(--hover-color); /* Warna Teks Oranye */
    font-size: 1.5rem;
}

.service-content p {
    font-size: 1rem;
    margin-bottom: 1rem;
    color: var(--light-color); /* Warna Teks Putih */
}

.service-content .btn {
    display: inline-block;
    padding: 0.8rem 1.5rem;
    background-color: var(--hover-color); /* Background Tombol Oranye */
    color: white; /* Warna Teks Putih */
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease; /* Transisi untuk Efek Hover */
}

.service-content .btn:hover {
    background-color: var(--secondary-color); /* Background Tombol Saat Hover Biru Lebih Terang */
}

/* Existing button styles */
.sm\:fixed.sm\:top-0.sm\:right-0 a {
    color: var(--light-color);
    margin-left: 15px;
    text-decoration: none;
    font-weight: bold;
}

.sm\:fixed.sm\:top-0.sm\:right-0 a:hover {
    text-decoration: underline;
}

.auth-buttons {
    display: flex;
    align-items: center;
}

.auth-button {
    padding: 0.5rem 1rem;
    margin-left: 1rem;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
}

.login-button {
    color: var(--primary-color);
    border: 2px solid var(--primary-color);
}

.login-button:hover {
    background-color: var(--primary-color);
    color: var(--light-color);
}

.register-button {
    background-color: var(--primary-color);
    color: var(--light-color);
}

.register-button:hover {
    background-color: var(--secondary-color);
    border-color: var(--secondary-color);
}

/* Menyembunyikan tombol lama */
.sm\:fixed.sm\:top-0.sm\:right-0 {
    display: none;
}

        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar">
            <div class="container">
            <a href="#"><img src="{{ asset('image/logoo.png') }}" alt="logo" height="50px" ></a>
                <ul class="navbar-nav">
                
                    <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="about" class="nav-link">About us</a></li>
                    <li class="nav-item"><a href="review" class="nav-link">See review</a></li>
                </ul>
                <div class="auth-buttons">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="auth-button dashboard-button">profile site</a>
                        @else
                            <a href="{{ route('login') }}" class="auth-button login-button">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="auth-button register-button">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="container">
                <section class="hero">
                    <h1>ᴇxᴘᴇʀɪᴇɴᴄᴇ ᴛʜᴇ ᴜʟᴛɪᴍᴀᴛᴇ ᴄᴀʀ ᴡᴀꜱʜ</h1>
                    <p>ᴡᴇ ʙʀɪɴɢ ꜱʜɪɴᴇ ᴀɴᴅ ʙʀɪʟʟɪᴀɴᴄᴇ ᴛᴏ ʏᴏᴜʀ ᴠᴇʜɪᴄʟᴇ</p>
                    <a href="services" class="btn">ʙᴏᴏᴋ ɴᴏᴡ</a>
                </section>
            </div>
        </div>

        <section class="services">
            <div class="container">
                <h2>ᴏᴜʀ ꜱᴇʀᴠɪᴄᴇꜱ</h2>
                <div class="services-grid">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1520340356584-f9917d1eea6f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Basic Wash">
                        <div class="service-content">
                            <h3>Basic Wash</h3>
                            <p>Quick and effective exterior cleaning for your car.</p>
                            
                        </div>
                    </div>
                   
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1601362840469-51e4d8d58785?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Detailing">
                        <div class="service-content">
                            <h3>Detailing</h3>
                            <p>Comprehensive care to make your car look brand new.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>

    // Ambil referensi ke tombol-tombol
    const loginButton = document.querySelector('.login-button');
    const registerButton = document.querySelector('.register-button');
    const dashboardButton = document.querySelector('.dashboard-button');
    const navLinks = document.querySelectorAll('.nav-link');

    // Tambahkan event listener untuk tombol login
    loginButton.addEventListener('click', () => {
        window.location.href = '{{ route("login") }}';
    });

    // Tambahkan event listener untuk tombol register
    registerButton.addEventListener('click', () => {
        window.location.href = '{{ route("register") }}';
    });

    // Tambahkan event listener untuk tombol dashboard
    dashboardButton.addEventListener('click', () => {
        window.location.href = '{{ url("/dashboard") }}';
    });

    // Tambahkan event listener untuk tombol "Book Now"
    const bookNowButton = document.querySelector('.btn');
    bookNowButton.addEventListener('click', () => {
        // Tambahkan logika untuk mengarahkan ke halaman "Book Now"
        // Misalnya:
        window.location.href = '{{ route("book-now") }}';
    });

    // Tambahkan event listener untuk link-link navigasi
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault(); // Mencegah reload halaman
            const targetSection = event.target.getAttribute('href');
            // Tambahkan logika untuk mengarahkan ke section yang sesuai
            // Misalnya:
            scrollToSection(targetSection);
        });
    });

    navLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault(); // Mencegah reload halaman
        const targetRoute = event.target.getAttribute('href');
        switch (targetRoute) {
            case '/':
                window.location.href = '/';
                break;
            case '/services':
                window.location.href = '/services';
                break;
            case '/about':
                window.location.href = '/about';
                break;
            case '/contact':
                window.location.href = '/contact';
                break;
            default:
                break;
        }
    });
});
    // Fungsi untuk menangani scrolling ke section yang dipilih
    function scrollToSection(sectionSelector) {
        const targetSection = document.querySelector(sectionSelector);
        if (targetSection) {
            targetSection.scrollIntoView({ behavior: 'smooth' });
        }
    }
        </script>
    </body>
</html>