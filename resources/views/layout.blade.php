<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Bakery</title>


    {{--boostrap--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
   
    {{--css--}} 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{--aos--}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{--font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    

</head>
<body>

   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
          Coffeé.
        </a> 
  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('location') }}">Location</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  
    <main class="container-fluid p-0 m-0">
      @yield('content')
    </main>

    <footer class="footer py-5 text-white">
        <div class="container-fluid px-5">
          <div class="row justify-content-between">
            <!-- Kolom 1 -->
            <div class="col-md-4 mb-3">
              <h5 class="fw-bold">Coffeé</h5>
              <p class="mt-3">
             “Nikmati kopi racikan segar dengan kualitas terbaik, aroma yang menenangkan, dan rasa seimbang—sempurna untuk menemani waktu santai maupun momen spesialmu.
              </p>
              <p><i class="bi bi-geo-alt"></i> Jl. Aurora Timur No. 19, Kel. Lunasari, Kec. Mirandera, Kota Selathora, Nusantara Raya 90211</p>
            </div>
      
            <!-- Kolom 2 -->
            <div class="col-md-3 mb-3">
              <h5 class="fw-bold">Menu</h5>
              <ul class="list-unstyled mt-3">
                <li><a href="{{ route('home') }}" class="footer-link text-white text-decoration-none">Home</a></li>
                <li><a href="{{ route('about') }}" class="footer-link text-white text-decoration-none">About</a></li>
                <li><a href="{{ route('products') }}" class="footer-link text-white text-decoration-none">Menu</a></li>
              </ul>
            </div>
      
            <!-- Kolom 3 -->
            <div class="col-md-3 mb-3">
              <h5 class="fw-bold">Contact</h5>
              <ul class="list-unstyled mt-3">
                <li><a href="{{ route('location') }}" class="footer-link text-white text-decoration-none">Contact Us</a></li>
              </ul>
      
              <div class="social-icons mt-3">
              <a href="https://wa.me/6285709446175" target="_blank" class="me-3 text-white">
                <i class="bi bi-whatsapp"></i>
              </a>
              <a href="https://www.instagram.com/rerecake_cookies/" target="_blank" class="text-white">
                <i class="bi bi-instagram"></i>
              </a>
            </div>

          </div>
        </div>
      </footer>
      
        
    </body>
    </html>

