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
                <li>About</li>
            </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <section id="departments" class="departments">
            <div class="container">

                    <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="home" aria-selected="true">About</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-controls="profile" aria-selected="false">Mission and Vision</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="goal-tab" data-bs-toggle="tab" data-bs-target="#goal" type="button" role="tab" aria-controls="messages" aria-selected="false">Goal</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="leadership-tab" data-bs-toggle="tab" data-bs-target="#leadership" type="button" role="tab" aria-controls="settings" aria-selected="false">Leadership</button>
                    </li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                       
                        test1                     
                    
                    </div>

                    <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                        
                            <p class="description">To realize its vision, the Immaculate Concepcion Polyclinic and Hospital aims to provide the best possible care and treatment to all in need of hopitalization regardless of race, creed, color, social status and political belief.</p>
                        </div>
                                          
                    </div>
                        
                    <div class="tab-pane fade" id="goal" role="tabpanel" aria-labelledby="goal-tab">
                       
                                <p class="description">To manage and administer nursing services in the safest and most effective and efficient manner through continuous training and research to meet the needs of individual, families and community. <br> <br> To develop and maintain good working relationship towards the efficient operation and dedication to the people who are working in the instituition. <br> <br> Development, promotion and maintenance of the competence of the Nursing Services Personnel <br> <br> Our purpose is to evaluate, make changes and additions as needed to improve the quality of nursing care. <br> <br> Our job is to give importance to everyone's health and to value their lives.</p>
                           </div>

                    <div class="tab-pane fade" id="leadership" role="tabpanel" aria-labelledby="leadership-tab">
                        test4</div>

                </div>
                                
            </div>
        </section>
        </section>
    </body>
</html>


</main><!-- End #main -->
@endsection

