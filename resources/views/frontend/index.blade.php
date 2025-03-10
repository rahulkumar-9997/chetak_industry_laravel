@extends('frontend.layouts.master')
@section('title','Chetak Industry - Home')
@section('description', 'Share text and photos with your friends and have fun')
@section('keywords', 'sharing, sharing text, text, sharing photo, photo,')

@section('main-content')
{{--@dd(Auth::check());--}}
<!-- ===========================  =====>> Feature <<===== -->
<section id="home" class="slider-area fix p-relative">
	    <div class="slider-active">
		<div class="single-slider slider-bg slider-bg5 d-flex align-items-center" style="background-image:url({{asset('fronted/chetak-image/slider/slider-1-2.jpg')}})">
		    <div class="container">
			<div class="row">	
			    <div class="col-lg-7">
				<div class="slider-content s-slider-content text-left slider-bg-home">
				    <span data-animation="fadeInUp" data-delay=".2s">Welcome to Factory & Industry Business </span>
				    <h2 data-animation="fadeInUp" data-delay=".4s">
					Reliable <span>Engineering</span><br>
					Takes Many Forms
				    </h2>
				    <p data-animation="fadeInUp" data-delay=".6s">
					It is a long established fact that a reader will 
					be distracted by the readable content layout readable
					English.ratione, id soluta aspernatur nulla minus.
				    </p>
				    <div class="slider-btn mt-40">                                          
					<a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More</a>					
					<div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>						
				    </div>
				</div>
			    </div>
			    <div class="col-lg-5">
			    </div>
			</div>
		    </div>
		</div>
		<div class="single-slider slider-bg slider-bg5 d-flex align-items-center" style="background-image:url({{asset('fronted/chetak-image/slider/slider-4.jpg')}})">
		    <div class="container">
			<div class="row">	
			    <div class="col-lg-7">
				<div class="slider-content s-slider-content text-left slider-bg-home">
				    <span data-animation="fadeInUp" data-delay=".2s">Welcome to Factory & Industry Business </span>
				   <h2 data-animation="fadeInUp" data-delay=".4s">Reliable <span>Engineering</span><br>
				       Takes Many Forms</h2>
				   <p data-animation="fadeInUp" data-delay=".6s">It is a long established fact that a reader will be distracted by the readable content layout readable English.ratione, id soluta aspernatur nulla minus.</p>
				   <div class="slider-btn mt-40">                                          
				       <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More</a>					
					   <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>						
				   </div>
				</div>
			    </div>
			    <div class="col-lg-5">

			    </div>
			</div>
		    </div>
		</div>
		<div class="single-slider slider-bg slider-bg5 d-flex align-items-center" style="background-image:url({{asset('fronted/chetak-image/slider/slider-3.jpg')}})">
		    <div class="container">
			<div class="row">	
			    <div class="col-lg-7">
				 <div class="slider-content s-slider-content text-left slider-bg-home">
				     <span data-animation="fadeInUp" data-delay=".2s">Welcome to Factory & Industry Business </span>
				    <h2 data-animation="fadeInUp" data-delay=".4s">Reliable <span>Engineering</span><br>
					Takes Many Forms
				    </h2>
				    <p data-animation="fadeInUp" data-delay=".6s">It is a long established fact that a reader will be distracted by the readable content layout readable English.ratione, id soluta aspernatur nulla minus.</p>
				    <div class="slider-btn mt-40">                                          
					<a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More</a>				
						<div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>						
				    </div>
				</div>
			    </div>
			    <div class="col-lg-5">

			    </div>
			</div>
		    </div>
		</div>
	    </div>                    
	</section>
	<!-- slider-area-end -->
	<!-- about-area -->
	<section id="about" class="about-area about-p pt-100 pb-95 p-relative" style="background-image:url({{asset('fronted/img/bg/about_aliment_bg.png')}}); background-size: contain; background-repeat: no-repeat;background-position: center center;">
	    <div class="container">
		<div class="row align-items-center">
		    <div class="col-lg-6 col-md-6 col-sm-12">
			<div class="about-content s-about-content">
			    <div class="about-title second-atitle">
				<span>
				    About Us 
				    <small class="circle-right">
						<img src="{{asset('fronted/img/bg/circle_right.png')}}" alt="img">
				    </small>
				</span>
				<h2>Industry Is A Better Horse To Ride Than Genius</h2>                                  
			    </div>
			    <p class="text-justify">
				The company was established in the year 1995 with the aim to provide packaging
				solutions to various industries. This is to introduce ourselves as M/S 
				Chetak Industries which is engaged in manufacturing paper surface
				boards and other customised packaging materials for aluminium and 
				steel industries of its own kind, style, and size. 
			    </p>
			    <P  class="text-justify">
				An extremely close relationship with our customers, strict adherence to
				quality and committed service has made chetak Industries a fore runner 
				in the industry.
			    </P>
			    <div class="slider-btn mt-30">                                          
				<a href="{{route('about-us')}}" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More</a>					<div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>						
			    </div>
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
	<!-- about-area-end -->
	<div class="counter-area" style="background-image:url({{asset('fronted/img/count/count-bg.jpg')}}); background-repeat: no-repeat; background-position: bottom;">
	    <div class="container">
		<div class="row align-items-end">
		     <div class="col-lg-3 col-md-3 col-sm-12">
			<div class="single-counter-img text-center fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
			    <img src="{{asset('fronted/chetak-image/happy-client.png')}}" alt="img" class="img">
			</div>
		    </div>
		    <div class="col-lg-3 col-md-3 col-sm-12">
			<div class="single-counter text-center wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
			    <img src="{{asset('fronted/img/count/icon.png')}}" alt="img">
			    <div class="counter p-relative">
				<span class="count">9878</span><small>+</small>                                   
			    </div>
			    <p>Happy Clients</p>
			    <div class="line"></div>
			</div>
		    </div>
		    <div class="col-lg-3 col-md-3 col-sm-12">
			<div class="single-counter text-center wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
			    <img src="{{asset('fronted/img/count/icon2.png')}}" alt="img">
			    <div class="counter p-relative">
			       <span class="count">500</span><small>+</small>                       
			    </div>
			    <p>Employees</p>
			     <div class="line"></div>
			</div>
		    </div>
		    <div class="col-lg-3 col-md-3 col-sm-12">
		       <div class="single-counter text-center wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
			    <img src="{{asset('fronted/img/count/icon3.png')}}" alt="img">
			   <div class="counter p-relative">
			       <small>$</small><span class="count">58.45</span><small>M</small>                      
			   </div>
			   <p>Annual Turnover</p>
			    <div class="line"></div>
		       </div>
		   </div>
		</div>
	    </div>
	</div>
	<!-- counter-area-end -->	
	<!-- services-area -->
	<section id="services" class="services-area services-bg services-two pt-95 pb-95"  style="background-image:url({{asset('fronted/img/bg/services_aliment_bg.png')}}); background-size: contain; background-repeat: no-repeat;background-position: center center;">
	    <div class="container">
		<div class="row justify-content-center">
		    <div class="col-xl-10 col-lg-10">
			<div class="section-title text-center pl-40 pr-40 mb-80 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
			    <span>
				<small class="circle-left">
				    <img src="{{asset('fronted/img/bg/circle_Left.png')}}" alt="img">
				</small> 
				our services
				<small class="circle-right">
				    <img src="{{asset('fronted/img/bg/circle_right.png')}}" alt="img">
				</small>
			    </span>
			    <h2>We Offer Best Product Service To You.</h2>
			</div>
		    </div>
		</div>
		<div class="row text-justify justify-content-md-center">
		    <div class="col-lg-4 col-md-6">
				<div class="s-single-services one active wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
					<div class="services-icon">
						<img src="{{asset('fronted/img/services/1.svg')}}" alt="img" class="d-active-icon">
						<img src="{{asset('fronted/img/services/1-hover.svg')}}" alt="img" class="active-icon">
			    	</div>
			    	<div class="second-services-content">
						<h5><a href="{{route('angle-boards-and-od-protectors')}}"> Angle Boards and OD Protectors</a></h5>       
						<p>
							Chetak Industries is manufacturing Angle Boards and OD Protectors
							(both laminated and non-laminated) for various industries 
							and is now ranked among top angle boards and OD Protectors
							manufacturers in India. 
						</p>
						<div class="slider-btn mt-20">                                          
							<a href="{{route('angle-boards-and-od-protectors')}}" class="ss-btn text-center" data-animation="fadeInRight" data-delay=".8s" tabindex="0">
								Read More 
								<i class="fas fa-chevron-right"></i> 
							</a>										
						</div>
			    	</div>

				</div>
		    </div>
		    <div class="col-lg-4 col-md-6">
			 	<div class="s-single-services two wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
					<div class="services-icon">
						<img src="{{asset('fronted/img/services/2.svg')}}" alt="img" class="d-active-icon">
						<img src="{{asset('fronted/img/services/2-hover.svg')}}" alt="img" class="active-icon">
			    	</div>
					<div class="second-services-content">
						<h5><a href="{{route('interleaving-paper')}}">Interleaving Paper</a></h5>       
						<p> 
							Chetak Industries is supplying all types of interleaving paper
							in different GSM. The paper we are supplying is acid free.
							We have developed such type of paper after several research 
							and development.
						</p>
						<div class="slider-btn mt-20">                                          
							<a href="{{route('interleaving-paper')}}" class="ss-btn text-center" data-animation="fadeInRight" data-delay=".8s" tabindex="0">
								Read More 
								<i class="fas fa-chevron-right"></i> 
							</a>										
						</div>
					</div>

				</div>
		    </div>
		    <div class="col-lg-4 col-md-6">
				<div class="s-single-services three wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
					<div class="services-icon">
						<img src="{{asset('fronted/img/services/3.svg')}}" alt="img" class="d-active-icon">
						<img src="{{asset('fronted/img/services/3-hover.svg')}}" alt="img" class="active-icon">
					</div>
			    	<div class="second-services-content">
						<h5><a href="{{route('stretch-film')}}">Stretch Film</a></h5>       
						<p>
							Chetak Industries is manufacturing machine grade and manual grade
							stretch film in different widths and microns. Stretch film or 
							stretch wrap is a highly stretchable plastic film that is 
							used in packaging and shipping to wrap around items to 
							keep them in place. 
						</p>
						<div class="slider-btn mt-20">                                          
							<a href="{{route('stretch-film')}}" class="ss-btn text-center" data-animation="fadeInRight" data-delay=".8s" tabindex="0">
								Read More 
								<i class="fas fa-chevron-right"></i> 
							</a>										
						</div>
			    	</div>
				</div>
		    </div>
		    <div class="col-lg-4 col-md-6">
				<div class="s-single-services four wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
					<div class="services-icon">
						<img src="{{asset('fronted/img/services/4.svg')}}" alt="img" class="d-active-icon">
						<img src="{{asset('fronted/img/services/4-hover.svg')}}" alt="img" class="active-icon">
					</div>
			     	<div class="second-services-content">
						<h5><a href="{{route('masking-film')}}">Masking Film</a></h5>       
						<p>Chetak Industry India has full-time, high-level trained and experienced
							field service engineers who repair and service your Chetak Industry India 
							equipment and tools to high quality standards.
						</p>
						<div class="slider-btn mt-20">                                          
							<a href="{{route('masking-film')}}" class="ss-btn text-center" data-animation="fadeInRight" data-delay=".8s" tabindex="0">
								Read More 
								<i class="fas fa-chevron-right"></i> 
							</a>										
						</div>
			     	</div>

			 	</div>
			</div>
		    <div class="col-lg-4 col-md-6">
		       	<div class="s-single-services five wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
			    	<div class="services-icon">
						<img src="{{asset('fronted/img/services/5.svg')}}" alt="img" class="d-active-icon">
						<img src="{{asset('fronted/img/services/5-hover.svg')}}" alt="img" class="active-icon">
			    	</div>
			    	<div class="second-services-content">
						<h5><a href="{{route('paper-surface-board')}}">Paper Surface Board</a></h5>       
						<p>
							With over two decades of experience in the development
							of packaging systems for Indian industry, Chetak Industry
							India can help you implement efficient, economical
							methods of packaging, handling and shipping your products. 
						</p>
						<div class="slider-btn mt-20">                                          
							<a href="{{route('paper-surface-board')}}" class="ss-btn text-center" data-animation="fadeInRight" data-delay=".8s" tabindex="0">
								Read More 
								<i class="fas fa-chevron-right"></i> 
							</a>										
						</div>
			    	</div>
				</div>
		    </div>
		    <div class="col-lg-4 col-md-6">
		       	<div class="s-single-services six wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
			    	<div class="services-icon">
						<img src="{{asset('fronted/img/services/6.svg')}}" alt="img" class="d-active-icon">
						<img src="{{asset('fronted/img/services/6-hover.svg')}}" alt="img" class="active-icon">
			    	</div>
					<div class="second-services-content">
						<h5><a href="{{route('pp-bubble-guard')}}">PP Bubble Guard</a></h5>       
						<p>
							This program is designed to keep your equipment running 
							at maximum efficiency to minimize the costly and
							unexpected interruptions and downtime that may
							result from an unexpected equipment problem.
						</p>
						<div class="slider-btn mt-20">                                          
							<a href="{{route('pp-bubble-guard')}}" class="ss-btn text-center" data-animation="fadeInRight" data-delay=".8s" tabindex="0">
								Read More 
								<i class="fas fa-chevron-right"></i> 
							</a>										
						</div>
			    	</div>
				</div>
		    </div>
			<div class="col-lg-4 col-md-6">
		       	<div class="s-single-services six wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
			    	<div class="services-icon">
						<img src="{{asset('fronted/img/services/6.svg')}}" alt="img" class="d-active-icon">
						<img src="{{asset('fronted/img/services/6-hover.svg')}}" alt="img" class="active-icon">
			    	</div>
					<div class="second-services-content">
						<h5><a href="{{route('mcr-sheet')}}">MCR Sheet</a></h5>       
						<p>
							This program is designed to keep your equipment running 
							at maximum efficiency to minimize the costly and
							unexpected interruptions and downtime that may
							result from an unexpected equipment problem.
						</p>
						<div class="slider-btn mt-20">                                          
							<a href="{{route('mcr-sheet')}}" class="ss-btn text-center" data-animation="fadeInRight" data-delay=".8s" tabindex="0">
								Read More 
								<i class="fas fa-chevron-right"></i> 
							</a>										
						</div>
			    	</div>
				</div>
		    </div>
		</div>
	</div>
