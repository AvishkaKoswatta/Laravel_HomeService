<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Service Finder - Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #35424a;
            color: #ffffff;
            padding: 10px 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        header h1 {
            margin: 0;
        }

        header nav ul {
            list-style: none;
            margin-left: 10px;
            padding: 0;
            display: flex;
        }

        header nav ul li {
            margin-left: 20px;
        }

        header nav ul li a {
            color: #ffffff;
            text-decoration: none;
            /* Remove underline */
            font-weight: bold;
            transition: color 0.3s;
            /* Smooth color transition */
        }

        header nav ul li a:hover {
            color: #f4c430;
            /* Change color on hover */
        }

        main .container {
            padding: 20px;
            position: relative;
            flex: 1;
            background-color: white;
        }

        footer {
            background-color: #35424a;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer .container {
            padding: 0 20px;
        }

        img.front {
            margin-left: 10px;
            margin-top: -20px;
            width: 200px;
            height: 300px;

        }

        img.house {
            margin-left: 50px;
            margin-top: -20px;
            width: 350px;
            height: 370px;


        }

        img.deco {
            margin-left: -700px;
            margin-top: 260px;
            width: 500px;
            height: 100px;
            
        }
       
        img.gardening {
            margin-left: 250px;
            margin-top: -20px;
            width: 150px;
            height: 170px;


        }
        img.car {
            margin-left: -400px;
            margin-top: -20px;
            width: 250px;
            height: 170px;


        }
        img.cleaner {
            margin-left: 50px;
            margin-top: -20px;
            width: 150px;
            height: 170px;


        }
        img.basket {
            margin-left: 550px;
            margin-top: -100px;
            width: 50px;
            height: 70px;


        }
        .container-text {
            position: absolute;
            margin-top: -15px;
            top: 25%;
            margin-left: 945px;
            transform: translate(-50%, -50%);
            font-size: 20px;
            color: black;

            text-align: left;

        }

        .container-text1 {
            text-decoration: none;
        }

        .search-container {
            margin-top: 130px;
            display: flex;
            align-items: center;
            margin-left: 810px;
        }

        .search-container button {
            padding: 10px 20px;
            font-size: 16px;
            border: 2px solid #f4c430;
            /* Change border to 2px solid with the desired color */
            background-color: transparent;
            /* Keep background color transparent */
            color: black;
            border-radius: 100px;
            cursor: pointer;
            display: flex;
            align-items: center;
            position: relative;
        }

        .search-container button::after {
            content: '→';
            display: inline-block;
            margin-left: 10px;
            animation: moveArrow 2s infinite;
            font-size: 16px;
        }

        @keyframes moveArrow {
            0% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(10px);
            }

            100% {
                transform: translateX(0);
            }
        }

        .search-container button:hover {
            background-color: #eedc82;
        }

        .box {
            margin-top: 50px;
            padding: 60px 0;
        }

        .box-part {
            background: #FFF;
            border-radius: 0;
            padding: 60px 10px;
            margin: 30px 0;
            text-align: center;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;

        }

        .col {
            flex: 1;
            min-width: 100px;
            margin: 10px;
            transition: box-shadow 0.5s, border-color 0.5s;
            padding: 10px 20px;
            font-size: 16px;
            /* Solid, non-transparent border */
            background-color: white;
            /* Ensure background is not transparent */
            position: relative;
            box-shadow: 10px 12px 8px rgba(10, 10, 10, 0.1);
            /* Add a subtle shadow for a more pronounced effect */
        }


        .col:hover {
            box-shadow: 0 0 20px rgba(5, 5, 10, 0.2);
            transform: translateY(-10px);
        }

        .fa {
            color: #4183D7;
            margin-bottom: 10px;
        }

        .title {
            margin-top: 10px;
        }

        span {
            font-size: 15px;
        }

        a {
            text-decoration: none;
            color: #0062cc;

        }

        img.cleaning {
            width: 60px;
            height: 60px;
        }

        .square {
            margin-top: -25px;
            margin-left: -30px;
            height: 600px;
            width: 600px;
            background-color: red;
        }

        .container-text2 {
            font-size: 90px;
            font-weight: bold;
            margin-top: -350px;
            margin-left: 800px;
            color: #f4c430;
        }

        .container-text3 {
            font-size: 80px;
            font-weight: bold;
            margin-top: -100px;
            margin-left: 800px;
        }

        .first {
            margin-top: 40px;
        }

        .second {
            margin-top: -200px;
        }

        .img1 {
            margin-left: 25px;
            margin-top: 300px;
        }

        .second-text {
            margin-top: -310px;
            margin-left: 600px;
        }

        .feature-text {
            margin-left: 530px;
            padding: 20px;
            font-weight: bold;
            font-size: 25px;
        }

        .answers {
            margin-top: 30px;
            margin-left: 600px;
        }

        .answers i {
            margin-right: 10px;
            /* Space between icon and text */
        }

        .answers ul {
            list-style-type: none;
            /* Remove default bullet points */
            padding: 0;
        }

        .answers li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .home-text{
            margin-top: 40px;
            margin-left: 100px;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <nav class="container-text1">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/registration">Sign Up</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/forms">Profile</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="first">
                <img src="{{ asset('images/welcomeworker.png') }}" alt="Hero Image" class="front">
                <img src="{{ asset('images/house.png') }}" alt="Hero Image" class="house">
                <img src="{{ asset('images/deco.png') }}" alt="Hero Image" class="deco">
                <img src="{{ asset('images/gardening.png') }}" alt="Hero Image" class="gardening">
                <img src="{{ asset('images/car.png') }}" alt="Hero Image" class="car">
                <img src="{{ asset('images/cleaner.png') }}" alt="Hero Image" class="cleaner">
                

<div class="home-text">
                <p class="container-text2">HOME</p>
                </br>
                <p class="container-text3">Hero</p>

                <p class="container-text">Your One-Stop Solution To Find Reliable Home Services In Your Area</p>
                <div class="search-container">
                    <a href="{{ route('search') }}">
                        <button>Search</button>
                    </a>
                    </div>

                </div>
            </div>
            <div class="box">
                <div class="container">
                    <div class="feature-text">
                        Featured Services
                    </div>
                    <div class="row">

                        <div class="col">
                            <a href="{{ route('detail', 'cleaning') }}">
                                <div class="box-part">
                                    <img src="{{ asset('images/clean.png') }}" alt="Hero Image" class="cleaning">
                                    <div class="title">
                                        <h4>Cleaning</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('detail', 'plumbing') }}">
                                <div class="box-part">
                                    <img src="{{ asset('images/plumb.png') }}" alt="Hero Image" class="cleaning">
                                    <div class="title">
                                        <h4>Plumbing</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('detail', 'mason') }}">
                                <div class="box-part">
                                    <img src="{{ asset('images/mason.png') }}" alt="Hero Image" class="cleaning">
                                    <div class="title">
                                        <h4>Mason</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('detail', 'gardening') }}">
                                <div class="box-part">
                                    <img src="{{ asset('images/gardener.png') }}" alt="Hero Image" class="cleaning">
                                    <div class="title">
                                        <h4>Gardening</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('detail', 'automobile') }}">
                                <div class="box-part">
                                    <img src="{{ asset('images/auto.png') }}" alt="Hero Image" class="cleaning">
                                    <div class="title">
                                        <h4>Automobile</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('detail', 'Beauty') }}">
                                <div class="box-part">
                                    <img src="{{ asset('images/beauty.png') }}" alt="Hero Image" class="cleaning">
                                    <div class="title">
                                        <h4>Beauty</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second">
            <img src="{{ asset('images/image1.jpg') }}" alt="Hero Image" class="img1">
                <p class="second-text"> <span style="color: black; font-size: 50px; font-weight:bold">Why</span>
                    </br>
                    <span style="color: #f4c430; font-size: 30px; font-weight:bold">HOME</span>
                    <span style="color: black; font-size: 30px; font-weight:bold">Hero</span>
                    </br>
                    Is THE Best?</p>

                <div class="answers">


                    <ul>
                        <li><i class="fa fa-user"></i>Easy register for job</li>
                        <li><i class="fa fa-search"></i>Easy find of home services for other users</li>
                        <li><i class="fa fa-list"></i>Wide range of services available</li>
                        <li><i class="fa fa-shield"></i>Trusted professionals</li>
                        <li><i class="fa fa-desktop"></i>Convenient and user-friendly platform</li>
                    </ul>

                </div>

            </div>
          


        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Home Service Finder. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
