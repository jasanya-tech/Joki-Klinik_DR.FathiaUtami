@extends('layouts.front')

@section('content')
   <div class="contact-main-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="sb-contact-section">
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- breadcrumb  end-->
   <!-- form section start -->
   <div class="form-main-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="form-section">
                  <h6>Book an Appoinment</h6>
                  <div class="form-input plr-15">
                     <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="input-group flex-nowrap">
                              <input type="text" class="form-control" placeholder="Name">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="input-group flex-nowrap">
                              <input type="email" class="form-control" placeholder="Email">
                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="input-group flex-nowrap">
                              <input type="tel" class="form-control" placeholder="Phone">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="input-group flex-nowrap input-custom">
                              <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" />
                              <span class="input-group-text"><i class="fas fa-calendar-minus"></i></span>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="input-group flex-nowrap">
                              <input type="time" class="form-control" />
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="input-group flex-nowrap">
                              <select id="office-select">
                                 <option value="hide">Select Type</option>  
                                 <option value="office_0">Covid 19</option>  
                                 <option value="office_1">Full Stathoscope</option>
                                 <option value="office_2">Heart Specialist</option>
                                 <option value="office_0">Blood Bank</option>  
                                 <option value="office_0">For Disable</option>  
                                 <option value="office_0">Psychiatrist</option>  
                             </select>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <textarea class="form-control ps-3" id="exampleFormControlTextarea1" rows="3"
                              placeholder="Enter Text"></textarea>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <a href="javascript:;" class="button-btn mt-4">Submit
                           <span><i class="fas fa-angle-double-right"></i></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection