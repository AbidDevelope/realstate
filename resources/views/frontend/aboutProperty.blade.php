@extends('frontend.layout.master')
@section('content-area')
<!DOCTYPE html>
<html dir="ltr" lang="en">

<body>
<div class="wrapper ovh">
  <div class="preloader"></div>
	  <div class="body_content">
		<!-- Property All Lists -->
		<section class="pt60 pb90 bgc-f7">
		  <div class="container">
			<div class="row wow fadeInUp" data-wow-delay="100ms">
			  <div class="col-lg-8">
				<div class="single-property-content mb30-md">
				  <h2 class="sp-lg-title">Awesome Interior Apartment</h2>
				  <div class="pd-meta mb15 d-md-flex align-items-center">
					<p class="text fz15 mb-0 bdrr1 pr10 bdrrn-sm">4834 N 10th St, Philadelphia, PA 19141</p>
					<a class="ff-heading text-thm fz15 bdrr1 pr10 ml0-sm ml10 bdrrn-sm" href=""><i class="fas fa-circle fz10 pe-2"></i>For sale</a>
					<a class="ff-heading bdrr1 fz15 pr10 ml10 ml0-sm bdrrn-sm" href=""><i class="far fa-clock pe-2"></i>1 years ago</a>
					<a class="ff-heading ml10 ml0-sm fz15" href=""><i class="flaticon-fullscreen pe-2 align-text-top"></i>8721</a>
				  </div>
				  <div class="property-meta d-flex align-items-center">
					<a class="text fz15" href=""><i class="flaticon-bed pe-2 align-text-top"></i>3 bed</a>
					<a class="text ml20 fz15" href=""><i class="flaticon-shower pe-2 align-text-top"></i>4 bath</a>
					<a class="text ml20 fz15" href=""><i class="flaticon-expand pe-2 align-text-top"></i>1200 sqft</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                    <span id="cd-days">00</span> Days
                    <span id="cd-hours">00</span> Hours
                    <span id="cd-minutes">00</span> Minutes
                    <span id="cd-seconds">00</span> Seconds
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <a href="{{url('bid-step-form')}}" class="btn btn-dark" >Place a Bid</a>
				  </div>
				</div>
			  </div>
			  <div class="col-lg-4">
				<div class="single-property-content">
				  <div class="property-action text-lg-end">
					<div class="d-flex mb20 mb10-md align-items-center justify-content-lg-end">
					  <a class="icon mr10" href=""><span class="flaticon-like"></span></a>
					  <a class="icon mr10" href=""><span class="flaticon-new-tab"></span></a>
					  <a class="icon mr10" href=""><span class="flaticon-share-1"></span></a>
					  <a class="icon" href=""><span class="flaticon-printer"></span></a>
					</div>
					<h3 class="price mb-0">$958,000</h3>
					<p class="text space fz15">$2,300/sq ft</p>
				  </div>
				</div>
			  </div>
			</div>
			<div class="row mb30 mt30 wow fadeInUp" data-wow-delay="300ms">
			  <div class="col-sm-6">
				<div class="sp-img-content mb15-md">
				  <a class="popup-img preview-img-1 sp-img" href="{{asset('frontend/pictures/listing-single-1.jpg')}}">
					<img class="w-100" src="{{asset('frontend/pictures/listing-single-1.jpg')}}" alt="1.jpg">
				  </a>
				</div>
			  </div>
			  <div class="col-sm-6">
				<div class="row">
				  <div class="col-6 ps-sm-0">
					<div class="sp-img-content">
					  <a class="popup-img preview-img-2 sp-img mb10" href="">
						<img class="w-100" src="{{asset('frontend/pictures/listing-single-2.jpg')}}" alt="2.jpg">
					  </a>
					</div>
				  </div>
				  <div class="col-6 ps-sm-0">
					<div class="sp-img-content">
					  <a class="popup-img preview-img-3 sp-img mb10" href="images/listings/listing-single-3.jpg">
						<img class="w-100" src="{{asset('frontend/pictures/listing-single-3.jpg')}}" alt="3.jpg">
					  </a>
					</div>
				  </div>
				  <div class="col-6 ps-sm-0">
					<div class="sp-img-content">
					  <a class="popup-img preview-img-4 sp-img" href="images/listings/listing-single-4.jpg">
						<img class="w-100" src="{{asset('frontend/pictures/listing-single-4.jpg')}}" alt="4.jpg">
					  </a>
					</div>
				  </div>
				  <div class="col-6 ps-sm-0">
					<div class="sp-img-content">
					  <a class="popup-img preview-img-5 sp-img" href="images/listings/listing-single-5.jpg">
						<img class="w-100" src="{{asset('frontend/pictures/listing-single-5.jpg')}}" alt="5.jpg">
					  </a>
					  <a href="images/listings/listing-single-5.jpg" class="all-tag popup-img">See All 74 Photos</a>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="row wrap wow fadeInUp" data-wow-delay="500ms">
			  <div class="col-lg-8">
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <h4 class="title fz17 mb30">Overview</h4>
				  <div class="row">
					<div class="col-sm-6 col-lg-4">
					  <div class="overview-element mb25 d-flex align-items-center">
						<span class="icon flaticon-bed"></span>
						<div class="ml15">
						  <h6 class="mb-0">Bedroom</h6>
						  <p class="text mb-0 fz15">3</p>
						</div>
					  </div>
					</div>
					<div class="col-sm-6 col-lg-4">
					  <div class="overview-element mb25 d-flex align-items-center">
						<span class="icon flaticon-shower"></span>
						<div class="ml15">
						  <h6 class="mb-0">Bath</h6>
						  <p class="text mb-0 fz15">2</p>
						</div>
					  </div>
					</div>
					<div class="col-sm-6 col-lg-4">
					  <div class="overview-element mb25 d-flex align-items-center">
						<span class="icon flaticon-event"></span>
						<div class="ml15">
						  <h6 class="mb-0">Year Built</h6>
						  <p class="text mb-0 fz15">2022</p>
						</div>
					  </div>
					</div>
					<div class="col-sm-6 col-lg-4">
					  <div class="overview-element mb25-xs d-flex align-items-center">
						<span class="icon flaticon-garage"></span>
						<div class="ml15">
						  <h6 class="mb-0">Garage</h6>
						  <p class="text mb-0 fz15">2</p>
						</div>
					  </div>
					</div>
					<div class="col-sm-6 col-lg-4">
					  <div class="overview-element mb25-xs d-flex align-items-center">
						<span class="icon flaticon-expand"></span>
						<div class="ml15">
						  <h6 class="mb-0">Sqft</h6>
						  <p class="text mb-0 fz15">1200</p>
						</div>
					  </div>
					</div>
					<div class="col-sm-6 col-lg-4">
					  <div class="overview-element d-flex align-items-center">
						<span class="icon flaticon-home-1"></span>
						<div class="ml15">
						  <h6 class="mb-0">Property Type</h6>
						  <p class="text mb-0 fz15">Apartment</p>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <h4 class="title fz17 mb30">Property Description</h4>
				  <p class="text mb10">This 3-bed with a loft, 2-bath home in the gated community of The Hideout has it all. From the open floor plan to the abundance of light from the windows, this home is perfect for entertaining. The living room and dining room have vaulted ceilings and a beautiful fireplace. You will love spending time on the deck taking in the beautiful views. In the kitchen, you'll find stainless steel appliances and a tile backsplash, as well as a breakfast bar.</p>
				  <div class="agent-single-accordion">
					<div class="accordion accordion-flush" id="accordionFlushExample">
					  <div class="accordion-item">
						<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
						  <div class="accordion-body p-0"><p class="text">Placeholder content for this accordion, which is intended to demonstrate the class. This is the first item's accordion body you get groundbreaking performance and amazing battery life. Add to that a stunning Liquid Retina XDR display, the best camera and audio ever in a Mac notebook, and all the ports you need.</p></div>
						</div>
						<h2 class="accordion-header" id="flush-headingOne">
						  <button class="accordion-button p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Show more</button>
						</h2>
					  </div>
					</div>
				  </div>
				  <h4 class="title fz17 mb30 mt50">Property Details</h4>
				  <div class="row">
					<div class="col-md-6 col-xl-4">
					  <div class="d-flex justify-content-between">
						<div class="pd-list">
						  <p class="fw600 mb10 ff-heading dark-color">Property ID</p>
						  <p class="fw600 mb10 ff-heading dark-color">Price</p>
						  <p class="fw600 mb10 ff-heading dark-color">Property Size</p>
						  <p class="fw600 mb10 ff-heading dark-color">Bathrooms</p>
						  <p class="fw600 mb-0 ff-heading dark-color">Bedrooms</p>
						</div>
						<div class="pd-list">
						  <p class="text mb10">RT48</p>
						  <p class="text mb10">$252,000</p>
						  <p class="text mb10">1500 Sq Ft</p>
						  <p class="text mb10">3</p>
						  <p class="text mb-0">2</p>
						</div>
					  </div>
					</div>
					<div class="col-md-6 col-xl-4 offset-xl-2">
					  <div class="d-flex justify-content-between">
						<div class="pd-list">
						  <p class="fw600 mb10 ff-heading dark-color">Garage</p>
						  <p class="fw600 mb10 ff-heading dark-color">Garage Size</p>
						  <p class="fw600 mb10 ff-heading dark-color">Year Built</p>
						  <p class="fw600 mb10 ff-heading dark-color">Property Type</p>
						  <p class="fw600 mb-0 ff-heading dark-color">Property Status</p>
						</div>
						<div class="pd-list">
						  <p class="text mb10">2</p>
						  <p class="text mb10">200 SqFt</p>
						  <p class="text mb10">2022</p>
						  <p class="text mb10">Apartment</p>
						  <p class="text mb-0">For Sale</p>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <h4 class="title fz17 mb30 mt30">Address</h4>
				  <div class="row">
					<div class="col-md-6 col-xl-4">
					  <div class="d-flex justify-content-between">
						<div class="pd-list">
						  <p class="fw600 mb10 ff-heading dark-color">Address</p>
						  <p class="fw600 mb10 ff-heading dark-color">City</p>
						  <p class="fw600 mb-0 ff-heading dark-color">State/county</p>
						</div>
						<div class="pd-list">
						  <p class="text mb10">10425 Tabor St</p>
						  <p class="text mb10">Los Angeles</p>
						  <p class="text mb-0">California</p>
						</div>
					  </div>
					</div>
					<div class="col-md-6 col-xl-4 offset-xl-2">
					  <div class="d-flex justify-content-between">
						<div class="pd-list">
						  <p class="fw600 mb10 ff-heading dark-color">Zip/Postal Code</p>
						  <p class="fw600 mb10 ff-heading dark-color">Area</p>
						  <p class="fw600 mb-0 ff-heading dark-color">Country</p>
						</div>
						<div class="pd-list">
						  <p class="text mb10">90034</p>
						  <p class="text mb10">Brookside</p>
						  <p class="text mb-0">United States</p>
						</div>
					  </div>
					</div>
					<div class="col-lg-12">
					  <iframe class="position-relative bdrs12 mt30 h250" loading="lazy" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <h4 class="title fz17 mb30">Features & Amenities</h4>
				  <div class="row">
					<div class="col-sm-6 col-md-4">
					  <div class="pd-list mb10-sm">
						<p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Air Conditioning</p>
						<p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Barbeque</p>
						<p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Dryer</p>
						<p class="text mb-0"><i class="fas fa-circle fz6 align-middle pe-2"></i>Gym</p>
					  </div>
					</div>
					<div class="col-sm-6 col-md-4">
					  <div class="pd-list">
						<p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Lawn</p>
						<p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Microwave</p>
						<p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Outdoor Shower</p>
						<p class="text mb-0"><i class="fas fa-circle fz6 align-middle pe-2"></i>Refrigerator</p>
					  </div>
					</div>
					<div class="col-sm-6 col-md-4">
					  <div class="pd-list">
						<p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Swimming Pool</p>
						<p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>TV Cable</p>
						<p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Washer</p>
						<p class="text mb-0"><i class="fas fa-circle fz6 align-middle pe-2"></i>WiFi6<p>
					  </div>
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <h4 class="title fz17 mb30">Energy Class</h4>
				  <div class="row">
					<div class="col-sm-12">
					  <div class="pd-list d-flex justify-content-between">
						<p class="text mb10">Global Energy Performance Index</p>
						<p>A+</p>
					  </div>
					  <div class="pd-list d-flex justify-content-between">
						<p class="text mb10">Renewable energy performance index</p>
						<p>92.42 kWh / m²a</p>
					  </div>
					  <div class="pd-list d-flex justify-content-between">
						<p class="text mb10">Energy performance of the building</p>
						<p>00.00 kWh / m²a</p>
					  </div>
					  <div class="pd-list d-flex justify-content-between">
						<p class="text mb10">EPC Current Rating</p>
						<p>92</p>
					  </div>
					  <div class="pd-list d-flex justify-content-between">
						<p class="text mb10">EPC Potential Rating</p>
						<p>80+</p>
					  </div>
					</div>
					<div class="col-lg-12 mt20">
					  <img class="w-100" src="images/resource/energy-class.png" alt="">
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <h4 class="title fz17 mb30">Floor Plans</h4>
				  <div class="row">
					<div class="col-md-12">
					  <div class="accordion-style1 style2">
						<div class="accordion" id="accordionExample">
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingFirst">
							  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFirst" aria-expanded="true" aria-controls="collapseFirst">
								<span class="w-100 d-md-flex align-items-center">
								  <span class="mr10-sm">First Floor</span>
								  <span class="ms-auto d-md-flex align-items-center justify-content-end">
									<span class="me-2 me-md-4">
									  <span class="fw600">Size:</span>
									  <span class="text">1267 Sqft</span>
									</span>
									<span class="me-2 me-md-4">
									  <span class="fw600">Bedrooms</span>
									  <span class="text">2</span>
									</span>
									<span class="me-2 me-md-4">
									  <span class="fw600">Bathrooms</span>
									  <span class="text">2</span>
									</span>
									<span>
									  <span class="fw600">Price</span>
									  <span class="text">$920,99</span>
									</span>
								  </span>
								</span>
							  </button>
							</h2>
							<div id="collapseFirst" class="accordion-collapse collapse" aria-labelledby="headingFirst" data-parent="#accordionExample">
							  <div class="accordion-body text-center"><img class="w-100" src="{{asset('frontend/pictures/listing-single-1.png')}}" alt=""></div>
							</div>
						  </div>
						  <div class="accordion-item active">
							<h2 class="accordion-header" id="headingSecond">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSecond" aria-expanded="false" aria-controls="collapseSecond">
								<span class="w-100 d-md-flex align-items-center">
								  <span class="mr10-sm">Second Floor</span>
								  <span class="ms-auto d-md-flex align-items-center justify-content-end">
									<span class="me-2 me-md-4">
									  <span class="fw600">Size:</span>
									  <span class="text">1267 Sqft</span>
									</span>
									<span class="me-2 me-md-4">
									  <span class="fw600">Bedrooms</span>
									  <span class="text">2</span>
									</span>
									<span class="me-2 me-md-4">
									  <span class="fw600">Bathrooms</span>
									  <span class="text">2</span>
									</span>
									<span>
									  <span class="fw600">Price</span>
									  <span class="text">$920,99</span>
									</span>
								  </span>
								</span>
							  </button>
							</h2>
							<div id="collapseSecond" class="accordion-collapse collapse show" aria-labelledby="headingSecond" data-parent="#accordionExample">
							  <div class="accordion-body text-center"><img class="w-100" src="{{asset('frontend/pictures/listing-single-1.png')}}" alt=""></div>
							</div>
						  </div>
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingThird">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThird" aria-expanded="false" aria-controls="collapseThird">
								<span class="w-100 d-md-flex align-items-center">
								  <span class="mr10-sm">Third Floor</span>
								  <span class="ms-auto d-md-flex align-items-center justify-content-end">
									<span class="me-4">
									  <span class="fw600">Size:</span>
									  <span class="text">1267 Sqft</span>
									</span>
									<span class="me-4">
									  <span class="fw600">Bedrooms</span>
									  <span class="text">2</span>
									</span>
									<span class="me-4">
									  <span class="fw600">Bathrooms</span>
									  <span class="text">2</span>
									</span>
									<span>
									  <span class="fw600">Price</span>
									  <span class="text">$920,99</span>
									</span>
								  </span>
								</span>
							  </button>
							</h2>
							<div id="collapseThird" class="accordion-collapse collapse" aria-labelledby="headingThird" data-parent="#accordionExample">
							  <div class="accordion-body text-center"><img class="w-100" src="{{asset('frontend/pictures/listing-single-1.png')}}" alt=""></div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <h4 class="title fz17 mb30">360° Virtual Tour</h4>
				  <div class="row">
					<div class="col-md-12">
					  <img src="{{asset('frontend/pictures/listing-single-7.jpg')}}" alt="" class="w-100 bdrs12">
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <h4 class="title fz17 mb30">What's Nearby?</h4>
				  <div class="row">
					<div class="col-md-12">
					  <div class="navtab-style1">
						<nav>
						  <div class="nav nav-tabs mb20" id="nav-tab2" role="tablist">
							<button class="nav-link fw600 active" id="nav-item1-tab" data-bs-toggle="tab" data-bs-target="#nav-item1" type="button" role="tab" aria-controls="nav-item1" aria-selected="true">Education</button>
							<button class="nav-link fw600" id="nav-item2-tab" data-bs-toggle="tab" data-bs-target="#nav-item2" type="button" role="tab" aria-controls="nav-item2" aria-selected="false">Health & Medical</button>
							<button class="nav-link fw600" id="nav-item3-tab" data-bs-toggle="tab" data-bs-target="#nav-item3" type="button" role="tab" aria-controls="nav-item3" aria-selected="false">Transportation</button>
						  </div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
						  <div class="tab-pane fade fz15 active show" id="nav-item1" role="tabpanel" aria-labelledby="nav-item1-tab">
							<div class="nearby d-sm-flex align-items-center mb20">
							  <div class="rating dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">4</span><span class="text fz14">/10</span></div>
							  <div class="details">
								<p class="dark-color fw600 mb-0">South Londonderry Elementary School</p>
								<p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
								<div class="blog-single-review">
								  <ul class="mb0 ps-0">
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
								  </ul>
								</div>
							  </div>
							</div>
							<div class="nearby d-sm-flex align-items-center mb20">
							  <div class="rating dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">5</span><span class="text fz14">/10</span></div>
							  <div class="details">
								<p class="dark-color fw600 mb-0">Londonderry Senior High School</p>
								<p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
								<div class="blog-single-review">
								  <ul class="mb0 ps-0">
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
								  </ul>
								</div>
							  </div>
							</div>
							<div class="nearby d-sm-flex align-items-center">
							  <div class="rating style2 dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">5</span><span class="text fz14">/10</span></div>
							  <div class="details">
								<p class="dark-color fw600 mb-0">Londonderry Middle School</p>
								<p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
								<div class="blog-single-review">
								  <ul class="mb0 ps-0">
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
								  </ul>
								</div>
							  </div>
							</div>
						  </div>
						  <div class="tab-pane fade fz15" id="nav-item2" role="tabpanel" aria-labelledby="nav-item2-tab">
							<div class="nearby d-sm-flex align-items-center mb20">
							  <div class="rating dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">4</span><span class="text fz14">/10</span></div>
							  <div class="details">
								<p class="dark-color fw600 mb-0">South Londonderry Elementary School</p>
								<p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
								<div class="blog-single-review">
								  <ul class="mb0 ps-0">
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
								  </ul>
								</div>
							  </div>
							</div>
							<div class="nearby d-sm-flex align-items-center mb20">
							  <div class="rating dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">5</span><span class="text fz14">/10</span></div>
							  <div class="details">
								<p class="dark-color fw600 mb-0">Londonderry Senior High School</p>
								<p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
								<div class="blog-single-review">
								  <ul class="mb0 ps-0">
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
								  </ul>
								</div>
							  </div>
							</div>
							<div class="nearby d-sm-flex align-items-center">
							  <div class="rating style2 dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">5</span><span class="text fz14">/10</span></div>
							  <div class="details">
								<p class="dark-color fw600 mb-0">Londonderry Middle School</p>
								<p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
								<div class="blog-single-review">
								  <ul class="mb0 ps-0">
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
								  </ul>
								</div>
							  </div>
							</div>
						  </div>
						  <div class="tab-pane fade fz15" id="nav-item3" role="tabpanel" aria-labelledby="nav-item3-tab">
							<div class="nearby d-sm-flex align-items-center mb20">
							  <div class="rating dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">4</span><span class="text fz14">/10</span></div>
							  <div class="details">
								<p class="dark-color fw600 mb-0">South Londonderry Elementary School</p>
								<p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
								<div class="blog-single-review">
								  <ul class="mb0 ps-0">
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
								  </ul>
								</div>
							  </div>
							</div>
							<div class="nearby d-sm-flex align-items-center mb20">
							  <div class="rating dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">5</span><span class="text fz14">/10</span></div>
							  <div class="details">
								<p class="dark-color fw600 mb-0">Londonderry Senior High School</p>
								<p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
								<div class="blog-single-review">
								  <ul class="mb0 ps-0">
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
								  </ul>
								</div>
							  </div>
							</div>
							<div class="nearby d-sm-flex align-items-center">
							  <div class="rating style2 dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">5</span><span class="text fz14">/10</span></div>
							  <div class="details">
								<p class="dark-color fw600 mb-0">Londonderry Middle School</p>
								<p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
								<div class="blog-single-review">
								  <ul class="mb0 ps-0">
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
								  </ul>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <h4 class="title fz17 mb30">Walkscore</h4>
				  <div class="row">
					<div class="col-md-12">
					  <h4 class="fw400 mb20">10425 Tabor St Los Angeles CA 90034 USA</h4>
					  <div class="walkscore d-sm-flex align-items-center mb20">
						<span class="icon mr15 mb10-sm flaticon-walking"></span>
						<div class="details">
						  <p class="dark-color fw600 mb-2">Walk Score</p>
						  <p class="text mb-0">57 / 100  (Somewhat Walkable)</p>
						</div>
					  </div>
					  <div class="walkscore d-sm-flex align-items-center mb20">
						<span class="icon mr15 mb10-sm flaticon-bus"></span>
						<div class="details">
						  <p class="dark-color fw600 mb-2">Transit Score</p>
						  <p class="text mb-0">27 / 100  (Some Transit)</p>
						</div>
					  </div>
					  <div class="walkscore d-sm-flex align-items-center">
						<span class="icon mr15 mb10-sm flaticon-bike"></span>
						<div class="details">
						  <p class="dark-color fw600 mb-2">Walk Score</p>
						  <p class="text mb-0">45 / 100  (Somewhat Bikeable)</p>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <h4 class="title fz17 mb30">Mortgage Calculator</h4>
				  <div class="row">
					<div class="col-md-12">
					  <div class="d-flex align-items-center flex-wrap calculator-chart-percent">
						<div class="principal-interest-st"></div>
						<div class="property-tax-st"></div>
						<div class="home-insurance-st"></div>
					  </div>
					  <ul class="list-result-calculator d-md-flex flex-wrap justify-content-between bdrb1 mt20 ps-0 pb15 mb-0">
						<li class="d-sm-flex align-items-center">
						  <span class="name-result text">Principal and Interest</span>
						  <span class="principal-interest-val fw600">$2,412</span>
						</li>
						<li class="d-sm-flex align-items-center">
						  <span class="name-result text">Property Taxes</span>
						  <span class="property-tax-val fw600">$2,412</span>
						</li>
						<li class="d-sm-flex align-items-center">
						  <span class="name-result text">Homeowners' Insurance</span>
						  <span class="home-insurance-val fw600">$2,412</span>
						</li>
					  </ul>
					  <form class="comments_form mt30">
						<div class="row">
						  <div class="col-md-6">
							<div class="mb-4">
							  <label class="fw600 ff-heading mb-2">Total Amount</label>
							  <input type="text" class="form-control" placeholder="$ 250">
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="mb-4">
							  <label class="fw600 ff-heading mb-2">Down Payment</label>
							  <input type="text" class="form-control" placeholder="$2304">
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="mb-4">
							  <label class="fw600 ff-heading mb-2">Interest Rate</label>
							  <input type="text" class="form-control" placeholder="%3.5">
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="mb-4">
							  <label class="fw600 ff-heading mb-2">Loan Terms (Years)</label>
							  <input type="text" class="form-control" placeholder="12">
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="mb-4">
							  <label class="fw600 ff-heading mb-2">Property Tax</label>
							  <input type="text" class="form-control" placeholder="$1000">
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="mb-4">
							  <label class="fw600 ff-heading mb-2">Home Insurance</label>
							  <input type="text" class="form-control" placeholder="$1000">
							</div>
						  </div>
						  <div class="col-md-12">
							<a href="page-property-single-v1.html" class="ud-btn btn-white2">Calculate<i class="fal fa-arrow-right-long"></i></a>
						  </div>
						</div>
					  </form>
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <div class="row">
					<div class="col-md-12">
					  <div class="navtab-style1">
						<div class="d-sm-flex align-items-center justify-content-between">
						  <h4 class="title fz17 mb20">Property Views</h4>
						  <ul class="nav nav-tabs border-bottom-0 mb30" id="myTab" role="tablist">
							<li class="nav-item">
							  <a class="nav-link active" id="hourly-tab" data-bs-toggle="tab" href="#hourly" role="tab" aria-controls="hourly" aria-selected="true">Hours</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" id="weekly-tab" data-bs-toggle="tab" href="#weekly" role="tab" aria-controls="weekly" aria-selected="false">Weekly</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" id="monthly-tab" data-bs-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a>
							</li>
						  </ul>
						</div>
						<div class="tab-content" id="myTabContent2">
						  <div class="tab-pane fade show active" id="hourly" role="tabpanel" aria-labelledby="hourly-tab">
							<canvas class="chart-container" id="doublebar-chart"></canvas>
						  </div>
						  <div class="tab-pane fade w-100" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
							<div class="chart-container">
							  <div class="c_container w-100"></div>
							</div>
						  </div>
						  <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
							<div class="chart pt20">
							  <canvas class="w-100" id="myChart"></canvas>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <h4 class="title fz17 mb30">Home Value</h4>
				  <div class="row">
					<div class="col-md-12">
					  <canvas class="canvas w-100" id="myChartweave"></canvas>
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <h4 class="title fz17 mb30">Get More Information</h4>
				  <div class="agent-single d-sm-flex align-items-center bdrb1 mb30 pb25">
					<div class="single-img mb30-sm">
					  <img class="w90" src="{{asset('frontend/pictures/agent-3.png')}}" alt="">
					</div>
					<div class="single-contant ml30 ml0-xs">
					  <h6 class="title mb-1">Arlene McCoy</h6>
					  <div class="agent-meta mb10 d-md-flex align-items-center">
						<a class="text fz15 pe-2 bdrr1" href=""><i class="flaticon-call pe-1"></i>(920) 012-3421</a>
						<a class="text fz15 pe-2 ps-2 bdrr1" href=""><i class="flaticon-smartphone pe-1"></i>(920) 012-4390</a>
						<a class="text fz15 ps-2" href=""><i class="flaticon-whatsapp pe-1"></i>WhatsApp</a>
					  </div>
					  <div class="agent-social">
						<a class="mr20" href=""><i class="fab fa-facebook-f"></i></a>
						<a class="mr20" href=""><i class="fab fa-twitter"></i></a>
						<a class="mr20" href=""><i class="fab fa-instagram"></i></a>
						<a href=""><i class="fab fa-linkedin-in"></i></a>
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="col-md-12">
					  <form class="form-style1 row">
						<div class="col-md-6">
						  <div class="mb20">
							<label class="heading-color ff-heading fw600 mb10">Name</label>
							<input type="text" class="form-control" placeholder="Ali Tufan">
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="mb20">
							<label class="heading-color ff-heading fw600 mb10">Phone</label>
							<input type="text" class="form-control" placeholder="Enter your phone">
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="mb20">
							<label class="heading-color ff-heading fw600 mb10">Email</label>
							<input type="email" class="form-control" placeholder="creativelayers088">
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="widget-wrapper sideborder-dropdown">
							<label class="heading-color ff-heading fw600 mb10">I'm a</label>
							<div class="form-style2 input-group">
							  <select class="selectpicker" data-width="100%">
								<option>Select</option>
								<option value="Engineer">Engineer</option>
								<option value="Doctor">Doctor</option>
								<option value="Employee">Employee</option>
								<option value="Businessman">Businessman</option>
								<option value="Other">Other</option>
							  </select>
							</div>
						  </div>
						</div>
						<div class="col-md-12">
						  <div class="mb10">
							<label class="heading-color ff-heading fw600 mb10">Message</label>
							<textarea cols="30" rows="4" placeholder="Hello, I am interested in [Renovated apartment at last floor]"></textarea>
						  </div>
						</div>
						<div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
						  <label class="custom_checkbox fz14 ff-heading">By submitting this form I agree to Terms of Use
							<input type="checkbox">
							<span class="checkmark"></span>
						  </label>
						</div>
						<div class="btn-area">
						  <button class="ud-btn btn-white2">Request Information <i class="fal fa-arrow-right-long"></i></button>
						</div>
					  </form>
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <div class="row">
					<div class="col-md-12">
					  <div class="product_single_content">
						<div class="mbp_pagination_comments">
						  <div class="row">
							<div class="col-lg-12">
							  <div class="total_review d-flex align-items-center justify-content-between mb20">
								<h6 class="fz17 mb15"><i class="fas fa-star fz12 pe-2"></i>5.0 · 3 reviews</h6>
								<div class="page_control_shorting d-flex align-items-center justify-content-center justify-content-sm-end">
								  <div class="pcs_dropdown mb15"><span>Sort by</span>
									<select class="selectpicker show-tick">
									  <option>Newest</option>
									  <option>Best Seller</option>
									  <option>Best Match</option>
									  <option>Price Low</option>
									  <option>Price High</option>
									</select>
								  </div>
								</div>
							  </div>
							</div>
							<div class="col-md-12">
							  <div class="mbp_first position-relative d-flex align-items-center justify-content-start mb30-sm">
								<img src="{{asset('frontend/pictures/comments-2.png')}}" class="mr-3" alt="comments-2.png">
								<div class="ml20">
								  <h6 class="mt-0 mb-0">Bessie Cooper</h6>
								  <div><span class="fz14">12 March 2022</span>
									<div class="blog-single-review">
									  <ul class="mb0 ps-0">
										<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
										<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
										<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
										<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
										<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									  </ul>
									</div>
								  </div>
								</div>
							  </div>
							  <p class="text mt20 mb20">Every single thing we tried with John was delicious! Found some awesome places we would definitely go back to on our trip. John was also super friendly and passionate about Beşiktaş and Istanbul.</p>
							  <ul class="mb20 ps-0">
								<li class="list-inline-item mb5-sm"><img class="bdrs6" src="{{asset('frontend/pictures/blog-single-3.jpg')}}" alt="review-img"></li>
								<li class="list-inline-item mb5-sm"><img class="bdrs6" src="{{asset('frontend/pictures/blog-single-4.jpg')}}" alt="review-img"></li>
								<li class="list-inline-item mb5-sm"><img class="bdrs6" src="{{asset('frontend/pictures/blog-single-5.jpg')}}" alt="review-img"></li>
								<li class="list-inline-item mb5-sm"><img class="bdrs6" src="{{asset('frontend/pictures/blog-single-6.jpg')}}" alt="review-img"></li>
							  </ul>
							  <div class="review_cansel_btns d-flex bdrb1 pb30">
								<a href="#"><i class="fas fa-thumbs-up"></i>Helpful</a>
								<a href="#"><i class="fas fa-thumbs-down"></i>Not helpful</a>
							  </div>
							</div>
							<div class="col-md-12">
							  <div class="mbp_first position-relative d-flex align-items-center justify-content-start mt30 mb30-sm">
								<img src="{{asset('frontend/pictures/comments-2.png')}}" class="mr-3" alt="comments-2.png">
								<div class="ml20">
								  <h6 class="mt-0 mb-0">Darrell Steward</h6>
								  <div><span class="fz14">12 March 2022</span>
									<div class="blog-single-review">
									  <ul class="mb0 ps-0">
										<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
										<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
										<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
										<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
										<li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
									  </ul>
									</div>
								  </div>
								</div>
							  </div>
							  <p class="text mt20 mb20">Every single thing we tried with John was delicious! Found some awesome places we would definitely go back to on our trip. John was also super friendly and passionate about Beşiktaş and Istanbul.</p>
							  <div class="review_cansel_btns d-flex bdrb1 pb30">
								<a href="#"><i class="fas fa-thumbs-up"></i>Helpful</a>
								<a href="#"><i class="fas fa-thumbs-down"></i>Not helpful</a>
							  </div>
							</div>
							<div class="col-md-12">
							  <div class="position-relative pt30">
								<a href="page-property-single-v1.html" class="ud-btn btn-white2">Show all 134 reviews<i class="fal fa-arrow-right-long"></i></a>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
				  <h4 class="title fz17 mb30">Leave A Review</h4>
				  <div class="row">
					<div class="col-md-12">
					  <div class="bsp_reveiw_wrt">
						<form class="comments_form">
						  <div class="row">
							<div class="col-md-12">
							  <div class="mb-4">
								<label class="fw600 ff-heading mb-2">Email</label>
								<input type="email" class="form-control" placeholder="creativelayers088">
							  </div>
							</div>
							<div class="col-md-6">
							  <div class="mb-4">
								<label class="fw600 ff-heading mb-2">Title</label>
								<input type="text" class="form-control" placeholder="Enter Title">
							  </div>
							</div>
							<div class="col-md-6">
							  <div class="widget-wrapper sideborder-dropdown psp-review mb-4">
								<label class="fw600 ff-heading mb-2">Rating</label>
								<div class="form-style2 input-group">
								  <select class="selectpicker" data-live-search="true" data-width="100%">
									<option>Select</option>
									<option data-tokens="Five Star">Five Star</option>
									<option data-tokens="Four Star">Four Star</option>
									<option data-tokens="Three Star">Three Star</option>
									<option data-tokens="Two Star">Two Star</option>
									<option data-tokens="One Star">One Star</option>
								  </select>
								</div>
							  </div>
							</div>
							<div class="col-md-12">
							  <div class="mb-4">
								<label class="fw600 ff-heading mb-2">Review</label>
								<textarea class="pt15" rows="6" placeholder="Write a Review"></textarea>
							  </div>
							  <a href="page-property-single-v1.html" class="ud-btn btn-white2">Submit Review<i class="fal fa-arrow-right-long"></i></a>
							</div>
						  </div>
						</form>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col-lg-4">
				<div class="column">
				  <div class="default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-white position-relative">
					<h4 class="form-title mb5">Schedule a tour</h4>
					<p class="text">Choose your preferred day</p>
					<div class="ps-navtab">
					  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
						  <button class="nav-link active mr15 mb5-lg" id="pills-inperson-tab" data-bs-toggle="pill" data-bs-target="#pills-inperson" type="button" role="tab" aria-controls="pills-inperson" aria-selected="true">In Person</button>
						</li>
						<li class="nav-item" role="presentation">
						  <button class="nav-link" id="pills-videochat-tab" data-bs-toggle="pill" data-bs-target="#pills-videochat" type="button" role="tab" aria-controls="pills-videochat" aria-selected="false">Video Chat</button>
						</li>
					  </ul>
					  <div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-inperson" role="tabpanel" aria-labelledby="pills-inperson-tab">
						  <form class="form-style1">
							<div class="row">
							  <div class="col-md-12">
								<div class="mb20">
								  <input type="text" class="form-control" placeholder="Time" />
								</div>
							  </div>
							  <div class="col-lg-12">
								<div class="mb20">
								  <input type="text" class="form-control" placeholder="Name">
								</div>
							  </div>
							  <div class="col-lg-12">
								<div class="mb20">
								  <input type="text" class="form-control" placeholder="Phone">
								</div>
							  </div>
							  <div class="col-md-12">
								<div class="mb20">
								  <input type="email" class="form-control" placeholder="Email">
								</div>
							  </div>
							  <div class="col-md-12">
								<div class="mb10">
								  <textarea cols="30" rows="4" placeholder="Enter Your Messages"></textarea>
								</div>
							  </div>
							  <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
								<label class="custom_checkbox fz14 ff-heading">By submitting this form I agree to Terms of Use
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							  </div>
							  <div class="col-md-12">
								<div class="d-grid">
								  <a class="ud-btn btn-thm" href="page-contact.html">Submit a Tour Request<i class="fal fa-arrow-right-long"></i></a>
								</div>
							  </div>
							</div>
						  </form>
						</div>
						<div class="tab-pane fade" id="pills-videochat" role="tabpanel" aria-labelledby="pills-videochat-tab">
						  <form class="form-style1">
							<div class="row">
							  <div class="col-md-12">
								<div class="mb20">
								  <input type="text" class="form-control" placeholder="Time" />
								</div>
							  </div>
							  <div class="col-lg-12">
								<div class="mb20">
								  <input type="text" class="form-control" placeholder="Name">
								</div>
							  </div>
							  <div class="col-lg-12">
								<div class="mb20">
								  <input type="text" class="form-control" placeholder="Phone">
								</div>
							  </div>
							  <div class="col-md-12">
								<div class="mb20">
								  <input type="email" class="form-control" placeholder="Email">
								</div>
							  </div>
							  <div class="col-md-12">
								<div class="mb10">
								  <textarea cols="30" rows="4" placeholder="Enter Your Messages"></textarea>
								</div>
							  </div>
							  <div class="col-md-12">
								<div class="d-grid">
								  <a class="ud-btn btn-thm" href="page-contact.html">Submit a Tour Request<i class="fal fa-arrow-right-long"></i></a>
								</div>
							  </div>
							</div>
						  </form>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="agen-personal-info position-relative bgc-white default-box-shadow1 bdrs12 p30 mt30">
					<div class="widget-wrapper mb-0">
					  <h6 class="title fz17 mb30">Get More Information</h6>
					  <div class="agent-single d-sm-flex align-items-center pb25">
						<div class="single-img mb30-sm">
						  <img class="w90" src="{{asset('frontend/pictures/agent-3.png')}}" alt="">
						</div>
						<div class="single-contant ml20 ml0-xs">
						  <h6 class="title mb-1">Arlene McCoy</h6>
						  <div class="agent-meta mb10 d-md-flex align-items-center">
							<a class="text fz15" href=""><i class="flaticon-call pe-1"></i>(920) 012-3421</a>
						  </div>
						  <a href="" class="text-decoration-underline fw600">View Listings</a>
						</div>
					  </div>
					  <div class="d-grid">
						<button class="ud-btn btn-white2">Contact Agent<i class="fal fa-arrow-right-long"></i></button>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="row mt30 wow fadeInUp" data-wow-delay="700ms">
			  <div class="col-lg-9">
				<div class="main-title2">
				  <h2 class="title">Nearby Similar Homes</h2>
				  <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
				</div>
			  </div>
			</div>
			<div class="row wow fadeInUp" data-wow-delay="900ms">
			  <div class="col-lg-12">
				<div class="property-city-slider navi_pagi_top_right slider-dib-sm slider-3-grid owl-theme owl-carousel">
				  <div class="item">
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

					  </div>
					</div>
				  </div>
				  <div class="item">
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
					  </div>
					</div>
				  </div>
				  <div class="item">
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
					  </div>
					</div>
				  </div>
				  <div class="item">
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
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="listing-style1">
					  <div class="list-thumb">
						<img class="w-100" src="images/listings/g1-5.jpg" alt="">
						<div class="list-price">$14,000 / <span>mo</span></div>
					  </div>
					  <div class="list-content">
						<h6 class="list-title"><a href="page-property-single-v1.html">Northwest Office Space</a></h6>
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
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="listing-style1">
					  <div class="list-thumb">
						<img class="w-100" src="images/listings/g1-6.jpg" alt="">
						<div class="list-price">$82,000 / <span>mo</span></div>
					  </div>
					  <div class="list-content">
						<h6 class="list-title"><a href="page-property-single-v1.html">House on the beverly hills</a></h6>
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
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="listing-style1">
					  <div class="list-thumb">
						<img class="w-100" src="images/listings/g1-1.jpg" alt="">
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
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</section>
  </div>
