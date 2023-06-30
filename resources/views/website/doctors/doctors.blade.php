@extends('themes.layouts')

    @section('content')

    <main id="main">

      <!-- ======= Breadcrumbs Section ======= -->
      <section class="breadcrumbs">
          <div class="container">

              <div class="d-flex justify-content-between align-items-center"  >
              <h2>Doctors</h2>
              <ol>
                  <li><a class="nav-link scrollto active" href="/">Home</a></li>
                  <li>Doctors</li>
              </ol>
              </div>

          </div>
      </section><!-- End Breadcrumbs Section -->

      <section class="inner-page">
      <div class="container">

        <section id="doc" class="doc section-bg">
          <div class="container">
    

        <div class="doc-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#doc-list-1">Anesthesia<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="doc-list-1" class="collapse show" data-bs-parent=".doc-list">
                
                <section id="doctors" class="doctors">
                  <div class="container">
                    
                    <div class="row">
                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-1.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Elpidio G. Ines Jr., MD</h4>
                            <span>Anesthesia</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Emilio Rommel Basilio, MD</h4>
                            <span>Anesthesia</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                            <div class="member-info">
                            <h4>Martin Magcalas, MD</h4>
                            <span>Anesthesia</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Arnel Gueco, MD</h4>
                            <span>Anesthesia</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Garizaldy Flores, MD</h4>
                            <span>Anesthesia</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Tracy Talo, MD</h4>
                            <span>Anesthesia</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Gener Apostol, MD</h4>
                            <span>Anesthesia</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Geraldine Magno, MD</h4>
                            <span>Anesthesia</span>         
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </section>
              </div>
            </li>

            <li data-aos="doc-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#doc-list-2" class="collapsed">Surgery<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="doc-list-2" class="collapse" data-bs-parent=".doc-list">
                <section id="doctors" class="doctors">
                  <div class="container">
                    
                    <div class="row">

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Abelardo Lucas, MD</h4>
                            <span>Surgery</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Arnold Castro, MD</h4>
                            <span>Surgery</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                            <div class="member-info">
                            <h4>Amado Meredor, MD</h4>
                            <span>Surgery</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Benjamin Bengco III, MD</h4>
                            <span>Surgery</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Den Lowell Dizon, MD</h4>
                            <span>Surgery</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Eduardo Tuazon, MD</h4>
                            <span>Surgery</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Elmer Suarez, MD</h4>
                            <span>Surgery</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Enrique Peña, MD</h4>
                            <span>Surgery</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Mark Lester Tolenada, MD</h4>
                            <span>Surgery</span>         
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </section>
              </div>
            </li>


            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#doc-list-3" class="collapsed">Internal Medicine<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="doc-list-3" class="collapse" data-bs-parent=".doc-list">
                <section id="doctors" class="doctors">
                  <div class="container">
                    
                    <div class="row">

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Arnel Cunan, MD</h4>
                            <span>Internal Medicine</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Aileen Bautista, MD</h4>
                            <span>Internal Medicine</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                            <div class="member-info">
                            <h4>Charina Abellara, MD</h4>
                            <span>Internal Medicine</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Elaine Tolenada, MD</h4>
                            <span>Internal Medicine</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Jesuchito H. Santos, MD</h4>
                            <span>Internal Medicine</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Maria Mellisa Alday, MD</h4>
                            <span>Internal Medicine</span>         
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </section>
              </div>
            </li>


            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#doc-list-4" class="collapsed">Neuro-Psychiatry<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="doc-list-4" class="collapse" data-bs-parent=".doc-list">
                <section id="doctors" class="doctors">
                  <div class="container">
                    <div class="row">
                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Wilfreda Calma, MD</h4>
                            <span>Neuro-Psychiatry</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#doc-list-5" class="collapsed">Obstetric-Gynecology<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="doc-list-5" class="collapse" data-bs-parent=".doc-list">
                
                <section id="doctors" class="doctors">
                  <div class="container">
                    
                    <div class="row">
                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Estrelita C. Ines, MD</h4>
                            <span>OB-Gyne</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Maria Teresita Gueco, MD</h4>
                            <span>OB-Gyne</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                            <div class="member-info">
                            <h4>Mary Karen Atanacio, MD</h4>
                            <span>OB-Gyne</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Dolores Cuanana, MD</h4>
                            <span>OB-Gyne</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Thelma Peña, MD</h4>
                            <span>OB-Gyne</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Anna Liza Aguilar, MD</h4>
                            <span>OB-Gyne</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Jonna Louise C. Castro, MD</h4>
                            <span>OB-Gyne</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Lolita Ong, MD</h4>
                            <span>OB-Gyne</span>         
                          </div>
                        </div>
                      </div>


                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Viola Marie Quiboloy, MD</h4>
                            <span>OB-Gyne</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Myrene Umipig, MD</h4>
                            <span>OB-Gyne</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Zhyra Gail Catli, MD</h4>
                            <span>OB-Gyne</span>         
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </section>


              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#doc-list-6" class="collapsed">Pathology<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="doc-list-6" class="collapse" data-bs-parent=".doc-list">
                <section id="doctors" class="doctors">
                  <div class="container">
                    <div class="row">
                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Monserat Chichioco, MD</h4>
                            <span>Pathology</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="600">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#doc-list-7" class="collapsed">Pediatrics<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="doc-list-7" class="collapse" data-bs-parent=".doc-list">
               
                <section id="doctors" class="doctors">
                  <div class="container">
                    
                    <div class="row">
                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Lauro Santos, MD</h4>
                            <span>Pediatrician</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Marino Basilio, MD</h4>
                            <span>Pediatrician</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                            <div class="member-info">
                            <h4>Venus Cunan, MD</h4>
                            <span>Pediatrician</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Leilanie Fernandez, MD</h4>
                            <span>Pediatrician</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Maria Cristina Gutierrez, MD</h4>
                            <span>Pediatrician</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Jessline Joan Tayag, MD</h4>
                            <span>Pediatrician</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Arturo Lazol, MD</h4>
                            <span>Pediatrician</span>         
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Jubie De Guzman, MD</h4>
                            <span>Pediatrician</span>         
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </section>

              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="700">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#doc-list-8" class="collapsed">Radiology-Ultrasonography<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="doc-list-8" class="collapse" data-bs-parent=".doc-list">
                <section id="doctors" class="doctors">
                  <div class="container">
                    <div class="row">
                      <div class="col-6 col-md-4">
                        <div class="member d-flex align-items-start">
                          <div class="pic"><img src="{{ asset ('img/doctors/doctors-def.jpg') }}" alt="" class="img-fluid"></div>
                          <div class="member-info">
                            <h4>Dean Ashley Kayanan, MD</h4>
                            <span>Radiology-Ultrasonography</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </li>


          </ul>
        </div>
      </section>          
    </main><!-- End #main -->
    @endsection