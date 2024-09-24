<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="css/welcome.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">

        <title>Barangay Nagkaisang Nayon</title>


    </head>
    <body>
        <header>
        <nav class="nav-bar">
                <ul class="nav-links">
                <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('announcement') }}">Announcement</a></li>
                <li><a href="{{ route('officials') }}">Barangay Officials</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            
            
                </ul>
                
                <div class="login-register">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
        </header>
        
        <div class="header-container">
            <h2>Welcome to Barangay Nagkaisang Nayon!</h2>
        </div>


        <section class="album">
            <div class="image-grid">
                <div class="image-box">
                    <img src="./images/home/2.jpg" alt="Image 1">
                </div>
                <div class="image-box">
                <img src="./images/home/3.jpg"  alt="Image 2">
                </div>
                <div class="image-box">
                <img src="./images/home/4.jpg" alt="Image 3">
                </div>
                <div class="image-box">
                <img src="./images/home/5.jpg"  alt="Image 4">
                </div>
                <div class="image-box">
                <img src="./images/home/6.jpg"  alt="Image 5">
                </div>
                <div class="image-box">
                <img src="./images/home/car.jpg"  alt="Image 6">
                </div>
                <div class="image-box">
                <img src="./images/home/ewan.jpg"  alt="Image 7">
                </div>
                <div class="image-box">
                <img src="./images/home/kabataan.jpg"  alt="Image 8">
                </div>
                <div class="image-box">
                <img src="./images/home/selfie.jpg" alt="Image 9">
                </div>
            </div>
        </section>
    </body>
</html>