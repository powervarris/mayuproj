<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="./css/about.css" />
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
        <section class="section-about">
        <div class="hero">
            <div>
                <h2>Nagkaisang Nayon</h2>
                <p>Founded on 05/01/1990</p>
            </div>
        </div>

        <div class="about-row">
            <div class="about-col-6">
                <p>
                Barangay Nagkaisang Nayon is one of the two barangays in District II of Quezon City
                 (the other one being Payatas) chosen to be part of the City Soul Project which aims 
                 to build a database of pertinent socio-economic data that can be used for development
                  planning at the barangay level. In fact, the data in this paper has been presented to
                   various stakeholders in Nagkaisang Nayon as input for their barangay development planning
                    in November of 2007
                </p><br>
                <p>
                The population of Nagkaisang Nayon grew from 28,238 in 1990 to 53,781 in 2020, an increase
                 of 25,543 people over the course of 30 years. The latest census figures in 2020 denote a 
                 positive growth rate of 1.96%, or an increase of 4,733 people, from the previous population
                  of 49,048 in 2015
                </p>
            </div>
            <div class="about-col-6">
                <img width="100%"
                    src="./images/whole.jpg"
                    alt="team"><br><br>
                <p>
                With the guidance of the divine providence, multi-sectoral developments in the barangay 
                aimed to be realized thru self-reliant, supportive citizens, efficient and effective public
                leaders who are collaborative to maintain a peaceful, orderly and progressive community.
                </p>
            </div>
        </div>
    </section>

    </body>
</html>