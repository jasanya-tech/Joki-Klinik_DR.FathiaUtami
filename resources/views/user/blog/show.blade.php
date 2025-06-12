@extends('layouts.front')

@section('content')
       <div class="blog-page-main-container float_left ptb-100">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
               <div class="blog-single-main-page">
                  <div class="blog-box p-0">
                     <div class="img-icon">
                        <img src="{{asset('storage/'.$blog->thumbnail)}}" alt="img">
                        <p class="text-center">{{Carbon\Carbon::parse($blog->created_at)->format('d')}}<br>
                            {{substr(Carbon\Carbon::parse($blog->created_at)->format('M'), 0, 3)}}
                        </p>
                     </div>
                     <div class="blog-content">
                        <h3 class="p-0"><a href="blog-left-sidebar.html">Spending More and Getting Less
                              for Health Care</a>
                        </h3>
                        <ul>
                           <li><a href="javascript:;"><i class="far fa-user"></i> by {{$blog->author}}</a>
                           </li>
                        </ul>
                        {{$blog->body}}
                       
                  
                        <div class="tag-with-media">
                           <div class="d-flex justfiy-content-start align-items-baseline resp-disply">
                              <p class="m-0"><span class="p-2"><i class="fas fa-tag"></i></span>Tags:</p>
                              <ul class="border-none tag-buttons">
                                @foreach ($blog->categoris as $tag)
                                    <li class="p-2"><a href="javascript:;">{{ $tag->name }}</a></li>
                                @endforeach
                              </ul>
                           </div>
                           <div class="social">
                              <ul class="d-flex justfiy-content-end align-items-baseline">
                                 <li><a href="javascript:;"><i class="fab fa-facebook-f icon-color"></i></a></li>
                                 <li><a href="javascript:;"><i class="fab fa-twitter icon-color"></i></a></li>
                                 <li><a href="javascript:;"><i class="fab fa-instagram icon-color"></i></a></li>
                                 <li><a href="javascript:;"><i class="fab fa-pinterest-p icon-color"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     {{-- <div class="admin-main">
                        <div>
                           <a href="javascript:;"><img src="images/admin.png" alt="img"></a>
                        </div>
                        <div class="admin-about">
                           <a href="javascript:;" class="h6">About Admin: <span> Jhon Doe</span></a>
                           <a href="javascript:;" class="more-btn">more</a>
                           <p>Porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut ttis augue finibus ac.
                              Vivamus elementum enim rhoncus. </p>
                        </div>
                     </div>
                     <div class="comment-section">
                        <h4 class="mb-5">Comments02</h4>
                        <ul class="d-flex align-items-center comment-border">
                           <li class="me-4">
                              <img src="images/coment-img.jpg" alt="img">
                           </li>
                           <li>
                              <h5>Jhon Doe
                                 <span>Fab 1, 2022 - <a href="javascript:;">Reply</a> </span>
                              </h5>
                              <p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis
                                 augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus.
                              </p>
                           </li>
                        </ul>
                        <ul class="d-flex align-items-center">
                           <li class="me-4">
                              <img src="images/coment-img2.jpg" alt="img">
                           </li>
                           <li>
                              <h5>Serina Smith
                                 <span>Fab 1, 2022 - <a href="javascript:;">Reply</a> </span>
                              </h5>
                              <p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis
                                 augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus.
                              </p>
                           </li>
                        </ul>
                     </div>
                     <div class="form-section mb-4">
                        <h6>Leave a Comment</h6>
                        <div class="form-input plr-15">
                           <div class="row ">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="input-group flex-nowrap">
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Username"
                                       aria-describedby="addon-wrapping">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                          class="fas fa-user"></i></span>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="input-group flex-nowrap resp-mt-20">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Username"
                                       aria-describedby="addon-wrapping">
                                    <span class="input-group-text" id="addon-wrapping1"><i
                                          class="fas fa-envelope"></i></span>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <textarea class="form-control mt-4 ps-3" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Enter Text"></textarea>
                                    <div class="mt-2 checkbox-wrap">
                                       <input type="checkbox" name="select" id="comment">
                                       <label for="comment">
                                          By using this form you agree with the storage and handling of your
                                             data by this website Privacy Policy.
                                       </label>
                                    </div>
                              </div>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                              <a href="javascript:;" class="button-btn mt-4">Post Comment
                                 <span><i class="fas fa-angle-double-right"></i></span>
                              </a>
                           </div>
                        </div>
                     </div> --}}
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
               <div class="blog-right-sidebar resp-30">
                         <div class="form-section m-0">
                            <h6>Search Keyword</h6>
                            <section>
                                <form action="{{ route('blog.index') }}" method="get">
                                    <div class="input-group">
                                        <input type="search" class="form-control" name="search" placeholder="Search"
                                            aria-describedby="search-button">
                                        <div class="input-group-append">
                                            <span onclick="this.closest('form').submit();" class="input-group-text" style="cursor: pointer" id="search-button">
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
                        @foreach ($recentBlogs as $post)
                        <div class="post-main-container hr-line">
                           <div class="post-image me-3">
                              <img src="{{asset('storage/'.$post->thumbnail)}}" height="70" alt="img">
                           </div>
                           <div class="post-container">
                              <a href="{{route('blog.show', $post->slug)}}" class="h6">{{$post->title}}</a>
                              <p>{{Carbon\Carbon::parse($post->created_at)->format('d M Y')}}</p>
                           </div>
                        </div>
                        @endforeach
                     </section>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection