<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>Sumeru International School</title>

    {{-- External Style --}}
    <style>
        .carousel-item {
            height: 45rem;
            position: relative;
            background-color: black;
        }
        .container {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding-bottom: 60px;
            padding-left: 70px;
        }
    </style>
    
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-light bg-primary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand text-white pt-2 d-flex align-items-center" href="#">
          <img src="{{ asset('/images/logo.png') }}" alt="" width="50" height="50" class="d-inline-block align-text-top">
          <p style="margin: 0; margin-left: 10px;">Sumeru International School</p>
        </a>
        <button type="button" class="btn btn-outline-light px-4" style="margin-right: -950px;"><a href="/join/apply" class="text-white">APPLY</a></button>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" style="margin-right: 30px">MENU</button> 
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
          <div class="offcanvas-header">
            <h5 id="offcanvasTopLabel" class="text-primary">About</h5>
            <h5 id="offcanvasTopLabel" class="text-primary">Join</h5>
            <h5 id="offcanvasTopLabel" class="text-primary">Student Life</h5>
            <h5 id="offcanvasTopLabel" class="text-primary">Learning</h5>
            <h5 id="offcanvasTopLabel" class="text-primary">Community</h5>
            <h5 id="offcanvasTopLabel" class="text-primary">Event</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <a href="/login">Login</a>
          </div>
        </div>
      </div>
    </nav>

      {{-- Carousel --}}
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner h-auto d-inline-block">
            <div class="carousel-item active">
                <div class="container text-light">
                    <h1>Preparing students for future success</h1>
                    <p>With the IB framework at the core of our curriculum, we develop inquiring, knowledgeable, caring young people who possess a love for learning.</p>
                    <a href="#" class="btn btn-lg btn-primary">
                        Learn More
                    </a>
                </div>
                <img src="{{ asset('/images/img1.png') }}" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <div class="container text-light">
                    <h1>A balanced education</h1>
                    <p>SIS students are able to explore their passions and develop new skills within our safe and supportive envinronment.</p>
                    <a href="#" class="btn btn-lg btn-primary">
                        Learn More
                    </a>
                </div>
                <img src="{{ asset('/images/img2.png') }}" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <div class="container text-light">
                  <h1>Inspirational, inquiry led learning</h1>
                  <p>We nurture a spirit of inquiry and self-ownership both inside and outside of the classroom.</p>
                  <a href="#" class="btn btn-lg btn-primary">
                      Learn More
                  </a>
              </div>
              <img src="{{ asset('/images/img3.png') }}" alt="" class="d-block w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
      </div>

      {{-- Hero Page --}}
      <div class="text-light d-inline-block" style=" height: 500px; background-color: #eaeaea; margin-top: -5px;">
        <h5 class="text-secondary" style="text-align: center; margin-top: 100px;">Welcome To</h5>
        <h1 class="text-primary text-lg" style="text-align: center">SUMERU INTERNATIONAL SCHOOL</h1>
        <h5 class="text-dark" style="text-align: center; margin-top: 30px;">A vibrant and diverse international community.</h5>
        <p class="text-secondary" style="text-align: center; margin-top: 30px;">
          We are an IB World School located in Avidya, Sumeru. Our experienced team of international educators 
          provide an inspirational, inquiry-led IB education for students aged 3-18. Passionate about a balanced
          education and educating the whole child, we hope to instill a lifelong love of learning in our students.
        </p>
        <div class="d-flex flex-direction-column justify-content-center mt-5">
          <button class="btn-lg btn-outline-primary mx-3 px-4">OUR STORY</button>
          <button class="btn-lg btn-outline-primary" style="text-align: center; text-decoration: none; cursor: pointer;">MEET OUR HEAD OF SCHOOL</button>
        </div>
      </div>
      
      {{-- Grid Content --}}
      <div class="container-fluid pt-5">
        <h2 class="text-primary" style="margin-left: 50px">MEET OUR COMMUNITY</h2>
        <h6 class="text-muted" style="margin-left: 50px">At the heart our school is a tight-knit, diverse and unique community.</h6>
      </div>
      <div class="container-fluid w-75 pb-5" style="margin-top: 75px">
        <div class="row row-cols-2 g-0">
          <div class="col">
            <div class="border border-muted border-top-0 border-start-0 text-muted"><img class="p-2" src="{{ asset('/images/icon1.png') }}" style="width: 90px; object-fit: cover; height: 90px;">100% Graduation Rate</div>
          </div>
          <div class="col">
            <div class="border border-muted border-top-0 border-end-0 text-muted"><img class="p-2" src="{{ asset('/images/icon2.png') }}" style="width: 90px; object-fit: cover; height: 90px;">7:1 student:teacher ratio</div>
          </div>
          <div class="col">
            <div class="border border-muted border-start-0 text-muted"><img class="p-2" src="{{ asset('/images/icon3.png') }}" style="width: 90px; object-fit: cover; height: 90px;">350+ students</div>
          </div>
          <div class="col">
            <div class="border border-muted border-end-0 text-muted"><img class="p-2" src="{{ asset('/images/icon4.png') }}" style="width: 90px; object-fit: cover; height: 90px;">35+ nationalities</div>
          </div>
          <div class="col">
            <div class="border border-muted border-start-0 border-bottom-0 text-muted"><img class="p-2" src="{{ asset('/images/icon5.png') }}" style="width: 90px; object-fit: cover; height: 90px;">40+ international teachers</div>
          </div>
          <div class="col">
            <div class="border border-muted border-end-0 border-bottom-0 text-muted"><img class="p-2" src="{{ asset('/images/icon6.png') }}" style="width: 90px; object-fit: cover; height: 90px;">30+ after-school activities</div>
          </div>
        </div>
      </div>

      {{-- Discover --}}
      <div class="bg-primary text-light text-center pt-5" style="height: 600px;">
        <h2>DISCOVER SIS</h2>
        <h6>Explore some of the exciting things that have been going on around our campus.</h6>
      </div>
      <div class="d-flex" style="background-color: #2a2d31; padding: 50px;">
        <img src="{{ asset('/images/logo.png') }}" alt="" width="160px" heiht="100px" class="d-inline-block align-text-top">
        <ul class="list-unstyled text-light mt-3 mx-3" >
        <li class="h5" href="#">SUMERU INTERNATIONAL SCHOOL</li>
        <li>4-19-51 Avidya | Sumeru City</li>
        <li>Sumeru 815-00007 Teyvat</li>
        <li>T: +82-93-842-7602</li>
        <li><a>E: <a href="#" class="text-light">aryapurnama877@gmail.com</a></li>
      </div>
    
      {{-- Footer --}}
      <footer class="bg-dark text-center text-lg-start">
        <div class="text-center text-light p-4" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
          <a class="text-light" style="text-decoration: none;" href="">Sumeru International School</a>
        </div>
      </footer>
    <script type="module" src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>