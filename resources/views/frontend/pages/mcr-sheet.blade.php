@extends('frontend.layouts.master')
@section('title','Chetak Industry - MCR Sheet')
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
                            <h2>MCR Sheet</h2>                                    
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">MCR Sheet</li>
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
                                        <h2>MCR sheet / Spacers / Anti-Skid Pad / Cushion sheet</h2>
                                        <p>
                                        MCR sheet is used for storage, protection, and cushioning. It is a highly specialised and customised product which requires high degree of precision. It is a cost-effective product. 
                                        </p>
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