</section>
<section class="cta-area cta-bg pt-95 pb-70 mt-60" style="background-image:url({{asset('fronted/img/bg/how_it_bg.png')}}); background-size: cover;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
					<span>
						OUR IMPORTENTS 
				    	<small class="circle-right">
							<img src="{{asset('fronted/img/bg/circle_right.png')}}" alt="img">
				    	</small>
					</span>
					<h2>How We Work For You To Boost Your Business</h2>
					<p>
						Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc ornare mauris elit, vel semper ipsum convallis a. Quisque id faucibus massa. Aliquam a bibendum lacus, vitae laoreet lectus. Sed a velit suscipit, mattis elit sed, convallis elit.

					</p>
					<p>
						Phasellus ut consequat elit. Donec dapibus, dolor ac mollis mollis, sapien lorem gravida magna.

					</p>
					<div class="row mt-30">
						<div class="col-lg-5">
							<div class="social">
								<div class="icon">
									<img src="{{asset('fronted/img/video/1.svg')}}" alt="img">
								</div>
								<p> <a href="#">info@chetakindustry.com</a></p>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="line"> 
								<img src="{{asset('fronted/img/video/line.png')}}" alt="img">
							</div>
						</div>
						<div class="col-lg-5">
							<div class="social">
								<div class="icon">
									<img src="{{asset('fronted/img/video/2.svg')}}" alt="img">
								</div>
								<p> <a href="#">+91 000 000-0000</a></p>
							</div>
						</div>
					</div>
				</div>                     
			</div>
			<div class="col-lg-6">
				<div class="video-img wow fadeInRight animated" data-animation="fadeInDown animated" data-delay=".2s" style="background-image:url({{asset('fronted/chetak-image/our-importance.jpg')}}); background-size: cover;">								
					<!--<a href="https://www.youtube.com/watch?v=vKSA_idPZkc" class="video-i popup-video"> 
						<img src="{{asset('fronted/img/video/play.svg')}}" alt="img" class="active-icon">
					</a>-->
				</div>
                                             
			</div>
		</div>
	</div>
