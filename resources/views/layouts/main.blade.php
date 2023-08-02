<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }} - Kuma Builder </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
  <!-- ======= Header ======= -->
  @include('partials.header')
  <!-- End Header -->


  <!-- ======= Main Page ====== -->
  <main id="main">
        @yield('container')
  </main>
  <!-- ======= End Main Page ====== -->

   <!-- ======= footer ======= -->
   @include('partials.footer')
   <!-- End footer -->


 <!-- Vendor JS Files -->
 <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
 <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
 <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
 <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
 <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>



 <!-- Template Main JS File -->
 <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
