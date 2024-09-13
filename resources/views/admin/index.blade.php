<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - Elegant Carwash</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        :root {
            --light-color: #fff;
            --hover-color: #ff4500;
            --primary-color: #001f3f;
            --secondary-color: #004080;
            --background-color: #333;
            --text-color: #fff;
        }

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-columns: 250px 1fr;
            grid-template-rows: auto 1fr;
            height: 100vh;
            overflow: hidden;
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: var(--primary-color);
            color: var(--light-color);
            height: 100%;
            padding-top: 1rem;
            position: sticky;
            top: 0;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            grid-row: 2 / span 1;
        }

        .sidebar h2 {
            color: var(--light-color);
            text-align: center;
            margin-bottom: 1rem;
        }

        .sidebar a {
            display: block;
            color: var(--light-color);
            padding: 1rem;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s, color 0.3s;
        }

        .sidebar a:hover {
            background-color: var(--hover-color);
            color: var(--light-color);
        }

        /* Main Content Styles */
        .main-content {
            padding: 1rem;
            background-color: var(--background-color);
            color: var(--light-color);
            overflow-y: auto;
            grid-column: 2 / span 1;
        }

        .main-content h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .main-content .section {
            margin-bottom: 2rem;
        }

        .main-content .card {
            background-color: var(--secondary-color);
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .main-content .card h3 {
            margin-top: 0;
            color: var(--light-color);
        }

        .main-content .card p {
            color: var(--light-color);
        }

        /* Navbar Styles */
        .navbar {
            background-color: #fff;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            grid-column: 1 / span 2;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .navbar .container .auth-buttons {
            display: flex;
            align-items: center;
        }

        .navbar .container .auth-button {
            padding: 0.5rem 1rem;
            margin-left: 1rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .navbar .container .login-button {
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .navbar .container .login-button:hover {
            background-color: var(--primary-color);
            color: var(--light-color);
        }

        .navbar .container .register-button {
            background-color: var(--primary-color);
            color: var(--light-color);
        }

        .navbar .container .register-button:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="#"><img src="{{ asset('image/logoo.png') }}" alt="logo" height="50px" ></a>
            <div class="auth-buttons">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="auth-button dashboard-button">admin site</a>
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

    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="#dashboard">Dashboard</a>
        <a href="acc">acc</a>
      
    </div>

    <div class="main-content">
        <section id="dashboard" class="section">
            <h1>Dashboard</h1>
            <div class="card">
                <h3>Welcome to the Admin Dashboard</h3>
                <p>Here you can manage all aspects of the car wash service.</p>
            </div>
        </section>

    </div>
</body>
</html>
