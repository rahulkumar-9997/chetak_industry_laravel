@extends('frontend.layouts.master')
@section('title','Chetak Industry - About us')
@section('description', 'Share text and photos with your friends and have fun')
@section('keywords', 'sharing, sharing text, text, sharing photo, photo,')

@section('main-content')
    <!-- =====>> End Top Menu <<================================ -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-10">
                            <h2>About Us</h2>                                    
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================>> Contact <<===== -->
    <section id="about" class="about-area bg-image about-p pt-95 pb-95 p-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-content s-about-content pl-30">
                        <div class="about-title second-atitle">
                            <span>About Us <small class="circle-right"><img src="{{asset('fronted/img/bg/circle_right.png')}}" alt="img"></small></span>
                            <h2>Industry Is A Better Horse To Ride Than Genius</h2>                                  
                        </div>
                        <p>
                            Donec ut ultricies ante. Proin at sodales risus. Fusce tempor dui id convallis sollicitudin. Mauris vitae elit elementum, faucibus libero a, interdum tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

                        </p>
                        <P>
                            Mauris at sapien ut libero tempor convallis volutpat et dolor. Duis eleifend odio ante, at scelerisque est blandit a. Morbi faucibus dolor nisi, id suscipit massa vulputate at.
                        </P>
                        <P>
                            Mauris at sapien ut libero tempor convallis volutpat et dolor. Duis eleifend odio ante, at scelerisque est blandit a. Morbi faucibus dolor nisi, id suscipit massa vulputate at.
                        </P>
                        
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="s-about-img p-relative">
                        <img src="{{asset('fronted/chetak-image/about-us-content.jpg')}}" alt="img">
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
@endsection