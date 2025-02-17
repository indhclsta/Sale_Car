<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jual Beli Mobil - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

        * {
        font-family: Nunito, sans-serif;
        }

        .responsive-cell-block {
        min-height: 75px;
        }

        .text-blk {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        line-height: 25px;
        }

        .responsive-container-block {
        min-height: 75px;
        height: fit-content;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        margin-top: 0px;
        margin-right: auto;
        margin-bottom: 0px;
        margin-left: auto;
        justify-content: space-evenly;
        }

        .team-head-text {
        font-size: 48px;
        font-weight: 900;
        text-align: center;
        }

        .team-head-text {
        line-height: 50px;
        width: 100%;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 50px;
        margin-left: 0px;
        }

        .container {
        max-width: 1380px;
        margin-top: 60px;
        margin-right: auto;
        margin-bottom: 60px;
        margin-left: auto;
        padding-top: 0px;
        padding-right: 30px;
        padding-bottom: 0px;
        padding-left: 30px;
        }

        .card {
        text-align: center;
        box-shadow: rgba(0, 0, 0, 0.05) 0px 4px 20px 7px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 30px;
        padding-right: 25px;
        padding-bottom: 30px;
        padding-left: 25px;
        }

        .card-container {
        width: 280px;
        margin-top: 0px;
        margin-right: 10px;
        margin-bottom: 25px;
        margin-left: 10px;
        }

        .name {
        margin-top: 20px;
        margin-right: 0px;
        margin-bottom: 5px;
        margin-left: 0px;
        font-size: 18px;
        font-weight: 800;
        }

        .position {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 10px;
        margin-left: 0px;
        }

        .feature-text {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 20px;
        margin-left: 0px;
        color: rgb(122, 122, 122);
        line-height: 30px;
        }

        .social-icons {
        width: 70px;
        display: flex;
        justify-content: space-between;
        }

        .team-image-wrapper {
        clip-path: circle(50% at 50% 50%);
        width: 130px;
        height: 130px;
        }

        .team-member-image {
        max-width: 100%;
        }

        @media (max-width: 500px) {
        .card-container {
            width: 100%;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 25px;
            margin-left: 0px;
        }
        }
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');

        *,
        *:before,
        *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        }

        body {
        margin: 0;
        }

        .wk-desk-1 {
        width: 8.333333%;
        }

        .wk-desk-2 {
        width: 16.666667%;
        }

        .wk-desk-3 {
        width: 25%;
        }

        .wk-desk-4 {
        width: 33.333333%;
        }

        .wk-desk-5 {
        width: 41.666667%;
        }

        .wk-desk-6 {
        width: 50%;
        }

        .wk-desk-7 {
        width: 58.333333%;
        }

        .wk-desk-8 {
        width: 66.666667%;
        }

        .wk-desk-9 {
        width: 75%;
        }

        .wk-desk-10 {
        width: 83.333333%;
        }

        .wk-desk-11 {
        width: 91.666667%;
        }

        .wk-desk-12 {
        width: 100%;
        }

        @media (max-width: 1024px) {
        .wk-ipadp-1 {
            width: 8.333333%;
        }

        .wk-ipadp-2 {
            width: 16.666667%;
        }

        .wk-ipadp-3 {
            width: 25%;
        }

        .wk-ipadp-4 {
            width: 33.333333%;
        }

        .wk-ipadp-5 {
            width: 41.666667%;
        }

        .wk-ipadp-6 {
            width: 50%;
        }

        .wk-ipadp-7 {
            width: 58.333333%;
        }

        .wk-ipadp-8 {
            width: 66.666667%;
        }

        .wk-ipadp-9 {
            width: 75%;
        }

        .wk-ipadp-10 {
            width: 83.333333%;
        }

        .wk-ipadp-11 {
            width: 91.666667%;
        }

        .wk-ipadp-12 {
            width: 100%;
        }
        }

        @media (max-width: 768px) {
        .wk-tab-1 {
            width: 8.333333%;
        }

        .wk-tab-2 {
            width: 16.666667%;
        }

        .wk-tab-3 {
            width: 25%;
        }

        .wk-tab-4 {
            width: 33.333333%;
        }

        .wk-tab-5 {
            width: 41.666667%;
        }

        .wk-tab-6 {
            width: 50%;
        }

        .wk-tab-7 {
            width: 58.333333%;
        }

        .wk-tab-8 {
            width: 66.666667%;
        }

        .wk-tab-9 {
            width: 75%;
        }

        .wk-tab-10 {
            width: 83.333333%;
        }

        .wk-tab-11 {
            width: 91.666667%;
        }

        .wk-tab-12 {
            width: 100%;
        }
        }

        @media (max-width: 500px) {
        .wk-mobile-1 {
            width: 8.333333%;
        }

        .wk-mobile-2 {
            width: 16.666667%;
        }

        .wk-mobile-3 {
            width: 25%;
        }

        .wk-mobile-4 {
            width: 33.333333%;
        }

        .wk-mobile-5 {
            width: 41.666667%;
        }

        .wk-mobile-6 {
            width: 50%;
        }

        .wk-mobile-7 {
            width: 58.333333%;
        }

        .wk-mobile-8 {
            width: 66.666667%;
        }

        .wk-mobile-9 {
            width: 75%;
        }

        .wk-mobile-10 {
            width: 83.333333%;
        }

        .wk-mobile-11 {
            width: 91.666667%;
        }

        .wk-mobile-12 {
            width: 100%;
        }
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-bottom:-400px;
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
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('JenisMobil')}}">Tipe Mobil</a>
            <a href="{{route('contact')}}">Contact</a>
            <a href="{{route('menu')}}">About</a>
        </div>
    </div>

    <!-- Hero Section (Home) -->
    <section id="home" class="hero">
        <div class="responsive-container-block container">
            <p class="text-blk team-head-text">
                Our Team
            </p>
            <div class="responsive-container-block">
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">
                    <p class="text-blk name">
                    Satria Farel Cipta Permata
                    </p>
                    <p class="text-blk position">
                    FullStack Developer
                    </p>
                </div>
                </div>
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">
                    <p class="text-blk name">
                    Rachel Fayza Idris
                    </p>
                    <p class="text-blk position">
                    UI/UX Designer
                    </p>
                    
                </div>
                </div>
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">
                    <p class="text-blk name">
                    Marsel Herlino
                    </p>
                    <p class="text-blk position">
                    FullStack Developer
                    </p>
                    
                </div>
                </div>
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">
                    <p class="text-blk name">
                    Indah Callista Excella
                    </p>
                    <p class="text-blk position">
                    UI/UX Designer
                    </p>
                    
                </div>
                </div>
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">

                    <p class="text-blk name">
                    Sultan Bagaskara
                    </p>
                    <p class="text-blk position">
                    Front End Developer
                    </p>
                    
                </div>
                </div>
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">
                    <p class="text-blk name">
                    Ronald Naufal Ziyad
                    </p>
                    <p class="text-blk position">
                    Front End Developer
                    </p>
                    
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Jual Beli Mobil. All rights reserved.</p>
    </footer>
</body>
</html>
