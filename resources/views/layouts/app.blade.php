<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap4/bootstrap.min.css')}}"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('back/components/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick-1.8.0/slick.cs')}}s">
        @isset($page)
            @if ($page == 'Home')
                <link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
                <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
            @endif

            @if ($page == 'Shop')
                <link rel="stylesheet" type="text/css" href="{{asset('css/shop_styles.css')}}">
                <link rel="stylesheet" type="text/css" href="{{asset('css/shop_responsive.css')}}">
            @endif

            @if ($page == 'Contact')
                <link rel="stylesheet" type="text/css" href="{{asset('css/contact_styles.css')}}">
                <link rel="stylesheet" type="text/css" href="{{asset('css/contact_responsive.css')}}">        
            @endif

            @if ($page == "Cart")
                <link rel="stylesheet" type="text/css" href="{{asset('css/cart_styles.css')}}">
                <link rel="stylesheet" type="text/css" href="{{asset('css/cart_responsive.css')}}">
            @endif
        @else
            <link rel="stylesheet" type="text/css" href="{{asset('css/contact_styles.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css/contact_responsive.css')}}">        
        @endisset
        <title>{{ config('app.name', 'TadTech')}}</title>
    </head>
    <body>
        <div class="super_container">
            @include('inc.navbar')
            @yield('content')

            @isset($page)
                @if ($page != "Contact" && $page != "Cart")
                    <!-- Brands -->
                    <div class="brands">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="brands_slider_container">
                                        <!-- Brands Slider -->
                                        <div class="owl-carousel owl-theme brands_slider">
                                            
                                            <div class="owl-item">
                                                <div class="brands_item d-flex flex-column justify-content-center">
                                                    <img src="{{asset('images/brands_1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="brands_item d-flex flex-column justify-content-center">
                                                    <img src="{{asset('images/brands_2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="brands_item d-flex flex-column justify-content-center">
                                                    <img src="{{asset('images/brands_3.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="brands_item d-flex flex-column justify-content-center">
                                                    <img src="{{asset('images/brands_4.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="brands_item d-flex flex-column justify-content-center">
                                                    <img src="{{asset('images/brands_5.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="brands_item d-flex flex-column justify-content-center">
                                                    <img src="{{asset('images/brands_6.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="brands_item d-flex flex-column justify-content-center">
                                                    <img src="{{asset('images/brands_7.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="brands_item d-flex flex-column justify-content-center">
                                                    <img src="{{asset('images/brands_8.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Brands Slider Navigation -->
                                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif
            @endisset
           

            {{-- footer --}}
            <footer class="footer">
                <div class="container">
                    <div class="row">
        
                        <div class="col-lg-3 footer_col">
                            <div class="footer_column footer_contact">
                                <div class="logo_container">
                                    <div class="logo">
                                        <a href="#">
                                            {{ config('app.name', 'TadTech')}}
                                        </a>
                                    </div>
                                </div>
                                <div class="footer_title">Got Question? Call Us 24/7</div>
                                <div class="footer_phone">+38 068 005 3570</div>
                                <div class="footer_contact_text">
                                    <p>17 Princess Road, London</p>
                                    <p>Grester London NW18JR, UK</p>
                                </div>
                                <div class="footer_social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-lg-2 offset-lg-2">
                            <div class="footer_column">
                                <div class="footer_title">Find it Fast</div>
                                <ul class="footer_list">
                                    <li><a href="#">Computers & Laptops</a></li>
                                    <li><a href="#">Cameras & Photos</a></li>
                                    <li><a href="#">Hardware</a></li>
                                    <li><a href="#">Smartphones & Tablets</a></li>
                                    <li><a href="#">TV & Audio</a></li>
                                </ul>
                                <div class="footer_subtitle">Gadgets</div>
                                <ul class="footer_list">
                                    <li><a href="#">Car Electronics</a></li>
                                </ul>
                            </div>
                        </div>
        
                        <div class="col-lg-2">
                            <div class="footer_column">
                                <ul class="footer_list footer_list_2">
                                    <li><a href="#">Video Games & Consoles</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Cameras & Photos</a></li>
                                    <li><a href="#">Hardware</a></li>
                                    <li><a href="#">Computers & Laptops</a></li>
                                </ul>
                            </div>
                        </div>
        
                        <div class="col-lg-2">
                            <div class="footer_column">
                                <div class="footer_title">Customer Care</div>
                                <ul class="footer_list">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Customer Services</a></li>
                                    <li><a href="#">Returns / Exchange</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Product Support</a></li>
                                </ul>
                            </div>
                        </div>
        
                    </div>
                </div>
            </footer>

            <!-- Copyright -->
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
        
                                <div class="copyright_content">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>
                                <div class="logos ml-sm-auto">
                                    <ul class="logos_list">
                                        <li><a href="#"><img src="{{asset('images/logos_1.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('images/logos_2.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('images/logos_3.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('images/logos_4.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('css/bootstrap4/popper.js')}}"></script>
        <script src="{{asset('css/bootstrap4/bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
        <script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
        <script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
        <script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
        <script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
        <script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
        <script src="{{asset('plugins/slick-1.8.0/slick.js')}}"></script>
        <script src="{{asset('plugins/easing/easing.js')}}"></script>
        <script src="{{asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
        <script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
        @isset($page)
            @if ($page == "Home")
                <script src="{{asset('js/custom.js')}}"></script>
            @endif

            @if ($page == "Shop")
                <script src="{{asset('js/shop_custom.js')}}"></script>
            @endif

            @if ($page == "Contact")
                <script src="{{asset('js/contact_custom.js')}}"></script>
            @endif

            @if ($page == "Cart")
                <script src="{{asset('js/cart_custom.js')}}"></script>
            @endif
        @endisset
    </body>
</html>