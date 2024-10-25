<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
   *{
   margin: 0;
   padding: 0;
   }
   .visible_list >.content-thin-list {
   opacity: 0;
   transition: opacity 0.3s ease; 
   position: absolute;
   background-color: #fff;
   color: #000;
   min-width: 300px;
   z-index: 2;
   }
   .visible_list:hover >.content-thin-list {
   opacity: 1;
   }
   .visible_list {
   position: relative;
   }
   .mc-dropdown__arrow {
   border: 10px solid transparent;
   border-bottom-color: #fff;
   height: 0;
   opacity: 0;
   pointer-events: none;
   top: -19px;
   transition: .2s ease;
   width: 0;
   }
   .mc-dropdown__arrow, .mc-dropdown__bg {
   position: absolute;
   }
   .menuLink:hover {
   color: #00f; 
   }
   .modal-lg {
   max-width: 800px!important;
   }
   .form-control-outline {
   background-color: #fff;
   border: 0 transparent;
   border-radius: 0.1875rem;
   box-shadow: 0 0 0 1px #999;
   }
   .form-control-flex {
   display: flex;
   align-items: center;
   gap: 10px;
   }
</style>
<div class="preloader"></div>
<!-- Main Header Nav -->
<header class="header-nav nav-innerpage-style menu-home4 main-menu" style="background-color: navy">
   <!-- Ace Responsive Menu -->
   <nav class="posr">
      <div class="container maxw1600 posr menu_bdrt1">
      <div class="row align-items-center justify-content-between">
         <div class="col-auto">
            <a class="header-logo" href="{{url('')}}"><img src="{{asset('frontend/pictures/elite.png')}}" alt="Header Logo" style="height: 60px"></a>
         </div>
         <div class="col-auto">
            <!-- Responsive Menu Structure-->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
               <li class="visible_list">
                  <a class="list-item" href="#"><span class="title" style="color: white">Auctions</span></a>
                  <!-- Level Two-->
                  <!-- <div class="mc-dropdown-menu__content-thin content-thin-list">
                     <div class="mc-dropdown__arrow" style="opacity: 1; left: 1px;"></div>
                     <div class="top-section">
                        <div class="row p-2">
                           <div class="col-12">
                            <a href="#" class="menuLink">
                              <span class="fa fa-gavel" aria-hidden="true"></span>
                              All Auctions
                              </a>
                           </div>
                           <div class="col-12"><a href="#" class="menuLink">
                              <span class="fa fa-home" aria-hidden="true"></span>
                              Real Estate</a>
                           </div>
                           <div class="col-12" ><a href="#"class="menuLink"> Personal Property</a></div>
                           <div class="col-12"><a href="#"class="menuLink"> Benefit</a></div>
                           <div class="col-12"><a href="#"class="menuLink"> Online</a></div>
                        </div>
                     </div>
                     </div> -->
               </li>
               <li class="megamenu_style"> <a  class="list-item" href="#"><span class="title" style="color: white">For Sale</span></a>
               </li>
               <li class="megamenu_style"> <a  class="list-item" href="{{ url('services') }}"><span class="title" style="color: white">Services </span></a>
               </li>
               <li class="megamenu_style"> <a  class="list-item" href="#"><span class="title" style="color: white">Why Auction </span></a>
               </li>
               <li class="visible_list"> <a class="list-item" href="{{url('property')}}"><span class="title" style="color: white">Property</span></a>
               </li>
               <li class="visible_list"> <a class="list-item" href="{{url('contact-us')}}"><span class="title" style="color: white">Contact Us</span></a>
               </li>
               <li class="visible_list">
                  <a class="list-item" href="{{url('about-us')}}"><span class="title" style="color: white">About Us</span></a>
                  <div class="mc-dropdown-menu__content-thin content-thin-list">
                     <div class="mc-dropdown__arrow" style="opacity: 1; left: 1px;"></div>
                     <!-- <div class="top-section">
                        <div class="row p-2">
                           <div class="col-12"><a href="index.html"><span>About Us</span></a></div>
                           <div class="col-12"><a href="#"class="menuLink"><span>Awards</span></a></div>
                           <div class="col-12" ><a href="#"class="menuLink"><span>Our Team</span></a></div>
                           <div class="col-12"><a href="#"class="menuLink"><span>Careers</span></a></div>
                           <div class="col-12"><a href="#"class="menuLink"><span>Blog</span></a></div>
                           <div class="col-12"><a href="#"class="menuLink"><span>Videos</span></a></div>
                           <div class="col-12"><a href="#"class="menuLink"><span>Auction Dictionary</span></a></div>
                           <div class="col-12"><a href="#"class="menuLink"><span>FAQs</span></a></div>
                        </div>
                        </div> -->
               </li>
            </ul>
            </div>
            <div class="col-auto">
               <div class="d-flex align-items-center">
                  <a class="login-info d-flex align-items-center" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="far fa-user-circle fz16 me-2"></i> <span class="d-none d-xl-block" style="color: white">Login / Register</span></a>
                  <a class="ud-btn btn-dark add-property bdrs0 mx-2 mx-xl-4" href="page-dashboard-add-property.html">Add Property<i class="fal fa-arrow-right-long"></i></a>
                  <a class="sidemenu-btn filter-btn-right" href="#"><img src="images/dark-nav-icon.svg" alt=""></a>
               </div>
            </div>
         </div>
      </div>
   </nav>
