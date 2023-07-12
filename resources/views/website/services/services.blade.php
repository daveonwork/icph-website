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

    <section id="departments" class="departments">
            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Dietary Department</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Laboratory</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Outpatient Department</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pharmacy</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Radiologic Imaging Center</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Utrasound</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Surgery</a>
                            </li>
                    </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Dietary</h3>
                                        <p class="fst-italic">Our experienced team of registered dietitians and food service professionals works closely with healthcare providers to develop personalized meal plans tailored to each patient's medical condition, dietary restrictions, and preferences. We prioritize the nutritional requirements specific to various medical treatments, ensuring that our meals promote healing and optimize recovery.</p>
                                        <p class="fst-italic">We are dedicated to providing nutritious and appetizing meals that not only meet dietary guidelines but also consider cultural, religious, and personal preferences. Our kitchen staff carefully prepares each meal with high-quality ingredients, taking into account special dietary needs such as low-sodium, diabetic-friendly, gluten-free, and other medically necessary modifications.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <div class="pic"><img src="{{ asset ('img/services/services_dietary.jpg') }}" alt="" class="img-fluid"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Laboratory</h3>
                                    <p class="fst-italic">At our 24-hour laboratory, we understand the importance of swift and efficient service. We prioritize quick turnaround times, enabling your healthcare provider to make well-informed decisions and develop personalized treatment plans as soon as possible.</p>
                                    <p>Services Offered:</p>
                                    
                                          <!-- ======= Lab Services ======= -->
                                            @include('website.services.services_lab')
                                            <!-- Lab_Services-->
                                </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <div class="pic"><img src="{{ asset ('img/services/services_lab.jpg') }}" alt="" class="img-fluid"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Outpatient Department</h3>
                                    <p class="fst-italic">At our clinic, we prioritize your comfort and well-being. Our friendly and knowledgeable staff will guide you through the ultrasound procedure, addressing any questions or concerns you may have. We strive to create a welcoming environment where you feel at ease throughout your visit.</p>
                                    <p class="indented-text">Services Offered:</p>
                                    <p class="indented-text2">1. Obstetrics-Gynecology: <i> Monday to Saturday | 9:00 am to 5:00 pm</i></p>
                                    <p class="indented-text2">2. Pediatrics: <i> Monday to Saturday | 9:00 am to 5:00 pm</i></p>
                                    <p class="indented-text2">3. Neuro-Psychiatry: <i> Tuesday-Thursday | 11:00 am to 5:00 pm</i></p>
                                </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <div class="pic"><img src="{{ asset ('img/services/services_opd.jpg') }}" alt="" class="img-fluid"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Pharmacy</h3>                                    
                                    <p class="fst-italic">We are committed to serving you with professionalism, compassion, and the highest level of care. Your health is our priority, and we look forward to providing you with the medications, guidance, and support you need for a healthier life.</p>
                                    <p class="fst-italic">Whether you require prescription refills, over-the-counter medications, or expert advice from our knowledgeable pharmacists, we're here to assist you. Our friendly staff is dedicated to ensuring you receive the highest quality care and attention.</p>       
                                </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <div class="pic"><img src="{{ asset ('img/services/services_pharmacy.jpg') }}" alt="" class="img-fluid"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Radiologic Imaging Center</h3>
                                    <p class="fst-italic">At our 24-hour radiology service, we prioritize efficiency and precision in delivering your results. We understand that time is of the essence, especially in emergency situations, and our rapid turnaround time allows your healthcare provider to make informed decisions promptly.</p>
                                    <p>Services Offered:</p>
                                    <div class="grid-container">
                                        <div class="grid-item">Chest PA<br>Chest AP/LAT<br>Extremeties<br>Cervical AP/LAT<br>LSV AP/LAT<br>LSV AP<br>Thoraco-Lumbar AP/L<br>T-Cage/Chest Bucky<br>Pelvis AP</div>
                                        <div class="grid-item">KUB AP<br>Fetography<br>Skull AP/L<br>Waters View<br>Nasal Bone<br>Shoulder AP<br>Abdomen AP<br>Abdomen UP/Supine<br>Pelvimetry AP/LAT</div>  
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <div class="pic"><img src="{{ asset ('img/services/services_xray.jpg') }}" alt="" class="img-fluid"></div>
                                </div>
                            </div>
                            </div>
                            <div class="tab-pane" id="tab-6">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Ultrasound</h3>
                                    <p class="fst-italic">We prioritize patient comfort and convenience. Our friendly and compassionate staff will ensure that you feel at ease throughout the entire process. We take the time to explain the procedure, answer your questions, and address any concerns you may have. Your well-being is our top priority, and we are dedicated to providing a caring and supportive environment for your ultrasound experience.</p>
                                    <p>Services Offered:</p>
                                    <div class="grid-container">
                                        <div class="grid-item">Whole Abdomen<br>Upper Abdomen<br>Lower Abdomen<br>KUB + Prostate<br>KUB<br>HBT<br>Pelvic UTZ<br>TVS/TRS<br>Prostate</div>
                                        <div class="grid-item">Pelvic + BPS<br>Pelvic + Twins<br>Breast<br>Chest Ultrasound<br>Mapping<br>Thyroid<br>Scrotal<br>Soft Tissue<br>Umbilical UTZ</div>  
                                    </div>
                            </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <div class="pic"><img src="{{ asset ('img/obgyne.jpg') }}" alt="" class="img-fluid"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-7">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Surgery</h3>
                                    <p class="fst-italic">Our team of highly skilled surgeons, nurses, and support staff is committed to delivering the highest quality of surgical services in a safe and compassionate environment. We understand that undergoing surgery can be a significant event in your life, and we are here to ensure your well-being throughout the entire process.</p>
                                </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <div class="pic"><img src="{{ asset ('img/services/services_surgery.jpg') }}" alt="" class="img-fluid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                </div>

            </div>
        </section>
    </main><!-- End #main -->
    @endsection
