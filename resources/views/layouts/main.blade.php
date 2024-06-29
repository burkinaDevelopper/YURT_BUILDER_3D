<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>3Dbuild</title>
    <link href="{{asset('./assets/css/gdpr-cookie.min.css')}}" rel="stylesheet">
    <link href="{{asset('./assets/fonts/cloudicon/cloudicon.css')}}" rel="stylesheet"
        onload="if(media!='all')media='all'">
    <link href="{{asset('./assets/fonts/fontawesome/css/all.css')}}" rel="stylesheet"
        onload="if(media!='all')media='all'">
    <link href="{{asset('./assets/fonts/evafeat/evafeat.css')}}" rel="stylesheet" onload="if(media!='all')media='all'">
    <!-- RTL STYLES-->
    <link href="{{asset('./assets/css/rtl/bootstrap-rtl.min.css')}}" disabled="true" rel="stylesheet" class="rtl">
    <link href="./assets/css/rtl/style-rtl.min.css" disabled="true" rel="stylesheet" class="rtl">
    <!-- CSS styles -->
    <link href="{{asset('./assets/css/bootstrap.min.css')}}" rel="stylesheet" class="ltr"
        onload="if(media!='all')media='all'">
    <link href="{{asset('./assets/css/flickity.min.css')}}" rel="stylesheet" onload="if(media!='all')media='all'">
    <link href="{{asset('./assets/css/aos.min.css')}}" rel="stylesheet" onload="if(media!='all')media='all'">
    <link href="{{asset('./assets/css/swiper.min.css')}}" rel="stylesheet" onload="if(media!='all')media='all'">
    <link href="{{asset('./assets/css/animate.min.css')}}" rel="stylesheet" onload="if(media!='all')media='all'">
    <link href="{{asset('./assets/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('./assets/css/custom.css')}}" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<!-- ***** NEWS ***** -->

<body style="overflow-x: hidden;position: relative;">

    <!-- ***** NAV MENU DESKTOP ****** -->

    <!-- ***** NAV MENU MOBILE ****** -->
   
    <!-- ***** Sidebar ****** -->
    @include('includes.header')
    <!-- ***** TRANSLATION ****** -->
    @yield('content')
    {{-- footer --}}

    <footer class="footer">
        <img class="logo-bg logo-footer" src="./assets/img/symbol.svg" alt="logo">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="heading">Yurt</div>
                        <ul class="footer-menu">
                            <img class="svg logo-menu d-block" src="{{asset('assets/img/location-logo.webp')}}"
                                alt="logo Antler">
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="heading">CONTACT US</div>
                        <ul class="footer-menu">
                            <li class="menu-item"><a href="login">PRICING / FEATURES</a></li>
                            <li class="menu-item"><a href="knowledgebase-list">PHOTO GALLERY</a></li>
                            <li class="menu-item"><a href="contact">BLOG</a></li>
                            <li class="menu-item"><a href="faq">CUSTOMER SUPPORT</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="heading">WHY PACIFIC YURTS?</div>
                        <ul class="footer-menu">
                            <li class="menu-item"><a href="about">ABOUT OUR COMPANY</a> </li>
                            <li class="menu-item"><a href="elements">YURT VACATIONS</a></li>
                            <li class="menu-item"><a href="blog-details">YURT BUILDER 3D™</a></li>
                            <li class="menu-item"><a href="legal">DOWNLOADS</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        {{-- <a><img class="svg logo-footer d-block" src="./assets/img/logo.svg" alt="logo"></a> --}}
                        {{-- <a><img class="svg logo-footer d-none" src="{{asset('assets/img/yuts-foot.png')}}"
                                alt="logo"></a> --}}
                        <div class="copyright">© Copyright 2024 | Pacific Yurts. All Rights Reserved. Privacy Policy |
                            Terms & Conditions</div>
                        <div class="soc-icons">
                            <a href="{{config('contact.social.facebook')}}"><i
                                    class="fab fa-facebook-f withborder noshadow"></i></a>
                            <a href="{{config('contact.social.youtube')}}"><i
                                    class="fab fa-youtube withborder noshadow"></i></a>
                            <a href="{{config('contact.social.twitter')}}"><i
                                    class="fab fa-twitter withborder noshadow"></i></a>
                            <a href="{{config('contact.social.instagram')}}"><i
                                    class="fab fa-instagram withborder noshadow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="subcribe news">
            <div class="container">
                <div class="row">
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form action="{{route('newspaper')}}" class="w-100" method="POST">
                        @csrf
                        <div class="col-md-6 offset-md-3">
                            <div class="general-input">
                                <input class="fill-input" type="email" name="email" placeholder="Email">
                                <input type="submit" value="SUBSCRIBE"
                                    class="btn btn-default-yellow-fill initial-transform">
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-3 text-center pt-4">
                            <p>Subscribe to our newsletter to receive news and updates</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="footer-menu">
                            <li id="drop-lng" class="btn-lang-footer btn-group btn-group-toggle">

                                <label data-lng="es-ES" for="option4" class="btn btn-secondary me-1 styletextDirection"
                                    data-value="ltr">
                                    <input type="radio" name="options" id="option4"> Address:
                                </label>
                            </li>
                            <li class="menu-item by">Pacific Yurts
                                77456 Hwy 99 Cottage Grove, Oregon 97424 USA
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="payment-list">
                            <li>
                                <p>contact</p>
                            </li>
                            <li>{{config('contact.tel.phone')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Javascript -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/typed.js')}}"></script>
    <script defer src="{{asset('assets/js/popper.min.js')}}"></script>
    <script defer src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script defer src="{{asset('assets/js/jquery.countdown.js')}}"></script>
    <script defer src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script defer src="{{asset('assets/js/slick.min.js')}}"></script>
    <script defer src="{{asset('assets/js/flickity.pkgd.min.js')}}"></script>
    <script defer src="{{asset('assets/js/flickity-fade.min.js')}}"></script>
    <script defer src="{{asset('assets/js/aos.min.js')}}"></script>
    <script defer src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script defer src="{{asset('assets/js/jquery.scrollme.min.js')}}"></script>
    <script defer src="{{asset('assets/js/swiper.min.js')}}"></script>
    <script async src="{{asset('assets/js/lazysizes.min.js')}}"></script>
    <script src="assets/js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script defer src="{{asset('assets/js/scripts.min.js')}}"></script>
    <script defer src="{{asset('assets/js/settings-init.js')}}"></script>
    <script>
        var typed3 = new Typed('#typed3', {
            strings: ["for personal use", "for professional use", "for government use"],
            typeSpeed: 50,
            backSpeed: 20,
            smartBackspace: true,
            loop: true
        });
    </script>
    <script>
        $("#nav-toggle").click(function () {
            $(".menu-wrap.mobile, .menu-toggle").toggleClass("active");
        });
    </script>
    <script>
        var typed1 = new Typed('#typed1', {
            strings: ["performance", "flexibility", "scalability."],
            typeSpeed: 50,
            backSpeed: 20,
            smartBackspace: true,
            loop: true
        });
        var typed1 = new Typed('#typed2', {
            strings: ["Protection", "Sophisticated", "Flexibility"],
            typeSpeed: 100,
            backSpeed: 50,
            smartBackspace: true,
            loop: true
        });
    </script>
</body>

</html>