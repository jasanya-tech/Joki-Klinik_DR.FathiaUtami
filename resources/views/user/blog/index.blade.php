@extends('layouts.front')

@section('content')
    <!-- header end -->
    <!-- contact us page start -->
    <!-- breadcrumb  start-->
    <div class="contact-main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="sb-contact-section">
                        <nav aria-label="breadcrumb">
                            <h4>Blog</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item " aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb  end-->
    <!-- gallery main section start-->
    <div class="blog-page-main-container float_left ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="blog-right-sidebar resp-30">
                        <div class="form-section m-0">
                            <h6>Search Keyword</h6>
                            <section>
                                <form action="{{ route('blog.index') }}" method="get">
                                    <div class="input-group">
                                        <input type="search" class="form-control" name="search" placeholder="Search"
                                            value="{{ request()->get('search') }}" aria-describedby="search-button">
                                        <div class="input-group-append">
                                            <span onclick="this.closest('form').submit();" class="input-group-text"
                                                style="cursor: pointer" id="search-button">
                                                <i class="fas fa-paper-plane"></i>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>

                        <div class="form-section ">
                            <h6>Recents Posts</h6>
                            <section>
                                @foreach ($recentBlogs as $recentBlog)
                                    <div class="post-main-container hr-line">
                                        <div class="post-image me-3">
                                            <img src="{{ asset('storage/' . $recentBlog->thumbnail) }}" width="70"
                                                alt="img">
                                        </div>
                                        <div class="post-container">
                                            <a href="{{ route('blog.show', $recentBlog->slug) }}" class="h6">{{ $recentBlog->title }}</a>
                                            <p>{{ Carbon\Carbon::parse($recentBlog->created_at)->format('d M Y') }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </section>
                        </div>
                        <div class="form-section">
                            <h6>Categories</h6>
                            <section>
                                <ul class="categories">
                                    <li>
                                        <span><i class="fas fa-angle-double-right"></i></span>
                                        <a href="{{ route('blog.index') }}">All</a>
                                    </li>
                                    @foreach ($categories as $category)
                                        <li>
                                            <span><i class="fas fa-angle-double-right"></i></span>
                                            <a
                                                href="{{ route('blog.index') . '?category_id=' . $category->id }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        @if ($blogs->count() == 0)
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="alert alert-warning text-center" role="alert">
                                    No blogs found.
                                    {{ request()->has('search') ? 'Try a different search term.' : 'Please check back later.' }}
                                </div>
                            </div>
                        @endif
                        @foreach ($blogs as $blog)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="blog-box p-0 resp-30">
                                    <div class="img-icon">
                                        <img src="{{ asset('storage/' . $blog->thumbnail) }}" height="300" alt="img">
                                        <div class="img-overlay"></div>
                                        <p class="text-center">
                                            {{ Carbon\Carbon::parse($blog->created_at)->format('d') }}<br>
                                            {{ substr(Carbon\Carbon::parse($blog->created_at)->format('M'), 0, 3) }}
                                        </p>
                                    </div>
                                    <div class="blog-content">
                                        <h3><a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                        </h3>
                                        <ul>
                                            <li><a href="javascript:;"><i class="far fa-user"></i> {{ $blog->author }}</a>
                                            </li>
                                            {{-- <li><a href="javascript:;"><i class="far fa-comments"></i>Comments 02
                                 </a>
                              </li> --}}
                                        </ul>
                                        {!! Str::limit($blog->body, 100, '...') !!}
                                        <p>
                                        </p>
                                        <a href="{{ route('blog.show', $blog->slug) }}" class="r-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @php
                            $currentPage = $blogs->currentPage();
                            $lastPage = $blogs->lastPage();
                        @endphp

                        <div class="col-lg-12 col-md-12 col-12 mt-4">
                            <nav aria-label="Page navigation example" class="page-navigation">
                                <ul class="pagination justify-content-center">
                                    {{-- Previous --}}
                                    <li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $blogs->url($currentPage - 1) }}" tabindex="-1"
                                            aria-disabled="{{ $currentPage == 1 ? 'true' : 'false' }}">
                                            <i class="fas fa-angle-left"></i>
                                        </a>
                                    </li>

                                    {{-- Page Numbers --}}
                                    @for ($i = 1; $i <= $lastPage; $i++)
                                        <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                                            <a class="page-link {{ $currentPage == $i ? 'bg-success  text-white' : '' }}"
                                                aria-disabled="{{ $currentPage == $i ? 'true' : 'false' }}"
                                                href="{{ $blogs->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    {{-- Next --}}
                                    <li class="page-item {{ $currentPage == $lastPage ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $blogs->url($currentPage + 1) }}">
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery main section end -->
@endsection
