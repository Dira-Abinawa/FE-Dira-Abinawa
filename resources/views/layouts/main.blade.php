<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link of CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawsome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Kwartir Ranting Padalarang</title>
    <link rel="icon" type="image/png" href="assets/images/fav-icon.png">
</head>

<body>
    <!-- Navigation area start -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="main-responsive-nav">
            <div class="container-fluid plr-100">
                <div class="mobile-nav">
                    <a href="index.html" class="logo"><img src="{{ asset('assets/images/logosu.png') }}" style="width: 100px" alt="logo" /></a>
                    <ul class="menu-sidebar menu-small-device">
                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- Menu For Desktop Device -->
        <div class="main-nav plr-100">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/" style="width: 140px;">
                        <img src="{{asset('assets/images/logosu.png')}}" alt="logo"/>
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="/" class="nav-link active">Beranda</a></li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Profil</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Sejarah</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="{{route('sejarahPadalarang')}}" class="nav-link">Pramuka Padalarang</a></li>
                                            <li class="nav-item"><a href="{{route('sejarahDira')}}" class="nav-link">Dira Abinawa</a></li>
                                        </ul>
                                    </li> <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Atribute</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="{{route('lambangPdl')}}" class="nav-link">Lambang</a></li>
                                            <li class="nav-item"><a href="{{route('sandiDira')}}" class="nav-link">Sandi</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Organisasi</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Kepengurusan</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="{{route('dewanKerja')}}" class="nav-link">Kwartir Ranting</a></li>
                                            <li class="nav-item"><a href="{{route('kwartirRanting')}}" class="nav-link">Dewan Kerja</a></li>
                                        </ul>
                                    </li> 
                                    <li class="nav-item"><a href="{{route('detailSaka')}}" class="nav-link">Satuan Karya</a></li>
                                    <li class="nav-item"><a href="{{route('detailUnit')}}" class="nav-link">Unit</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Info </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{route('kegiatan')}}" class="nav-link">Kegiatan</a></li>
                                    <li class="nav-item"><a href="{{route('hubungiKami')}}" class="nav-link">Hubungi Kami</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">Warta Pramuka</a></li>
                        </ul>
                        <div class="menu-sidebar">
                            <ul>
                                <li><button class="popup-button"><i class="fas fa-search"></i></button></li>
                                <li>
                                    <a href="/login">
                                        @auth
                                            <i class="fa fa-user"></i> | Hi {{ Auth::user()->name }} !!
                                        @else
                                            <i class="fa fa-sign"></i> Login
                                        @endauth
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navigation area end -->


    @yield('content')


    <!-- Footer area start -->
    <section class="footer">
        <div class="container">
            <div class="footer-content ptb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-logo-area">
                            <a href="/"><img src="{{asset('assets/images/logos.png')}}" alt="image"></a>
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit tempor incididunt labore dolore
                                magna aliqua consec tetur adipiscing elite sed do labor.</p>
                            <div class="footer-social-area">
                                <ul>
                                    <li><span>Follow Us: </span></li>
                                    <li><a href="https://www.facebook.com/" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.linkedin.com/" target="_blank"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://twitter.com/" target="_blank"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank"><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-links footer-contact">
                            <h3>Get In Touch</h3>
                            <div class="footer-contact-card">
                                <i class="fas fa-map-marker-alt"></i>
                                <h5>Location: </h5>
                                <p><a href="https://maps.app.goo.gl/1g83dmGYTPxAD9oU7" target="_blank">Jl. G.A.
                                        Manulang No.84, Jayamekar, Kec. Padalarang, Kabupaten Bandung Barat, Jawa Barat
                                        40553</a></p>
                            </div>
                            <div class="footer-contact-card">
                                <i class="fas fa-envelope"></i>
                                <h5>Email: </h5>
                                <p><a href="mailto:dkr.padalarang9@gmail.com">dkr.padalarang9@gmail.com</a></p>
                            </div>
                            <div class="footer-contact-card">
                                <i class="fas fa-phone-alt"></i>
                                <h5>Phone: </h5>
                                <p><a href="tel:+13454567877">+1-3454-5678-77</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-links footer-newsletter">
                            <h3>Subscribe</h3>
                            <p>Subscribe To Our Newsletter To Get Our Update News!</p>
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="input-newsletter form-control" placeholder="Your Email"
                                    name="EMAIL" required autocomplete="off">
                                <button class="default-button news-btn">Subscribe Now</button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>© <strong>IT DKR</strong> All Rights Reserved By <a target="_blank"
                        href="https://hibootstrap.com/">Pramuka Padalarang</a></p>
            </div>
        </div>
    </section>
    <!-- Footer Area end -->

    <!-- popup area start -->
    <div class="popup">
        <div class="popup-content">
            <button class="close-btn" id="popup-close"><i class="fas fa-times"></i></button>
            <form>
                <div class="input-group search-box">
                    <input type="text" class="form-control" placeholder="Search">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- popup area end -->

    <div class="go-top"><i class="fas fa-chevron-up"></i></div>

    <!-- Link of JS files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel2.thumbs.min.js') }}"></script>
    <script src="{{ asset('assets/js/appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
