<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 20px;
        }
        .car-item {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 10px;
            width: calc(33.333% - 20px); /* 3 items per row with some spacing */
            text-align: center;
            overflow: hidden;
            height:450px;

        }
        .car-item img {
            width: 100%;
            height: auto;
            border-bottom: 2px solid #ddd;
        }
        .car-item h2 {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }
        .car-item p {
            color: #666;
            font-size: 14px;
            padding: 0 10px 10px;
        }
        @media (max-width: 768px) {
            .car-item {
                width: calc(50% - 20px); /* 2 items per row on medium screens */
            }
        }
        @media (max-width: 480px) {
            .car-item {
                width: 100%; /* 1 item per row on small screens */
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('image/logow.png') }}" alt="Logo">
        </div>
        <div class="nav-links">
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('JenisMobil')}}">Tipe Mobil</a>
            <a href="{{route('contact')}}">Contact</a>
            <a href="{{route('menu')}}">About</a>
        </div>
    </div>


    <div style="width: 100%; height: 50px; cursor: pointer;">
        <a style="width:100%;height:50px;" href="{{route('create')}}"><button style="width:100%;height:50px; font-size:18px;" >Create</button></a>
    </div>
    <div class="container">
        @foreach($mobil as $item)
        <div class="car-item">
        <img src="{{ asset('image/'.$item->img)}}">

            <h2>{{$item -> nama}}</h2>
            <p> {{$item -> deskripsi}}</p>
            <a onclick="confirm('Apakah yakin ingin hapus ?');" href="{{route('delete', $item->id)}}"><button>Delete</button></a>
        </div>
        @endforeach
    </div>
        
</html>