</header>
<!-- Signup Modal -->
<div class="signup-modal">
   <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalToggleLabel">Welcome to Realton</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="log-reg-form">
                  <div class="navtab-style2">
                     <nav>
                        <div class="nav nav-tabs mb20" id="nav-tab" role="tablist">
                           <button class="nav-link active fw600" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sign In</button>
                           <button class="nav-link fw600" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">New Account</button>
                        </div>
                     </nav>
                     <div class="tab-content" id="nav-tabContent2">
                        <div class="tab-pane fade show active fz15" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                           <div class="form-style1">
                              <div class="mb25">
                                 <label class="form-label fw600 dark-color">Email</label>
                                 <input type="email" class="form-control" placeholder="Enter Email">
                              </div>
                              <div class="mb15">
                                 <label class="form-label fw600 dark-color">Password</label>
                                 <input type="text" class="form-control" placeholder="Enter Password">
                              </div>
                              <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                                 <label class="custom_checkbox fz14 ff-heading">Remember me
                                 <input type="checkbox" checked="checked">
                                 <span class="checkmark"></span>
                                 </label>
                                 <a class="fz14 ff-heading" href="#">Lost your password?</a>
                              </div>
                              <div class="d-grid mb20">
                                 <button class="ud-btn btn-thm" type="button">Sign in <i class="fal fa-arrow-right-long"></i></button>
                              </div>
                              <div class="hr_content mb20">
                                 <hr>
                                 <span class="hr_top_text">OR</span>
                              </div>
                              <div class="d-grid mb10">
                                 <button class="ud-btn btn-white" type="button"><i class="fab fa-google"></i> Continue Google</button>
                              </div>
                              <div class="d-grid mb10">
                                 <button class="ud-btn btn-fb" type="button"><i class="fab fa-facebook-f"></i> Continue Facebook</button>
                              </div>
                              <div class="d-grid mb20">
                                 <button class="ud-btn btn-apple" type="button"><i class="fab fa-apple"></i> Continue Apple</button>
                              </div>
                              <p class="dark-color text-center mb0 mt10">Not signed up? <a class="dark-color fw600" href="page-register.html">Create an account.</a></p>
                           </div>
                        </div>
                        <div class="tab-pane fade fz15" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                           <div class="form-style1">
                              <div class="mb25">
                                 <label class="form-label fw600 dark-color">Email</label>
                                 <input type="email" class="form-control" placeholder="Enter Email">
                              </div>
                              <div class="mb20">
                                 <label class="form-label fw600 dark-color">Password</label>
                                 <input type="text" class="form-control" placeholder="Enter Password">
                              </div>
                              <div class="d-grid mb20">
                                 <button class="ud-btn btn-thm" type="button">Create account <i class="fal fa-arrow-right-long"></i></button>
                              </div>
                              <div class="hr_content mb20">
                                 <hr>
                                 <span class="hr_top_text">OR</span>
                              </div>
                              <div class="d-grid mb10">
                                 <button class="ud-btn btn-white" type="button"><i class="fab fa-google"></i> Continue Google</button>
                              </div>
                              <div class="d-grid mb10">
                                 <button class="ud-btn btn-fb" type="button"><i class="fab fa-facebook-f"></i> Continue Facebook</button>
                              </div>
                              <div class="d-grid mb20">
                                 <button class="ud-btn btn-apple" type="button"><i class="fab fa-apple"></i> Continue Apple</button>
                              </div>
                              <p class="dark-color text-center mb0 mt10">Not signed up? <a class="dark-color fw600" href="page-register.html">Create an account.</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Menu In Hiddn SideBar -->
<div class="rightside-hidden-bar">
   <div class="hsidebar-header">
      <div class="sidebar-close-icon"><span class="far fa-times"></span></div>
      <h4 class="title">Welcome to Realton</h4>
   </div>
   <div class="hsidebar-content">
      <div class="hiddenbar_navbar_content">
         <div class="hiddenbar_navbar_menu">
            <ul class="navbar-nav">
               <li class="nav-item"> <a class="nav-link" href="" role="button">Apartments</a></li>
               <li class="nav-item"> <a class="nav-link" href="" role="button">Bungalow</a></li>
               <li class="nav-item"> <a class="nav-link" href="" role="button">Houses</a></li>
               <li class="nav-item"> <a class="nav-link" href="" role="button">Loft</a></li>
               <li class="nav-item"> <a class="nav-link" href="" role="button">Office</a></li>
               <li class="nav-item"> <a class="nav-link" href="" role="button">Townhome</a></li>
               <li class="nav-item"> <a class="nav-link" href="" role="button">Villa</a></li>
            </ul>
         </div>
         <div class="hiddenbar_footer position-relative bdrt1">
            <div class="row pt45 pb30 pl30">
               <div class="col-auto">
                  <div class="contact-info">
                     <p class="info-title dark-color">Total Free Customer Care</p>
                     <h6 class="info-phone dark-color"><a href="+(0)-123-050-945-02">+(0) 123 050 945 02</a></h6>
                  </div>
               </div>
               <div class="col-auto">
                  <div class="contact-info">
                     <p class="info-title dark-color">Nee Live Support?</p>
                     <h6 class="info-mail dark-color"><a href="mailto:hi@homez.com">hi@homez.com</a></h6>
                  </div>
               </div>
            </div>
            <div class="row pt30 pb30 bdrt1">
               <div class="col-auto">
                  <div class="social-style-sidebar d-flex align-items-center pl30">
                     <h6 class="me-4 mb-0">Follow us</h6>
                     <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                     <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                     <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                     <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--End Menu In Hiddn SideBar -->
