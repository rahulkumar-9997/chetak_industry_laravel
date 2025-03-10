@extends('frontend.layouts.master')
@section('title','Chetak Industry - Paper Surface Board')
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
                            <h2>Paper Surface Board</h2>                                    
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Paper Surface Board</li>
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
                                                <a href="{{asset('fronted/chetak-image/product_4.jpg')}}" class="lightbox-image popup-image" data-fancybox="services">
                                                    <img src="{{asset('fronted/chetak-image/product_4.jpg')}}" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <h2>Paper Surface Board (Both laminated and non-laminated)</h2>
                                        <p>About Rubberised Board Rubberised board is well known for its well tensile strength , highly flexible nature and very high bursting factor . The material is very well accepted in the aluminium and steel industry both inland and abroad. The raw material used in manufacturing of rubberised board is of world class quality and the product is eco-friendly. 

                                        </p>
                                        <p>The percentage of components is mentioned below: </p>
                                        <h4>Item Name And Percentage</h4>
                                        <ul class="list-style-one">
                                            <li>VIRGIN CRAFT CUTTING - 30%</li>
                                            <li>VIRGIN WHITE PAPER CUTTING - 50% </li>
                                            <li>CHEMICALS - 10% </li>
                                            <li>BAMBOO - 5% </li>
                                            <li>RESIN AND ADHESIVE - 5%</li>
                                        </ul>
                                        <p>
                                        The process of its manufacturing is illustrated through a flow chart on the next page. 
                                        </p>

                                        <h4>Conclusion </h4>

                                    <p>
                                    It feels pride to develop such a eco-friendly material which is the sole solution for aluminium and steel industry. The world-wide acclaim for it is also due to its cost effectiveness as compared to other materials in its category.
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