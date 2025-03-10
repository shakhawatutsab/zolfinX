<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Zolfin Template</title>

        <!-- favicon -->
        <link
            rel="icon"
            href="assets/img/favicon.png"
            sizes="16x16"
            type="image/png"
        />

        <!-- Stylesheet Link -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    </head>
    <body class="t-bg-light-2">
        <!-- Preloader -->
        <div class="content preloader">
            <div id="inTurnFadingTextG">
                <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">Z</div>
                <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">O</div>
                <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">L</div>
                <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">F</div>
                <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">I</div>
                <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">N</div>
            </div>
        </div>
        <!-- Preloader -->

        <!-- Header  -->
        <header class="l-header active t-bg-light border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-7 col-lg-3 col-xl-2">
                        <div class="brand">
                            <a href="index" class="t-link">
                                <img
                                    src="assets/img/logo.png"
                                    alt="zolfin"
                                    class="img-fluid w-100"
                                />
                            </a>
                        </div>
                    </div>
                    <div class="col-5 col-lg-9 col-xl-8 text-right">
                        <div class="zol-menu-wrapper">
                            <div
                                class="zol-menu-toggle d-inline-block d-lg-none"
                            >
                                <span class="zol-menu-open">
                                    <i class="las la-bars"></i>
                                </span>
                                <span class="zol-menu-close">
                                    <i class="las la-times"></i>
                                </span>
                            </div>
                            <ul class="t-list zol-menu">
                                <li
                                    class="zol-menu__list zol-menu__current"
                                >
                                    <a href="{{ route('home') }}" class="t-link zol-menu__link"
                                        >home</a
                                    >

                                </li>

                                <li class="zol-menu__list">
                                    <a href="{{ route('blog') }}" class="t-link zol-menu__link"
                                        >blog</a
                                    >
                                </li>

                                @guest
                                <li class="zol-menu__list">
                                    <a href="{{ route('register') }}" class="t-link zol-menu__link"
                                        >Register</a
                                    >
                                </li>

                                <li class="zol-menu__list">
                                    <a href="{{ route('login') }}" class="t-link zol-menu__link"
                                        >Login</a
                                    >
                                </li>
                                @endguest

                                @auth
                                <li class="zol-menu__list">
                                    <a href="{{ route('dashboard') }}" class="t-link zol-menu__link"
                                        >Dashboard</a
                                    >
                                </li>

                                <form action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn mt-3">
                                        Logout
                                    </button>
                                </form>

                                </li>
                                @endauth





                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 d-none d-xl-block">
                        <a
                            href="#"
                            class="t-link bttn bttn-sm bttn-round bttn-primary"
                        >
                            +88 01701616500
                        </a>
                    </div>
                </div>
            </div>
        </header>



        @yield('content')




         <!-- Back To Top -->
         <div class="back-to-top">
            <span class="back-top">
                <i class="las la-angle-up"></i>
            </span>
        </div>
        <!-- Back To Top End -->

        <!-- Footer  -->
        <footer class="footer-style-2">
            <div class="footer-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 t-mb-30 mb-lg-0">
                            <div class="brand mx-auto mx-lg-0">
                                <a href="index" class="t-link">
                                    <img
                                        src="assets/img/logo.png"
                                        alt="zolfin"
                                        class="img-fluid w-100"
                                    />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="footer-top__nav">
                                <ul class="t-list footer-top__list">
                                    <li class="footer-top__list-item">
                                        <a href="#" class="t-link footer-top__link text-uppercase sm-text">
                                            projects
                                        </a>
                                    </li>
                                    <li class="footer-top__list-item">
                                        <a href="#" class="t-link footer-top__link text-uppercase sm-text">
                                            awards
                                        </a>
                                    </li>
                                    <li class="footer-top__list-item">
                                        <a href="#" class="t-link footer-top__link text-uppercase sm-text">
                                            clients
                                        </a>
                                    </li>
                                    <li class="footer-top__list-item">
                                        <a href="#" class="t-link footer-top__link text-uppercase sm-text">
                                            contact
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom t-pt-30 t-pb-30 t-bg-theta">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div
                            class="col-md-4 t-mb-15 mb-md-0 text-center text-md-left t-text-light sm-text"
                        >
                            &copy; 2020
                            <a href="#" class="t-link t-link-alpha">Zolfin</a>
                                All Rights Reserved.
                        </div>
                        <div
                            class="col-md-4 t-mb-15 mb-md-0 text-center t-text-light sm-text"
                        >
                        Made with by
                            <a href="#" class="t-link t-link-alpha">
                                <i class="las la-heart"></i>
                            </a>
                            Plugin Magnet
                        </div>
                        <div class="col-md-4">
                            <ul
                                class="t-list social-list justify-content-center justify-content-md-end"
                            >
                                <li class="social-list__item">
                                    <a
                                        href="#"
                                        class="t-link social-icon-light social-icon-light--hover"
                                    >
                                        <span class="xlg-text">
                                            <i class="lab la-facebook-f"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item">
                                    <a
                                        href="#"
                                        class="t-link social-icon-light social-icon-light--hover"
                                    >
                                        <span class="xlg-text">
                                            <i class="lab la-twitter"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item">
                                    <a
                                        href="#"
                                        class="t-link social-icon-light social-icon-light--hover"
                                    >
                                        <span class="xlg-text">
                                            <i class="lab la-instagram"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item">
                                    <a
                                        href="#"
                                        class="t-link social-icon-light social-icon-light--hover"
                                    >
                                        <span class="xlg-text">
                                            <i class="lab la-linkedin-in"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- jquery -->
        <script src="{{asset('assets/js/jquery.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Slick Slider  -->
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <!-- Nice Select  -->
        <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <!-- Owl carousel -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- Popup  -->
        <script src="{{asset('assets/js/magnafic-popup.js')}}"></script>
        <!-- Animation on Scroll  -->
        <script src="{{asset('assets/js/sal.js')}}"></script>
        <!-- Main script -->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