</div>

<!-- Our Footer -->
<script src="{{asset('frontend/js/jquery-3.6.4.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.mmenu.all.js')}}"></script>
<script src="{{asset('frontend/js/ace-responsive-menu.js')}}"></script>
<script src="{{asset('frontend/js/chart.min.js')}}"></script>
<script src="{{asset('frontend/js/chart-custome.js')}}"></script>
<script src="{{asset('frontend/js/jquery-scrolltofixed-min.js')}}"></script>
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.js')}}"></script>
<script src="{{asset('frontend/js/isotop.js')}}"></script>
<script src="{{asset('frontend/js/scrollbalance.js')}}"></script>
<!-- Custom script for all pages -->
<script src="{{asset('frontend/js/script.js')}}"></script>

<script>

    $(function() {
      var cols = $('.wrap .column');
      var enabled = true;
      var scrollbalance = new ScrollBalance(cols, {
        minwidth: 0
      });

      scrollbalance.bind();
    });
    </script>
</body>
</html>
<script>let timer = function (date) {
    let timer = Math.round(new Date(date).getTime()/1000) - Math.round(new Date().getTime()/1000);
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

			document.getElementById('cd-days').innerHTML = days;
			document.getElementById('cd-hours').innerHTML = hours;
			document.getElementById('cd-minutes').innerHTML = minutes;
			document.getElementById('cd-seconds').innerHTML = seconds;
		}, 1000);
	}

//using the function
const today = new Date()
const tomorrow = new Date(today)
tomorrow.setDate(tomorrow.getDate() + 1)
timer(tomorrow);
</script>
@endsection
