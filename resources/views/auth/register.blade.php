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
    <link rel="shortcut icon" type="image/png" href="images/fav-icon.png" />

    <style>
        /* Custom CSS for validation errors */
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
    </style>
</head>

<body>
    <div class="login-main-wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12 p-0">
                    <div class="form-sidebar">
                        <div class="logo-section">
                            <img src="images/logo3.png" alt="img">
                        </div>
                        <div class="form-image d-xl-block d-lg-block d-none">
                            <img src="images/form-img.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 p-0">
                    <div class="login-main">
                        <form action="{{ route('register.post') }}" method="POST">
                            @csrf
                            <h4>Register Now</h4>
                            <p class="mb-3">Register by entering the information below</p>

                            <div class="mt-2">
                                <input type="text" name="name"
                                    class="my-width @error('name') is-invalid @enderror" placeholder="Name*"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <input type="text" name="phone"
                                    class="my-width @error('phone') is-invalid @enderror" placeholder="Phone*"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <input type="email" name="email"
                                    class="my-width @error('email') is-invalid @enderror" placeholder="Email*"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <input type="password" name="password"
                                    class="my-width @error('password') is-invalid @enderror" placeholder="Password*">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <input type="password" name="password_confirmation"
                                    class="my-width @error('password_confirmation') is-invalid @enderror"
                                    placeholder="Confirm Password*">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-2">
                                {{-- Ensure the checkbox is actually required if it needs validation --}}
                                <input type="checkbox" id="accept" name="accept_terms"
                                    class="me-2 @error('accept_terms') is-invalid @enderror"
                                    {{ old('accept_terms') ? 'checked' : '' }}>
                                <label for="accept">Yes, I understand and agree <a href="javascript:;"
                                        class="text-color-pink">Terms & Conditions</a>.</label>
                                @error('accept_terms')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="button-btn mt-4 text-capitalize">Register
                                <span><i class="fas fa-angle-double-right"></i></span>
                            </button>
                            <p class="mt-2">Already have an Account. <a href="{{ route('login') }}"
                                    class="text-color-pink">Login Now</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Removed the general alert-danger block --}}

    <script src="{{ asset('front/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/wow.js') }}"></script>
    <script src="{{ asset('front/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/contact_form.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