<!-- Advance Feature Modal Start -->
<div class="advance-feature-modal">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
         <div class="modal-header pl30 pr30">
            <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body pb-0">
            <div class="row">
               <div class="col-lg-12">
                  <div class="widget-wrapper">
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="widget-wrapper">
                              <h6 class="list-title">Bedrooms</h6>
                              <div class="d-flex">
                                 <div class="selection">
                                    <input id="xany" name="xbeds" type="radio" checked>
                                    <label for="xany">any</label>
                                 </div>
                                 <div class="selection">
                                    <input id="xoneplus" name="xbeds" type="radio">
                                    <label for="xoneplus">1+</label>
                                 </div>
                                 <div class="selection">
                                    <input id="xtwoplus" name="xbeds" type="radio">
                                    <label for="xtwoplus">2+</label>
                                 </div>
                                 <div class="selection">
                                    <input id="xthreeplus" name="xbeds" type="radio">
                                    <label for="xthreeplus">3+</label>
                                 </div>
                                 <div class="selection">
                                    <input id="xfourplus" name="xbeds" type="radio">
                                    <label for="xfourplus">4+</label>
                                 </div>
                                 <div class="selection">
                                    <input id="xfiveplus" name="xbeds" type="radio">
                                    <label for="xfiveplus">5+</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="widget-wrapper">
                              <h6 class="list-title">Bathrooms</h6>
                              <div class="d-flex">
                                 <div class="selection">
                                    <input id="yany" name="ybath" type="radio" checked>
                                    <label for="yany">any</label>
                                 </div>
                                 <div class="selection">
                                    <input id="yoneplus" name="ybath" type="radio">
                                    <label for="yoneplus">1+</label>
                                 </div>
                                 <div class="selection">
                                    <input id="ytwoplus" name="ybath" type="radio">
                                    <label for="ytwoplus">2+</label>
                                 </div>
                                 <div class="selection">
                                    <input id="ythreeplus" name="ybath" type="radio">
                                    <label for="ythreeplus">3+</label>
                                 </div>
                                 <div class="selection">
                                    <input id="yfourplus" name="ybath" type="radio">
                                    <label for="yfourplus">4+</label>
                                 </div>
                                 <div class="selection">
                                    <input id="yfiveplus" name="ybath" type="radio">
                                    <label for="yfiveplus">5+</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-12">
                  <div class="widget-wrapper">
                     <h6 class="list-title">Garage</h6>
                     <div class="form-style2 input-group">
                        <select id="facet_select_garage" class="selectpicker" data-live-search="true" data-width="100%">
                           <option>--</option>
                           <option value=""></option>
                           <option value="0">
                              0
                           </option>
                           <option value="1">
                              1
                           </option>
                           <option value="2">
                              2
                           </option>
                           <option value="3">
                              3
                           </option>
                           <option value="4+">
                              4+
                           </option>
                           <option value="Carport">
                              Carport
                           </option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-12">
                  <div class="widget-wrapper">
                     <h6 class="list-title">Auction Type</h6>
                     <div class="form-style2 input-group">
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                           <option>Absolute | No Minimum, No Reserve</option>
                           <option data-tokens="Apartments">Court Ordered</option>
                           <option data-tokens="Bungalow">No Minimum, No Reserve</option>
                           <option data-tokens="Houses">Reserved</option>
                           <option data-tokens="Loft">Subject to Seller Confirmation</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-12">
                  <div class="widget-wrapper">
                     <h6 class="list-title">Auction Method</h6>
                     <div class="form-style2 input-group">
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                           <option>Live Only Auction</option>
                           <option data-tokens="Apartments">Online Only Auction</option>
                           <option data-tokens="Bungalow">Live Auction with Online Bidding</option>
                           <option data-tokens="Houses">Live Stream Auction</option>
                           <option data-tokens="Loft">Sealed Bid</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-12">
                  <div class="widget-wrapper">
                     <h6 class="list-title">Lot Size</h6>
                     <div class="d-flex flex-row justify-content-center" style="width: 100%;">
                        <div class="form-style2 input-group">
                           <select class="selectpicker " data-live-search="true" data-width="100%">
                              <option value="">Any</option>
                              <option value="1000">1000 Sq. Ft.</option>
                              <option value="2000">2000 Sq. Ft.</option>
                              <option value="3000">3000 Sq. Ft.</option>
                              <option value="4000">4000 Sq. Ft.</option>
                              <option value="5000">5000 Sq. Ft.</option>
                              <option value="7500">7500 Sq. Ft.</option>
                              <option value="10890">1/4 Acre/10,890 Sq. Ft.</option>
                              <option value="43560">1 Acre</option>
                              <option value="217800">5 Acres</option>
                              <option value="435600">10 Acres</option>
                              <option value="1089000">25 Acres</option>
                              <option value="2178000">50 Acres</option>
                              <option value="4356000">100 Acres</option>
                              <option value="8712000">200 Acres</option>
                              <option value="21780000">500 Acres</option>
                              <option value="43560000">1000 Acres</option>
                           </select>
                        </div>
                        <div style="align-self: center;" class="mx-2"s>
                           <span class="fa fa-minus" aria-hidden="true"></span>
                        </div>
                        <div class="form-style2 input-group">
                           <select class="selectpicker " data-live-search="true" data-width="100%">
                              <option value="">Any</option>
                              <option value="1000">1000 Sq. Ft.</option>
                              <option value="2000">2000 Sq. Ft.</option>
                              <option value="3000">3000 Sq. Ft.</option>
                              <option value="4000">4000 Sq. Ft.</option>
                              <option value="5000">5000 Sq. Ft.</option>
                              <option value="7500">7500 Sq. Ft.</option>
                              <option value="10890">1/4 Acre/10,890 Sq. Ft.</option>
                              <option value="43560">1 Acre</option>
                              <option value="217800">5 Acres</option>
                              <option value="435600">10 Acres</option>
                              <option value="1089000">25 Acres</option>
                              <option value="2178000">50 Acres</option>
                              <option value="4356000">100 Acres</option>
                              <option value="8712000">200 Acres</option>
                              <option value="21780000">500 Acres</option>
                              <option value="43560000">1000 Acres</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-12">
                  <div class="widget-wrapper">
                     <h6 class="list-title">Square Feet</h6>
                     <div class="d-flex flex-row justify-content-center" style="width: 100%;">
                        <div class="form-style2 input-group">
                           <select  class="selectpicker " data-live-search="true" data-width="100%" >
                              <option value="">Any</option>
                              <option value="500">500</option>
                              <option value="750">750</option>
                              <option value="1000">1000</option>
                              <option value="1250">1250</option>
                              <option value="1500">1500</option>
                              <option value="1750">1750</option>
                              <option value="2000">2000</option>
                              <option value="2250">2250</option>
                              <option value="2500">2500</option>
                              <option value="2750">2750</option>
                              <option value="3000">3000</option>
                              <option value="3500">3500</option>
                              <option value="4000">4000</option>
                              <option value="5000">5000</option>
                              <option value="7000">7000</option>
                           </select>
                        </div>
                        <div style="align-self: center;" class="mx-2">
                           <span class="fa fa-minus" aria-hidden="true"></span>
                        </div>
                        <div class="form-style2 input-group">
                           <select  class="selectpicker " data-live-search="true" data-width="100%">
                              <option value="">Any</option>
                              <option value="500">500</option>
                              <option value="750">750</option>
                              <option value="1000">1000</option>
                              <option value="1250">1250</option>
                              <option value="1500">1500</option>
                              <option value="1750">1750</option>
                              <option value="2000">2000</option>
                              <option value="2250">2250</option>
                              <option value="2500">2500</option>
                              <option value="2750">2750</option>
                              <option value="3000">3000</option>
                              <option value="3500">3500</option>
                              <option value="4000">4000</option>
                              <option value="5000">5000</option>
                              <option value="7000">7000</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="form">
                     <label for="facet_input_p_listing_date.keyword">Date Range</label>
                     <div class="form-group mb-2">
                        <div class="d-flex flex-row justify-content-center">
                           <div class="flex-fill w-50">
                              <div class="b-form-btn-label-control dropdown b-form-datepicker form-control-outline form-control form-control-flex">
                                 <button class="btn h-auto">
                                 <span class="fa fa-calendar" aria-hidden="true"></span>
                                 <input id="departure-date" type="text" class="search-bo-input" placeholder="From" autocomplete="off"style="display: none;">
                                 </button>
                                 <div class=" searchwidth" id="departure-box">
                                    <div class="search-bo-inner" id="search-bo-city">
                                       <label for="">
                                       <span id="date" class="searchinner"></span>
                                       <span id="monthYear"> </span>
                                       <span id="dayname"></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="flex-fill w-50">
                              <div class="b-form-btn-label-control dropdown b-form-datepicker form-control-outline form-control form-control-flex">
                                 <button class="btn h-auto">
                                 <span class="fa fa-calendar" aria-hidden="true"></span>
                                 <input id="return-date" type="text" class="search-bo-input" placeholder="From" autocomplete="off" style="display: none;">
                                 </button>
                                 <div id="r-dblock" style="display: none;">
                                    <div class="search-bo-inner" id="search-bo-city">
                                       <label for="">
                                          <div id="r-dblock" style="">
                                             <p>
                                                <span id="re-date" class="searchinner">10</span>
                                                <span id="re-monthYear">January 2024</span>
                                                <span id="re-dayname">Wednesday</span>
                                             </p>
                                             <p>
                                             </p>
                                          </div>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class=" row">
               <div class="col-lg-4 col-12">
                  <div class="widget-wrapper">
                     <h6 class="list-title">City</h6>
                     <div class="form-style2 input-group">
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                           <option>Select city</option>
                           <option data-tokens="Apartments">ANTHONY </option>
                           <option data-tokens="Bungalow">ANTHONY</option>
                           <option data-tokens="Houses">ANTHONY</option>
                           <option data-tokens="Loft">ANTHONY</option>
                           <option data-tokens="Office">ANTHONY</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-12">
                  <div class="widget-wrapper">
                     <h6 class="list-title">Zip</h6>
                     <div class="form-style2 input-group">
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                           <option>Select Zip</option>
                           <option data-tokens="Apartments">ANTHONY </option>
                           <option data-tokens="Bungalow">ANTHONY</option>
                           <option data-tokens="Houses">ANTHONY</option>
                           <option data-tokens="Loft">ANTHONY</option>
                           <option data-tokens="Office">ANTHONY</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-12">
                  <div class="widget-wrapper">
                     <h6 class="list-title">County</h6>
                     <div class="form-style2 input-group">
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                           <option>Select County</option>
                           <option data-tokens="Apartments">ANTHONY </option>
                           <option data-tokens="Bungalow">ANTHONY</option>
                           <option data-tokens="Houses">ANTHONY</option>
                           <option data-tokens="Loft">ANTHONY</option>
                           <option data-tokens="Office">ANTHONY</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class=" row">
               <div class="col-lg-8 col-12">
                  <div class="widget-wrapper">
                     <h6 class="list-title">Keywords</h6>
                     <div class="form-style2 input-group">
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                           <option>Select Keywords</option>
                           <option data-tokens="Apartments">ANTHONY </option>
                           <option data-tokens="Bungalow">ANTHONY</option>
                           <option data-tokens="Houses">ANTHONY</option>
                           <option data-tokens="Loft">ANTHONY</option>
                           <option data-tokens="Office">ANTHONY</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-4">
                  <div>
                     <div class="form">
                        <label for="facet_input_has_openhouse">Openhouse</label> <!----> 
                        <div class="form-group mb-2 ">
                           <div class="custom-control custom-checkbox"><input type="checkbox" id="has_openhouse_Has Open House" name="has_openhouse" class="custom-control-input" value="Has Open House"> <label for="has_openhouse_Has Open House" class="custom-control-label">
                              Has Open House
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="widget-wrapper">
                     <h6 class="list-title">School Distric</h6>
                     <div class="form-style2 input-group">
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                           <option>Select school district</option>
                           <option data-tokens="Apartments">Andover School District (USD 385)</option>
                           <option data-tokens="Bungalow">Arkansas City School District (USD 470)</option>
                           <option data-tokens="Houses">Ashland School District (USD 220)</option>
                           <option data-tokens="Loft">Attica School District (USD 511)</option>
                           <option data-tokens="Office">Augusta School District (USD 402)</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="widget-wrapper">
                     <h6 class="list-title">School Distric</h6>
                     <div class="form-style2">
                        <div role="group" class="d-flex" style="border: 1px solid #00000042;
                           padding: 10px 17px;
                           border-radius: 8px;"><input id="facet_input_property_id" value="" type="text" placeholder="Enter property ids separated by a space" class="b-form-tags-input w-100 flex-grow-1 p-0 m-0 bg-transparent border-0 filter-option-inner-inner" style="outline: 0px; min-width: 5rem;"><button type="button" disabled="disabled" class="btn b-form-tags-button py-0 btn-outline-secondary disabled invisible" style="font-size: 90%;">Add</button></div>
                     </div>
                  </div>
               </div>
            </div>
           
            <div  class="row">
               <div class="col">
                  <div class="border-bottom mb-2">
                     <a class="btn " data-bs-toggle="collapse" href="#multiCollapseExample11" role="button" aria-expanded="false" aria-controls="multiCollapseExample11">
                     <span class="fa fa-chevron-down" aria-hidden="true"></span>  
                     MULTI-FAMILY
                     </a>
                     <div class="row">
                        <div class="col">
                           <div class="collapse multi-collapse" id="multiCollapseExample11">
                              <div class="">
                                 <div class="form">
                                    <label for="facet_input_multifamily_unit_type">Unit Type</label> <!----> 
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Apartment Complex" name="multifamily_unit_type" class="custom-control-input" value="Apartment Complex"> <label for="multifamily_unit_type_Apartment Complex" class="custom-control-label">
                                          Apartment Complex
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Four to Sixplex" name="multifamily_unit_type" class="custom-control-input" value="Four to Sixplex"> <label for="multifamily_unit_type_Four to Sixplex" class="custom-control-label">
                                          Four to Sixplex
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Mobile - Modular" name="multifamily_unit_type" class="custom-control-input" value="Mobile - Modular"> <label for="multifamily_unit_type_Mobile - Modular" class="custom-control-label">
                                          Mobile - Modular
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Multiple Homes on One Lot" name="multifamily_unit_type" class="custom-control-input" value="Multiple Homes on One Lot"> <label for="multifamily_unit_type_Multiple Homes on One Lot" class="custom-control-label">
                                          Multiple Homes on One Lot
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Triplex" name="multifamily_unit_type" class="custom-control-input" value="Triplex"> <label for="multifamily_unit_type_Triplex" class="custom-control-label">
                                          Triplex
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Twin - Duplex" name="multifamily_unit_type" class="custom-control-input" value="Twin - Duplex"> <label for="multifamily_unit_type_Twin - Duplex" class="custom-control-label">
                                          Twin - Duplex
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div  class="row">
               <div class="col">
                  <div class="border-bottom mb-2">
                     <a class="btn " data-bs-toggle="collapse" href="#multiCollapseExample12" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                     <span class="fa fa-chevron-down" aria-hidden="true"></span>  
                     MULTI-FAMILY
                     </a>
                     <div class="row">
                        <div class="col">
                           <div class="collapse multi-collapse" id="multiCollapseExample12">
                              <div class="">
                                 <div class="form">
                                    <label for="facet_input_multifamily_unit_type">Unit Type</label> <!----> 
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Apartment Complex" name="multifamily_unit_type" class="custom-control-input" value="Apartment Complex"> <label for="multifamily_unit_type_Apartment Complex" class="custom-control-label">
                                          Apartment Complex
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Four to Sixplex" name="multifamily_unit_type" class="custom-control-input" value="Four to Sixplex"> <label for="multifamily_unit_type_Four to Sixplex" class="custom-control-label">
                                          Four to Sixplex
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Mobile - Modular" name="multifamily_unit_type" class="custom-control-input" value="Mobile - Modular"> <label for="multifamily_unit_type_Mobile - Modular" class="custom-control-label">
                                          Mobile - Modular
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Multiple Homes on One Lot" name="multifamily_unit_type" class="custom-control-input" value="Multiple Homes on One Lot"> <label for="multifamily_unit_type_Multiple Homes on One Lot" class="custom-control-label">
                                          Multiple Homes on One Lot
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Triplex" name="multifamily_unit_type" class="custom-control-input" value="Triplex"> <label for="multifamily_unit_type_Triplex" class="custom-control-label">
                                          Triplex
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Twin - Duplex" name="multifamily_unit_type" class="custom-control-input" value="Twin - Duplex"> <label for="multifamily_unit_type_Twin - Duplex" class="custom-control-label">
                                          Twin - Duplex
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div  class="row">
               <div class="col">
                  <div class="border-bottom mb-2">
                     <a class="btn " data-bs-toggle="collapse" href="#multiCollapseExample13" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                     <span class="fa fa-chevron-down" aria-hidden="true"></span>  
                     MULTI-FAMILY
                     </a>
                     <div class="row">
                        <div class="col">
                           <div class="collapse multi-collapse" id="multiCollapseExample13">
                              <div class="">
                                 <div class="form">
                                    <label for="facet_input_multifamily_unit_type">Unit Type</label> <!----> 
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Apartment Complex" name="multifamily_unit_type" class="custom-control-input" value="Apartment Complex"> <label for="multifamily_unit_type_Apartment Complex" class="custom-control-label">
                                          Apartment Complex
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Four to Sixplex" name="multifamily_unit_type" class="custom-control-input" value="Four to Sixplex"> <label for="multifamily_unit_type_Four to Sixplex" class="custom-control-label">
                                          Four to Sixplex
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Mobile - Modular" name="multifamily_unit_type" class="custom-control-input" value="Mobile - Modular"> <label for="multifamily_unit_type_Mobile - Modular" class="custom-control-label">
                                          Mobile - Modular
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Multiple Homes on One Lot" name="multifamily_unit_type" class="custom-control-input" value="Multiple Homes on One Lot"> <label for="multifamily_unit_type_Multiple Homes on One Lot" class="custom-control-label">
                                          Multiple Homes on One Lot
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Triplex" name="multifamily_unit_type" class="custom-control-input" value="Triplex"> <label for="multifamily_unit_type_Triplex" class="custom-control-label">
                                          Triplex
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Twin - Duplex" name="multifamily_unit_type" class="custom-control-input" value="Twin - Duplex"> <label for="multifamily_unit_type_Twin - Duplex" class="custom-control-label">
                                          Twin - Duplex
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div  class="row">
               <div class="col">
                  <div class="border-bottom-in mb-2" >
                     <a class="btn " data-bs-toggle="collapse" href="#multiCollapseExample14" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                     <span class="fa fa-chevron-down" aria-hidden="true"></span>  
                     MULTI-FAMILY
                     </a>
                     <div class="row">
                        <div class="col">
                           <div class="collapse multi-collapse" id="multiCollapseExample14">
                              <div class="">
                                 <div class="form">
                                    <label for="facet_input_multifamily_unit_type">Unit Type</label> <!----> 
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Apartment Complex" name="multifamily_unit_type" class="custom-control-input" value="Apartment Complex"> <label for="multifamily_unit_type_Apartment Complex" class="custom-control-label">
                                          Apartment Complex
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Four to Sixplex" name="multifamily_unit_type" class="custom-control-input" value="Four to Sixplex"> <label for="multifamily_unit_type_Four to Sixplex" class="custom-control-label">
                                          Four to Sixplex
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Mobile - Modular" name="multifamily_unit_type" class="custom-control-input" value="Mobile - Modular"> <label for="multifamily_unit_type_Mobile - Modular" class="custom-control-label">
                                          Mobile - Modular
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Multiple Homes on One Lot" name="multifamily_unit_type" class="custom-control-input" value="Multiple Homes on One Lot"> <label for="multifamily_unit_type_Multiple Homes on One Lot" class="custom-control-label">
                                          Multiple Homes on One Lot
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Triplex" name="multifamily_unit_type" class="custom-control-input" value="Triplex"> <label for="multifamily_unit_type_Triplex" class="custom-control-label">
                                          Triplex
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-2 ">
                                       <div class="custom-control custom-checkbox"><input type="checkbox" id="multifamily_unit_type_Twin - Duplex" name="multifamily_unit_type" class="custom-control-input" value="Twin - Duplex"> <label for="multifamily_unit_type_Twin - Duplex" class="custom-control-label">
                                          Twin - Duplex
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer justify-content-between">
               <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset all filters</u></a>
               <div class="btn-area">
                  <button class="ud-btn btn-thm"><span class="flaticon-search align-text-top pr10"></span>Search</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Advance Feature Modal End -->
