<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORLD CAR</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0e0d1;
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

        .container {
            background-color: #d3d3c9;
            padding: 40px;
            margin: 40px auto;
            width: 60%;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: center; /* Align items center vertically */
            min-height: 300px; /* Adjust the height as needed */
        }

        .contact-info {
            width: 40%;
            text-align: center; /* Center text horizontally */
        }

        .contact-info h2 {
            color: #333333;
            margin-bottom: 20px;
        }

        .contact-info p {
            color: #333333;
            font-size: 18px;
            margin-bottom: 30px;
        }

        .contact-form {
            width: 55%;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
        }

        .contact-form label {
            margin-bottom: 5px;
            color: #333333;
            font-size: 16px;
        }

        .contact-form input[type="text"], .contact-form textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #666666;
            border-radius: 4px;
            font-size: 16px;
            background-color: #ffffff;
        }

        .contact-form textarea {
            height: 100px;
            resize: none;
        }

        .contact-form button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 150px;
        }

        .contact-form button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
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

    <div class="container">
        <div class="content">
            <div class="contact-info">
                <h2>KONTAK KAMI:</h2>
                <p>Silahkan Tinggalkan Pesan Anda Pada Kolom Tersedia</p>
            </div>
            <div class="contact-form">
                <form action="{{route('tambahContact')}}" method="post">
                    @csrf
                    <label for="name">Nama Anda:</label>
                    <input type="text" id="name" name="name">

                    <label for="email">Email Anda:</label>
                    <input type="text" id="email" name="email">

                    <label for="pesan">Pesan Anda:</label>
                    <textarea id="message" name="pesan"></textarea>

                    <button type="submit">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
