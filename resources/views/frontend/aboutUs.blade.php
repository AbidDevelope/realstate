@extends('frontend.layout.master')
@section('content-area')
<div class="body_content">
    <!-- UI Elements Sections -->
    <section class="breadcumb-section2 p-0" style="background-image: url('frontend/pictures/about-page-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title">About Us</h2>
              <div class="breadcumb-list">
                <a href="">Home</a>
                <a href="">For Rent</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our About Area -->
    <!-- About Banner -->
    <section class="our-about pt-0">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-12">
            <div class="about-page-img">
              <img class="w-100" src="images/about/about-page-banner.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Funfact -->

    <!-- Our Agents -->
    <section class="pt-0 pb80 pb50-md">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-9 mx-auto text-center">
            <div class="main-title2">
              <h2 class="title">Our Exclusive Agents</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-auto">
            <div class="feature-style2 mb30">
              <div class="feature-img"><img class="bdrs12" src="{{asset('frontend/pictures/agent-1.jpg')}}" alt=""></div>
              <div class="feature-content pt20">
                <h6 class="title mb-1">Arlene McCoy</h6>
                <p class="text fz15">Broker</p>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="feature-style2 mb30">
              <div class="feature-img"><img class="bdrs12" src="{{asset('frontend/pictures/agent-2.jpg')}}" alt=""></div>
              <div class="feature-content pt20">
                <h6 class="title mb-1">Esther Howard</h6>
                <p class="text fz15">Broker</p>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="feature-style2 mb30">
              <div class="feature-img"><img class="bdrs12" src="{{asset('frontend/pictures/agent-3.jpg')}}" alt=""></div>
              <div class="feature-content pt20">
                <h6 class="title mb-1">Cody Fisher</h6>
                <p class="text fz15">Broker</p>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="feature-style2 mb30">
              <div class="feature-img"><img class="bdrs12" src="{{asset('frontend/pictures/agent-4.jpg')}}" alt=""></div>
              <div class="feature-content pt20">
                <h6 class="title mb-1">Bessie Cooper</h6>
                <p class="text fz15">Broker</p>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="feature-style2 mb30">
              <div class="feature-img"><img class="bdrs12" src="{{asset('frontend/pictures/agent-5.jpg')}}" alt=""></div>
              <div class="feature-content pt20">
                <h6 class="title mb-1">Guy Hawkins</h6>
                <p class="text fz15">Broker</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Partners -->
    <section class="our-partners p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="100ms">
            <div class="main-title text-center">
              <h6>Trusted by the world’s best</h6>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="dots_none nav_none slider-dib-sm slider-6-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="{{asset('frontend/pictures/1.png')}}" alt="1.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="{{asset('frontend/pictures/2.png')}}" alt="2.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="{{asset('frontend/pictures/3.png')}}" alt="3.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="{{asset('frontend/pictures/1.png')}}" alt="4.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="{{asset('frontend/pictures/2.png')}}" alt="5.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="{{asset('frontend/pictures/3.png')}}" alt="6.png"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our CTA -->
    <section class="our-cta">
      <div class="cta-banner bgc-f7 mx-auto maxw1600 pt120 pb120 pt60-md pb60-md bdrs12 position-relative mx20-lg">
        <div class="img-box-5">
          <img class="img-1 spin-right" src="images/about/element-1.png" alt="">
        </div>
        <div class="img-box-6">
          <img class="img-1 spin-left" src="images/about/element-1.png" alt="">
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 col-xl-6 wow fadeInLeft">
              <div class="cta-style1">
                <h2 class="cta-title">Need help? Talk to our expert.</h2>
                <p class="cta-text mb-0">Talk to our experts or Browse through more properties.</p>
              </div>
            </div>
            <div class="col-lg-5 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
              <div class="cta-btns-style1 d-block d-sm-flex align-items-center justify-content-lg-end">
                <a href="{{url('contact-us')}}" class="ud-btn btn-transparent mr30 mr0-xs">Contact Us<i class="fal fa-arrow-right-long"></i></a>
                <a href="page-contact.html" class="ud-btn btn-dark"><span class="flaticon-call vam pe-2"></span>920 851 9087</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Footer -->

  </div>
</div>
@endsection
