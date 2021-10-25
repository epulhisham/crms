<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Car Rental Management System </title>


    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/aos.css') }}">

  <script src="{{ asset('asset/js/jquery.min.js') }}" defer></script>
  <script src="{{ asset('asset/js/popper.min.js') }}" defer></script>
  <script src="{{ asset('asset/js/bootstrap.min.js') }}" defer></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm bg-light navbar-dark">
            <div class="container-sm">
              <div class="row">
              
                  <!-- Brand/logo -->
                  <a class="navbar-brand" href="home">
                    <img src={{ asset('img/logo2.png') }} alt="logo" style="width:30%;">
                  &nbsp;
                  </a>
               </div>
            
               
                  <!-- Links -->
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link text-secondary" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-secondary" href="cars">Cars</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-secondary" href="contactus">Contact Us</a>
                    </li>
                  </ul>
                  
              </div>
            </div>
          </nav>

        <main class="py-4">
            @yield('content')
            <br><br><br><br><br><br><br>
        </main>
    </div>

    <!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 bg-light">© 2021 Car Rental Management System. Hakcipta Terpelihara.
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
      duration: 2000,
      once: true
  });
</script>
</body>
</html>
