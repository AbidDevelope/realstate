@extends('frontend.layout.master')
@section('content-area')
   
  <section class="video-section" style="background-image: url('{{ asset('frontend/background_image.jpg') }}'); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center; text-align: center; color: white; position: relative; overflow: hidden;">

<div class="button-container" style="position: relative; z-index: 1;">
  <h1 class="text-light" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); font-size:35px;">Next Home, Next Adventure.</h1>
  <p class="text-light" style="font-size: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Discover your dream home with us. Whether you're buying, selling, or exploring,<br> our dedicated team is here to make your real estate journey extraordinary.</p>
  <p class="text-light" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Connect with an agent today to explore how we can help you find your perfect home.</p>
  <button class="learn-more-btn" style="background-color: #002A5C; color: #ffffff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Sell My Property</button>
  <button class="browse-btn" style="background-color: #green; color: #ffffff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Browse Auction</button>
  
</div>

<!-- Gradient overlay -->
<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(270deg,rgb(255 255 255 / -1%) 0%,rgba(0,0,0,0.37) 0%); z-index: 0;"></div>

</section>
    <!-- Featured homes -->


    <!-- Popular Property -->
    <section class="bgc-f7">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="100ms">
          <div class="col-lg-6">
            <div class="main-title2">
              <h2 class="title">Our Featured Properties</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="dark-light-navtab style2 text-start text-lg-end mt-0 mt-lg-4 mb-4">
              <ul class="nav nav-pills justify-content-start justify-content-lg-end" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link rounded-0 mb10-sm active" id="pills-house-tab" data-bs-toggle="pill" data-bs-target="#pills-house" type="button" role="tab" aria-controls="pills-house" aria-selected="true">For Auction</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link rounded-0 mb10-sm" id="pills-villa-tab" data-bs-toggle="pill" data-bs-target="#pills-villa" type="button" role="tab" aria-controls="pills-villa" aria-selected="false">For Sale</button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
            <div class="tab-content" id="pills-tabContent">
       
              <div class="tab-pane fade show active" id="pills-house" role="tabpanel" aria-labelledby="pills-house-tab">

            
                <div class="row">
                @foreach($properties as $property)
                  <div class="col-sm-6 col-lg-4">
                    <div class="listing-style8">
                      <div class="list-thumb">
                        <img class="w-100" src="{{ asset('uploads/images/' . $property->image) }}" alt="">
                        <div class="list-tag rounded-0 fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                        <div class="list-tag2 rounded-0 fz12">FOR SALE</div>
                        <div class="list-meta">
                          <a class="rounded-0" href=""><span class="flaticon-like"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-new-tab"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-fullscreen"></span></a>
                        </div>
                      </div>
                      <div class="list-content">
                        <h6 class="list-title"><a href="{{url('about-property')}}">{{ $property->property_title }}</a></h6>
                        <h6 class="list-title" style="color:red;">Start Bidding</h6>
                        <p class="list-text">{{ $property->address }}</p>

                        <span class="cd-days" style="text-bold">00</span> Days
                        <span class="cd-hours text-bold">00</span> Hours
                        <span class="cd-minutes">00</span> Minutes
                        <span class="cd-seconds">00</span> Seconds
                        <div class="d-flex justify-content-between align-items-center mt-3">
                          <div class="list-meta2 d-flex align-items-center">
                            <a class="mr10" href=""><span class="flaticon-bed mr5"></span>3</a>
                            <a class="mr10" href=""><span class="flaticon-shower mr5"></span>4</a>
                            <a href=""><span class="flaticon-expand mr5"></span>1200</a>
                          </div>
                          <div class="list-price">${{ $property->price }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              



              </div>
          


              <div class="tab-pane fade" id="pills-villa" role="tabpanel" aria-labelledby="pills-villa-tab">
                <div class="row">
                  <div class="col-sm-6 col-lg-4">
                    <div class="listing-style8">
                      <div class="list-thumb">
                        <img class="w-100" src="{{asset('frontend/pictures/g1-1.jpg')}}" alt="">
                        <div class="list-tag rounded-0 fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                        <div class="list-tag2 rounded-0 fz12">FOR SALE</div>
                        <div class="list-meta">
                          <a class="rounded-0" href=""><span class="flaticon-like"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-new-tab"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-fullscreen"></span></a>
                        </div>
                      </div>
                      <div class="list-content">
                        <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                        <p class="list-text">California City, CA, USA</p>
                        <span id="cd-days">00</span> Days
                        <span id="cd-hours">00</span> Hours
                        <span id="cd-minutes">00</span> Minutes
                        <span id="cd-seconds">00</span> Seconds
                        <div class="d-flex justify-content-between align-items-center mt-3">
                          <div class="list-meta2 d-flex align-items-center">
                            <a class="mr10" href=""><span class="flaticon-bed mr5"></span>3</a>
                            <a class="mr10" href=""><span class="flaticon-shower mr5"></span>4</a>
                            <a href=""><span class="flaticon-expand mr5"></span>1200</a>
                          </div>
                          <div class="list-price">$14,000</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="listing-style8">
                      <div class="list-thumb">
                        <img class="w-100" src="{{asset('frontend/pictures/g1-2.jpg')}}" alt="">
                        <div class="list-meta">
                          <a class="rounded-0" href=""><span class="flaticon-like"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-new-tab"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-fullscreen"></span></a>
                        </div>
                      </div>
                      <div class="list-content">
                        <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                        <p class="list-text">California City, CA, USA</p>
                        <span id="cd-days">00</span> Days
                        <span id="cd-hours">00</span> Hours
                        <span id="cd-minutes">00</span> Minutes
                        <span id="cd-seconds">00</span> Seconds
                        <div class="d-flex justify-content-between align-items-center mt-3">
                          <div class="list-meta2 d-flex align-items-center">
                            <a class="mr10" href=""><span class="flaticon-bed mr5"></span>3</a>
                            <a class="mr10" href=""><span class="flaticon-shower mr5"></span>4</a>
                            <a href=""><span class="flaticon-expand mr5"></span>1200</a>
                          </div>
                          <div class="list-price">$14,000</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="listing-style8">
                      <div class="list-thumb">
                        <img class="w-100" src="{{asset('frontend/pictures/g1-3.jpg')}}" alt="">
                        <div class="list-meta">
                          <a class="rounded-0" href=""><span class="flaticon-like"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-new-tab"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-fullscreen"></span></a>
                        </div>
                      </div>
                      <div class="list-content">
                        <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                        <p class="list-text">California City, CA, USA</p>
                        <span id="cd-days">00</span> Days
                        <span id="cd-hours">00</span> Hours
                        <span id="cd-minutes">00</span> Minutes
                        <span id="cd-seconds">00</span> Seconds
                        <div class="d-flex justify-content-between align-items-center mt-3">
                          <div class="list-meta2 d-flex align-items-center">
                            <a class="mr10" href=""><span class="flaticon-bed mr5"></span>3</a>
                            <a class="mr10" href=""><span class="flaticon-shower mr5"></span>4</a>
                            <a href=""><span class="flaticon-expand mr5"></span>1200</a>
                          </div>
                          <div class="list-price">$14,000</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="listing-style8">
                      <div class="list-thumb">
                        <img class="w-100" src="{{asset('frontend/pictures/g1-4.jpg')}}" alt="">
                        <div class="list-tag rounded-0 fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                        <div class="list-meta">
                          <a class="rounded-0" href=""><span class="flaticon-like"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-new-tab"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-fullscreen"></span></a>
                        </div>
                      </div>
                      <div class="list-content">
                        <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                        <p class="list-text">California City, CA, USA</p>
                        <span id="cd-days">00</span> Days
                        <span id="cd-hours">00</span> Hours
                        <span id="cd-minutes">00</span> Minutes
                        <span id="cd-seconds">00</span> Seconds
                        <div class="d-flex justify-content-between align-items-center mt-3">
                          <div class="list-meta2 d-flex align-items-center">
                            <a class="mr10" href=""><span class="flaticon-bed mr5"></span>3</a>
                            <a class="mr10" href=""><span class="flaticon-shower mr5"></span>4</a>
                            <a href=""><span class="flaticon-expand mr5"></span>1200</a>
                          </div>
                          <div class="list-price">$14,000</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="listing-style8">
                      <div class="list-thumb">
                        <img class="w-100" src="{{asset('frontend/pictures/g1-5.jpg')}}" alt="">
                        <div class="list-tag rounded-0 fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                        <div class="list-meta">
                          <a class="rounded-0" href=""><span class="flaticon-like"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-new-tab"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-fullscreen"></span></a>
                        </div>
                      </div>
                      <div class="list-content">
                        <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                        <p class="list-text">California City, CA, USA</p>
                        <span id="cd-days">00</span> Days
                        <span id="cd-hours">00</span> Hours
                        <span id="cd-minutes">00</span> Minutes
                        <span id="cd-seconds">00</span> Seconds
                        <div class="d-flex justify-content-between align-items-center mt-3">
                          <div class="list-meta2 d-flex align-items-center">
                            <a class="mr10" href=""><span class="flaticon-bed mr5"></span>3</a>
                            <a class="mr10" href=""><span class="flaticon-shower mr5"></span>4</a>
                            <a href=""><span class="flaticon-expand mr5"></span>1200</a>
                          </div>
                          <div class="list-price">$14,000</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="listing-style8">
                      <div class="list-thumb">
                        <img class="w-100" src="{{asset('frontend/pictures/g1-6.jpg')}}" alt="">
                        <div class="list-meta">
                          <a class="rounded-0" href=""><span class="flaticon-like"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-new-tab"></span></a>
                          <a class="rounded-0" href=""><span class="flaticon-fullscreen"></span></a>
                        </div>
                      </div>
                      <div class="list-content">
                        <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                        <p class="list-text">California City, CA, USA</p>
                        <span id="cd-days">00</span> Days
                        <span id="cd-hours">00</span> Hours
                        <span id="cd-minutes">00</span> Minutes
                        <span id="cd-seconds">00</span> Seconds
                        <div class="d-flex justify-content-between align-items-center mt-3">
                          <div class="list-meta2 d-flex align-items-center">
                            <a class="mr10" href=""><span class="flaticon-bed mr5"></span>3</a>
                            <a class="mr10" href=""><span class="flaticon-shower mr5"></span>4</a>
                            <a href=""><span class="flaticon-expand mr5"></span>1200</a>
                          </div>
                          <div class="list-price">$14,000</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-grid d-md-block text-center mt30 mt0-md">
              <a href="page-grid-default-v1.html" class="ud-btn btn-dark bdrs0">Learn More<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Our Funfact -->


    <!-- Popular Property -->
    <section class="bgc-dark pb130">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="100ms">
          <div class="col-xl-6 mx-auto">
            <div class="main-title2 text-center">
              <h2 class="title text-white">Discover Popular Properties</h2>
              <p class="paragraph text-white">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-12">
            <div class="feature-listing-slider dots_nav_light navi_pagi_bottom_center slider-dib-sm slider-4-grid3 owl-carousel owl-theme">
              <div class="item">
                <div class="listing-style1 bdrs0">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('frontend/pictures/g1-1.jpg')}}" alt="">
                    <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                    <div class="list-price">$84,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content pb-2">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a class="me-2" href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a class="me-2" href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a class="me-2" href=""><span class="flaticon-expand"></span>1200 sqft</a>
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
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 bdrs0">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('frontend/pictures/g1-2.jpg')}}" alt="">
                    <div class="list-price">$12,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content pb-2">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a class="me-2" href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a class="me-2" href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a class="me-2" href=""><span class="flaticon-expand"></span>1200 sqft</a>
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
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 bdrs0">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('frontend/pictures/g1-3.jpg')}}" alt="">
                    <div class="list-price">$19,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content pb-2">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a class="me-2" href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a class="me-2" href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a class="me-2" href=""><span class="flaticon-expand"></span>1200 sqft</a>
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
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 bdrs0">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('frontend/pictures/g1-4.jpg')}}" alt="">
                    <div class="list-price">$17,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content pb-2">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a class="me-2" href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a class="me-2" href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a class="me-2" href=""><span class="flaticon-expand"></span>1200 sqft</a>
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
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 bdrs0">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('frontend/pictures/g1-1.jpg')}}" alt="">
                    <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                    <div class="list-price">$84,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content pb-2">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a class="me-2" href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a class="me-2" href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a class="me-2" href=""><span class="flaticon-expand"></span>1200 sqft</a>
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
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 bdrs0">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('frontend/pictures/g1-2.jpg')}}" alt="">
                    <div class="list-price">$12,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content pb-2">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a class="me-2" href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a class="me-2" href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a class="me-2" href=""><span class="flaticon-expand"></span>1200 sqft</a>
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
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 bdrs0">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('frontend/pictures/g1-3.jpg')}}" alt="">
                    <div class="list-price">$19,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content pb-2">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a class="me-2" href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a class="me-2" href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a class="me-2" href=""><span class="flaticon-expand"></span>1200 sqft</a>
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
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 bdrs0">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('frontend/pictures/g1-4.jpg')}}" alt="">
                    <div class="list-price">$17,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content pb-2">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a class="me-2" href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a class="me-2" href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a class="me-2" href=""><span class="flaticon-expand"></span>1200 sqft</a>
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
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 bdrs0">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('frontend/pictures/g1-4.jpg')}}" alt="">
                    <div class="list-price">$17,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content pb-2">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a class="me-2" href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a class="me-2" href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a class="me-2" href=""><span class="flaticon-expand"></span>1200 sqft</a>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- How We Help -->
    <section class="pb90 pb30-md bgc-thm-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2 class="title">See how Realton can help</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay="00ms">
            <div class="iconbox-style2 text-center">
              <div class="icon"><img src="{{asset('frontend/pictures/property-buy.svg')}}" alt=""></div>
              <div class="iconbox-content">
                <h4 class="title">Buy a property</h4>
                <p class="text">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                <a href="page-property-single-v1.html" class="ud-btn btn-white2 bdrs0 mb20">Find a home<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
            <div class="iconbox-style2 active text-center">
              <div class="icon"><img src="{{asset('frontend/pictures/property-sell.svg')}}" alt=""></div>
              <div class="iconbox-content">
                <h4 class="title">Sell a property</h4>
                <p class="text">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                <a href="page-property-single-v1.html" class="ud-btn btn-white2 bdrs0 mb20">Place an ad<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
            <div class="iconbox-style2 text-center">
              <div class="icon"><img src="{{asset('frontend/pictures/property-rent.svg')}}" alt=""></div>
              <div class="iconbox-content">
                <h4 class="title">Rent a property</h4>
                <p class="text">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                <a href="page-property-single-v1.html" class="ud-btn btn-white2 bdrs0 mb20">Find a rental<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Inquiry Form -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xl-5 wow fadeInRight" data-wow-delay="00ms">
            <div class="main-title mb40">
              <h2 class="title">Real Estate Inquiry Form</h2>
              <p class="paragraph fz15">As the complexity of buildings to increase</p>
            </div>
            <div class="inquiry-form mb30-md">
              <form class="form-style1">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="form-label fw600 dark-color">Inquiry Type</label>
                      <div class="bootselect-multiselect">
                        <select class="selectpicker" multiple>
                          <option>Apartments</option>
                          <option>Bungalow</option>
                          <option>Houses</option>
                          <option>Loft</option>
                          <option>Office</option>
                          <option>TownHome</option>
                          <option>Villa</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="mb20">
                      <label class="form-label fw600 dark-color">Personel Role</label>
                      <div class="bootselect-multiselect">
                        <select class="selectpicker" multiple>
                          <option>Mr.</option>
                          <option>Mrs.</option>
                          <option>Miss.</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="mb20">
                      <label class="form-label fw600 dark-color">Personel Name</label>
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="form-label fw600 dark-color">Email</label>
                      <input type="email" class="form-control" placeholder="creativelayers088@gmail.com">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="form-label fw600 dark-color">How to address you</label>
                      <div class="bootselect-multiselect">
                        <select class="selectpicker" multiple>
                          <option>Mr.</option>
                          <option>Mrs.</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb20">
                      <label class="form-label fw600 dark-color">Max Price</label>
                      <input type="text" class="form-control" placeholder="$90">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb30">
                      <label class="form-label fw600 dark-color">Min Size (Sq ft)</label>
                      <input type="text" class="form-control" placeholder="20">
                    </div>
                  </div>
                  <div class="d-grid">
                    <button class="ud-btn btn-dark bdrs0">Submit <i class="fal fa-arrow-right-long"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 col-xl-6 offset-xl-1 wow fadeInLeft" data-wow-delay="300ms">
            <div class="inquiry-form">
              <div class="inquiry-img"><img class="w-100" src="{{asset('frontend/pictures/about-3.jpg')}}" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Our Footer -->
  </div>

<script>
    let timer = function (date) {
  let timer = Math.round(new

Date(date).getTime() / 1000) - Math.round(new

Date().getTime() / 1000);
  let minutes, seconds;
  setInterval(function () {
    if (--timer < 0) {
      timer = 0;
    }
    days = parseInt(timer / 60 / 60 / 24, 10);
    hours = parseInt((timer / 60 / 60) % 24, 10);
    minutes = parseInt((timer / 60) % 60, 10);
    seconds = parseInt(timer % 60, 10);

    days = days < 10 ? "0" + days : days;
    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    document.querySelector('.cd-days').innerHTML = days;
    document.querySelector('.cd-hours').innerHTML = hours;
    document.querySelector('.cd-minutes').innerHTML = minutes;
    document.querySelector('.cd-seconds').innerHTML = seconds;
  }, 1000);
};

//using the function
const today = new Date();
const tomorrow = new Date(today);
tomorrow.setDate(tomorrow.getDate() + 1);
timer(tomorrow);
    </script



@endsection
