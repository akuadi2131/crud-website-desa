<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Desa Anjun</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('storage') }}/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('storage') }}/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('storage') }}/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('storage') }}/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('storage') }}/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('storage') }}/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <h2 class="text-white fw-bold m-0">DESA ANJUN</h2>
                </a>
                <div class="ms-auto d-flex align-items-center">
                     <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Anjun,Plered,Purwakarta</small>
                     <small class="ms-4"><i class="fa fa-envelope me-3"></i>DesaAnjun@gmail.com</small>
                    <!-- <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('navbar')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Struktur Desa</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Struktur Desa</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-5">Struktur Desa Anjun.</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <!-- <img class="mb-4" src="{{ asset('storage') }}/assets/img/kepaladesa.jpg" alt=""> -->
                    <!-- <p class="mb-4">Ketika kamu tidak mengambil resiko, jangan pernah berharap akan ada perubahan di hidup mu.</p> -->
                    <h5>Engkos Kosasih, S.IP</h5>
                    <span class="text-primary">KEPALA DESA</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <!-- <img class="mb-4" src="{{ asset('storage') }}/assets/img/nabila2.jpeg" alt=""> -->
                    <!-- <p class="mb-4">Nikmati setiap langkah dalam perjalananmu, syukuri kemajuan kecil yang kamu capai setiap hari.</p> -->
                    <h5>H Jakaria</h5>
                    <span class="text-primary">BPD</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <!-- <img class="mb-4" src="{{ asset('storage') }}/assets/img/dudun2.jpeg" alt=""> -->
                    <!-- <p class="mb-4">Percayalah pada diri sendiri dan semua yang kamu inginkan akan bisa terwujud menjadi kenyataan.</p> -->
                    <h5>Eri Lestari</h5>
                    <span class="text-primary">SEKRETARIS DESA</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <!-- <h1 class="display-5 mb-5">Struktur Desa Anjun.</h1> -->
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <!-- <img class="mb-4" src="{{ asset('storage') }}/assets/img/kepaladesa.jpg" alt=""> -->
                    <!-- <p class="mb-4">Ketika kamu tidak mengambil resiko, jangan pernah berharap akan ada perubahan di hidup mu.</p> -->
                    <h5>Febi Febriani</h5>
                    <span class="text-primary">KEPALA URUSAN TU</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <!-- <img class="mb-4" src="{{ asset('storage') }}/assets/img/nabila2.jpeg" alt=""> -->
                    <!-- <p class="mb-4">Nikmati setiap langkah dalam perjalananmu, syukuri kemajuan kecil yang kamu capai setiap hari.</p> -->
                    <h5>Sri Karismawati</h5>
                    <span class="text-primary">KEPALA URUSAN KEUANGAN</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <!-- <img class="mb-4" src="{{ asset('storage') }}/assets/img/dudun2.jpeg" alt=""> -->
                    <!-- <p class="mb-4">Percayalah pada diri sendiri dan semua yang kamu inginkan akan bisa terwujud menjadi kenyataan.</p> -->
                    <h5>Idzhar Ahmad Mubarok</h5>
                    <span class="text-primary">KEPALA URUSAN PERENCANAAN</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <!-- <h1 class="display-5 mb-5">Struktur Desa Anjun.</h1> -->
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <!-- <img class="mb-4" src="{{ asset('storage') }}/assets/img/kepaladesa.jpg" alt=""> -->
                    <!-- <p class="mb-4">Ketika kamu tidak mengambil resiko, jangan pernah berharap akan ada perubahan di hidup mu.</p> -->
                    <h5>Yogi S</h5>
                    <span class="text-primary">KEPALA SEKSI PELAYANAN</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <!-- <img class="mb-4" src="{{ asset('storage') }}/assets/img/nabila2.jpeg" alt=""> -->
                    <!-- <p class="mb-4">Nikmati setiap langkah dalam perjalananmu, syukuri kemajuan kecil yang kamu capai setiap hari.</p> -->
                    <h5>Iis Risne</h5>
                    <span class="text-primary">KEPALA SEKSI KESEJAHTRAAN</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <!-- <img class="mb-4" src="{{ asset('storage') }}/assets/img/dudun2.jpeg" alt=""> -->
                    <!-- <p class="mb-4">Percayalah pada diri sendiri dan semua yang kamu inginkan akan bisa terwujud menjadi kenyataan.</p> -->
                    <h5>Eliska Krismawati</h5>
                    <span class="text-primary">KEPALA SEKSI PEMERINTAHAN</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <!-- <h1 class="display-5 mb-5">Struktur Desa Anjun.</h1> -->
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <!-- <img class="mb-4" src="{{ asset('storage') }}/assets/img/kepaladesa.jpg" alt=""> -->
                    <!-- <p class="mb-4">Ketika kamu tidak mengambil resiko, jangan pernah berharap akan ada perubahan di hidup mu.</p> -->
                    <h5>Rudi Gunawan</h5>
                    <span class="text-primary">KEPALA DUSUN 1</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <!-- <img class="mb-4" src="{{ asset('storage') }}/assets/img/nabila2.jpeg" alt=""> -->
                    <!-- <p class="mb-4">Nikmati setiap langkah dalam perjalananmu, syukuri kemajuan kecil yang kamu capai setiap hari.</p> -->
                    <h5>Tahyudi</h5>
                    <span class="text-primary">KEPALA DUSUN 2</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <!-- <img class="mb-4" src="{{ asset('storage') }}/assets/img/dudun2.jpeg" alt=""> -->
                    <!-- <p class="mb-4">Percayalah pada diri sendiri dan semua yang kamu inginkan akan bisa terwujud menjadi kenyataan.</p> -->
                    <h5>Iksan Bayon</h5>
                    <span class="text-primary">KEPALA SEKSI</span>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">My Team</p>
                <h1 class="display-5 mb-5">Website Desa</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="{{ asset('storage') }}/assets/img-fluid mb-4" src="img/team-1.jpg" alt="">
                        <h5>Aku_Adiww</h5>
                        <span class="text-primary">231351086</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="{{ asset('storage') }}/assets/img-fluid mb-4" src="img/adi.jpeg" alt="">
                        <h5>Nabila</h5>
                        <span class="text-primary">231351112</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="{{ asset('storage') }}/assets/img-fluid mb-4" src="img/team-3.jpg" alt="">
                        <h5>Dudun</h5>
                        <span class="text-primary">231351174</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="{{ asset('storage') }}/assets/img-fluid mb-4" src="img/team-4.jpg" alt="">
                        <h5>Naura</h5>
                        <span class="text-primary">231351114</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="fw-medium text-light" href="https://htmlcodex.com">HTML Codex</a>
                    Distributed By <a class="fw-medium text-light" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('storage') }}/assets/lib/wow/wow.min.js"></script>
    <script src="{{ asset('storage') }}/assets/lib/easing/easing.min.js"></script>
    <script src="{{ asset('storage') }}/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('storage') }}/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('storage') }}/assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('storage') }}/assets/js/main.js"></script>
</body>

</html>