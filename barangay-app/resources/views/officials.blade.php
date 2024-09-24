<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="css/about.css">
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

        <nav class="officials">

        <section class="divider2">
        <h1>&nbsp;OFFICIALS</h1>
    </section>

    <section class="artist2">
        <div class="artcard">
        <a href="https://www.facebook.com/obet.gonzaga.9"><img src="./images/Officials/sonny.jpg"></a>
            <h1>Sonny Dela Cruz</h1>
        </div>
        <div class="artcard">
        <a href="https://www.facebook.com/obet.gonzaga.9"><img src="./images/Officials/metoy.jpg"></a>
            <h1>Metoy Faustino</h1>
        </div>
        <div class="artcard">
        <a href="https://www.facebook.com/obet.gonzaga.9"><img src="./images/Officials/rey.png"></a>
            <h1>Rey Samonte</h1>
        </div>
        <div class="artcard">
            <a href="https://www.facebook.com/obet.gonzaga.9"><img src="./images/Officials/obet.jpg"></a>
            <h1>Obet Gonzaga</h1>
        </div>
        <div class="artcard">
        <a href="https://www.facebook.com/obet.gonzaga.9"><img src="./images/Officials/joyce.png"></a>
            <h1>Joyce Dela Cruz</h1>
        </div>
        <div class="artcard">
        <a href="https://www.facebook.com/obet.gonzaga.9"><img src="./images/Officials/macky.png"></a>
            <h1>Macky Dantes</h1>
        </div>
        <div class="artcard">
        <a href="https://www.facebook.com/obet.gonzaga.9"><img src="./images/Officials/von.jpg"></a>
            <h1>Von Francisco</h1>
        </div>
        <div class="artcard">
        <a href="https://www.facebook.com/obet.gonzaga.9"><img src="./images/Officials/weslee.jpg"></a>
            <h1>Weslee De Leon</h1>
        </div>
    
    </section>
    </nav>

    </body>
</html>