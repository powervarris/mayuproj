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

        
    <section class="divider">
        <h1>BARANGAY NAGKAISANG NAYON</h1>
    </section>

    <section class="artist">
        <div class="card">
            <img src="./images/comelec.jpg">
            <h1>Comelec Registration</h1>
            <p>The COMELEC Registration is the process by which eligible Filipino citizens
                 register with the Commission on Elections (COMELEC) to participate in national
                  and local elections. This process ensures that voters are included in the official 
                  voter registry, allowing them to exercise their right to vote.</p>
            <p>11/24/24</p>
        </div>
        <div class="card">
        <img src="./images/ofw.jpg">
            <h1>OFW Assistance</h1>
            <p>OFW Assistance provides support to Overseas Filipino Workers through legal aid,
            financial help, and welfare programs to protect their rights abroad.</p>
            <p>11/24/24</p>
        </div>
        <div class="card">
        <img src="./images/road.jpg">
            <h1>Clearing Operation</h1>
            <p>The road clearing operation in Barangay Nagkaisang Nayon involves removing
                 obstructions from roads to ensure safe and accessible passage for vehicles 
                 and pedestrians</p>
            <p>11/24/24</p>
        </div>
    </section>

    <section class="divider">
        <h1>LATEST NEWS</h1>
    </section>

    <section class="news">
        <div class="card2">
            <a href="https://www.facebook.com/photo/?fbid=813754504272524&set=a.163656892615625"> <img src="./images/qc.jpg"></a>
            <h4> <a href="https://www.facebook.com/QCEpidemiologyDiseaseSurveillance/posts/pfbid026NE6UKRKNuzHoo1TtEyj1N5eT6Pg5p63Jt5LBrmCMyHNfipk97UFKXdoxmwMWzPTl">Quezon City Holiday</a></h4>
            <p>By Goldie May</p>
        </div>
        <div class="card2">
            <a href="https://www.facebook.com/QCEpidemiologyDiseaseSurveillance/posts/pfbid026NE6UKRKNuzHoo1TtEyj1N5eT6Pg5p63Jt5LBrmCMyHNfipk97UFKXdoxmwMWzPTl"><img src="images/mpox.jpg"></a>
            <h4> <a href="ZT2.html"> MPOX Sintomas at Sakit</a></h4>
            <p>By Alyssa Marie</p>
        </div>
        <div class="card2">
            <a href="https://www.facebook.com/photo/?fbid=819507207030587&set=pcb.819507407030567"><img src="./images/joy.jpg"></a>
            <h4> <a href="CHNDTR.html">Joy Belmonte in Salam Community</a></h4>
            <p>By Lourdes Ashley</p>
        </div>
    </section>

    </body>
</html>