@extends('frontend.layouts.master')
@section('title','Chetak Industry - Interleaving Paper')
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
                            <h2>Interleaving Paper</h2>                                    
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Interleaving Paper</li>
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
                                                <a href="{{asset('fronted/chetak-image/product_2.jpg')}}" class="lightbox-image popup-image" data-fancybox="services">
                                                    <img src="{{asset('fronted/chetak-image/product_2.jpg')}}" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="content-box text-justify">
                                        <h2>Interleaving Paper</h2>
                                        <p>
                                        Interleaving is a paper used as a liner to package and protect precious metals, engraved plates, and integrated circuits. Purity is paramount, requiring the paper to be clean and manufactured with a precise pH content. Chetak Industries is supplying all types of interleaving paper in different GSM. The paper we are supplying is acid free. We have developed such type of paper after several research and development. We are now one of the largest suppliers of interleaving paper in Uttar Pradesh eastern zone. 
                                        </p>
                                        <p>
                                        The product offering is extensive, with MG, MF and Creped options, customizable to meet the technical requirements of the application. It can be used with metals, polymers, plastics, and glass. Our paper is now widely used in every aluminium and steel industries. 
                                        </p>
                                        <h4>Advantages of interleaving paper are as follows</h4>
                                        <ul class="list-style-one">
                                            <li>Clean paper with precise ph to eliminate corrosion</li>
                                            <li>Crepe option increases absorbency and stretch</li>
                                            <li>High tensile and tear deliver strength</li>
                                            <li>Anti-tarnish and low corrosion properties</li>
                                           
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