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


   /* General container styling */
.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    font-family: Arial, sans-serif;
}

/* Heading styling */
h1 {
    font-size: 2em;
    margin-bottom: 10px;
    color: #f1f1f1; /* Light color for heading */
}

h2 {
    font-size: 1.5em;
    margin-bottom: 20px;
    color: #e0e0e0; /* Slightly lighter color for subheading */
}

/* Table styling */
.user-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

/* Table header styling */
.user-table thead {
    background-color: #343a40; /* Dark header background */
    color: #f8f9fa; /* Light text color for header */
}

.user-table th {
    padding: 10px;
    text-align: left;
    border-bottom: 2px solid #495057; /* Slightly lighter border */
}

/* Table body styling */
.user-table tbody tr {
    border-bottom: 1px solid #495057; /* Darker border color */
    transition: background-color 0.3s, transform 0.3s;
}

.user-table td {
    padding: 10px;
    color: #e0e0e0; /* Light text color for cells */
}

/* Background color for rows */
.user-table tbody tr {
    background-color: #212529; /* Dark row background */
}

.user-table tbody tr:nth-child(even) {
    background-color: #2c3034; /* Slightly different dark shade for even rows */
}

/* Hover effect */
.user-table tbody tr:hover {
    background-color: #495057; /* Darker shade for hover effect */
    transform: scale(1.02); /* Slightly scales up the row */
}

/* Status column styling */
.user-table td:nth-child(6) {
    font-weight: bold;
}

.user-table td:nth-child(6).status-done {
    color: #28a745; /* Green color for 'Done' */
}

.user-table td:nth-child(6).status-process {
    color: #dc3545; /* Red color for 'Process' */
}

    </style>
</head>
<body class="antialiased">
    <nav class="navbar">
        <div class="container">
            <a href="home"><img src="{{ asset('image/logoo.png') }}" alt="logo" height="50px"></a>
            <div class="spacer"></div>
            <ul class="navbar-nav nav-center">
            <li class="nav-item"><a href="acc" class="nav-link">acc</a></li>
            
            </ul>
            <div class="spacer"></div>
        </div>
    </nav>
    <br><br>
    <br><br>
    <div class="container">
        <h1>Purchase</h1>
        <h2> List</h2>
        <h6></h6>
        <table class="user-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>phone number</th>
                    <th>car name</th>
                    <th>time</th>
                    <th>message</th>
                    <th>status</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $posts as $post )
                <tr>
                    <td>{{$post->name}}</td>
                    <td>{{$post->no_hp}}</td>
                    <td>{{$post->car_type}}</td>
                    <td>{{$post->time}}</td>
                    <td>{{$post->message}}</td>
                    <td>
                        @if ($post->status)
                            Done
                        @else
                            Process
                        @endif
                    </td>
                    <td>
                      <a href="{{ url("/acc/{$post->id}/done") }}" class="btn btn-success">Done</a>
                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </main>
</body>
</html>
