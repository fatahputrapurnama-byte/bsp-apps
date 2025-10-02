{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BINA SOLUSI PURNAMA</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top"> --}}
        <!-- Navigation-->
        {{-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logo bsp transparan.png" alt="..." height="100px" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">  Services  </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> PELATIHAN &nbsp;&nbsp; <span class="sub-arrow"><i class="fas fa-angle-right"></i></span></a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="#">pelatihan item 1</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 2</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 3 </a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 4</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#"> Jasa Konsultasi » </a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="#">konsultasi item 1</a></li>
                                <li><a class="dropdown-item" href="#">konsultasi item 2</a></li>
                                <li><a class="dropdown-item" href="#">konsultasi item 4</a></li>
                                <li><a class="dropdown-item" href="#">konsultasi item 5</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#"> JASA AUDITING »</a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="#">AUDITING item 1</a></li>
                                <li><a class="dropdown-item" href="#">AUDITING item 2</a></li>
                                <li><a class="dropdown-item" href="#">AUDITING item 4</a></li>
                                <li><a class="dropdown-item" href="#">AUDITING item 5</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#"> BIMTEK » </a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="#">BIMTEK item 1</a></li>
                                <li><a class="dropdown-item" href="#">BIMTEK item 2</a></li>
                                <li><a class="dropdown-item" href="#">BIMTEK item 4</a></li>
                                <li><a class="dropdown-item" href="#">BIMTEK item 5</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#"> KAJIAN & STUDY » </a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="#">KAJIAN & STUDY item 1</a></li>
                                <li><a class="dropdown-item" href="#">KAJIAN & STUDY item 2</a></li>
                                <li><a class="dropdown-item" href="#">KAJIAN & STUDY item 4</a></li>
                                <li><a class="dropdown-item" href="#">KAJIAN & STUDY item 5</a></li>
                            </ul>
                        </li>
                    </ul>
                    </li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">News</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Client</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav> --}}
        <!-- Masthead-->
        @extends('layout.main')

        @section('container')
        <header class="masthead" style="background-image: url('../assets/img/9.jpg');">
            <div class="container">
                <img src="{{ asset('assets/img/logo-bsp-transparan.png') }}" style="margin-bottom: 30px; max-width: 27%; max-height: 27%;" alt="logo-bsp">
                <div class="masthead-heading text-uppercase">BINA SOLUSI PURNAMA</div>
                <div class="masthead-subheading">ENGINEERING & MANAGEMENT CONSULTANT</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#about" style="margin: 10px">Tentang Kami</a>
                <a class="btn btn-primary btn-xl text-uppercase" href="#contact">Hubungi Kami</a>
            </div>
        </header>
        <!-- Services-->
        {{-- <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Berita</h2>
                    {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
                </div>
                @livewire('news-list')
                {{-- <div class="row" id="data-news">
                    @foreach ($news as $berita)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item" style="max-height: 20%">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1" onclick="showNews({{ $berita }})">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/img/news/' .$berita->image) }}" style="max-width: 100%; max-height:230px" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{!! $berita->title !!}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div id="pagination-news">
                        {{ $news->links() }}
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase">TENTANG BINA SOLUSI PURNAMA</h3>
                    {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
                </div>
                <div class="text-center">
                    <img src="{{ asset('assets/img/logo-bsp-transparan.png') }}" alt="logo-bsp" style="max-width: 15%; max-height: 15%; margin:8px"><br>
                    <!--<p><strong><h4>LATAR BELAKANG PERUSAHAAN</h4></strong></p>-->
                    <p align="justify"> Bina Solusi Purnama merupakan konsultan dalam bidang manajemen dan teknik, Pada awalnya kami hanya menggeluti konsultan manajemen perorangan berskala kecil, yaitu perancangan sistem pengelolaan yang ada di perusahaan mulai Sistem Manajemen Mutu, Sistem Manajemen Lingkungan, Sistem Manajemen Keselamatan dan Kesehatan Kerja, Sistem Manajemen Laboratorium, Sistem Inventory, Produksi, Engineering, PPIC, Quality Control, dan Pemeliharaan. Pada tahun 2012 kami meresmikan perusahaan sebagai perusahaan konsultan dalam bidang manajemen dan     teknik dalam bentuk Persekutuan Komanditer / Commanditaire Vennootschap (CV) dengan Akte Notaris Cecilia Sri Barlejanti SH, No 01 tanggal 01 Maret 2012. Seiring dengan perkembangan usaha, pada tahun 2018 kami merubah bentuk badan hukum usaha menjadi Perusahaan Terbatas (PT) dengan akta notaris H. Iwan Yusuf Anwari, S.H, No. 19 tanggal 17 Desember 2018 dan Keputusan Menteri Hukum dan HAM Republik Indonesia Nomor AHU-0061417.AH.01.01. Tahun 2018 Tentang Pengesahan Pendirian Badan Hukum Perseroan Terbatas PT. Bina Solusi Purnama tanggal 21 Desember 2018.</p>
                    <p align="justify"> Perusahaan kami bergerak dalam bidang manajemen dan teknik, yaitu kami menyediakan jasa konsultasi terkait : ISO 9001 Sistem Manajemen Mutu, ISO 17025 untuk Laboratorium, ISO 17020 untuk Lembaga Inspeksi, ISO 14001 untuk lingkungan, OHSAS 18001/ISO 45000 Sistem Manajemen Kesehatan Dan Keselamatan  Kerja, ISO 22000 Sistem Manajemen Keamanan Pangan, ISO  21001 Sistem Manajemen Organisasi Pendidikan, ISO 37001 Sistem Manajemen Anti Penyuapan, ISO 31000 Manajemen Risiko, ISO 27001 Sistem Manajemen Keamanan Informasi, Standar Operasional Prosedur (SOP), Manajemen Produksi, Manajemen Logistik, Perencanaan Transportasi, Perancangan Tata Letak Fasilitas/Pabrik Serta Perencanaan Wilayah dan Kota.
                    <p align="justify"> Dengan tenaga ahli yang professional dan berpengalaman, kami berkomitmen untuk memberikan jasa konsultasi pengembangan sistem manajemen yang mudah digunakan oleh organisasi dan untuk meningkatkan pelayanan yang bukan hanya dibangun atas kepentingan bisnis semata tetapi juga memiliki akar pada hubungan baik serta kepuasan konsumen.</p>
                    <p align="justify"> Atas dasar hal itulah kami akan berusaha untuk memberikan yang terbaik dan lebih dari biasanya untuk menciptakan kenyamanan baru bagi konsumen mempercepat, mempermudah pelayanan serta memberikan informasi kepada konsumen yang pada akhirnya akan menggugah atensi konsumen pada organisasi.</p>
                    <!--<p><strong><h4>STRUKTUR ORGANISASI</h4></strong></p>-->
                    <!--<img src="{{ asset('assets/img/struktur-organisasi.png') }}" alt="logo-bsp" style="max-width: 70%">-->
                </div>
                {{-- <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2015</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2020</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul> --}}
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Klien</h2>
                    {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
                </div>
                <div class="row">
                    <!-- Slider main container -->
                    <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        @foreach($client as $post)
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div style="max-height: 70px">
                                <img class="mx-auto" src="{{ asset('assets/img/client/' .$post->image) }}" alt="..." style="max-width: 70px; max-height:70px"/>
                                {{-- <h4>{{ $post->name }}</h4> --}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <!--<div class="swiper-button-prev"></div>-->
                    <!--<div class="swiper-button-next"></div>-->

                    <!-- If we need scrollbar -->
                    <!--{{-- <div class="swiper-scrollbar"></div> --}}-->
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div> --}}
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" oninput="validasi()" name="name" id="name" type="text" placeholder="Your Name *" required/>
                                <div class="invalid-feedback">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" oninput="validasi()" name="email" id="email" type="email" placeholder="Your Email *" required />
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" oninput="validasi()" name="phone" id="phone" type="tel" placeholder="Your Phone *" required/>
                                <div class="invalid-feedback">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" oninput="validasi()" name="message" id="message" placeholder="Your Message *" required></textarea>
                                <div class="invalid-feedback">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div style="display: none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Berhasil</div>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" disabled id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h3 class="text-uppercase" id="title-news"></h2>
                                    <img id="img-news" class="img-fluid d-block mx-auto" src="" alt="..." />
                                    <p id="body-news" style="text-align: justify"></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        {{-- <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <a href="https://api.whatsapp.com/send?phone=6282240022727&amp;text=Saya%20ingin%20tahu%20lebih%20lanjut%20tentang%20layanan%20dari%20Bina%20Solusi%20Purnama" class="mad_button" target="_blank" style="position:fixed; right:25px; bottom:25px; z-index:9999;"><img src="{{ asset('assets/wa.png') }}" alt="wa" style="max-height: 60px;"></a>
        
        <style>
        @media (min-width: 991px){
            .swiper {
                width: 100%;
                height: 200px;
                }
        }
            @media (max-width: 991px) {
                    .swiper {
                width: 50%;
                height: 150px;
                }
            }
        </style>
        
    @endsection

    @section('script')
        <script>
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                slidesPerView: 1, // Menampilkan 3 slide sekaligus
                spaceBetween: 30,
                loop: true,
                loopedSlides: 1,
                autoplay: {
                    delay: 3000, // Waktu jeda antara setiap slide dalam milidetik (ms)
                    disableOnInteraction: false, // Mengaktifkan autoplay saat interaksi pengguna
                  },
                  breakpoints: {
                    // Ketika lebar layar kurang dari atau sama dengan 480px (ukuran ponsel)
                    480: {
                      slidesPerView: 5,
                    },
                  },

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true,
                },

                // Navigation arrows
                // navigation: {
                //     nextEl: '.swiper-button-next',
                //     prevEl: '.swiper-button-prev',
                // },

                // And if we need scrollbar
                // scrollbar: {
                //     el: '.swiper-scrollbar',
                //     draggable: true,
                // },
            });

            function showNews(news){
                // console.log(news);
                $('#title-news').text(news.title);
                // $('#body-news').text(news.body);
                document.getElementById('body-news').innerHTML = news.body;
                $('#img-news').attr('src', "{{ asset('assets/img/news/') }}" + '/' + news.image);
            }

            // $("#portfolio .page-link").on('click', function(event){
            //     // event.stopPropagation();
            //     // event.stopImmediatePropagation();
            //     event.preventDefault();
            //     // console.log(event.target.href);
            //     // window.location.href = event.target.href + "#portfolio";
            //     var url = "/data";
            //     getPageNews(url);
            //     //(... rest of your JS code)
            // });

            // function getPageNews(url) {
            //     $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            //     });
            //     $.ajax({
            //         url: url,
            //         type: 'GET',
            //         dataType: 'json',
            //         success: function(response) {
            //             console.log(response)
            //             $('#data-news').html($(response).find('#data-news').html());
            //             $('#pagination-news').html($(response).find('#pagination-news').html());
            //         },
            //         error: function(err){
            //             console.log(err)
            //         }
            //     });
            // }

            // $("#team .page-link").on('click', function(event){
            //     // event.stopPropagation();
            //     // event.stopImmediatePropagation();
            //     event.preventDefault();
            //     console.log(event.target.href);
            //     window.location.href = event.target.href + "#team";
            //     //(... rest of your JS code)
            // });

            function validasi(){
                var name = $('#name').val();
                var email = $('#email').val();
                var no_hp = $('#phone').val();
                var pesan = $('#message').val();

                if (name && email && no_hp && pesan) {
                    $('#submitButton').prop('disabled', false);
                }
            }
            
            $("#contactForm").submit(function(e){
                e.preventDefault();
                contact();
            });

            function contact(){
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                $.ajax({
                    type:'POST',
                    url:"{{ route('contact') }}",
                    data:{
                        name: $('#name').val(),
                        email: $('#email').val(),
                        no_hp: $('#phone').val(),
                        pesan: $('#message').val()
                    },
                    success:function(data) {
                        $('#submitSuccessMessage').show();
                        $('#name').val('');
                        $('#email').val('');
                        $('#phone').val('');
                        $('#message').val('');
                    },
                    error: function(err) {
                        // console.log(err)
                        alert("Gagal!");
                    }
                });
            }
        </script>
    @endsection
