<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>Apply - Sumeru International School</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-light bg-primary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand text-white pt-2 d-flex align-items-center" href="#">
          <img src="{{ asset('/images/logo.png') }}" alt="" width="50" height="50" class="d-inline-block align-text-top">
          <p style="margin: 0; margin-left: 10px;">Sumeru International School</p>
        </a>
        <button type="button" class="btn btn-outline-light px-4" style="margin-right: -950px;">APPLY</button>
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