<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Medical</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/fav-icon.png') }}" />

    <style>
        /* Custom CSS for validation errors (if your template doesn't provide it) */
        .is-invalid {
            border-color: #dc3545 !important;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        .invalid-feedback {
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 0.25rem;
        }
        /* Style for text-danger if you prefer that over invalid-feedback for custom designs */
        .text-danger {
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 0.25rem;
            display: block; /* Ensures it takes a new line below the input */
        }
    </style>
</head>

<body>
    <div class="login-main-wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12 p-0">
                    <div class="form-sidebar">
                        <div class="logo-section">
                            <img src="{{ asset('images/logo3.png') }}" alt="img"> {{-- Corrected asset path --}}
                        </div>
                        <div class="form-image d-xl-block d-lg-block d-none">
                            <img src="{{ asset('images/form-img.png') }}" alt="img"> {{-- Corrected asset path --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 p-0">
                    <div class="login-main">
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <h4>Welcome Back</h4>
                            <p class="mb-3">Login by entering the information below</p>

                            {{-- Session Messages (Success/Error from Controller) --}}
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            {{-- Email --}}
                            <div class="mt-2">
                                <input type="email" name="email"
                                    class="my-width @error('email') is-invalid @enderror" placeholder="Email*"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Password --}}
                            <div class="mt-2">
                                <input type="password" name="password"
                                    class="my-width @error('password') is-invalid @enderror" placeholder="Password*"
                                    required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Remember me + Forget Password --}}
                            <ul class="d-flex justify-content-between align-items-center"> {{-- Added d-flex for alignment --}}
                                <li>
                                    <input type="checkbox" name="remember" id="confirm"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="confirm">Remember me</label>
                                </li>
                                <li><a href="javascript:;">Forget Password?</a></li>
                            </ul>

                            <div class="d-flex align-items-baseline ">
                                <button type="submit" class="button-btn mt-4 text-capitalize">Login
                                    <span><i class="fas fa-angle-double-right"></i></span>
                                </button>
                                <a href="{{ route('register') }}" class="ms-4 form-resp-display">Create Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('front/js/jquery-3.6.0.min.js') }}"></script> {{-- Corrected asset path --}}
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script> {{-- Corrected asset path --}}
    <script src="{{ asset('front/js/wow.js') }}"></script> {{-- Corrected asset path --}}
    <script src="{{ asset('front/js/jquery.magnific-popup.js') }}"></script> {{-- Corrected asset path --}}
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script> {{-- Corrected asset path --}}
    <script src="{{ asset('front/js/contact_form.js') }}"></script> {{-- Corrected asset path --}}
    <script src="{{ asset('front/js/custom.js') }}"></script> {{-- Corrected asset path --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> {{-- SweetAlert2 for session messages --}}

    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            callback: function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();

        // SweetAlert for session messages
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
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
</body>

</html>