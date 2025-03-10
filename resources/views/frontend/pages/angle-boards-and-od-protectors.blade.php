@extends('frontend.layouts.master')
@section('title','Chetak Industry - Angle and OD Protectors')
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
                            <h2>Angle Board & OD Protectors</h2>                                    
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Angle Board & OD Protectors</li>
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
                                                <a href="{{asset('fronted/chetak-image/product_1.jpg')}}" class="lightbox-image popup-image" data-fancybox="services">
                                                    <img src="{{asset('fronted/chetak-image/product_1.jpg')}}" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="content-box text-justify">
                                        <h2>Angle Board & OD Protectors</h2>
                                        <p>
                                            Chetak Industries is manufacturing Angle Boards and OD 
                                            Protectors (both laminated and non-laminated) for 
                                            various industries and is now ranked among top angle
                                             boards and OD Protectors manufacturers in India. 
                                             We can manufacture Angle Boards and OD Protectors
                                              according to the customer requirements in different
                                               sizes. Angleboard reinforces the corners of stacked
                                                pallets for added strength, stability, and protection.
                                                 When used as a pallet framing material Angleboard 
                                                 can allow for the stacking of pallets without the
                                                  risk of crushing the loaded pallet underneath. 
                                                  O.D Protector - As the name suggests, outer 
                                                  diameter protectors for protection of circumference 
                                                  of cylindrical products. 
                                        </p>
                                        <p>
                                        Chetak Industries is manufacturing Angle Boards and OD 
                                        Protectors (both laminated and non-laminated) for various
                                         industries and is now ranked among top angle boards and 
                                         OD Protectors manufacturers in India. We can manufacture
                                          Angle Boards and OD Protectors according to the customer 
                                          requirements in different sizes. Angleboard reinforces
                                           the corners of stacked pallets for added strength, 
                                           stability, and protection. When used as a pallet
                                            framing material Angleboard can allow for the 
                                            stacking of pallets without the risk of crushing
                                             the loaded pallet underneath. O.D Protector - As the
                                              name suggests, outer diameter protectors for
                                               protection of circumference of cylindrical products. 
                                        </p>
                                        <h4>Key features </h4>
                                        <ul class="list-style-one">
                                            <li>Prevents product damage that can occur during shipping and handling.</li>
                                            <li>Custom lengths to meet your specific application.</li>
                                            <li>Optional printing of brand name and handling instructions.</li>
                                            
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