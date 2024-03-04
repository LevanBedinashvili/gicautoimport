<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/motex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 11:45:38 GMT -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content>
    <meta name="keywords" content>

    <title>GIC AUTOIMPORT</title>

    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <link rel="stylesheet" href="{{ asset('guest/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/style.css') }}">
</head>

<body>

    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>


    <header class="header">
{{--
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <div class="header-top-left">
                        <div class="header-top-contact">
                            <ul>
                                <li><a
                                        href="https://live.themewild.com/cdn-cgi/l/email-protection#5831363e37183d20393528343d763b3735"><i
                                            class="far fa-envelopes"></i>
                                        <span class="__cf_email__"
                                            data-cfemail="bad3d4dcd5fadfc2dbd7cad6df94d9d5d7">[email&#160;protected]</span></a>
                                </li>
                                <li><a href="tel:+21236547898"><i class="far fa-phone-volume"></i> +2 123 654 7898</a>
                                </li>
                                <li><a href="#"><i class="far fa-alarm-clock"></i> Sun - Fri (08AM - 10PM)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-link">
                            <a href="#"><i class="far fa-arrow-right-to-arc"></i> Login</a>
                            <a href="#"><i class="far fa-user-vneck"></i> Register</a>
                        </div>
                        <div class="header-top-social">
                            <span>Follow Us: </span>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('guest/carlogo.jpg') }}" alt="logo" style="width: 100px; height: 100px;">
                    </a>
                    <div class="mobile-menu-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Calculator</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Car Body Types</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Why Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Brands</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Authorization</a></li>
                        </ul>
                        <div class="nav-right">
                            {{-- <div class="search-btn">
                                <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
                            </div>
                            <div class="cart-btn">
                                <a href="#" class="nav-right-link"><i class="far fa-cart-plus"></i><span>0</span></a>
                            </div> --}}
                            {{-- <div class="nav-right-btn mt-2">
                                <a href="{{ route('login') }}" class="theme-btn"><span class="far fa-user"></span>Authorization</a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="search-area">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Type Keyword...">
                                <button type="submit" class="search-icon-btn"><i class="far fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <div class="sidebar-popup">
        <div class="sidebar-wrapper">
            <div class="sidebar-content">
                <button type="button" class="close-sidebar-popup"><i class="far fa-xmark"></i></button>
                <div class="sidebar-logo">
                    <img src="assets/img/logo/logo.png" alt>
                </div>
                <div class="sidebar-about">
                    <h4>About Us</h4>
                    <p>                                    Drive into a world of possibilities with us. Your journey begins here – where quality meets affordability, and personalized service makes every mile memorable. Find your dream ride today.
                    </p>
                </div>
                <div class="sidebar-contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>
                            <h6>Email</h6>
                            <a
                                href="https://live.themewild.com/cdn-cgi/l/email-protection#b4dddad2dbf4d1ccd5d9c4d8d19ad7dbd9"><i
                                    class="far fa-envelope"></i><span class="__cf_email__"
                                    data-cfemail="422b2c242d02273a232f322e276c212d2f">[email&#160;protected]</span></a>
                        </li>
                        <li>
                            <h6>Phone</h6>
                            <a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a>
                        </li>
                        <li>
                            <h6>Address</h6>
                            <a href="#"><i class="far fa-location-dot"></i>25/B Milford Road, New York</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="sidebar-social">
                    <h4>Follow Us</h4>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div> --}}
            </div>
        </div>
    </div>



    <footer class="footer-area">
        <div class="footer-widget">
            {{-- <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="assets/img/logo/logo-light.png" alt>
                            </a>
                            <p class="mb-3">
                                Drive into a world of possibilities with our dealership. Your journey begins here – where quality meets affordability, and personalized service makes every mile memorable. Find your dream ride today.
                            </p>
                            <ul class="footer-contact">
                                <li><a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a></li>
                                <li><i class="far fa-map-marker-alt"></i>25/B Milford Road, New York</li>
                                <li><a
                                        href="https://live.themewild.com/cdn-cgi/l/email-protection#adc4c3cbc2edc8d5ccc0ddc1c883cec2c0"><i
                                            class="far fa-envelope"></i><span class="__cf_email__"
                                            data-cfemail="fc95929a93bc99849d918c9099d29f9391">[email&#160;protected]</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Update News</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Testimonials</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Privacy policy</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Our Dealers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Support Center</h4>
                            <ul class="footer-list">
                                <li><a href="#"><i class="fas fa-caret-right"></i> FAQ's</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Affiliates</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Booking Tips</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Sell Vehicles</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Newsletter</h4>
                            <div class="footer-newsletter">
                                <p>Subscribe Our Newsletter To Get Latest Update And News</p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                        <button class="theme-btn" type="submit">
                                            Subscribe Now <i class="far fa-paper-plane"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright 2024.  All Rights Reserved.
                        </p>
                    </div>
                    {{-- <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>


    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('guest/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('guest/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('guest/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('guest/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('guest/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('guest/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('guest/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('guest/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('guest/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('guest/js/counter-up.js') }}"></script>
    <script src="{{ asset('guest/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('guest/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('guest/js/wow.min.js') }}"></script>
    <script src="{{ asset('guest/js/main.js') }}"></script>
</body>

<!-- Mirrored from live.themewild.com/motex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 11:46:08 GMT -->

</html>
