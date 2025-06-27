<!DOCTYPE html>
<!--
   Template Name: medisch
   Version: 1.0.0
   Author:  Webstrot
   
   -->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js">
   <![endif]-->
<!--[if IE 9]>
   <html lang="en" class="ie9 no-js">
      <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx" dir="ltr">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>Medical</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!--Template style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/responsive.css') }}" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav-icon.png" />
</head>
<style>
    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #25d366;
        color: white;
        border-radius: 50%;
        padding: 20px;
        font-size: 32px;
        z-index: 999;
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        transition: background-color 0.3s ease;
    }

    .whatsapp-float:hover {
        background-color: #128c7e;
        color: white;
        text-decoration: none;
    }
</style>

<body>
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('images/preloader.gif') }}" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- WhatsApp Button -->
    <a href="https://wa.me/{{ App\Helpers\SettingHelper::getSetting('whatsapp') }}" 
    class="whatsapp-float" 
    target="_blank" 
    title="Chat via WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>
    <!-- top to return -->
    {{-- <a href="javascript:;" id="return-to-top"><i class="fas fa-angle-double-up"></i></a> --}}
    <!-- header start -->
    <div class="main-header-wrapper float_left">
        <div class="sb-main-header">
            <div class="top-header-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-8">
                            <div class="sb-top-left-section">
                                <div>
                                    <a href="mailto:{{ App\Helpers\SettingHelper::getSetting('email') }}"><span><i
                                                class="fas fa-envelope"></i></span>&nbsp;
                                        &nbsp;{{ App\Helpers\SettingHelper::getSetting('email') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-4 p-0">
                            <div class="sb-top-right-section">
                                <ul>
                                    <li class="login-btn">
                                        @auth
                                            <span>
                                                <a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
                                            </span>
                                        @else
                                            <span>
                                                <a href="{{ route('login') }}">Login</a>
                                                /
                                                <a href="{{ route('register') }}">Register</a>
                                            </span>
                                        @endauth

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-items-wrapper d-xl-block d-lg-block d-md-none d-sm-none d-none ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <nav class="navbar navbar-expand-lg">
                                <ul class="navbar-nav">
                                    <li>
                                        <a class="navbar-brand" href="/">
                                            <img src="{{ asset('images/logonew.png') }}" width="150" alt="img">
                                        </a>
                                    </li>
                                    <li class="nav-item ps-rel">
                                        <a class="nav-link" href="/">Home
                                        </a>
                                    </li>
                                    <li class="nav-item ps-rel">
                                        <a class="nav-link" href="{{ route('doctors.index') }}">Doctors
                                        </a>
                                    </li>

                                    <li class="nav-item ps-rel">
                                        <a class="nav-link active" href="{{ route('blog.index') }}">Blog
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <form class="d-flex justify-content-end ps-rel" action="{{ route('blog.index') }}"
                                method="GET">
                                <input class="" placeholder="Search" name="search"
                                    value="{{ request()->get('search') }}" type="text" aria-label="Search">
                                <span><i class="fas fa-search"></i></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="mobile-menu-wrapper d-xl-none d-lg-none d-md-block d-sm-block">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-6 col-sm-6 col-6">
                            <div class="mobile-logo">
                                <a href="javascript:;">
                                    <img src="{{ asset('images/logo.png') }}" width="200" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="d-flex  justify-content-end">
                                <div class="d-flex align-items-center">
                                    <div class="toggle-main-wrapper mt-2" id="sidebar-toggle">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <div class="sidebar_logo">
                    <a href="javascript:;"><img src="{{ asset('images/logo.png') }}" alt="img" width="200"></a>
                </div>
                <div id="toggle_close">&times;</div>
                <div id='cssmenu'>
                    <ul class="float_left">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('doctors.index') }}">Doctors</a></li>
                        <li><a href="{{ route('blog.index') }}">Blog</a></li>
                        <li class="border-none">
                            <ul class="social-icon">
                                <li><a href="{{ App\Helpers\SettingHelper::getSetting('facebook') }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ App\Helpers\SettingHelper::getSetting('twitter') }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ App\Helpers\SettingHelper::getSetting('instagram') }}"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->
    @yield('content')
    <!-- partner section end -->
    <!-- footer section start -->
    <div class="footer-main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                    <div class="sb-footer-section">
                        <div class="footer-logo">
                            <img src="{{ asset('images/logoklinik (1).jpg') }}" alt="img" width="200">
                        </div>
                        <ul>
                            <li><a href="javascript:;"><i class="fas fa-map-marker-alt"></i>ADDRESS
                                    <br>{{ App\Helpers\SettingHelper::getSetting('address') }}</a>
                            </li>
                            <li><a href="javascript:;"><i class="fas fa-phone"></i>PHONE<br>
                                    {{ App\Helpers\SettingHelper::getSetting('phone') }}</a>
                            </li>
                            <li><a href="javascript:;"><i class="fas fa-envelope"></i>EMAIL<br>
                                    {{ App\Helpers\SettingHelper::getSetting('email') }}</a>
                            </li>

                            <li>
                                <ul class="footer-media">
                                    <li><a href="{{ App\Helpers\SettingHelper::getSetting('facebook') }}"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ App\Helpers\SettingHelper::getSetting('twitter') }}"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ App\Helpers\SettingHelper::getSetting('instagram') }}"><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="{{ route('doctors.index') }}"><i class="fas fa-angle-right"></i>Doctor</a>
                            </li>
                            <li><a href="{{ route('blog.index') }}"><i class="fas fa-angle-right"></i>Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <p>© Copyright 2025 | All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- footer section end -->
    <!-- Side Panel -->
    <script src="{{ asset('front/js/jquery-3.6.0.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/wow.js') }}"></script>
    <script src="{{ asset('front/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/contact_form.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
    <!-- custom js-->
    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            callback: function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();
    </script>
    <script>
        function actionToggleOne() {
            let action = document.querySelector('.contact-action');
            action.classList.toggle('open1');
        }

        function actionToggleTwo() {
            let action = document.querySelector('.action-1');
            action.classList.toggle('open2');
        }

        function actionToggleThree() {
            let action = document.querySelector('.action-2');
            action.classList.toggle('open3');
        }

        function actionToggleFour() {
            let action = document.querySelector('.action-3');
            action.classList.toggle('open4');
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> {{-- SweetAlert2 for session messages --}}

    <script>
        // SweetAlert for session messages
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: true,
                timer: 3000
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
                showConfirmButton: true
            });
        @endif

        // This is for validation errors that come back from the server,
        // specifically for cases where authentication fails due to incorrect credentials
        // and you return back with an error message (e.g., in Laravel's Fortify/Auth scaffolding)
        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Validation Error!',
                html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
                showConfirmButton: true
            });
        @endif
    </script>

    @yield('scripts')
</body>

</html>
˜
