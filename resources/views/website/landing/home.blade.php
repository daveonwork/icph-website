<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Immaculate Concepcion Polyclinic & Hospital</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/remixicon/remixicon.cs') }}">
  <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">

  
  <!-- Template Main CSS File -->
  
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
  <!-- ======= Header ======= -->
  @include('themes.navbar')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('themes.hero')
  <!-- End Hero -->

    <!-- ======= About Section ======= -->
    @include('website.landing.about')
    </section><!-- End About Section -->
{{-- 
    <!-- ======= Counts Section ======= -->
    @include('website.landing.count')
    </section><!-- End Counts Section --> --}}

    <!-- ======= Services Section ======= -->
    @include('website.landing.services')
    </section><!-- End Services Section -->

    {{-- <!-- ======= Departments Section ======= -->
    @include('website.landing.departments')
    </section><!-- End Departments Section --> --}}

    <!-- ======= Doctors Section ======= -->
    @include('website.landing.doctors')
    <!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    @include('website.landing.gallery')
    <!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    @include('website.landing.contact')
    <!-- ======= End Contact Section ======= -->
  </main><!-- End #main -->

    <!-- ======= Privacy Section ======= -->
    @include('website.privacypolicy.privacynotif')
    {{-- @include('website.privacypolicy.notification') --}}
    <!-- ======= End Privacy Section ======= -->

    <!-- ======= Footer ======= -->
    @include('themes.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  
  <script type="text/javascript" src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  
  
  <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>

</html>