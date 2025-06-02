@extends('layouts.front')

@section('content')


   <!-- gallery main section start-->
   <div class="blog-page-main-container float_left ptb-100">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
               <div class="blog-single-main-page">
                  <div class="blog-box p-0">
                     <div class="img-icon">

                        <img src="{{asset('storage/'.$doctor->user->avatar_url)}}" alt="img">
                     </div>
                     <div class="blog-content">
                        <h3 class="p-0">{{$doctor->user->name}}</h3>
                        </h3>
                        <span>{{$doctor->spesialis}}</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                           been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                           galley of type and scrambled it to make a type specimen book. It has survived not only five
                           centuries, but also the leap into electronic typesetting.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                           been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                           galley of type and scrambled it to make a type specimen book.</p>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting,
                           remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and
                           typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                           c1500s. When an unknown printer took a galley of type and scrambled it to make a type
                           specimen book. It has survived not only five centuries, but also the leap into electronic
                           typesetting, remaining essentially unchanged.</p>
                        {{-- <div class="quote-sec">
                           <p>" The Education of Tomorrow, Rooted in Tradition Invite You
                              Learning Management System"
                           </p>
                           <h6>- by Aimee Devlin</h6>
                           <img src="images/quote.png" alt="img">
                        </div> --}}
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
               <div class="right-section2">
                  <div class="form-section m-0">
                     <h6>Working Hours</h6>
                     <ul class="d-flex justify-content-between">
                        <li>
                           <ul>
                                @foreach ($doctor->schedules as $schedule)
                                    <li>{{ $schedule->day }} :</li>
                                @endforeach
                           </ul>
                        </li>
                        <li>
                           <ul>
                                @foreach ($doctor->schedules as $schedule)
                                    <li>{{ substr($schedule->start_time, 0, 5 )}} - {{ substr($schedule->end_time, 0, 5 ) }}</li>
                                @endforeach
                           </ul>
                        </li>
                     </ul>

                          <div class="consult-wrap">
                        <div>
                           <a href="appoinment.html" class="button-btn mt-4 w-100">Book an Appointment
                              <span><i class="fas fa-angle-double-right"></i></span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection