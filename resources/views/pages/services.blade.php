<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
        /* Import Google Fonts untuk font modern */
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

        /* Contact Form Styles */
        .contact-container {
            max-width: 600px;
            margin: 6rem auto;
            padding: 2rem;
            background-color: var(--container-background);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
        }

        .form-group label {
            margin-bottom: 0.5rem;
            color: var(--light-color);
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--input-border);
            border-radius: 5px;
            background-color: var(--input-background);
            color: var(--primary-color);
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: var(--primary-color);
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: var(--hover-color);
            box-shadow: 0 0 5px var(--hover-color);
            outline: none;
        }

        .contact-form button {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            background-color: var(--hover-color);
            color: var(--light-color);
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .contact-form button:hover {
            background-color: var(--underline-color);
            transform: scale(1.05);
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

    <div class="contact-container">
        <form method="POST" action="{{ url('/home') }}" class="contact-form">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name *" required>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="contact">Your Contact Number</label>
                    <input type="text" id="contact" name="no_hp" placeholder="Your Contact Number *" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="car">Your Car Name</label>
                <input type="text" id="car" name="car_type" placeholder="Your Car Name *" required>
            </div>
            <div class="form-group">
                <label for="book_time">Booking Time</label>
                <select id="book_time" name="time" required>
                    <option value="">Select a time slot</option>
                    <script>
                        const selectElement = document.querySelector('#book_time');
                        for (let hour = 9; hour <= 21; hour++) {
                            for (let minutes = 0; minutes < 60; minutes += 15) {
                                let time = `${hour}:${minutes < 10 ? '0' + minutes : minutes}`;
                                let ampm = hour < 12 ? 'AM' : 'PM';
                                let displayHour = hour % 12 || 12;
                                selectElement.innerHTML += `<option value="${time}">${displayHour}:${minutes < 10 ? '0' + minutes : minutes} ${ampm}</option>`;
                            }
                        }
                    </script>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Your Message *" required></textarea>
            </div>
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>
