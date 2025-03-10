@extends('frontend.layouts.master')
@section('title','Chetak Industry - Contact us')
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
                            <h2>Contact Us</h2>                                    
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================>> Contact <<===== -->
    <section id="contact" class="contact-area contact-bg pt-95 pb-95 p-relative fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-box-shadow">
                        <div class="section-title mb-20 wow fadeInDown  animated" data-animation="fadeInDown animated" data-delay=".2s" style="visibility: visible; animation-name: fadeInDown;">
                            
                            <h2>Get In Tuch</h2>
                        </div>
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <!--CHECK ANY ERROR IN LARAVEL-->
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                        <form action="{{ route('contact-us.submit') }}" method="POST" class="contact-form wow fadeInUp  animated" data-animation="fadeInDown animated" data-delay=".2s" style="visibility: visible; animation-name: fadeInUp;">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-name mb-20">                                    
                                        <input type="text" name="name" placeholder="Enter your name">
                                    </div> 
                                    @if($errors->has('name'))
                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                    @endif                              
                                </div>
                                <div class="col-lg-12">                               
                                    <div class="contact-field p-relative c-email mb-20">                                    
                                        <input type="text" name="email" placeholder="Enter your youremail">
                                    </div> 
                                    @if($errors->has('email'))
                                        <div class="text-danger">{{ $errors->first('email') }}</div>
                                    @endif                               
                                </div>
                                <div class="col-lg-12">                               
                                    <div class="contact-field p-relative c-subject mb-20">                                   
                                        <input type="text" name="phone" placeholder="Enter your phone no.">
                                    </div>
                                    @if($errors->has('phone'))
                                        <div class="text-danger">{{ $errors->first('phone') }}</div>
                                    @endif 
                                </div>							
                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-message mb-45">                                  
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                    </div>
                                    <div class="slider-btn">                                          
                                       <input type="submit" value="Send Message" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">
                                        <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>						
                                    </div>                
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box-shadow">
                        <div class="single-contact-info d-flex"> 
                            <div class="single-contact-icon">
                                <i class="fa fa-map-marker"></i> 
                            </div>
                            <p class="desc-content">Plot No. KC Kalia Nagar Colony
                                <br> Rathyatra, Varanasi - 221010
                            </p>
                        </div>
                        <div class="single-contact-info d-flex"> 
                            <div class="single-contact-icon">
                                <i class="fa fa-phone"></i> 
                            </div>
                            <a href="tel:+919839224057" class="desc-content">+91-9839224057</a> 
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    
    <!-- =====>> End Contact <<================================ -->
@endsection