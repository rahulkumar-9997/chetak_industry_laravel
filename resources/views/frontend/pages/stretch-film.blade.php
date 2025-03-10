@extends('frontend.layouts.master')
@section('title','Chetak Industry - Stretch Film')
@section('description', 'Share text and photos with your friends and have fun')
@section('keywords', 'sharing, sharing text, text, sharing photo, photo,')

@section('main-content')
    <!-- =====>> End Top Menu <<================================ -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-10">
                            <h2>Stretch Film</h2>                                    
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Stretch Film</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="choose-area pt-100 pb-100 p-relative">             
        <div class="chosse-img wow fadeInRight animated" data-animation="fadeInRight animated" data-delay=".2s"></div>
            <div class="container">
                <div class="row">
                    <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 order-2">
                        <div class="row">
                            <div class="col-lg-12">		
                                <div class="service-detail">
                                    <div class="images-box">
                                        <div class="column col-lg-5 wow fadeInLeft chetak-industry-pro-img">
                                            <figure class="image wow fadeIn">
                                                <a href="{{asset('fronted/chetak-image/product_3.jpg')}}" class="lightbox-image popup-image" data-fancybox="services">
                                                    <img src="{{asset('fronted/chetak-image/product_3.jpg')}}" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="content-box text-justify">
                                        <h2>Stretch Film</h2>
                                        <p>
                                        Chetak Industries is manufacturing machine grade and manual grade stretch film in different widths and microns. Stretch film or stretch wrap is a highly stretchable plastic film that is used in packaging and shipping to wrap around items to keep them in place. The elastic recovery of stretch wrap keeps the items tightly bound. Stretch films are made from linear low-density polyethylene resins.
                                        </p>
                                        <p>Since its early introduction in the early 70's, stretch film has become the most important method of unitizing product loads for transport. We are now supplying stretch film to aluminium and steel industries pan India. </p>
                                        <h4>Advantages of Stretch Film are as follows</h4>
                                        <ul class="list-style-one">
                                            <li>Advantages of Stretch Film are as follows</li>
                                            <li>Stretch Film is cost effective.</li>
                                            <li>Stretch film is versatile in nature.</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                   
               </div>
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar services-sidebar">
                        <!-- Category Widget -->
                        @include('frontend.layouts.services')
                    </aside>
                </div>
            </div>
        </div>
    </section>
    
@endsection