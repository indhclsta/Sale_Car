<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jual Beli Mobil - Home</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar {
            background-color: #000000; /* Warna latar navbar hitam */
            overflow: hidden;
            padding: 10px 20px;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
            display: flex;
            align-items: center; /* Center items vertically */
            justify-content: space-between; /* Distribute space between items */
        }

        .navbar .logo {
            margin-right: auto; /* Push logo to the left */
        }

        .navbar .logo img {
            height: 60px; /* Adjust logo size */
            vertical-align: middle;
        }

        .navbar .nav-links {
            display: flex;
            gap: 20px; /* Space between links */
        }

        .navbar a {
            color: #ffffff; /* Teks link berwarna putih */
            text-align: center;
            padding: 14px 16px; /* Adjust padding for better spacing */
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
        }

        .navbar a:hover {
            background-color: #333333; /* Warna latar belakang saat hover */
            color: #ffffff; /* Teks tetap putih saat hover */
        }

        .hero {
            background-color: #f4f4f4;
            height: 90vh;
            text-align: center;
            padding-top: 50px;
            position: relative;
        }

        .hero h1 {
            font-size: 3em;
            color: #333;
        }

        .hero p {
            font-size: 1.2em;
            color: #666;
        }

        .hero img {
            width: 400px;
            height: auto;
            margin-top: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('image/logow.png') }}" alt="Logo">
        </div>
        <div class="nav-links">
            <a href="{{route('homeC')}}">Home</a>
            <a href="{{route('JenisMobilC')}}">Tipe Mobil</a>
            <a href="{{route('contactC')}}">Contact</a>
            <a href="{{route('menuC')}}">About</a>
        </div>
    </div>

    <!-- Hero Section (Home) -->
    <section id="home" class="hero">
        <h1>Selamat Datang di Website Jual Beli Mobil</h1>
        <p>Temukan mobil impianmu dengan harga terbaik!</p>
        <!-- Gambar Mobil Sedan -->
        <img src="{{asset('image/mobil-removebg-preview.png') }}">
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Jual Beli Mobil. All rights reserved.</p>
    </footer>
</body>
</html>
