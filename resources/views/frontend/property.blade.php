@extends('frontend.layout.master')
@section('style-area')
<link rel="stylesheet" href="{{asset('frontend/css/googlemap.css')}}">
@endsection
@section('content-area')
<style>
   .svg-inline--fa-d {
   display: inline-block;
   height: 1em;
   vertical-align: -0.125em;
   font-size: 1rem;
   line-height: 1.42;
   position: absolute;
   left: 11px;
   color: #00000057;
   top: 13px;
   }
   .form-control {
   height: 50px!important;
   box-shadow: 0px 1px 4px rgba(24, 26, 32, 0.07);
   padding-left: 34px!important;
   margin-bottom: 11px;
   background-color: #ffffff;
   border-radius: 60px;
   outline: none!important;
   }
   .DefaultCard__details li:after, .ListingCard__details li:after {
   content: ". . . . . . . . . . . . . . . . . . . . " ". . . . . . . . . . . . . . . . . . . . " ". . . . . . . . . . . . . . . . . . . . " ". . . . . . . . . . . . . . . . . . . . ";
   float: left;
   white-space: nowrap;
   width: 0;
   }
   .DefaultCard__details, .ListingCard__details {
   color: #666;
   font-size: .875rem;
   list-style: none;
   max-width: 40em;
   overflow-x: hidden;
   padding: 0;
   }
   .DefaultCard__details span:first-child, .ListingCard__details span:first-child {
   background: #fff;
   padding-right: 0.33em;
   }
   .DefaultCard__details li, .ListingCard__details li {
   clear: right;
   }
   .DefaultCard__details span+span, .ListingCard__details span+span {
   background: #fff;
   float: right;
   padding-left: 0.33em;
   position: relative;
   z-index: 1;
   }
   .btn-down-card {
    background-color: transparent;
    border: none;
    outline: none;
}
</style>
<div class="body_content">
<!-- Property Half Map V1 -->
<section class="p-0 bgc-f7">
   <div class="container-fluid">
      <div class="row wow fadeInUp" data-wow-delay="300ms">
         <div class="col-xl-5">
            <div class="half_map_area_content mt30">
               <div class="col-lg-12">
                  <div class="advance-search-list d-flex justify-content-between">
                     <div class="dropdown-lists">
                        <div class="">
                           <form action="">
                              <input type="text" placeholder="Address, City, State, County, or Zip" class="form-control bg-white">
                              <span class="fa fa-search svg-inline--fa-d" aria-hidden="true"></span>
                           </form>
                        </div>
                        <ul class="p-0 text-center text-xl-start">
                           <li class="list-inline-item position-relative">
                              <button type="button" class="open-btn mb15 dropdown-toggle" data-bs-toggle="dropdown">For Sale <i class="fa fa-angle-down ms-2"></i></button>
                              <div class="dropdown-menu">
                                 <div class="widget-wrapper bdrb1 pb25 mb0 pl20">
                                    <h6 class="list-title">Listing Status</h6>
                                    <div class="radio-element">
                                       <div class="form-check d-flex align-items-center mb10">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                          Auction
                                          </label>
                                       </div>
                                       <div class="form-check d-flex align-items-center mb10">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="checked">
                                          <label class="form-check-label" for="flexRadioDefault2">
                                          For Sale
                                          </label>
                                       </div>
                                    </div>
                                    <!-- </div>
                                       <div class="text-end mt10 pr10">
                                          <button type="button" class="done-btn ud-btn btn-thm drop_btn">Done</button>
                                       </div> -->
                                 </div>
                           </li>
                           <li class="list-inline-item position-relative">
                           <button type="button" class="open-btn mb15 dropdown-toggle dropdown-toggle-in" data-bs-toggle="dropdown">
                           Status <i class="fa fa-angle-down ms-2"></i>
                           </button>
                           <div class="dropdown-menu">
                           <div class="widget-wrapper bdrb1 pb25 mb0 pl20">
                           <h6 class="list-title">Upcoming 
                           </h6>
                           <div class="radio-element">
                           <div class="form-group py-1 mb-2 "><div class="custom-control custom-radio"><input type="radio" id="pStatusPretty_All" name="pStatusPretty" class="custom-control-input" value="All"> <label for="pStatusPretty_All" class="custom-control-label"><span class="mc-division-icon"><!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></span> All
                           </label></div></div>
                           <div class="form-group py-1 mb-2 ml-3"><div class="custom-control custom-radio"><input type="radio" id="pStatusPretty_Upcoming" name="pStatusPretty" class="custom-control-input" value="Upcoming"> <label for="pStatusPretty_Upcoming" class="custom-control-label"><span class="mc-division-icon"><!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></span> Upcoming
                           </label></div></div>
                           <div class="form-group py-1 mb-2 ml-3"><div class="custom-control custom-radio"><input type="radio" id="pStatusPretty_Pending" name="pStatusPretty" class="custom-control-input" value="Pending"> <label for="pStatusPretty_Pending" class="custom-control-label"><span class="mc-division-icon"><!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></span> Pending
                           </label></div></div>
                           <div class="form-group py-1 mb-2 ml-3"><div class="custom-control custom-radio"><input type="radio" id="pStatusPretty_Sold" name="pStatusPretty" class="custom-control-input" value="Sold"> <label for="pStatusPretty_Sold" class="custom-control-label"><span class="mc-division-icon"><!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></span> Sold
                           </label></div></div>
                           </div>
                           </div>
                           <div class="text-end mt10 pr10">
                           <button type="button" class="done-btn ud-btn btn-thm drop_btn">Done</button>
                           </div>
                           </div>
                           </li>
                           <li class="list-inline-item position-relative">
                           <button type="button" class="open-btn mb15 dropdown-toggle" data-bs-toggle="dropdown">Property Type <i class="fa fa-angle-down ms-2"></i></button>
                           <div class="dropdown-menu">
                           <div class="widget-wrapper bdrb1 pb25 mb0 pl20">
                           <div class="form-group py-1 mb-2 "><div class="custom-control custom-radio"><input type="radio" id="pClassPretty_All" name="pClassPretty" class="custom-control-input" value="All"> <label for="pClassPretty_All" class="custom-control-label"><span class="mc-division-icon"><!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></span> All
                           </label></div></div>
                           <div class="form-group py-1 mb-2 "><div class="custom-control custom-radio"><input type="radio" id="pClassPretty_All Real Estate" name="pClassPretty" class="custom-control-input" value="All Real Estate"> <label for="pClassPretty_All Real Estate" class="custom-control-label"><span class="mc-division-icon"><!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></span> All Real Estate
                           </label></div></div>
                           <div class="form-group py-1 mb-2 ml-3"><div class="custom-control custom-radio"><input type="radio" id="pClassPretty_Residential" name="pClassPretty" class="custom-control-input" value="Residential"> <label for="pClassPretty_Residential" class="custom-control-label"><span class="mc-division-icon"> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></span> Residential
                           </label></div></div>
                           <div class="form-group py-1 mb-2 ml-3"><div class="custom-control custom-radio"><input type="radio" id="pClassPretty_Commercial" name="pClassPretty" class="custom-control-input" value="Commercial"> <label for="pClassPretty_Commercial" class="custom-control-label"><span class="mc-division-icon"><!----> <!---->  <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></span> Commercial
                           </label></div></div>
                           <div class="form-group py-1 mb-2 ml-3"><div class="custom-control custom-radio"><input type="radio" id="pClassPretty_Multi-Family" name="pClassPretty" class="custom-control-input" value="Multi-Family"> <label for="pClassPretty_Multi-Family" class="custom-control-label"><span class="mc-division-icon"><!----> <!----> <!----> <!----> <!----> <!----> <!---->  <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></span> Multi-Family
                           </label></div></div>
                           <div class="form-group py-1 mb-2 ml-3"><div class="custom-control custom-radio"><input type="radio" id="pClassPretty_Land" name="pClassPretty" class="custom-control-input" value="Land"> <label for="pClassPretty_Land" class="custom-control-label"><span class="mc-division-icon"><!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></span> Land
                           </label></div></div>
                           <div class="form-group py-1 mb-2 ml-3"><div class="custom-control custom-radio"><input type="radio" id="pClassPretty_Premier" name="pClassPretty" class="custom-control-input" value="Premier"> <label for="pClassPretty_Premier" class="custom-control-label"><span class="mc-division-icon"><!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></span> Premier
                           </label></div></div>
                           <div class="form-group py-1 mb-2 "><div class="custom-control custom-radio"><input type="radio" id="pClassPretty_Personal Property" name="pClassPretty" class="custom-control-input" value="Personal Property"> <label for="pClassPretty_Personal Property" class="custom-control-label"><span class="mc-division-icon"><!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></span> Personal Property
                           </label></div></div>
                           <div class="form-group py-1 mb-2 "><div class="custom-control custom-radio"><input type="radio" id="pClassPretty_Benefit Auction" name="pClassPretty" class="custom-control-input" value="Benefit Auction"> <label for="pClassPretty_Benefit Auction" class="custom-control-label"><span class="mc-division-icon"><!----> <!----> <!----> <!---->  <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></span> Benefit Auction
                           </label></div></div>
                           <div class="row"><div class="col"><button type="button" class="btn py-1 px-2 float-right font-weight-semi btn-text-primary">Done</button></div></div>
                           </div>
                           <div class="text-end mt10 pr10">
                           <button type="button" class="done-btn ud-btn btn-thm dropdown-toggle">Done</button>
                           </div>
                           </div>
                           </li>
                           <!-- Advance Features modal trigger -->
                           <li class="list-inline-item position-relative">
                           <button type="button" class="open-btn mb15" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="flaticon-settings me-2"></i> More Filter</button>
                           </li>
                        </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center mb10">
                     <div class="col-sm-6">
                        <div class="text-center text-sm-start">
                           <h1 class="h4"><span class="d-none d-print-inline-block">Search - &nbsp;</span>Upcoming Auctions</h1>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="page_control_shorting d-flex align-items-center justify-content-center justify-content-sm-end">
                           <div class="pcs_dropdown pr10">
                              <span class="sui-paging-info SearchResults_resultCount text-muted d-inline-block d-print-none">29 results</span>&nbsp;&nbsp;
                              <span>Sort by:</span>
                              <select class="selectpicker show-tick">
                                 <option>Furthest</option>
                                 <option>Soonest</option>
                              </select>
                           </div>
                        </div>
                        <div class="page_control_shorting d-flex align-items-center justify-content-center justify-content-sm-end">
                           <div class="pcs_dropdown pr10">
                              <span>PER PAGE:</span>
                              <select class="selectpicker show-tick">
                                 <option>25</option>
                                 <option>50</option>
                                 <option>75</option>
                              </select>
                           </div>
                        </div>
                        </span>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="listing-style1">
                           <div class="list-thumb">
                              <img class="w-100" src="{{asset('frontend/pictures/g1-1.jpg')}}" alt="">
                              <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                              <div class="list-price">$14,000 / <span>mo</span></div>
                           </div>
                           <div class="list-content">
                              <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                              <p class="list-text">California City, CA, USA</p>
                              <div class="list-meta d-flex align-items-center">
                                 <a href=""><span class="flaticon-bed"></span>3 bed</a>
                                 <a href=""><span class="flaticon-shower"></span>4 bath</a>
                                 <a href=""><span class="flaticon-expand"></span>1200 sqft</a>
                              </div>
                              <hr class="mt-2 mb-2">
                              <div class="list-meta2 d-flex justify-content-between align-items-center">
                                 <span class="for-what">For Rent</span>
                                 <div class="icons d-flex align-items-center">
                                    <a href=""><span class="flaticon-fullscreen"></span></a>
                                    <a href=""><span class="flaticon-new-tab"></span></a>
                                    <a href=""><span class="flaticon-like"></span></a>
                                 </div>
                              </div>
                              <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" class="btn-down-card">More information
                           &nbsp;<span class="fa fa-chevron-down" aria-hidden="true"></span>
                              </button>
                              <div class="collapse" id="collapseExample">
                                 <div class="ListingCard__see-more-content d-print-none">
                                    <hr>
                                    <p class="ListingCard__details-heading">PROPERTY DETAILS:</p>
                                    <ul class="ListingCard__details">
                                       <li><span>Class</span> <span>Residential</span></li>
                                       <li><span>Property ID</span> <span>9425</span></li>
                                       <li><span>Year Built</span> <span>2013</span></li>
                                       <li><span>Lot Size</span> <span>26,377.00 Sq. Ft.</span></li>
                                       <li><span>Total Finished Living Area</span> <span>2,271 Sq. Ft.</span></li>
                                       <li><span>Above Ground Living Area</span> <span>2,271 Sq. Ft.</span></li>
                                       <li><span>Status</span> <span>Upcoming</span></li>
                                       <li><span>Total Bedrooms</span> <span>4</span></li>
                                       <li><span>Full Baths</span> <span>2</span></li>
                                       <li><span>Half Baths</span> <span>1</span></li>
                                       <li><span>Garage Size</span> <span>Three-Car</span></li>
                                       <li><span>Level</span> <span>One-Story</span></li>
                                    </ul>
                                    <hr>
                                    <p class="ListingCard__details-heading">FINANCIAL DETAILS:</p>
                                    <hr>
                                    <ul class="ListingCard__details">
                                       <li class="w-100">
                                          <span>HOA Yearly Due</span> 
                                          <span>$0.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>HOA Initiation Fee</span> 
                                          <span>$0.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Monthly Income</span>
                                          <span>$0.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>General Taxes</span> 
                                          <span>$3,177.90</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Yearly Specials</span>
                                          <span>$8.38</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Total Specials</span>
                                          <span>$8.38</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Earnest Deposit</span>
                                          <span>$15,000.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Auction Type</span>
                                          <span>Absolute | No Minimum, No Reserve</span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="listing-style1">
                           <div class="list-thumb">
                              <img class="w-100" src="{{asset('frontend/pictures/g1-2.jpg')}}" alt="">
                              <div class="list-price">$82,000 / <span>mo</span></div>
                           </div>
                           <div class="list-content">
                              <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                              <p class="list-text">California City, CA, USA</p>
                              <div class="list-meta d-flex align-items-center">
                                 <a href=""><span class="flaticon-bed"></span>3 bed</a>
                                 <a href=""><span class="flaticon-shower"></span>4 bath</a>
                                 <a href=""><span class="flaticon-expand"></span>1200 sqft</a>
                              </div>
                              <hr class="mt-2 mb-2">
                              <div class="list-meta2 d-flex justify-content-between align-items-center">
                                 <span class="for-what">For Rent</span>
                                 <div class="icons d-flex align-items-center">
                                    <a href=""><span class="flaticon-fullscreen"></span></a>
                                    <a href=""><span class="flaticon-new-tab"></span></a>
                                    <a href=""><span class="flaticon-like"></span></a>
                                 </div>
                              </div>
                              <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" class="btn-down-card">More information
                              &nbsp;<span class="fa fa-chevron-down" aria-hidden="true"></span>
                              </button>
                              <div class="collapse" id="collapseExample2">
                                 <div class="ListingCard__see-more-content d-print-none">
                                    <hr>
                                    <p class="ListingCard__details-heading">PROPERTY DETAILS:</p>
                                    <ul class="ListingCard__details">
                                       <li><span>Class</span> <span>Residential</span></li>
                                       <li><span>Property ID</span> <span>9425</span></li>
                                       <li><span>Year Built</span> <span>2013</span></li>
                                       <li><span>Lot Size</span> <span>26,377.00 Sq. Ft.</span></li>
                                       <li><span>Total Finished Living Area</span> <span>2,271 Sq. Ft.</span></li>
                                       <li><span>Above Ground Living Area</span> <span>2,271 Sq. Ft.</span></li>
                                       <li><span>Status</span> <span>Upcoming</span></li>
                                       <li><span>Total Bedrooms</span> <span>4</span></li>
                                       <li><span>Full Baths</span> <span>2</span></li>
                                       <li><span>Half Baths</span> <span>1</span></li>
                                       <li><span>Garage Size</span> <span>Three-Car</span></li>
                                       <li><span>Level</span> <span>One-Story</span></li>
                                    </ul>
                                    <hr>
                                    <p class="ListingCard__details-heading">FINANCIAL DETAILS:</p>
                                    <hr>
                                    <ul class="ListingCard__details">
                                       <li class="w-100">
                                          <span>HOA Yearly Due</span> 
                                          <span>$0.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>HOA Initiation Fee</span> 
                                          <span>$0.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Monthly Income</span>
                                          <span>$0.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>General Taxes</span> 
                                          <span>$3,177.90</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Yearly Specials</span>
                                          <span>$8.38</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Total Specials</span>
                                          <span>$8.38</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Earnest Deposit</span>
                                          <span>$15,000.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Auction Type</span>
                                          <span>Absolute | No Minimum, No Reserve</span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="listing-style1">
                           <div class="list-thumb">
                              <img class="w-100" src="{{asset('frontend/pictures/g1-3.jpg')}}" alt="">
                              <div class="list-price">$63,000 / <span>mo</span></div>
                           </div>
                           <div class="list-content">
                              <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                              <p class="list-text">California City, CA, USA</p>
                              <div class="list-meta d-flex align-items-center">
                                 <a href=""><span class="flaticon-bed"></span>3 bed</a>
                                 <a href=""><span class="flaticon-shower"></span>4 bath</a>
                                 <a href=""><span class="flaticon-expand"></span>1200 sqft</a>
                              </div>
                              <hr class="mt-2 mb-2">
                              <div class="list-meta2 d-flex justify-content-between align-items-center">
                                 <span class="for-what">For Rent</span>
                                 <div class="icons d-flex align-items-center">
                                    <a href=""><span class="flaticon-fullscreen"></span></a>
                                    <a href=""><span class="flaticon-new-tab"></span></a>
                                    <a href=""><span class="flaticon-like"></span></a>
                                 </div>
                              </div>
                              <hr>
                              <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" class="btn-down-card">More information
                              &nbsp;<span class="fa fa-chevron-down" aria-hidden="true"></span>
                              </button>
                              <div class="collapse" id="collapseExample3">
                                 <div class="ListingCard__see-more-content d-print-none">
                                    <hr>
                                    <p class="ListingCard__details-heading">PROPERTY DETAILS:</p>
                                    <ul class="ListingCard__details">
                                       <li><span>Class</span> <span>Residential</span></li>
                                       <li><span>Property ID</span> <span>9425</span></li>
                                       <li><span>Year Built</span> <span>2013</span></li>
                                       <li><span>Lot Size</span> <span>26,377.00 Sq. Ft.</span></li>
                                       <li><span>Total Finished Living Area</span> <span>2,271 Sq. Ft.</span></li>
                                       <li><span>Above Ground Living Area</span> <span>2,271 Sq. Ft.</span></li>
                                       <li><span>Status</span> <span>Upcoming</span></li>
                                       <li><span>Total Bedrooms</span> <span>4</span></li>
                                       <li><span>Full Baths</span> <span>2</span></li>
                                       <li><span>Half Baths</span> <span>1</span></li>
                                       <li><span>Garage Size</span> <span>Three-Car</span></li>
                                       <li><span>Level</span> <span>One-Story</span></li>
                                    </ul>
                                    <hr>
                                    <p class="ListingCard__details-heading">FINANCIAL DETAILS:</p>
                                    <hr>
                                    <ul class="ListingCard__details">
                                       <li class="w-100">
                                          <span>HOA Yearly Due</span> 
                                          <span>$0.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>HOA Initiation Fee</span> 
                                          <span>$0.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Monthly Income</span>
                                          <span>$0.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>General Taxes</span> 
                                          <span>$3,177.90</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Yearly Specials</span>
                                          <span>$8.38</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Total Specials</span>
                                          <span>$8.38</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Earnest Deposit</span>
                                          <span>$15,000.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Auction Type</span>
                                          <span>Absolute | No Minimum, No Reserve</span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="listing-style1">
                           <div class="list-thumb">
                              <img class="w-100" src="{{asset('frontend/pictures/g1-4.jpg')}}" alt="">
                              <div class="list-price">$63,000 / <span>mo</span></div>
                           </div>
                           <div class="list-content">
                              <h6 class="list-title"><a href="page-property-single-v1.html">Triple Story House for Rent</a></h6>
                              <p class="list-text">California City, CA, USA</p>
                              <div class="list-meta d-flex align-items-center">
                                 <a href=""><span class="flaticon-bed"></span>3 bed</a>
                                 <a href=""><span class="flaticon-shower"></span>4 bath</a>
                                 <a href=""><span class="flaticon-expand"></span>1200 sqft</a>
                              </div>
                              <hr class="mt-2 mb-2">
                              <div class="list-meta2 d-flex justify-content-between align-items-center">
                                 <span class="for-what">For Rent</span>
                                 <div class="icons d-flex align-items-center">
                                    <a href=""><span class="flaticon-fullscreen"></span></a>
                                    <a href=""><span class="flaticon-new-tab"></span></a>
                                    <a href=""><span class="flaticon-like"></span></a>
                                 </div>
                              </div>
                              <hr>
                              <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" class="btn-down-card">More information
                              &nbsp;<span class="fa fa-chevron-down" aria-hidden="true"></span>
                              </button>
                              <div class="collapse" id="collapseExample4">
                                 <div class="ListingCard__see-more-content d-print-none">
                                    <hr>
                                    <p class="ListingCard__details-heading">PROPERTY DETAILS:</p>
                                    <ul class="ListingCard__details">
                                       <li><span>Class</span> <span>Residential</span></li>
                                       <li><span>Property ID</span> <span>9425</span></li>
                                       <li><span>Year Built</span> <span>2013</span></li>
                                       <li><span>Lot Size</span> <span>26,377.00 Sq. Ft.</span></li>
                                       <li><span>Total Finished Living Area</span> <span>2,271 Sq. Ft.</span></li>
                                       <li><span>Above Ground Living Area</span> <span>2,271 Sq. Ft.</span></li>
                                       <li><span>Status</span> <span>Upcoming</span></li>
                                       <li><span>Total Bedrooms</span> <span>4</span></li>
                                       <li><span>Full Baths</span> <span>2</span></li>
                                       <li><span>Half Baths</span> <span>1</span></li>
                                       <li><span>Garage Size</span> <span>Three-Car</span></li>
                                       <li><span>Level</span> <span>One-Story</span></li>
                                    </ul>
                                    <hr>
                                    <p class="ListingCard__details-heading">FINANCIAL DETAILS:</p>
                                    <hr>
                                    <ul class="ListingCard__details">
                                       <li class="w-100">
                                          <span>HOA Yearly Due</span> 
                                          <span>$0.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>HOA Initiation Fee</span> 
                                          <span>$0.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Monthly Income</span>
                                          <span>$0.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>General Taxes</span> 
                                          <span>$3,177.90</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Yearly Specials</span>
                                          <span>$8.38</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Total Specials</span>
                                          <span>$8.38</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Earnest Deposit</span>
                                          <span>$15,000.00</span>
                                       </li>
                                       <li class="w-100">
                                          <span>Auction Type</span>
                                          <span>Absolute | No Minimum, No Reserve</span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="mbp_pagination text-center">
                        <ul class="page_navigation">
                           <li class="page-item">
                              <a class="page-link" href="#"> <span class="fas fa-angle-left"></span></a>
                           </li>
                           <li class="page-item"><a class="page-link" href="#">1</a></li>
                           <li class="page-item active" aria-current="page">
                              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                           </li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item"><a class="page-link" href="#">4</a></li>
                           <li class="page-item"><a class="page-link" href="#">5</a></li>
                           <li class="page-item"><a class="page-link" href="#">...</a></li>
                           <li class="page-item"><a class="page-link" href="#">20</a></li>
                           <li class="page-item">
                              <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
                           </li>
                        </ul>
                        <p class="mt10 pagination_page_count text-center">1 – 20 of 300+ property available</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-7 overflow-hidden position-relative">
               <div class="half_map_area">
                  <div class="map-canvas half_style" id="map" data-map-zoom="7" data-map-scroll="true"></div>
               </div>
            </div>
         </div>
      </div>
</section>
<a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
</div>
<script src="{{asset('frontend/js/jquery-3.6.4.min.js')}}"></script>
<script src="{{asset('frontend/js/script.js')}}"></script>
<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&callback=initMap"></script>
<script src="{{asset('frontend/js/infobox.min.js')}}"></script>
<script src="{{asset('frontend/js/markerclusterer.js')}}"></script>
<script src="{{asset('frontend/js/maps.js')}}"></script>
<!-- Google Maps -->
<script>
   const button = document.querySelector('.btn');
   const collapseElement = document.querySelector('.collapse');
   
   // Add an event listener to the button
   button.addEventListener('click', () => {
   // Toggle the collapse element
   collapseElement.classList.toggle('show');
   });
</script>
<script>
   // Get the button and the collapse element
   const button = document.querySelector('.btn');
   const collapseElement = document.querySelector('.collapse');
   
   // Add an event listener to the button
   button.addEventListener('click', () => {
   // Toggle the collapse element
   collapseElement.classList.toggle('show');
   
   // Change the text of the button
   if (collapseElement.classList.contains('show')) {
   button.textContent = 'Less information';
   } else {
   button.textContent = 'More information';
   }
   });
</script>
@endsection