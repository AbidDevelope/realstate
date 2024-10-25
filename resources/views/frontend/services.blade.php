@extends('frontend.layout.master')
@section('style-area')
<link rel="stylesheet" href="{{asset('frontend/css/googlemap.css')}}">
@endsection
@section('content-area')

<style>
    .real-hero-content {
    background-color: rgba(0,0,0,.3);
    padding: 30px 15px;
    position: relative;
    z-index: 3;
    }
    .real-hero-background {
        height: auto;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 2;
    }
    .real-hero-background img {
     height: auto;
    object-fit: cover;
    width: 100%;
}

@media screen and (min-width: 1300px){
.ContentPage_padding {
    padding-left: 160px;
    padding-right: 160px;
}
}
</style>
<div class="body_content">
<!-- Property Half Map V1 -->
 <main>
    <section class="p-0">
        <div class="ContentPage">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-md-12 px-0 overflow-hidden border-bottom-thick border-bottom-primary border-right-0 border-left-0 border-top-0">
                        <div class="real-hero-background">
                            <img src="{{asset('Frontend/images/services/img_services_hero.jpg')}}" alt="Real Estate  | Services">
                        </div>
                        <div class="real-hero-content bg-transparent">
                            <div class="container-fluid ContentPage_padding">
                                <div class="row">
                                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                    <h1 class="h3 mb-4 text-white">Want Action? Think Auction!</h1>
                                    <p class="lead text-white mb-4">Our team of nearly 30 full-time professionals is ready to put their experience and knowledge to work for you. Let us create a custom solution tailored specifically to your property that achieves the highest possible sales result.</p>
                                    <button type="button" class="btn btn-success">Contact Agent</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-5 ContentPage_padding">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 py-4 px-lg-4 mb-lg-4 text-center">
                        <div class="card">
                            <div class="card-images-tr">
                                <img src="{{asset('Frontend/images/services/card.png')}}" alt="card-icon-img">
                            </div>
                            <div class="card-text-b">
                            <h3 class="mb-3 font-weight-light">Residential</h3>
                            <p class="card-text">Our team offers customized selling options for all residential properties, including move-in-ready homes, quality properties in need of updates, and rental houses. </p>
                            </div>
                            <div class="card-btn-bg">
                               <a href="#" target="_self" class="btn btn-outline-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 py-4 px-lg-4 mb-lg-4 text-center">
                        <div class="card">
                            <div class="card-images-tr">
                                <img src="{{asset('Frontend/images/services/card1.png')}}" alt="card-icon-img">
                            </div>
                            <div class="card-text-b">
                            <h3 class="mb-3 font-weight-light">Residential</h3>
                            <p class="card-text">Our team offers customized selling options for all residential properties, including move-in-ready homes, quality properties in need of updates, and rental houses. </p>
                            </div>
                            <div class="card-btn-bg">
                               <a href="#" target="_self" class="btn btn-outline-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 py-4 px-lg-4 mb-lg-4 text-center">
                        <div class="card">
                            <div class="card-images-tr">
                                <img src="{{asset('Frontend/images/services/card2.png')}}" alt="card-icon-img">
                            </div>
                            <div class="card-text-b">
                            <h3 class="mb-3 font-weight-light">Residential</h3>
                            <p class="card-text">Our team offers customized selling options for all residential properties, including move-in-ready homes, quality properties in need of updates, and rental houses. </p>
                            </div>
                            <div class="card-btn-bg">
                               <a href="#" target="_self" class="btn btn-outline-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 py-4 px-lg-4 mb-lg-4 text-center">
                        <div class="card">
                            <div class="card-images-tr">
                                <img src="{{asset('Frontend/images/services/card3.png')}}" alt="card-icon-img">
                            </div>
                            <div class="card-text-b">
                            <h3 class="mb-3 font-weight-light">Residential</h3>
                            <p class="card-text">Our team offers customized selling options for all residential properties, including move-in-ready homes, quality properties in need of updates, and rental houses. </p>
                            </div>
                            <div class="card-btn-bg">
                               <a href="#" target="_self" class="btn btn-outline-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 py-4 px-lg-4 mb-lg-4 text-center">
                        <div class="card">
                            <div class="card-images-tr">
                                <img src="{{asset('Frontend/images/services/card4.png')}}" alt="card-icon-img">
                            </div>
                            <div class="card-text-b">
                            <h3 class="mb-3 font-weight-light">Residential</h3>
                            <p class="card-text">Our team offers customized selling options for all residential properties, including move-in-ready homes, quality properties in need of updates, and rental houses. </p>
                            </div>
                            <div class="card-btn-bg">
                               <a href="#" target="_self" class="btn btn-outline-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 py-4 px-lg-4 mb-lg-4 text-center">
                        <div class="card">
                            <div class="card-images-tr">
                                <img src="{{asset('Frontend/images/services/card5.png')}}" alt="card-icon-img">
                            </div>
                            <div class="card-text-b">
                            <h3 class="mb-3 font-weight-light">Residential</h3>
                            <p class="card-text">Our team offers customized selling options for all residential properties, including move-in-ready homes, quality properties in need of updates, and rental houses. </p>
                            </div>
                            <div class="card-btn-bg">
                               <a href="#" target="_self" class="btn btn-outline-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </scetion>
 </main>
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

@endsection