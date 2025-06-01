@extends('layouts.front')

@section('content')
    <!-- breadcrumb  start-->
    <div class="contact-main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="sb-contact-section">
                        <nav aria-label="breadcrumb">
                            <h4>Our Team</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item " aria-current="page">Our Team</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb  end-->

    <!-- team-section -->
    <div class="founder-main-wrapper team-dr float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-2-heading">
                        <h4>
                            Our Team
                        </h4>
                    </div>
                </div>
                @foreach ($doctors as $doctor)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="sb-founder-section pt-5">
                            <img src="images/founder-img1.png" alt="img">
                            <section>
                                <div class="sb-service-section2 bg-change2">
                                    <a href="dr-single.html">
                                        <h6>{{ $doctor->user->name }}</h6>
                                    </a>
                                    <p>{{ $doctor->spesialis }}</p>
                                </div>
                                <div class="hover-type">
                                    <a href="appoinment.html" class="d-inline-block w-100 text-center">Book Now</a>
                                </div>
                            </section>
                        </div>
                    </div>
                @endforeach

            </div>
            @php
                $currentPage = $doctors->currentPage();
                $lastPage = $doctors->lastPage();
            @endphp

            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <nav aria-label="Page navigation example" class="page-navigation">
                    <ul class="pagination justify-content-center">
                        {{-- Previous --}}
                        <li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $doctors->url($currentPage - 1) }}" tabindex="-1"
                                aria-disabled="{{ $currentPage == 1 ? 'true' : 'false' }}">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>

                        {{-- Page Numbers --}}
                        @for ($i = 1; $i <= $lastPage; $i++)
                            <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                                <a class="page-link {{ $currentPage == $i ? 'bg-danger  text-white' : '' }}" aria-disabled="{{ $currentPage == $i ? 'true' : 'false' }}" href="{{ $doctors->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        {{-- Next --}}
                        <li class="page-item {{ $currentPage == $lastPage ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $doctors->url($currentPage + 1) }}">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
