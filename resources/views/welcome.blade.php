@extends('layouts.front')


@section('content')
   <!-- banner sction start -->
   <div class="banner-section-wrapper float_left" style="background-image: url({{ asset(App\Helpers\BannerHelper::getBannerImageUrl('home')) }})">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
               <div class="sb-banner-section ">
                  <h4></h4>
                  <h2 class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".5ms"><br>
                     <span></span> <br>
                     
                  </h2>
                  {{-- <p> {{App\Helpers\SettingHelper::getSetting('home_banner_description') }}
                  </p> --}}
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <a href="{{ route('doctors.index') }}" class="button-btn mt-4">book now
                     <span><i class="fas fa-angle-double-right"></i></span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- banner section end-->
   <!-- About section start-->
   <div class="about-main-wrapper float_left">
      <div class="container">
         <div class="row plr-50 justify-content-center text-center">
            <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center">
               <div class="sb-about-section">
                  <div class="icon mx-auto" style="display: flex; justify-content: center;">
                     <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <defs>
                           <style>
                              .cls-1 {
                                 fill: #0ABAB5;
                                 width: 45px;
                              }
                           </style>
                        </defs>
                        <title>stethoscope-outline</title>
                        <path class="cls-1"
                           d="M512,256a89.59,89.59,0,1,0-102.39,88.69V358.4a128.14,128.14,0,0,1-128,128c-67.06,0-122.22-51.83-127.56-117.54a38.41,38.41,0,0,0,25.17-36.06v-7.28c30-12.37,45.84-37.64,50.63-53l45.61-148.24a77.27,77.27,0,0,0-10-66.38A75.4,75.4,0,0,0,256,46.51c0-.57,0-1.13,0-1.71a44.83,44.83,0,1,0-10.72,29.07A51.77,51.77,0,0,1,251,116.79L205.4,265a65.26,65.26,0,0,1-31.78,35,38.4,38.4,0,0,0-66.2,1,64.87,64.87,0,0,1-33.9-36L27.92,116.79A51.81,51.81,0,0,1,34.62,72.3l.22-.3a44.8,44.8,0,1,0-9.19-28,75.07,75.07,0,0,0-12.22,14,77.27,77.27,0,0,0-10,66.38l45.62,148.3c4.92,15.73,21.55,42,53.35,54v6.22a38.41,38.41,0,0,0,26,36.34C133.93,448.84,200.53,512,281.61,512c84.69,0,153.59-68.91,153.59-153.6V344.69A89.61,89.61,0,0,0,512,256ZM211.22,64a19.2,19.2,0,1,1,19.2-19.2A19.22,19.22,0,0,1,211.22,64ZM70.43,25.6a19.2,19.2,0,1,1-19.2,19.2A19.22,19.22,0,0,1,70.43,25.6ZM128,320a12.8,12.8,0,1,1,25.6,0v12.8a12.8,12.8,0,1,1-25.6,0Zm294.38,0a64,64,0,1,1,64-64A64.07,64.07,0,0,1,422.41,320Zm0-102.4A38.4,38.4,0,1,0,460.8,256,38.4,38.4,0,0,0,422.41,217.6Zm0,51.2A12.8,12.8,0,1,1,435.2,256,12.81,12.81,0,0,1,422.41,268.8Z" />
                     </svg>
                  </div>
                  <div class="content">
                     <h5>Konseling Kesehatan</h5>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center">
               <div class="sb-about-section">
                  <div class="icon mx-auto" style="display: flex; justify-content: center;">
                     <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <defs>
                           <style>
                              .cls-1 {
                                 fill: #0ABAB5;
                              }
                           </style>
                        </defs>
                        <title>doctor-2-outline</title>
                        <path class="cls-1"
                           d="M320,310.18V277.27A128,128,0,0,0,384,166.4V128a127.43,127.43,0,0,0-26.26-77.67h0q-.87-1.14-1.77-2.26h0a128.76,128.76,0,0,0-20.13-20.1l-.32-.26q-.91-.72-1.83-1.42l-.53-.41-1.74-1.29-.66-.48-1.68-1.19-.77-.53-1.64-1.1-.85-.56-1.62-1-.91-.57-1.6-1-1-.57-1.6-.93-1-.56-1.6-.88-1-.55-1.6-.83-1.07-.53-1.61-.79L310.1,12l-1.64-.76-1.06-.46q-2.9-1.28-5.88-2.41l-1.35-.51-1.43-.51-1.44-.51-1.42-.47-1.49-.48L293,5.43,291.46,5,290,4.59l-1.55-.42-1.42-.36-1.57-.38-1.42-.33-1.6-.35-1.42-.29-1.63-.31L278,1.89l-1.66-.27-1.42-.22-1.7-.24L271.83,1,270.1.78,268.71.63l-1.8-.16L265.56.35l-1.9-.12L262.39.16,260.27.08l-1.06,0q-1.6,0-3.21,0t-3.21,0l-1.06,0-2.12.08-1.27.08-1.9.12-1.35.11-1.8.16L241.9.78l-1.73.2-1.41.19-1.69.24-1.42.22L234,1.89l-1.43.26-1.63.31-1.42.29-1.6.35-1.42.33-1.57.38-1.42.36L222,4.59,220.54,5,219,5.43l-1.41.43-1.49.48-1.42.47-1.44.51-1.43.51-1.34.51q-3,1.14-5.91,2.42l-1,.45-1.65.76-1.07.5-1.62.79-1.07.53-1.61.83-1,.55-1.6.88-1,.56-1.6.93-1,.57-1.6,1-.91.57-1.62,1-.85.56-1.64,1.1-.77.53-1.68,1.19-.67.49-1.74,1.29-.53.41q-.92.7-1.83,1.42l-.32.26A128.76,128.76,0,0,0,156.05,48h0q-.9,1.12-1.77,2.26h0A127.43,127.43,0,0,0,128,128v38.4a128,128,0,0,0,64,110.87v32.91A172.84,172.84,0,0,0,51.2,480a32,32,0,0,0,32,32H428.8a32,32,0,0,0,32-32A172.84,172.84,0,0,0,320,310.18ZM358.4,486.4H307.2V435.2a25.6,25.6,0,0,1,51.2,0ZM242.56,26.48l.56-.07,1.95-.22,2-.19,1.5-.12q1.46-.1,2.94-.17l1,0c1.16,0,2.33-.07,3.5-.07s2.34,0,3.5.07l1,0q1.47.06,2.94.17L265,26l2,.19,1.95.22.56.07A102.69,102.69,0,0,1,350.92,89.6H161.08A102.69,102.69,0,0,1,242.56,26.48Zm-89,139.92V128a103,103,0,0,1,.8-12.8H357.6a103,103,0,0,1,.8,12.8v38.4a102.4,102.4,0,1,1-204.8,0ZM256,294.4a127.94,127.94,0,0,0,38.4-5.86v29.77l-38.4,23-38.4-23V288.54A127.94,127.94,0,0,0,256,294.4Zm-64,128a12.8,12.8,0,1,1-12.8-12.8A12.81,12.81,0,0,1,192,422.4ZM76.8,480a147.41,147.41,0,0,1,89.6-135.45v41.64a38.4,38.4,0,1,0,25.6,0V336.31c1.45-.32,2.9-.62,4.36-.9L256,371.2l59.64-35.78c1.46.28,2.92.57,4.36.9v49.31a51.29,51.29,0,0,0-38.4,49.58v51.2H83.2A6.41,6.41,0,0,1,76.8,480Zm352,6.4H384V435.2a51.29,51.29,0,0,0-38.4-49.58V344.55A147.41,147.41,0,0,1,435.2,480,6.41,6.41,0,0,1,428.8,486.4Z" />
                     </svg>
                  </div>
                  <div class="content">
                     <h5>Dokter yang Berkualifikasi</h5>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- About us section end -->
   <!-- emergency section start -->
   <div class="image-wrapper float_left">
      <img src="{{ App\Helpers\BannerHelper::getBannerImageUrl('home2') }}" alt="home2" class="img-fluid">
   </div>
   <!-- emergency section end -->
   <!-- our team section start -->
   <div class="team-main-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="sb-team-section">
                  <h6 class="home1-section-heading1">Our Team</h6>
                  <h5 class="home1-section-heading2">Our Dedicated Doctors</h5>
               </div>
            </div>
            @foreach ($doctors as $doctor)
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
               <div class="team-section">
                  <div class="image">
                     <img src="{{asset('storage/'.$doctor->user->avatar_url)}}" width="100%" alt="img">
                     {{-- <div class='contact-action '>
                        <div class='item plus-sign ' onclick="actionToggleOne();"> + </div>
                        <span class='item icon-bg'> <i class="fab fa-facebook-f"></i></span>
                        <span class='item icon-bg'> <i class="fab fa-twitter"></i> </span>
                     </div> --}}
                  </div>
                  <h5><a href="{{route('doctors.show', $doctor->id)}}">{{$doctor->user->name}}</a></h5>
                  <p><a href="{{route('doctors.show', $doctor->id)}}">{{$doctor->spesialis}}</a></p>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <!-- our team section end -->
   <!-- testimonial section start -->
   <div class="testimonial-main-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="sb-testimonial-wrapper">
                  <h6 class="home1-section-heading1 text-start">Testimonial</h6>
                  <h5 class="text-start home1-section-heading2">What Our Client Say</h5>
                  <div class="text-slider">
                     <div class="owl-carousel owl-theme">
                        @foreach ($testimonials as $testimonial)
                        <div class="item">
                           <img 
                              src="{{ $testimonial->booking->user->image_avatar_url ?? asset('images/12.png') }}" 
                              alt="Portrait of {{ $testimonial->booking->user->name }}, testimonial provider{{ $testimonial->booking->user->image_avatar_url ? '' : ', default avatar shown' }}" 
                              class="img-fluid rounded-circle border border-5 border-danger" 
                              style="width: 150px">
                           <div class="item-box">
                              <span>
                                 @for ($i = 0; $i < $testimonial->ratting; $i++)
                                 <i class="fas fa-star"></i>
                                 @endfor
                              </span>
                              <p class="py-2"> {{$testimonial->massage}}
                              </p>
                              <a href="javascript:;">- {{$testimonial->booking->user->name}}.</a>
                           </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- testimonial section End-->
      <!-- counter section start -->
   <div class="counter-main-wrapper" style="background-image: url('{{ App\Helpers\BannerHelper::getBannerImageUrl('counter') }}');">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="count-up">
                  <div class="counter-icon">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;"
                        xml:space="preserve">
                        <circle cx="30" cy="26" r="2" />
                        <circle cx="44" cy="26" r="2" />
                        <path
                           d="M58.016,52.722l-9.63-2.03C47.003,50.4,46,49.163,46,47.75v-2.023c5.392-2.913,9.223-8.355,9.893-14.727H57  c2.757,0,5-2.243,5-5s-2.243-5-5-5h-1c0-9.374-7.626-17-17-17H23c-0.834,0-1.564-0.508-1.862-1.295  c-0.165-0.435-0.61-0.694-1.067-0.637c-1.834,0.244-3.53,1.232-4.652,2.711c-1.133,1.493-1.611,3.352-1.347,5.232  c0.369,2.619,2.263,4.739,4.745,5.586C18.285,17.372,18,19.183,18,21h-1c-2.757,0-5,2.243-5,5c0,1.323,0.518,2.578,1.477,3.551  c0.17,0.164,0.345,0.311,0.523,0.445v5.189C13.686,35.072,13.352,35,13,35c-0.771,0-1.468,0.301-2,0.78C10.468,35.301,9.771,35,9,35  s-1.468,0.301-2,0.78C6.468,35.301,5.771,35,5,35c-1.654,0-3,1.346-3,3v23c0,0.553,0.447,1,1,1h16c0.553,0,1-0.447,1-1v-6.734  l0.222-0.389l5.804-1.228c0.15-0.032,0.29-0.088,0.435-0.132L36,57.601V62h2v-4.399l9.539-5.085  c0.145,0.045,0.284,0.101,0.435,0.132l9.632,2.03c1.369,0.286,2.685,0.87,3.805,1.688l1.18-1.615  C61.242,53.767,59.66,53.064,58.016,52.722z M45.527,51.321L37,55.867l-8.527-4.546C29.414,50.401,30,49.131,30,47.75v-1.103  C32.169,47.511,34.527,48,37,48s4.831-0.489,7-1.353v1.103C44,49.131,44.586,50.401,45.527,51.321z M37,46  c-8.349,0-15.296-6.054-16.719-14h33.437C52.296,39.946,45.349,46,37,46z M16,38V28c0-0.552,0.448-1,1-1s1,0.448,1,1v1v12h-2V38z   M20,37.434c0.779,1.564,1.766,3.002,2.927,4.286C22.404,41.277,21.737,41,21,41h-1V37.434z M57,23c1.654,0,3,1.346,3,3  s-1.346,3-3,3h-1v-6H57z M16.052,9.732c-0.19-1.349,0.15-2.679,0.96-3.744c0.673-0.888,1.598-1.512,2.649-1.801  C20.391,5.297,21.646,6,23,6h16c8.237,0,14.945,6.674,15,14.899c-2.279-0.465-4-2.484-4-4.899v-1c0-0.553-0.447-1-1-1H21.211  C18.612,14,16.395,12.165,16.052,9.732z M21.211,16H48c0,3.519,2.614,6.432,6,6.92V29c0,0.338-0.031,0.667-0.051,1H20.051  C20.031,29.667,20,29.338,20,29v-1v-7c0-1.687,0.276-3.371,0.79-5.019C20.93,15.989,21.069,16,21.211,16z M17,23h1v2.184  C17.686,25.072,17.352,25,17,25c-1.302,0-2.402,0.839-2.816,2.001C14.07,26.682,14,26.346,14,26C14,24.346,15.346,23,17,23z M13,37  c0.552,0,1,0.448,1,1v4c0,0.552-0.448,1-1,1s-1-0.448-1-1v-4C12,37.448,12.448,37,13,37z M9,37c0.552,0,1,0.448,1,1v4  c0,0.552-0.448,1-1,1s-1-0.448-1-1v-4C8,37.448,8.448,37,9,37z M4,38c0-0.552,0.448-1,1-1s1,0.448,1,1v4c0,0.552-0.448,1-1,1  s-1-0.448-1-1V38z M18.132,53.504C18.046,53.655,18,53.826,18,54v6H4V44.816C4.314,44.928,4.648,45,5,45c0.771,0,1.468-0.301,2-0.78  C7.532,44.699,8.229,45,9,45s1.468-0.301,2-0.78c0.532,0.48,1.229,0.78,2,0.78c0.624,0,1.204-0.192,1.685-0.52  C15.549,45.978,17.15,47,19,47h1v-2h-1c-1.304,0-2.416-0.836-2.829-2H21c0.552,0,1,0.448,1,1v2.734L18.132,53.504z M25.613,50.691  l-4.062,0.859l2.317-4.055C23.954,47.345,24,47.174,24,47v-3c0-0.608-0.184-1.173-0.497-1.646c1.32,1.334,2.833,2.474,4.497,3.373  v2.023C28,49.163,26.997,50.4,25.613,50.691z" />
                        <path
                           d="M56,56H43c-0.553,0-1,0.447-1,1v4c0,0.553,0.447,1,1,1h13c0.553,0,1-0.447,1-1v-4C57,56.447,56.553,56,56,56z M55,60H44v-2  h11V60z" />
                     </svg>
                  </div>
                  <h3 class="counter-count">{{App\Helpers\SettingHelper::getSetting('happy_patients')}}</h3>
                  <p class="mb-3">Happy Patients</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
               <div class="count-up">
                  <div class="counter-icon">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;"
                        xml:space="preserve">
                        <path
                           d="M61,20H48V3c0-0.553-0.448-1-1-1H17c-0.552,0-1,0.447-1,1v17H3c-0.552,0-1,0.447-1,1v40c0,0.553,0.448,1,1,1h58  c0.552,0,1-0.447,1-1V21C62,20.447,61.552,20,61,20z M4,22h12v38H4V22z M35,50v10h-6V50H35z M46,60h-9V50h2v-2H25v2h2v10h-9V4h28V60  z M60,60H48V22h12V60z" />
                        <path
                           d="M51,32h6c0.552,0,1-0.447,1-1v-6c0-0.553-0.448-1-1-1h-6c-0.552,0-1,0.447-1,1v6C50,31.553,50.448,32,51,32z M52,26h4v4h-4  V26z" />
                        <path
                           d="M51,42h6c0.552,0,1-0.447,1-1v-6c0-0.553-0.448-1-1-1h-6c-0.552,0-1,0.447-1,1v6C50,41.553,50.448,42,51,42z M52,36h4v4h-4  V36z" />
                        <path
                           d="M51,52h6c0.552,0,1-0.447,1-1v-6c0-0.553-0.448-1-1-1h-6c-0.552,0-1,0.447-1,1v6C50,51.553,50.448,52,51,52z M52,46h4v4h-4  V46z" />
                        <path
                           d="M13,24H7c-0.552,0-1,0.447-1,1v6c0,0.553,0.448,1,1,1h6c0.552,0,1-0.447,1-1v-6C14,24.447,13.552,24,13,24z M12,30H8v-4h4  V30z" />
                        <path
                           d="M21,28h4c0.552,0,1-0.447,1-1v-4c0-0.553-0.448-1-1-1h-4c-0.552,0-1,0.447-1,1v4C20,27.553,20.448,28,21,28z M22,24h2v2h-2  V24z" />
                        <path
                           d="M34,22h-4c-0.552,0-1,0.447-1,1v4c0,0.553,0.448,1,1,1h4c0.552,0,1-0.447,1-1v-4C35,22.447,34.552,22,34,22z M33,26h-2v-2h2  V26z" />
                        <path
                           d="M38,23v4c0,0.553,0.448,1,1,1h4c0.552,0,1-0.447,1-1v-4c0-0.553-0.448-1-1-1h-4C38.448,22,38,22.447,38,23z M40,24h2v2h-2  V24z" />
                        <path
                           d="M21,36h4c0.552,0,1-0.447,1-1v-4c0-0.553-0.448-1-1-1h-4c-0.552,0-1,0.447-1,1v4C20,35.553,20.448,36,21,36z M22,32h2v2h-2  V32z" />
                        <path
                           d="M34,30h-4c-0.552,0-1,0.447-1,1v4c0,0.553,0.448,1,1,1h4c0.552,0,1-0.447,1-1v-4C35,30.447,34.552,30,34,30z M33,34h-2v-2h2  V34z" />
                        <path
                           d="M43,30h-4c-0.552,0-1,0.447-1,1v4c0,0.553,0.448,1,1,1h4c0.552,0,1-0.447,1-1v-4C44,30.447,43.552,30,43,30z M42,34h-2v-2h2  V34z" />
                        <path
                           d="M21,44h4c0.552,0,1-0.447,1-1v-4c0-0.553-0.448-1-1-1h-4c-0.552,0-1,0.447-1,1v4C20,43.553,20.448,44,21,44z M22,40h2v2h-2  V40z" />
                        <path
                           d="M34,38h-4c-0.552,0-1,0.447-1,1v4c0,0.553,0.448,1,1,1h4c0.552,0,1-0.447,1-1v-4C35,38.447,34.552,38,34,38z M33,42h-2v-2h2  V42z" />
                        <path
                           d="M43,38h-4c-0.552,0-1,0.447-1,1v4c0,0.553,0.448,1,1,1h4c0.552,0,1-0.447,1-1v-4C44,38.447,43.552,38,43,38z M42,42h-2v-2h2  V42z" />
                        <path
                           d="M13,34H7c-0.552,0-1,0.447-1,1v6c0,0.553,0.448,1,1,1h6c0.552,0,1-0.447,1-1v-6C14,34.447,13.552,34,13,34z M12,40H8v-4h4  V40z" />
                        <path
                           d="M13,44H7c-0.552,0-1,0.447-1,1v6c0,0.553,0.448,1,1,1h6c0.552,0,1-0.447,1-1v-6C14,44.447,13.552,44,13,44z M12,50H8v-4h4  V50z" />
                        <path
                           d="M26,16h3v3c0,0.553,0.448,1,1,1h4c0.552,0,1-0.447,1-1v-3h3c0.552,0,1-0.447,1-1v-4c0-0.553-0.448-1-1-1h-3V7  c0-0.553-0.448-1-1-1h-4c-0.552,0-1,0.447-1,1v3h-3c-0.552,0-1,0.447-1,1v4C25,15.553,25.448,16,26,16z M27,12h3  c0.552,0,1-0.447,1-1V8h2v3c0,0.553,0.448,1,1,1h3v2h-3c-0.552,0-1,0.447-1,1v3h-2v-3c0-0.553-0.448-1-1-1h-3V12z" />
                        <rect x="42" y="56" width="2" height="2" />
                        <rect x="42" y="52" width="2" height="2" />
                        <rect x="42" y="48" width="2" height="2" />
                     </svg>
                  </div>
                  <h3 class="counter-count">{{App\Helpers\SettingHelper::getSetting('doctors_count')}}</h3>
                  <p class="mb-3">Doctors</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="count-up">
                  <div class="counter-icon">
                     <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;"
                        xml:space="preserve">
                        <path d="M50,71c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6S53.3,71,50,71z M50,79c-1.1,0-2-0.9-2-2s0.9-2,2-2c1.1,0,2,0.9,2,2
                                    S51.1,79,50,79z M75,91h-5.2L66,60.8c-0.1-1-1-1.8-2-1.8H52V43.5l10,5.3c0.3,0.2,0.6,0.2,0.9,0.2c0.4,0,0.8-0.1,1.2-0.4
                                    c0.6-0.4,0.9-1.2,0.8-2l-2.3-13.4l9.7-9.5c0.5-0.5,0.7-1.3,0.5-2s-0.9-1.3-1.6-1.4l-13.5-2l-6-12.2C51.5,5.4,50.8,5,50,5
                                    s-1.5,0.4-1.8,1.1l-6,12.2l-13.5,2c-0.8,0.1-1.4,0.6-1.6,1.4s0,1.5,0.5,2l9.7,9.5l-2.3,13.4c-0.1,0.8,0.2,1.5,0.8,2
                                    c0.6,0.4,1.4,0.5,2.1,0.2l10-5.3V59H36c-1,0-1.9,0.8-2,1.8L30.2,91H25c-1.1,0-2,0.9-2,2s0.9,2,2,2h7h36h7c1.1,0,2-0.9,2-2
                                    S76.1,91,75,91z M40.9,31.1l-7.6-7.4l10.5-1.5c0.7-0.1,1.2-0.5,1.5-1.1l4.7-9.5l4.7,9.5c0.3,0.6,0.9,1,1.5,1.1l10.5,1.5l-7.6,7.4
                                    c-0.5,0.5-0.7,1.1-0.6,1.8l1.8,10.5l-9.4-4.9c-0.3-0.2-0.6-0.2-0.9-0.2s-0.6,0.1-0.9,0.2l-9.4,4.9l1.8-10.5
                                    C41.6,32.2,41.4,31.6,40.9,31.1z M34.3,91l3.5-28h24.5l3.5,28H34.3z" />
                     </svg>
                  </div>
                  <h3 class="counter-count">{{App\Helpers\SettingHelper::getSetting('certificates_count')}}</h3>
                  <p class="mb-3">Certificates</p>
               </div>
            </div>
            <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12">
               <div class="count-up">
                  <div class="counter-icon">
                     <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- Generator: Sketch 3.8.1 (29687) - http://www.bohemiancoding.com/sketch -->
                        <title>ambulance_round [#662]</title>
                        <desc>Created with Sketch.</desc>
                        <defs></defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
                           <g id="Dribbble-Light-Preview" transform="translate(-300.000000, -5279.000000)">
                              <g id="icons" transform="translate(56.000000, 160.000000)">
                                 <path
                                    d="M252,5124 L252,5125 L253,5125 C253.552,5125 254,5125.448 254,5126 C254,5126.552 253.552,5127 253,5127 L252,5127 L252,5128 C252,5128.552 251.552,5129 251,5129 C250.448,5129 250,5128.552 250,5128 L250,5127 L249,5127 C248.448,5127 248,5126.552 248,5126 C248,5125.448 248.448,5125 249,5125 L250,5125 L250,5124 C250,5123.448 250.448,5123 251,5123 C251.552,5123 252,5123.448 252,5124 L252,5124 Z M262,5130 L258,5130 L258,5126 L261,5126 C261.552,5126 262,5126.448 262,5127 L262,5130 Z M262,5134 L261.221,5134 C260.672,5133.39 259.885,5133 259,5133 C258.647,5133 258.314,5133.072 258,5133.184 L258,5132 L262,5132 L262,5134 Z M259,5137 C258.449,5137 258,5136.551 258,5136 C258,5135.449 258.449,5135 259,5135 C259.551,5135 260,5135.449 260,5136 C260,5136.551 259.551,5137 259,5137 L259,5137 Z M256,5134 L253.484,5134 C253.038,5132.278 251.487,5131 249.625,5131 C248.538,5131 247.556,5131.436 246.838,5132.142 C246.526,5132.448 246,5132.216 246,5131.779 L246,5122 C246,5121.448 246.448,5121 247,5121 L255,5121 C255.552,5121 256,5121.448 256,5122 L256,5134 Z M251.347,5136 C251,5136.595 250.362,5137 249.625,5137 C248.888,5137 248.25,5136.595 247.903,5136 C247.731,5135.705 247.625,5135.366 247.625,5135 C247.625,5134.634 247.731,5134.295 247.903,5134 C248.25,5133.405 248.888,5133 249.625,5133 C250.362,5133 251,5133.405 251.347,5134 C251.519,5134.295 251.625,5134.634 251.625,5135 C251.625,5135.366 251.519,5135.705 251.347,5136 L251.347,5136 Z M262,5124 L258,5124 L258,5121 C258,5119.895 257.105,5119 256,5119 L246,5119 C244.895,5119 244,5119.895 244,5121 L244,5134.234 C244,5135.209 244.791,5136 245.766,5136 C246.213,5137.722 247.763,5139 249.625,5139 C251.487,5139 253.037,5137.722 253.484,5136 L256,5136 C256,5137.657 257.343,5139 259,5139 C260.657,5139 262,5137.657 262,5136 C263.105,5136 264,5135.105 264,5134 L264,5126 C264,5124.895 263.105,5124 262,5124 L262,5124 Z">
                                 </path>
                              </g>
                           </g>
                        </g>
                     </svg>
                  </div>
                  <h3 class="counter-count">{{App\Helpers\SettingHelper::getSetting('total_patients')}}</h3>
                  <p class="mb-3">Total patients</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- counter section end -->
   <!-- blog section start -->
   <div class="blog-main-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col sm-12 col-12">
               <div class="sb-blog-main-section">
                  <h6 class="home1-section-heading1 "> Our Blog</h6>
                  <h5 class="home1-section-heading2">Our Latest News</h5>
               </div>
            </div>
            @foreach ($recentBlogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <div class="blog-box">
                  <div class="img-icon">
                     <img src="{{ asset('storage/' . $blog->thumbnail)}}" alt="img">
                     <div class="img-overlay"></div>
                     <p class="text-center">{{Carbon\Carbon::parse($blog->created_at)->format('d')}}<br>
                        {{Carbon\Carbon::parse($blog->created_at)->format('M')}}
                     </p>
                  </div>
                  <div class="blog-content">
                     <h3><a href="{{ route('blog.show', $blog->slug)}}">{{ $blog->title }}</a>
                     </h3>
                     <ul>
                        <li><a href="{{ route('blog.show', $blog->slug) }}"><i class="far fa-user"></i> {{ $blog->author }}</a>
                        </li>
                     </ul>
                     <p>
                     {!! Str::limit($blog->body, 100, '...') !!}
                        {{-- It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. --}}
                     </p>
                     <a href="{{ route('blog.show', $blog->slug) }}" class="r-btn">Read More</a>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <!-- blog section end -->


@endsection