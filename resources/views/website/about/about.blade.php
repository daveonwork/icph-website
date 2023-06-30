@extends('themes.layouts')

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center"  >
                <h2>About Us</h2>
                <ol>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li>About Us</li>
                </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="inner-page">
        <div class="container">

                <section id="about" class="about">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                            {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> --}}
                            </div>

                            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                            <h2><b>Immaculate Concepcion Polyclinic & Hospital</b></h2>
                            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-donate-heart"></i></div>
                                <h3 class="title"><a href=""><b>Vision</b></a></h3>
                                <p class="description">To be the lead institution in southern Tarlac where care its total, high quality and personalized </p>
                            </div>

                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-target-lock"></i></div>
                                <h3 class="title"><a href=""><b>Mission</b></a></h3>
                                <p class="description">To realize its vision, the Immaculate Concepcion Polyclinic and Hospital aims to provide the best possible care and treatment to all in need of hopitalization regardless of race, creed, color, social status and political belief.</p>
                            </div>

                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-medal"></i></div>
                                <h3 class="title"><a href=""><b>GOALS</b></a></h3>
                                <p class="description">To manage and administer nursing services in the safest and most effective and efficient manner through continuous training and research to meet the needs of individual, families and community. <br> <br> To develop and maintain good working relationship towards the efficient operation and dedication to the people who are working in the instituition. <br> <br> Development, promotion and maintenance of the competence of the Nursing Services Personnel <br> <br> Our purpose is to evaluate, make changes and additions as needed to improve the quality of nursing care. <br> <br> Our job is to give importance to everyone's health and to value their lives.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main><!-- End #main -->
@endsection