@extends('frontend.layouts.master')
@section('title','Chetak Industry - Masking Film')
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
                            <h2>Masking Film</h2>                                    
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Masking Film</li>
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
                                    <div class="content-box text-justify">
                                        <h2>Masking Film / Guard Film</h2>
                                        <p>Chetak Industries is manufacturing surface protection film for almost every aluminium industry in order to protect their products from heavy damages caused during export of aluminium or steel sheets. At the same time, we have inhouse printing facility available for our customers. The masking film can be customised to different widths and microns according to the customer requirements. Surface protection film is used for temporary protection for most hard surface and helps guard against tracked in dirt, paint spills, dust, construction debris and damage. The quality of adhesive used in the masking film is imported, which has been developed after years of research and development. It does not leave any residue when removed from the aluminium or steel sheet.</p>
                                        <p> It is one of the most important products in the industry which is being used worldwide. </p>
                                        <p>
                                        The Masking film supplied by Chetak Industries has received worldwide acclaim and recognition.
                                        </p>
                                        <h4>
                                        Advantages of Masking Film are as follows
                                        </h4>
                                        <ul class="list-style-one">
                                            <li>
                                            Applying protective film to a surface when the substrate is clean and free of dust, dirt, oil and damage helps keep the item in that state, even if environmental conditions threaten to cause harm. This may mean applying film to keep UV rays from discoloring plastic stored outside, or using clear surface protection film to ensure appliances reach buyers in perfect condition.
                                            </li>
                                            <li>
                                            The cost-effectiveness of protective film comes from the fact that a dirty or otherwise damaged item may need expensive repairs or replacements, raising headaches for manufacturers, shippers, installers, or all the above. The investment in buying and applying surface protection film is a form of insurance against the eventual costs of damage.
                                            </li>
                                            <li>
                                            The actual application of surface protection film is quick and easy and can be carried out by hand, just unroll the film from a custom-width roll and smooth it onto the substrate.
                                            </li>
                                            
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