</section>
            <!-- cta-area-end -->			
	    <!-- team-area-->
            <!--<section id="team" class="pt-95 pb-90" style="background-image:url(img/bg/our_team_bg.png); background-size: contain;background-position: center center;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="section-title text-center pl-40 pr-40 mb-80">
                                 <span><small class="circle-left"><img src="img/bg/circle_Left.png" alt="img"></small> OUR TEAM <small class="circle-right"><img src="img/bg/circle_right.png" alt="img"></small></span>                               
                                <h2>Our Expert Workers</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row team-active">                   
                        <div class="col-xl-4">
                            <div class="single-team text-center mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="team-thumb">
                                    <div class="brd">
                                         <img src="img/team/team_01.png" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-details.html">Nashid Martines</a></h4>
                                    <span>DIRECTOR</span>
                                    <div class="team-social mt-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-team text-center mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="img/team/team_02.png" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-details.html">Konne Backfield</a></h4>
                                    <span>MARKETING</span>
                                    <div class="team-social mt-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-xl-4">
                            <div class="single-team text-center mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="img/team/team_03.png" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-details.html">Hackson Willingham</a></h4>
                                    <span>SALES MANAGER</span>
                                    <div class="team-social mt-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-team text-center mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="team-thumb">
                                    <div class="brd">
                                         <img src="img/team/team_01.png" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-details.html">Nashid Martines</a></h4>
                                    <span>DIRECTOR</span>
                                    <div class="team-social mt-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-team text-center mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="img/team/team_02.png" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-details.html">Konne Backfield</a></h4>
                                    <span>MARKETING</span>
                                    <div class="team-social mt-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-xl-4">
                            <div class="single-team text-center mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="img/team/team_03.png" alt="img">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-details.html">Hackson Willingham</a></h4>
                                    <span>SALES MANAGER</span>
                                    <div class="team-social mt-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="project" class="project pt-95 fix" style="background-image:url(img/bg/portfolio_bg.png); background-size: contain;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-10">
                            <div class="section-title text-left pl-40 pr-40 mb-80">
                                 <span>PORTFOLIO <small class="circle-right"><img src="img/bg/circle_right.png" alt="img"></small></span>                               
                                <h2>Our Latest Projects</h2>
                            </div>
                        </div>
                         <div class="col-xl-6 col-lg-10">
                            
                        </div>
                    </div>
                    </div>
                <div class="container-fluid">
                    <div class="row portfolio-active">
                        <div class="col-xl-4">
                            <div class="single-project mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="project-thumb">                                   
                                    <img src="img/portfolio/p_img01.png" alt="img" class="img">                                                   
                                </div>
                                <div class="project-info">
                                    <h4>Materals Management</h4>
                                      <a href="#">Take a Look  <img src="img/portfolio/right_icon.svg" alt="img">        </a>                          
                                    
                                </div>
                            </div>
                        </div>
                          <div class="col-xl-4">
                            <div class="single-project mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="project-thumb">                                   
                                    <img src="img/portfolio/p_img02.png" alt="img" class="img">                                               
                                </div>
                                <div class="project-info">
                                    <h4>Materals Management</h4>
                                      <a href="#">Take a Look  <img src="img/portfolio/right_icon.svg" alt="img">        </a>                          
                                    
                                </div>
                            </div>
                        </div>
                          <div class="col-xl-4">
                            <div class="single-project mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="project-thumb">                                   
                                    <img src="img/portfolio/p_img03.png" alt="img" class="img">                                           
                                </div>
                                <div class="project-info">
                                    <h4>Materals Management</h4>
                                      <a href="#">Take a Look  <img src="img/portfolio/right_icon.svg" alt="img">        </a>                          
                                    
                                </div>
                            </div>
                        </div>
                          <div class="col-xl-4">
                            <div class="single-project mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="project-thumb">                                   
                                    <img src="img/portfolio/p_img04.png" alt="img" class="img">                                    
                                </div>
                                <div class="project-info">
                                    <h4>Materals Management</h4>
                                      <a href="#">Take a Look  <img src="img/portfolio/right_icon.svg" alt="img">        </a>                          
                                    
                                </div>
                            </div>
                        </div>
                         <div class="col-xl-4">
                            <div class="single-project mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="project-thumb">                                   
                                    <img src="img/portfolio/p_img05.png" alt="img" class="img">                                                 
                                </div>
                                <div class="project-info">
                                    <h4>Materals Management</h4>
                                      <a href="#">Take a Look  <img src="img/portfolio/right_icon.svg" alt="img">        </a>                          
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-project mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="project-thumb">                                   
                                    <img src="img/portfolio/p_img01.png" alt="img" class="img">                                                   
                                </div>
                                <div class="project-info">
                                    <h4>Materals Management</h4>
                                      <a href="#">Take a Look  <img src="img/portfolio/right_icon.svg" alt="img">        </a>                          
                                    
                                </div>
                            </div>
                        </div>
                          <div class="col-xl-4">
                            <div class="single-project mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="project-thumb">                                   
                                    <img src="img/portfolio/p_img02.png" alt="img" class="img">                                               
                                </div>
                                <div class="project-info">
                                    <h4>Materals Management</h4>
                                      <a href="#">Take a Look  <img src="img/portfolio/right_icon.svg" alt="img">        </a>                          
                                    
                                </div>
                            </div>
                        </div>
                          <div class="col-xl-4">
                            <div class="single-project mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="project-thumb">                                   
                                    <img src="img/portfolio/p_img03.png" alt="img" class="img">                                           
                                </div>
                                <div class="project-info">
                                    <h4>Materals Management</h4>
                                      <a href="#">Take a Look  <img src="img/portfolio/right_icon.svg" alt="img">        </a>                          
                                    
                                </div>
                            </div>
                        </div>
                          <div class="col-xl-4">
                            <div class="single-project mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="project-thumb">                                   
                                    <img src="img/portfolio/p_img04.png" alt="img" class="img">                                    
                                </div>
                                <div class="project-info">
                                    <h4>Materals Management</h4>
                                      <a href="#">Take a Look  <img src="img/portfolio/right_icon.svg" alt="img">        </a>                          
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <!-- testimonial-area -->
            <section id="testimonios" class="testimonial-area testimonial-p pt-50 pb-100 fix" style="background-image:url({{asset('fronted/img/bg/testimonial_bg.png')}}); background-size: contain;background-repeat: no-repeat;background-position: center center;">
                <div class="container">
                    <div class="row">     
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="section-title center-align mb-40 wow fadeInDown animated text-center" data-animation="fadeInDown animated" data-delay=".2s">
                                <span>
				    <small class="circle-left">
					<img src="{{asset('fronted/img/bg/circle_Left.png')}}" alt="img">
				    </small> 
				    Testimonial
				    <small class="circle-right">
					<img src="{{asset('fronted/img/bg/circle_right.png')}}" alt="img">
				    </small>
				</span> 
                                <h2>What Our Client’s Say’s</h2>
                            </div>
                            <div class="testimonial-active2">
                                <div class="slider slider-for">
				    <div class="single-testimonial">                                     
					<div class="com-icon">
					    <img src="{{asset('fronted/img/bg/Icon_comment.png')}}" alt="img">
					</div>
					<p>
					    “Phasellus ut consequat elit. Donec dapibus, dolor 
					    ac mollis mollis, sapien lorem gravida magna, 
					    eu ullamcorper mi lectus a tortor. Aenean 
					    elementum tortor a sem pharetra, in accumsan
					    odio commodo. Nam ultricies ut enim nec 
					    accumsan. Vivamus vel nunc eu diam fringilla 
					    bibendum laoreet eget felis. Praesent justo
					    mauris, tincidunt vitae nisi ultricies, 
					    condimentum finibus quam. Aenean sed velit
					    nulla. Etiam viverra scelerisque porta.
					    Quisque ut dolor aliquam, gravida lacus 
					    at, tincidunt ex. Donec dapibus.
					</p>
					<div class="testi-author">
					    <img src="{{asset('fronted/img/testimonial/test_img01.png')}}" alt="img">
					    <div class="ta-info">                                          
						<h6>Mr Jone Dose</h6>
						<span>SALES EXECUTIVE</span>
					    </div>
					</div>

				    </div>
				    <div class="single-testimonial">
					<div class="com-icon">
					    <img src="{{asset('fronted/img/bg/Icon_comment.png')}}" alt="img">
					</div>
				       <p>
					   “Phasellus ut consequat elit. Donec dapibus, dolor ac
					   mollis mollis, sapien lorem gravida magna, eu ullamcorper 
					   mi lectus a tortor. Aenean elementum tortor a sem pharetra,
					   in accumsan odio commodo. Nam ultricies ut enim nec
					   accumsan. Vivamus vel nunc eu diam fringilla 
					   bibendum laoreet eget felis. Praesent justo 
					   mauris, tincidunt vitae nisi ultricies,
					   condimentum finibus quam. Aenean sed 
					   velit nulla. Etiam viverra scelerisque 
					   porta. Quisque ut dolor aliquam, gravida 
					   lacus at, tincidunt ex. Donec dapibus..
				       </p>
					<div class="testi-author">
					    <img src="{{asset('fronted/img/testimonial/test_img02.png')}}" alt="img">
					    <div class="ta-info">                                           
						<h6>Margie Jone</h6>
						 <span>Web Developer</span>
					    </div>
					</div>
				    </div>
				    <div class="single-testimonial">                                    
					<div class="com-icon">
					    <img src="{{asset('fronted/img/bg/Icon_comment.png')}}" alt="img">
					</div>
					<p>
					    “Phasellus ut consequat elit. Donec dapibus,
					    dolor ac mollis mollis, sapien lorem gravida
					    magna, eu ullamcorper mi lectus a tortor. 
					    Aenean elementum tortor a sem pharetra, in 
					    accumsan odio commodo. Nam ultricies ut enim
					    nec accumsan. Vivamus vel nunc eu diam 
					    fringilla bibendum laoreet eget felis. 
					    Praesent justo mauris, tincidunt vitae 
					    nisi ultricies, condimentum finibus quam. 
					    Aenean sed velit nulla. Etiam viverra scelerisque
					    porta. Quisque ut dolor aliquam, gravida lacus at,
					    tincidunt ex. Donec dapibus.
					</p>
					<div class="testi-author">
					    <img src="{{asset('fronted/img/testimonial/test_img03.png')}}" alt="img">
					    <div class="ta-info">                                            
						<h6>Mr Jone Dose</h6>
						<span>Web Developer</span>
					    </div>
					</div>                                    
				    </div>
				    <div class="single-testimonial">
					<div class="com-icon">
					    <img src="{{asset('fronted/img/bg/Icon_comment.png')}}" alt="img">
					</div>
					<p>
					    “Nam liber tempor cum soluta nobis eleifend
					    option congue is nihil imper per tem por 
					    legere me doming vulputate velit esse 
					    molestiesoluta nobis eleifend option 
					    congue is nihil imper per tem por legere 
					    me doming vulputate velit esse molestiesoluta
					    nobis eleifend option congue is nihil imper .
					</p>
					<div class="testi-author">
					    <img src="{{asset('fronted/img/testimonial/test_img01.png')}}" alt="img">
					    <div class="ta-info">                                            
						<h6>Mr Jone Dose</h6>
						<span>Web Developer</span>
					    </div>
					</div>
				    </div>
                                </div>
                                <div class="slider slider-nav">
                                        <div class="testimonial-item"><img src="{{asset('fronted/img/testimonial/test_img01.png')}}" alt="img"></div>
                                        <div class="testimonial-item"><img src="{{asset('fronted/img/testimonial/test_img02.png')}}" alt="img"></div>
                                        <div class="testimonial-item"><img src="{{asset('fronted/img/testimonial/test_img03.png')}}" alt="img"></div>
                                        <div class="testimonial-item"><img src="{{asset('fronted/img/testimonial/test_img01.png')}}" alt="img"></div>
                                </div>
                            </div>
			    </div>
			      <div class="col-lg-1">
			    </div>
			</div>
		    </div>
            </section>
            <!-- testimonial-area-end -->
            <!-- counter-area -->
            <div class="call-area" style="background-image:url({{asset('fronted/img/call/call-bg.png')}}); background-repeat: no-repeat; background-position: bottom;">
                <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="single-counter-img fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
				<img src="{{asset('fronted/chetak-image/perfect-solution.png')}}" alt="img" class="img">
                            </div>
                        </div>
                      <div class="col-lg-7 col-md-7 col-sm-12">                                                     
                            <h2>Perfect Solutions <span>For Any Industrials</span></h2>
                            <p>Donec at nunc laoreet, aliquet mi non, scelerisque diam. Mauris pulvinar nisl eget dui luctus, eu vehicula odio tempus. Nulla maximus molestie ante eget sollicitudin.</p>
                            <div class="number">+91 000 000-0000</div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- counter-area-end -->
           
            <!-- blog-area -->
            <!--<section id="blog" class="blog-area  p-relative pt-95 pb-90 fix" style="background-image:url({{asset('fronted/img/bg/services_aliment_bg.png')}}); background-size: contain;background-repeat: no-repeat;background-position: center center;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="section-title text-center mb-80 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                              <span><small class="circle-left"><img src="{{asset('fronted/img/bg/circle_Left.png')}}" alt="img"></small> OUR LATEST BOLG <small class="circle-right">
								<img src="{{asset('fronted/img/bg/circle_right.png')}}" alt="img"></small></span> 
                                <h2>Stay Updated To Our Blog & News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row home-blog-active">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-post mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
										<img src="{{asset('fronted/chetak-image/blog-1.jpg')}}" alt="img">
									</a>
                                </div>
                                <div class="blog-content"> 
                                    <h4><a href="blog-details.html">Making Distribut Product Team Work More With Monday</a></h4>    
                                     <p>Lorem ipsum dolor sit amet consectetur adipisi cing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>    
                                    
                                    <div class="slider-btn">                                          
					<a href="#" class="ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More <i class="fas fa-chevron-right"></i></a>										
				    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-post active mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                  <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="{{asset('fronted/chetak-image/blog-2.jpg')}}" alt="img"></a>
                                </div>
                                 <div class="blog-content">
                                    <h4><a href="blog-details.html">Monthly eraesent justo mauris, vitae nisi ultricies.</a></h4>                       
									<p>Lorem ipsum dolor sit amet consectetur adipisi cing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>       
									<div class="slider-btn">                                          
									<a href="#" class="ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More <i class="fas fa-chevron-right"></i></a>										
								</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-post mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">                               <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="{{asset('fronted/chetak-image/blog-3.jpg')}}" alt="img"></a>
                                </div>
                                <div class="blog-content">
                                    <h4><a href="blog-details.html">User Experience Psychology And Performance Smashing</a></h4>                          
                                    <p>Lorem ipsum dolor sit amet consectetur adipisi cing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>        
				    <div class="slider-btn">                                          
					<a href="#" class="ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More <i class="fas fa-chevron-right"></i></a>		
				    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-post mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="{{asset('fronted/chetak-image/blog-4.jpg')}}" alt="img"></a>
                                </div>
                                <div class="blog-content">        
                                    <h4><a href="blog-details.html">Praesent justo mauris, tincidunt vitae nisi ultricies.</a></h4>    
				    <p>Lorem ipsum dolor sit amet consectetur adipisi cing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>   
				    <div class="slider-btn">                                          
					<a href="#" class="ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More <i class="fas fa-chevron-right"></i></a>										
				    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <!-- blog-area-end -->
			
            <!-- contact-area -->
            <!--<section id="contact" class="contact-area contact-bg pt-95 pb-95 p-relative fix" style="background-image:url(img/bg/contact_bg.png); background-size: cover;background-repeat: no-repeat;">
                <div class="container">
		    <div class="row">
			<div class="col-lg-5">
			    <div class="section-title mb-60 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <span>Contact</span>
                                <h2>Get In Tuch</h2>
                            </div>
			    <form action="#" class="contact-form wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
				<div class="row">
				    <div class="col-lg-12">
					<div class="contact-field p-relative c-name mb-20">                                    
					    <input type="text" placeholder="Write here  Jhonathan Doe">
					</div>                               
				    </div>
				    <div class="col-lg-12">                               
					<div class="contact-field p-relative c-email mb-20">                                    
					    <input type="text" placeholder="Write here youremail">
					</div>                                
				    </div>
				    <div class="col-lg-12">                               
					<div class="contact-field p-relative c-subject mb-20">                                   
					    <input type="text" placeholder="I would like to discuss">
					</div>
				    </div>							
				    <div class="col-lg-12">
					<div class="contact-field p-relative c-message mb-45">                                  
					    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
					</div>
					<div class="slider-btn">                                          
					    <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Send Message</a>					<div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>						
					</div>                             
				    </div>
				</div>
			    </form>
			</div>
		    </div>
		</div>
	    </section>-->
	    <!--<div class="chetak-industry-padding-b140"></div>-->
    <!-- contact-area-end -->
    <!-- brand-area -->
            <div class="brand-area pt-60 pb-60" style="background-color:#fff">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="{{asset('fronted/chetak-image/client-logo/balco-logo-new.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="{{asset('fronted/chetak-image/client-logo/Hindalco_Logo.svg.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="{{asset('fronted/chetak-image/client-logo/JAL-LOGO-Final-3-51.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="{{asset('fronted/chetak-image/client-logo/logo.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="{{asset('fronted/chetak-image/client-logo/logo.jpg')}}" alt="img">
                            </div>
                        </div>
						<div class="col-xl-2">
                            <div class="single-brand">
                                <img src="{{asset('fronted/chetak-image/client-logo/Manaksia-Aluminium-Company-Limited-4.png')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
<!--SECOND TEST END-->
@endsection