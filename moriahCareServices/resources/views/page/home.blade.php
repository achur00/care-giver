@extends('layouts.master')
@section('title','MoriahCare::care for the old')
@section('content')
       <main>
          
               <!-- slider-area -->
            <section id="home" class="slider-area fix p-relative">
               
                <div class="">
                      {{-- news letter --}}

                     @if (Session::has('msgSuccess'))
                <div class="container content-justify-center m-1 mx-auto">
                  {!! "<div class='alert alert-success'>".Session::get('msgSuccess')."</div>" !!} 
                </div>
              @elseif (Session::has('msgError'))
              <div class="container content-justify-center">
                  {!! "<div class='alert alert-warning'>".Session::get('msgError')."</div>" !!} 
                </div>
            @endif
            {{--  --}}
				 <div class="single-slider slider-bg show-bg3 d-flex align-items-center">
                  
                    @foreach ( $homeContents as $homeContent )
                        
                   
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="slider-content s-slider-content text-left">
                                        <h2 data-animation="fadeInUp" data-delay=".4s">
                                            {{-- Get Better Care For Your <span>Health</span> --}}
                                        {{$homeContent->title}}
                                        </h2>
                                        <p data-animation="fadeInUp" data-delay=".6s"> {{$homeContent->content}}</p>
                                        <div class="slider-btn mt-25">                                          
                                        <a href=" {{$homeContent->cta_url}}" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s"> {{$homeContent->cta}} <i class="fas fa-chevron-right"></i></a>					
                                        </div>
                                    </div>
                                </div>
								<div class="col-lg-6">									
								</div>
                            </div>
                        </div>
                                         <!-- video -->
                     <video id="my-video" class="video2" muted loop autoplay>
                        <source src="{{asset('assets/img/slider').'/'.$homeContent->video_mp4  }}" type="video/mp4">
                        <source src="{{asset('assets/img/slider/slider-vedio.ogv')}}" type="video/ogg">
                        <source src="{{asset('assets/img/slider/slider-vedio.webm')}}" type="video/webm">
                    </video><!-- /video -->
                     @endforeach
                 </div>
                    
                </div>
                    
               
            </section>
            <!-- slider-area-end -->
			
            
			<!-- about-area -->
            {{-- <section id="about" class="about-area about-p mt-100 pb-80 p-relative" style="background-image:url(img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                <div class="container">
                    <div class="row align-items-center">					
                      <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative">
                                <img src="{{asset('assets/img/bg/illlustration.png')}}" alt="img">
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content pl-30">
                                <div class="section-title mb-20">
                                    <span>About Us</span>
                                    <h2>We Are Specialize in Medical Diagnositics</h2>                                  
                                </div>
                                <p>Nulla lacinia sapien a diam ullamcorper, sed congue leo vulputate. Phasellus et ante ultrices, sagittis purus vitae, sagittis quam. Quisque urna lectus, auctor quis tristique tincidunt, semper vel lectus. Mauris eget eleifend massa. Praesent ex felis, laoreet nec tellus in, laoreet commodo ipsum.</p>
                                
                                <ul>
                                        <li>
                                            <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                            <div class="text">Pellentesque placerat, nisi congue vehicula efficitur.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                            <div class="text">Pellentesque placerat, nisi congue vehicula efficitur.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                            <div class="text">Phasellus mattis vitae magna in suscipit. Nam tristique posuere sem, mattis molestie est bibendum.
                                            </div>
                                        </li>
                                    <div></div>
                                </ul>
                               
                               <div class="slider-btn mt-30">                                          
                                            <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More <i class="fas fa-chevron-right"></i></a>					
                                        </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section> --}}
            <!-- about-area-end -->

                         <!-- faq-area -->
            {{-- <section class="faq-area pt-50 pb-50 fix" style="background-image: url(img/shape/header-sape6.png); background-position: right center; background-size: auto;background-repeat: no-repeat;">
                <div class="container"> --}}
                <div class="contain">
                    <div class="row  mx-auto container mt-5">                        
                      
                       
                        <div class="col-lg-6">                            
                             <div class="contact-img">
                                <img src="{{asset('assets/img/bg/loving-caring-young-adult-son-bringing-his-old-eld-2022-08-03-02-43-18-utc.jpg')}}" alt="touch-illustration">
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="section-title left-align mb-50">                               
                                <h2> 
                               {{$subpage_homeCare->name}}
                                   
                                </h2>
                                <p>
                                    Duis non aliquet tellus, in mollis leo. Phasellus quis posuere dui. Nulla mauris purus, mattis eget sagittis at, accumsan sed leo.
                                </p>
                        </div>

                        <div class="faq-wrap">
                                <div class="accordion" id="accordionExample">
                                    @foreach ( $services->take(4) as $service)
                                        <div class="card">
                                            <div class="card-header" id="{{$service->card_id}}">
                                                <h2 class="mb-0">
                                                    <button class="faq-btn collapsed" type="button" data-toggle="collapse"
                                                        data-target="{{'#'.$service->card_id2}}" aria-expanded="true" aria-controls="{{$service->card_id}}">
                                                        {{$service->service_name}}
                                                    </button>
                                                </h2>
                                            </div>
                                            

                                            <div id="{{$service->card_id2}}" class="collapse" aria-labelledby="{{$service->card_id}}"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    {{$service->content}}
                                                </div>

                                                <div class="card-body container">
                                                    <button class="rounded-pill" href='{{url('/services')}}'>Go to Service</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <button class="w-100 p-3 bg-primary rounded-pill justify-content-center" type="button" data-toggle="collapse" data-target="{{'#'.$service->card_id2}}" aria-expanded="true" aria-controls="{{$service->card_id}}">
                                        <span class="text-light" >
                                            More Services
                                        </span>
                                    </button>

                                    {{-- <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                   Suspendisse vitae varius diam, a vulputate urna.
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                   Aliquam aliquet purus eget lacus pretium.
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            </div>
                                        </div>
                                    </div>  --}}
                                    
                                  
                                </div>
                        </div>

                    </div>
                           
                </div>
            {{-- </section> --}}
            <!-- faq-aread-end -->
            <div class="contain">
                    <div class="row  mx-auto container mt-5">                        
                      
                       
                       
                        
                        <div class="col-lg-6">
                            <div class="section-title left-align mb-50">                               
                                <h2> 
                               {{$subpage_specialistCare->name}}
                                   
                                </h2>
                                <p>
                                    Duis non aliquet tellus, in mollis leo. Phasellus quis posuere dui. Nulla mauris purus, mattis eget sagittis at, accumsan sed leo.
                                </p>
                            </div>

                            <div class="faq-wrap">
                                    <div class="accordion" id="accordionExample">
                                        @foreach ( $services->skip(5)->take(4) as $service)
                                            <div class="card">
                                                <div class="card-header" id="{{$service->card_id}}">
                                                    <h2 class="mb-0">
                                                        <button class="faq-btn collapsed" type="button" data-toggle="collapse"
                                                            data-target="{{'#'.$service->card_id2}}" aria-expanded="true" aria-controls="{{$service->card_id}}">
                                                            {{$service->service_name}}
                                                        </button>
                                                    </h2>
                                                </div>
                                                

                                                <div id="{{$service->card_id2}}" class="collapse" aria-labelledby="{{$service->card_id}}"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        {{$service->content}}
                                                    </div>

                                                    <div class="card-body container">
                                                        <button class="rounded-pill" href='{{url('/services')}}'>Go to Service</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        <button class="w-100 p-3 bg-primary rounded-pill justify-content-center" type="button" data-toggle="collapse" data-target="{{'#'.$service->card_id2}}" aria-expanded="true" aria-controls="{{$service->card_id}}">
                                            <span class="text-light" >
                                                More Services
                                            </span>
                                        </button>

                                        {{-- <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="faq-btn collapsed" type="button" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Suspendisse vitae varius diam, a vulputate urna.
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button class="faq-btn collapsed" type="button" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Aliquam aliquet purus eget lacus pretium.
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                </div>
                                            </div>
                                        </div>  --}}
                                        
                                    
                                    </div>
                            </div>
                        </div>

                         <div class="col-lg-6">                            
                             <div class="custom-achur-img">
                                <img src="{{asset('assets/img/bg/loving-caring-young-adult-son-bringing-his-old-eld-2022-08-03-02-43-18-utc.jpg')}}" alt="touch-illustration">
                            </div>
                        </div>
                    </div>
                           
                </div>
			           
            <!-- department-area -->
            {{-- <section class="department-area cta-bg pb-70 mt-10 fix" style="background-image:url(img/an-bg/an-bg05.png); background-size: contain;"> 
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-50  " >
                                <span>OUR DEPARTMENTS</span>
                                <h2>We Take Care Of Your Life Healthy Health</h2>
                            </div>
                            <ul>
                                        <li>
                                            <div class="icon">
                                                <div><img src="{{asset('assets/img/icon/de-icon01.png')}}" alt="de-icon"></div></div> 
                                            <a href="#" class="text">
                                                <h3>Pedlatric</h3>
                                                Fusce eget condimentum lectus, sed commodo dui. Suspendisse non vehicula ant aecenas placerat finibus metus, at finibus neque.
                                            </a>
                                        </li>
                                        <li class="active">
                                            <div class="icon">
                                                <div><img src="{{asset('assets/img/icon/de-icon02.png')}}" alt="de-icon"></div></div> 
                                             <a href="#" class="text">
                                                <h3>Dental</h3>
                                                Fusce eget condimentum lectus, sed commodo dui. Suspendisse non vehicula ant aecenas placerat finibus metus, at finibus neque.
                                            </a>
                                        </li>
                                        <li>
                                             <div class="icon">
                                                <div><img src="{{asset('asset/img/icon/de-icon03.png')}}" alt="de-icon"></div></div> 
                                            <a href="#" class="text">
                                                <h3>Physicians</h3>
                                                Fusce eget condimentum lectus, sed commodo dui. Suspendisse non vehicula ant aecenas placerat finibus metus, at finibus neque.
                                            </a>
                                        </li>          
                                </ul>
                                             
                        </div>
					    <div class="col-lg-6">
                            <div class="s-d-img p-relative">
                                <img src="{{asset('assets/img/bg/de-illustration.png')}}" alt="img">
                                
                            </div>
                                             
                        </div>
                    </div>
                </div>
            </section>--}}
            <!-- department-area-end -->			
			 <!-- team-area-->
            {{-- <section id="team" class="pb-20" style="background-image:url(img/an-bg/an-bg13.png); background-size: contain;background-position: center center;background-repeat: no-repeat;">
              
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="section-title text-center mb-70">
                                 <span> OUR TEAM </span>                               
                                <h2>Docter’s In The Medical Sciences</h2>
                                <p>Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row team-active">                   
                        <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                         <img src="{{asset('asstes/img/team/team01.png')}}" alt="img">
                                    </div>
                                    
                                    <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="team-info">
                                    <h4>Samanta Crane</h4>
                                    <span>Internist, General Practitoner</span>
                                    <p>Working Since 2004</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="{{asset('asset/img/team/team02.png')}}" alt="img">
                                    </div>
                                     <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>Ostin Green</h4>
                                    <span>Internist, General Practitoner</span>
                                    <p>Working Since 2004</p>
                                </div>
                            </div>
                        </div>
                       <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="{{asset('assets/img/team/team03.png')}}" alt="img">
                                    </div>
                                    <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>Norman Colins</h4>
                                    <span>SALES MANAGER</span>
                                    <p>Working Since 2004</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                         <img src="{{asset('assets/img/team/team01.png')}}" alt="img">
                                    </div>
                                    
                                    <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="team-info">
                                    <h4>Samanta Crane</h4>
                                    <span>Internist, General Practitoner</span>
                                    <p>Working Since 2004</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="{{asset('assets/img/team/team02.png')}}" alt="img">
                                    </div>
                                     <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>Ostin Green</h4>
                                    <span>Internist, General Practitoner</span>
                                    <p>Working Since 2004</p>
                                </div>
                            </div>
                        </div>
                       <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="{{asset('assets/img/team/team03.png')}}" alt="img">
                                    </div>
                                    <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>Norman Colins</h4>
                                    <span>SALES MANAGER</span>
                                    <p>Working Since 2004</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section> --}}
            <!-- team-area-end -->
            <!-- newslater-area -->
            <section class="newslater-area pb-50" style="background-image: url(img/an-bg/an-bg06.png);background-position: center bottom; background-repeat: no-repeat;" >
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-xl-4 col-lg-4 col-lg-4">
                            <div class="section-title mb-100">
                                <span>NEWSLETTER</span>          
                                <h2>Subscribe To Our Newsletter</h2>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <form name="ajax-form" id="contact-form4" action="{{url('/newsletter')}}" method="post" class="contact-form newslater pb-130">
                                @csrf
                               <div class="form-group">
                                  <input class="form-control" id="email2" name="email" type="email" placeholder="Email Address..." value="" required=""> 
                                  <button type="submit" class="btn btn-custom" id="send2">Subscribe <i class="fas fa-chevron-right"></i></button>
                               </div>
                               <!-- /Form-email -->	
                            </form>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <img src="{{asset('assets/img/bg/news-illustration.png')}}">
                        </div>
                    </div>
                   
                </div>
            </section>
            <!-- newslater-aread-end -->

            {{-- <!-- testimonial-area -->
            <section id="testimonios" class="testimonial-area testimonial-p pt-50 pb-85 fix" style="background-image: url(img/an-bg/an-bg07.png);background-position: center; background-repeat: no-repeat;background-size: contain;" >
                <div class="container">
                      <div class="row justify-content-center">
                        
                        <div class="col-lg-8"> 
                     <div class="section-title center-align mb-60 text-center">
                                <span>TESTIMONIAL</span>
                                <h2>What Our Client’s Say’s</h2>
                               <p>Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                            </div>
                            </div>
                            </div>
                    
                   <div class="row justify-content-center">
                        
                        <div class="col-lg-10">                           
                            <div class="testimonial-active">
                              
                         
                                <div class="single-testimonial">
                                     <div class="testi-img">
                                        <img src="{{asset('assets/img/testimonial/testimonial-img.png')}}" alt="img">                                        
                                    </div>
                                    <div class="single-testimonial-bg">
								    <div class="com-icon"><img src="{{asset('assets/img/testimonial/qutation.png')}}" alt="img"></div>
                                        <div class="testi-author">
                                                     <div class="ta-info">                                          
                                            <h6>Adam McWilliams</h6>
                                            <span>CEO & Founder</span>
                                            
                                        </div>
                                    </div>
                                    <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                        </div>
                                   
                                </div>
                                <div class="single-testimonial">
                                     <div class="testi-img">
                                        <img src="{{asset('assets/img/testimonial/testimonial-img.png')}}" alt="img">                                        
                                    </div>
                                    <div class="single-testimonial-bg">
								    <div class="com-icon"><img src="{{asset('assets/img/testimonial/qutation.png')}}" alt="img"></div>
                                        <div class="testi-author">
                                                     <div class="ta-info">                                          
                                            <h6>Rose Dose</h6>
                                            <span>Sale Executive</span>
                                            
                                        </div>
                                    </div>
                                    <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                        </div>
                                   
                                </div>
                                    <div class="single-testimonial">
                                     <div class="testi-img">
                                        <img src="{{asset('assets/img/testimonial/testimonial-img.png')}}" alt="img">                                        
                                    </div>
                                    <div class="single-testimonial-bg">
								    <div class="com-icon"><img src="{{asset('assets/img/testimonial/qutation.png')}}" alt="img"></div>
                                        <div class="testi-author">
                                                     <div class="ta-info">                                          
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                            
                                        </div>
                                    </div>
                                    <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                        </div>
                                   
                                </div>
                                     <div class="single-testimonial">
                                     <div class="testi-img">
                                        <img src="img/testimonial/testimonial-img.png" alt="img">                                        
                                    </div>
                                    <div class="single-testimonial-bg">
								    <div class="com-icon"><img src="{{asset('assets/img/testimonial/qutation.png')}}" alt="img"></div>
                                        <div class="testi-author">
                                                     <div class="ta-info">                                          
                                            <h6>Jone Dose</h6>
                                            <span>MD & Founder</span>
                                            
                                        </div>
                                    </div>
                                    <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                        </div>
                                   
                                </div>
                            
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end --> --}}
            
           <!-- pricing-area -->
            {{-- <section id="pricing" class="pricing-area pb-70" style="background-image: url(img/an-bg/an-bg08.png);background-position: center; background-repeat: no-repeat;" >
                <div class="container">  
                    
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title center-align mb-60 text-center">
                                <span>OUR PRICING</span>
                                <h2>Afforable Pricing Packages</h2>
                               <p>Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="pricing-box text-center mb-60" >
                                <div class="pricing-head">                                  
                                    <h4>Sliver Plan</h4>
                                    <div class="price-count mb-30">
                                       <h2>$25.99</h2>
                                    </div>
                                    <img src="{{asset('assets/img/icon/pr-icon01.png')}}" alt="pricon">
                                </div>
                                <div class="pricing-body mb-40 text-left">
                                    <p>It is a long established fact that a reader will be distracted.</p>
									<ul>
										<li>Update</li>
										<li>File compressed</li>
										<li>Commercial use</li>
										<li>Support</li>
									</ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="btn">Choose Plan <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="pricing-box active text-center mb-60" >
                                <div class="pricing-head">                                  
                                    <h4>Gold Plan</h4>
                                    <div class="price-count mb-30">
                                       <h2>$25.99</h2>
                                    </div>
                                    <img src="{{asset('assets/img/icon/pr-icon02.png')}}" alt="pricon">
                                </div>
                                <div class="pricing-body mb-40 text-left">
                                    <p>It is a long established fact that a reader will be distracted.</p>
									<ul>
										<li>Update</li>
										<li>File compressed</li>
										<li>Commercial use</li>
										<li>Support</li>
									</ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="btn">Choose Plan <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="pricing-box text-center mb-60" >
                                 <div class="pricing-head">                                  
                                    <h4>Gold Plan</h4>
                                    <div class="price-count mb-30">
                                       <h2>$25.99</h2>
                                    </div>
                                    <img src="{{asset('assets/img/icon/pr-icon03.png')}}" alt="pricon">
                                </div>
                                <div class="pricing-body mb-40 text-left">
                                    <p>It is a long established fact that a reader will be distracted.</p>
									<ul>
										<li>Update</li>
										<li>File compressed</li>
										<li>Commercial use</li>
										<li>Support</li>
									</ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="btn">Choose Plan <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- pricing-area-end -->
			
            
            <!-- counter-area -->
            <div class="call-area pb-50" style="background-image:url(img/an-bg/an-bg09.png); background-repeat: no-repeat; background-position: bottom;">
                <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="single-counter-img fadeInUp animated" >
								 <img src="{{asset('assets/img/bg/ap-illustration.png')}}" alt="img" class="img">
                            </div>
                        </div>
                      <div class="col-lg-5 col-md-12 col-sm-12">                                                     
                            <div class="section-title mt-100">
                                <span>APPOINTMENT</span>
                                <h2>Make An Appointment For Emergency</h2>
                            </div>
                          
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12">    
                            <div class="slider-btn mt-130">                                          
                                <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Appointment <i class="fas fa-chevron-right"></i></a>					
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- counter-area-end -->
           
            <!-- blog-area -->
            {{-- <section id="blog" class="blog-area  p-relative pt-100 pb-90 fix" style="background-image:url(img/an-bg/an-bg10.png); background-size: contain;background-repeat: no-repeat;background-position: center center;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="section-title text-center mb-80" >
                              <span> OUR LATEST BOLG </span> 
                                <h2>Stay Updated To Our Blog & News</h2>
                                <p >Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="single-post mb-30" >
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="{{asset('assets/img/blog/blog_img01.jpg')}}" alt="img">
                                         <img src="{{asset('assets/img/bg/b-link.png')}}" alt="b-link" class="b-link">
                                    </a>
                                </div>
                                <div class="blog-content text-center">                                   
                                    <h4><a href="blog-details.html">Praesent justo mauris, tincidunt vitae nisi ultricies.</a></h4>    
                                     <p>Aenean sed velit nulla. Etiam viverra scelerisque porta. Quisque ut dolor aliquam, gravida lacus.</p>    
                                     <div class="b-meta mt-20">
                                       <div class="row">

                                             <div class="col-lg-6 col-md-6">
                                               <i class="far fa-calendar-alt"></i>  7 March, 2019
                                             </div>
                                            <div class="col-lg-6 col-md-6">
                                               <i class="fas fa-user"></i> By Jhone Doe
                                             </div>
                                         </div>
                                    </div>
                                    
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="single-post active mb-30" >
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="{{asset('assets/img/blog/blog_img02.jpg')}}" alt="img">
                                         <img src="{{asset('assets/img/bg/b-link.png')}}" alt="b-link" class="b-link">
                                    </a>
                                   
                                </div>
                                  <div class="blog-content text-center">  
                                  
                                    <h4><a href="blog-details.html">Monthly eraesent justo mauris, vitae nisi ultricies.</a></h4>                       <p>Aenean sed velit nulla. Etiam viverra scelerisque porta. Quisque ut dolor aliquam, gravida lacus.</p>            <div class="b-meta mt-20">
                                       <div class="row">
                                             <div class="col-lg-6 col-md-6">
                                               <i class="far fa-calendar-alt"></i>  7 March, 2019
                                             </div>
                                            <div class="col-lg-6 col-md-6">
                                               <i class="fas fa-user"></i> By Jhone Doe
                                             </div>
                                         </div>
                                    </div>   
                                      
                                </div>
                                
                               
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="single-post mb-30" >                               <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="{{asset('assets/img/blog/blog_img03.jpg')}}" alt="img"> 
                                         <img src="{{asset('assets/img/bg/b-link.png')}}" alt="b-link" class="b-link">
                                    </a>
                                </div>
                                 <div class="blog-content text-center">  
                                    
                                    <h4><a href="blog-details.html">User Experience Psychology And Performance Smashing</a></h4>                          <p>Aenean sed velit nulla. Etiam viverra scelerisque porta. Quisque ut dolor aliquam, gravida lacus.</p>          <div class="b-meta mt-20">
                                       <div class="row">
                                             <div class="col-lg-6 col-md-6">
                                               <i class="far fa-calendar-alt"></i>  7 March, 2019
                                             </div>
                                            <div class="col-lg-6 col-md-6">
                                               <i class="fas fa-user"></i> By Jhone Doe
                                             </div>
                                         </div>
                                    </div>
                                     
                                </div>
                                 
                            </div>
                        </div>
                      
                    </div>
                </div>
            </section> --}}
            <!-- blog-area-end -->
			
            <!-- contact-area -->
            {{-- <section id="contact" class="contact-area contact-bg pb-70 p-relative fix" style="background-image:url(img/an-bg/an-bg11.png); background-size: cover;background-repeat: no-repeat;">
                <div class="container">
             
					<div class="row">
                        <div class="col-lg-6">
                            <div class="contact-img">
                                <img src="{{asset('assets/img/bg/touch-illustration.png')}}" alt="touch-illustration">
                            </div>
                        </div>
						<div class="col-lg-6">
                        <div class="section-title mb-60" >
                                <span>Contact</span>
                                <h2>Get In Touch With Us</h2>
                            </div>
						<form action="#" class="contact-form" >
							<div class="row">
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">                                    
                                    <input type="text" placeholder="First Name">
                                </div>                               
                            </div>
                                <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">                                    
                                    <input type="text" placeholder="Last Name">
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
                                            <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Send Message</a>					
                                        </div>                             
                            </div>
                            </div>
                        
                    </form>
						</div>
					</div>
                    
                </div>
               
            </section> --}}
            <!-- contact-area-end -->

			 <!-- brand-area -->
            {{-- <div class="brand-area" style="background-image:url(img/an-bg/an-bg12.png); background-size: cover;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="{{asset('assets/img/brand/c-logo.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand active">
                                  <img src="{{asset('assets/img/brand/c-logo02.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="{{asset('assets/img/brand/c-logo03.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="{{asset('assets/img/brand/c-logo04.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="{{asset('assets/img/brand/c-logo.png')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- brand-area-end -->
        </main>
@endsection