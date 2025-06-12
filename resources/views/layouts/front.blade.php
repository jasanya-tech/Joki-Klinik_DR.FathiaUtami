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

<body>
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('images/preloader.gif') }}" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- top to return -->
    <a href="javascript:;" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
    <!-- header start -->
    <div class="main-header-wrapper float_left">
        <div class="sb-main-header">
            <div class="top-header-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-8">
                            <div class="sb-top-left-section">
                                <div>
                                    <a href="/mailto:{{ App\Helpers\SettingHelper::getSetting('email') }}"><span><i
                                                class="fas fa-envelope"></i></span>&nbsp;
                                        &nbsp;{{ App\Helpers\SettingHelper::getSetting('email') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-4 p-0">
                            <div class="sb-top-right-section">
                                <ul>
                                    <li>
                                        <ul class="d-xl-flex d-lg-flex d-md-none d-sm-none d-none">
                                            <li><a href="{{ App\Helpers\SettingHelper::getSetting('facebook') }}"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{ App\Helpers\SettingHelper::getSetting('twitter') }}"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="{{ App\Helpers\SettingHelper::getSetting('instagram') }}"><i
                                                        class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="login-btn">
                                        @auth
                                            <span>
                                                <a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
                                            </span>
                                        @else
                                            <span>
                                                <a href="{{ route('login') }}">Login</a>
                                                /
                                                <a href="register.html">Register</a>
                                            </span>
                                        @endauth

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid-header-section d-xl-block d-lg-block d-md-none d-sm-none d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="sb_logo_wrapper">
                                <a href="/">
                                    <img src="{{ asset('images/logo.png') }}" alt="img" width="200">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                            <div class="sb-mid-right-section">
                                <ul>
                                    <li>
                                        <a href="contact-us.html"><i class="fas fa-map-marker-alt"></i></a>
                                        <a
                                            href="contact-us.html">{{ App\Helpers\SettingHelper::getSetting('address') }}</a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html"><i class="fas fa-phone"></i></a>
                                        <a href="contact-us.html">Call Us 24/7<br>
                                            {{ App\Helpers\SettingHelper::getSetting('phone') }}</a>
                                        </a>
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
                                    <li class="nav-item ps-rel">
                                        <a class="nav-link" href="/">Home
                                        </a>
                                    </li>
                                    <li class="nav-item ps-rel">
                                        <a class="nav-link" href="{{ route('doctors.index') }}">Doctors
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                              <a class="nav-link" href="javascript:;">Pages
                                 <span><i class="fas fa-chevron-right"></i></span>
                              </a>
                              <ul class="dropdown-items">
                                 <li><a href="about-us.html">About Us</a></li>
                                 <li><a href="all-dr.html">Doctors</a></li>
                                 <li><a href="dr-single.html">Doctor single</a></li>
                                 <li><a href="appoinment.html">Appoinment</a></li>
                                 <li><a href="error404.html">404</a></li>
                              </ul>
                           </li> --}}
                                    {{-- <li class="nav-item ps-rel">
                              <a class="nav-link" href="javascript:;">Services
                                 <span><i class="fas fa-chevron-right"></i></span>
                              </a>
                              <ul class="dropdown-items">
                                 <li><a href="service.html">Service
                                    <span><i class="fas fa-chevron-right"></i></span>
                                 </a>
                                 <ul class="sub-dropdown">
                                    <li><a href="covid-single.html">Covid 19</a></li>
                                    <li><a href="stathoscope-single.html">Full Stathoscope</a></li>
                                    <li><a href="heart-specialist.html">Heart Specialist</a></li>
                                    <li><a href="blood-bank.html">Blood Bank</a></li>
                                    <li><a href="disable.html">For Disable</a></li>
                                    <li><a href="psychiatrist.html">Psychiatrist</a></li>
                                 </ul>
                              </li>
                                 <li><a href="single-details.html">Service Details</a></li>
                              </ul>
                           </li> --}}
                                    {{-- <li class="nav-item ps-rel">
                              <a class="nav-link" href="javascript:;">Gallery
                                 <span><i class="fas fa-chevron-right"></i></span>
                              </a>
                              <ul class="dropdown-items">
                                 <li><a href="gallery.html">3 Columns</a></li>
                                 <li><a href="gallery2.html">4 Columns</a></li>
                                 <li><a href="gallery3.html">5 Columns</a></li>
                              </ul>
                           </li> --}}
                                    <li class="nav-item ps-rel">
                                        <a class="nav-link active" href="{{ route('blog.index') }}">Blog
                                        </a>
                                        {{-- <li class="nav-item ps-rel">
                              <a class="nav-link" href="javascript:;">Shortcode
                                 <span><i class="fas fa-chevron-right"></i></span>
                              </a>
                              <div class="dropdown-items mega-menu">
                                 <ul>
                                    <li><a href="accordion.html">Accordion</a></li>
                                    <li><a href="client.html">Client</a></li>
                                    <li><a href="counter.html">Counter</a></li>
                                    <li><a href="form.html">Form</a></li>

                                 </ul>
                                 <ul>
                                    <li><a href="alert.html">Alert</a></li>
                                    <li><a href="icon.html">Icon</a></li>
                                    <li><a href="list.html">List</a></li>
                                    <li><a href="pricing-table.html">Pricing Table</a></li>
                                 </ul>
                                 <ul>
                                    <li><a href="button.html">Button</a></li>
                                    <li><a href="tab.html">Tabs</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="testimonials.html">Testimonial</a></li>
                                 </ul>
                                 <ul>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="social-icon.html">Social Icon</a></li>
                                 </ul>
                              </div>
                           </li> --}}
                                        {{-- <li class="nav-item">
                              <a class="nav-link" href="contact-us.html">Contact Us</a>
                           </li> --}}
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <form class="d-flex justify-content-end ps-rel">
                                <input class="" placeholder="Search">
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
                                    <img src="images/logo3.png" alt="img">
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
                    <a href="javascript:;"><img src="images/logo.png" alt="img"></a>
                </div>
                <div id="toggle_close">&times;</div>
                <div id='cssmenu'>
                    <ul class="float_left">
                        <li class="has-sub">
                            <a href="javascript:;">Home</a>
                            <ul>
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index2.html">Home 02</a></li>
                                <li><a href="index3.html">Home 03</a></li>
                            </ul>
                        </li>
                        <li><a href="about-us.html">about</a></li>
                        <li><a href="all-dr.html">Doctors</a></li>
                        <li><a href="dr-single.html">Doctor Single</a></li>
                        <li><a href="appoinment.html">Appointment</a></li>
                        <li class="has-sub">
                            <a href="javascript:;">Services</a>
                            <ul>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="single-details.html">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">Gallery</a>
                            <ul>
                                <li><a href="gallery.html">3 Columns</a></li>
                                <li><a href="gallery2.html">4 Columns</a></li>
                                <li><a href="gallery3.html">5 Columns</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">Blog</a>
                            <ul>
                                <li><a href="blog-left-sidebar.html">Blog Left-sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right-sidebar</a></li>
                                <li class="has-sub">
                                    <a class="sub-icon">Blog Single</a>
                                    <ul class="m-sub-dropdown">
                                        <li><a href="blog-single.html">Blog single</a></li>
                                        <li><a href="blog-single-slider.html">Blog single slider</a></li>
                                        <li><a href="blog-single-video.html">Blog single video</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">Shortcode</a>
                            <ul>
                                <li><a href="accordion.html">Accordion</a></li>
                                <li><a href="client.html">Client</a></li>
                                <li><a href="counter.html">Counter</a></li>
                                <li><a href="form.html">Form</a></li>
                                <li><a href="alert.html">Alert</a></li>
                                <li><a href="icon.html">Icon</a></li>
                                <li><a href="list.html">List</a></li>
                                <li><a href="pricing-table.html">Pricing Table</a></li>
                                <li><a href="button.html">Button</a></li>
                                <li><a href="tab.html">Tabs</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="testimonials.html">Testimonial</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="social-icon.html">Social Icon</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">contact us</a></li>
                        <li class="border-none"><a href="error404.html">404</a></li>
                        <li class="input-group border-none my-3 mx-2">
                            <input type="text" class="form-control" placeholder="Search">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                    class="fas fa-search"></i></button>
                        </li>
                        <li class="border-none">
                            <ul class="social-icon">
                                <li><a href="www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="www.pinterest.com"><i class="fab fa-pinterest-p"></i></a></li>
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
                            <img src="{{asset('images/logo.png')}}" alt="img" width="200">
                        </div>
                        <ul>
                            <li><a href="javascript:;"><i class="fas fa-map-marker-alt"></i>ADDRESS
                                    <br>{{ App\Helpers\SettingHelper::getSetting('address') }}</a>
                            </li>
                            <li><a href="javascript:;"><i class="fas fa-phone"></i>PHONE<br>
                                    {{ App\Helpers\SettingHelper::getSetting('phone') }}</a>
                            </li>
                            <li><a href="javascript:;"><i class="fas fa-envelope"></i>PHONE<br>
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
                            <li><a href="about-us.html"><i class="fas fa-angle-right"></i>About Us</a></li>
                            <li><a href="service.html"><i class="fas fa-angle-right"></i>Service</a></li>
                            <li><a href="gallery.html"><i class="fas fa-angle-right"></i>Gallery</a></li>
                            <li><a href="blog-single.html"><i class="fas fa-angle-right"></i>Blog</a></li>
                            <li><a href="appoinment.html"><i class="fas fa-angle-right"></i>Appoinments</a></li>
                            <li><a href="contact-us.html"><i class="fas fa-angle-right"></i>Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <p>© Copyright 2022 - 23 Design by {{env('APP_NAME')}} | All Rights
                            Reserved.</p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <p class="last-para">Private Policy | Terms and Conditions.</p>
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