<div class="hiddenbar-body-ovelay"></div>
<!-- Mobile Nav  -->
<div id="page" class="mobilie_header_nav stylehome1">
   <div class="mobile-menu">
      <div class="header innerpage-style">
         <div class="menu_and_widgets">
            <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
               <a class="menubar" href="#menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
               <a class="mobile_logo" href="#"><img src="images/header-logo2.svg" alt=""></a>
               <a href="page-login.html"><span class="icon fz18 far fa-user-circle"></span></a>
            </div>
         </div>
      </div>
   </div>
   <!-- /.mobile-menu -->
   <nav id="menu" class="">
      <ul>
         <li>
            <span>Home</span>
            <ul>
               <li><a href="#">Home V1</a></li>
               <li><a href="#">Home V2</a></li>
               <li><a href="#">Home V3</a></li>
               <li><a href="#">Home V4</a></li>
               <li><a href="#">Home V5</a></li>
               <li><a href="#">Home V6</a></li>
               <li><a href="#">Home V7</a></li>
               <li><a href="#">Home V8</a></li>
               <li><a href="#">Home V9</a></li>
               <li><a href="#">Home V10</a></li>
            </ul>
         </li>
         <li>
            <span>Property Listign</span>
            <ul>
               <li>
                  <span>Listing Grid</span>
                  <ul>
                     <li><a href="page-grid-default-v1.html">Grid Default v1</a></li>
                     <li><a href="page-grid-default-v2.html">Grid Default v2</a></li>
                     <li><a href="page-property-3-col.html">Grid Full Width 3 Cols</a></li>
                     <li><a href="page-property-4-col.html">Grid Full Width 4 Cols</a></li>
                     <li><a href="page-property-2-col.html">Grid Full Width 2 Cols</a></li>
                     <li><a href="page-property-1-col-v1.html">Grid Full Width 1 Cols v1</a></li>
                     <li><a href="page-property-1-col-v2.html">Grid Full Width 1 Cols v2</a></li>
                     <li><a href="page-property-banner-v1.html">Banner Search v1</a></li>
                     <li><a href="page-property-banner-v2.html">Banner Search v2</a></li>
                  </ul>
               </li>
               <li>
                  <span>List Style</span>
                  <ul>
                     <li><a href="page-property-list.html">Style V1</a></li>
                     <li><a href="page-property-list-all.html">All List</a></li>
                  </ul>
               </li>
               <li>
                  <span>Listing Single</span>
                  <ul>
                     <li><a href="page-property-single-v1.html">Single V1</a></li>
                     <li><a href="page-property-single-v2.html">Single V2</a></li>
                     <li><a href="page-property-single-v3.html">Single V3</a></li>
                     <li><a href="page-property-single-v4.html">Single V4</a></li>
                     <li><a href="page-property-single-v5.html">Single V5</a></li>
                     <li><a href="page-property-single-v6.html">Single V6</a></li>
                     <li><a href="page-property-single-v7.html">Single V7</a></li>
                     <li><a href="page-property-single-v8.html">Single V8</a></li>
                     <li><a href="page-property-single-v9.html">Single V9</a></li>
                     <li><a href="page-property-single-v10.html">Single V10</a></li>
                  </ul>
               </li>
               <li>
                  <span>Map Style</span>
                  <ul>
                     <li><a href="page-property-header-map-style.html">Map Header</a></li>
                     <li><a href="page-property-half-map-v1.html">Map V1</a></li>
                     <li><a href="page-property-half-map-v2.html">Map V2</a></li>
                     <li><a href="page-property-half-map-v3.html">Map V3</a></li>
                     <li><a href="page-property-half-map-v4.html">Map V4</a></li>
                  </ul>
               </li>
            </ul>
         </li>
         <li>
            <span>User Dashboard</span>
            <ul>
               <li><a href="page-dashboard.html">Dashboard</a></li>
               <li><a href="page-dashboard-message.html">Message</a></li>
               <li><a href="page-dashboard-add-property.html">New Property</a></li>
               <li><a href="page-dashboard-properties.html">My Properties</a></li>
               <li><a href="page-dashboard-favorites.html">My Favorites</a></li>
               <li><a href="page-dashboard-savesearch.html">Saved Search</a></li>
               <li><a href="page-dashboard-review.html">Reviews</a></li>
               <li><a href="page-dashboard-package.html">My Package</a></li>
               <li><a href="page-dashboard-profile.html">My Profile</a></li>
            </ul>
         </li>
         <li>
            <span>Blog</span>
            <ul>
               <li><a href="page-blog-v1.html">List V1</a></li>
               <li><a href="page-blog-v2.html">List V2</a></li>
               <li><a href="page-blog-v3.html">List V3</a></li>
               <li><a href="page-blog-single.html">Single</a></li>
            </ul>
         </li>
         <li>
            <span>Pages</span>
            <ul>
               <li><a href="page-about.html">About</a></li>
               <li><a href="page-contact.html">Contact</a></li>
               <li><a href="page-compare.html">Compare</a></li>
               <li><a href="page-pricing.html">Pricing</a></li>
               <li><a href="page-faq.html">Faq</a></li>
               <li><a href="page-login.html">Login</a></li>
               <li><a href="page-register.html">Register</a></li>
               <li><a href="page-error.html">404</a></li>
               <li><a href="page-invoice.html">Invoices</a></li>
               <li><a href="page-ui-element.html">UI Elements</a></li>
            </ul>
         </li>
         <li class="px-3 mobile-menu-btn">
            <a href="page-dashboard-add-property.html" class="ud-btn btn-thm text-white">Submit Property<i class="fal fa-arrow-right-long"></i></a>
         </li>
         <!-- Only for Mobile View -->
      </ul>
   </nav>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
   $(function () {
       function updateCurrentDateInfo(dateText) {
           const selectedDate = new Date(dateText);
           const day = selectedDate.getDate();
           const monthName = selectedDate.toLocaleDateString('en-US', { month: 'long' });
           const year = selectedDate.getFullYear();
   
           $("#date").text(day);
           $("#monthYear").text(monthName + " " + year);
           $("#dayname").text(dateText.split(",")[0]);
       }
   
       // Initialize the Datepicker with custom date format
       $("#departure-date").datepicker({
           dateFormat: "DD, d MM yy",
           numberOfMonths: 1,
           onSelect: function (dateText) {
               updateCurrentDateInfo(dateText);
           }
       });
   
       // Show current date when the page loads
       const currentDate = new Date();
       const currentDateText = currentDate.toLocaleDateString('en-US', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' });
       updateCurrentDateInfo(currentDateText);
   
       // Check if datepicker is initialized
       console.log("Datepicker initialized");
   
       $("#departure-box").on("click", function () {
           $("#departure-date").datepicker("show");
       });
   });
   
   
</script>
<script>
   $(function() {
   $("#return-date").datepicker({
      dateFormat: "DD, d MM yy", 
      numberOfMonths: 2,
      beforeShow: function(input, inst) {
          inst.dpDiv.addClass("custom-datepicker");
      },
      onSelect: function(dateText) {
          const selectedDate = new Date(dateText);
          const day = selectedDate.getDate(); 
          const monthName = selectedDate.toLocaleDateString('en-US', { month: 'long' });
          const year = selectedDate.getFullYear();
          
          $("#re-date").text(day);
          $("#re-monthYear").text(monthName + " " + year);
          $("#re-dayname").text(dateText.split(",")[0]); 
      }
   });
   
   $("#return-box").on("click", function() {
      $("#return-date").datepicker("show");
      $("#rtag").hide();
      $("#r-dblock").show();
      $('#close').show()
   });
   
   $("#close").on("click", function() {
      $("#rtag").show();
      $('#close').hide();
      $("#r-dblock").hide();
      $("#return-date").datepicker("hide");
   });
   });







</script>






   <script>
    document.getElementById("xoneplus").addEventListener("change", function() {
        var checkbox = document.getElementById("xoneplus");
        var selectionDiv = document.querySelector(".selection");

        if (checkbox.checked) {
            // Checkbox is checked, add the additional class
            selectionDiv.classList.add("your_additional_class");
        } else {
            // Checkbox is unchecked, remove the additional class
            selectionDiv.classList.remove("your_additional_class");
        }
    });
</script>
