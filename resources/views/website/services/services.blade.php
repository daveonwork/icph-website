@extends('themes.layouts')

@section('content')


<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
      <div class="container">

          <div class="d-flex justify-content-between align-items-center"  >
          <h2>Our Services</h2>
          <ol>
              <li><a class="nav-link scrollto active" href="/">Home</a></li>
              <li>Services</li>
          </ol>
          </div>

      </div>
  </section><!-- End Breadcrumbs Section -->

  <section class="inner-page">
  <div class="container">


<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

      <div class="row">
        <div class="col-sm-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-apple-alt"></i></div>
            <h4><a href="">Dietary Services</a></h4>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-microscope"></i></div>
            <h4><a href="">Laboratory</a></h4>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="icon-box">
            <div class="icon"><i class="fas  fa-person-breastfeeding"></i></div>
            <h4><a href="">Obstetrics-Gynecology</a></h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-baby"></i></div>
            <h4><a href="">Pediatrics</a></h4>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4><a href="">Pharmacy</a></h4>
          </div>
        </div>

       <div class="col-sm-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-hand-holding-medical"></i></div>
            <h4><a href="">Surgery</a></h4>
          </div>
        </div>
      </div>

        <div class="col-sm-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-x-ray"></i></div>
            <h4><a href="">Radiology</a></h4>
            <p>XRay and Ultrasound</p>
          </div>
        </div>
        

    </div>
  </section><!-- End Services Section -->

</main><!-- End #main -->
@endsection