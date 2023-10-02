@extends('layouts.master')
@section('title','Moriahcare about')
@section('content')

        <!-- main-area -->
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{asset(assets/img/bg/facility-bg.jpg)}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2 class="arkuz-orange">About Us</h2>                                    
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-warning rounded-pill p-1">
                                        <li class="breadcrumb-item"><a href="{{url($homePage->url)}}" class=" ">{{$homePage->name}}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$aboutPage->name}}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
				<!-- about-area -->
            {{-- <section id="about" class="about-area about-p mt-100 pb-80 p-relative" style="background-image:{{asset('assets/img/an-bg/an-bg03.png')}}; background-size: contain; background-repeat: no-repeat;background-position: center center;"> --}}
                <div class="p-4"><br><br><br></div>
                <div class="container mt-4">
                    <div class="row justify-content">					
                      <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img ">
                                <img src="{{asset('assets/img/bg/about-desc.jpg')}}" style="align:right;" alt="img">
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content pl-30">
                                <div class="section-title mb-20">
                                    {!! $about->content !!}
                                    
</p>
                                
                                
                               
                               <div class="slider-btn mt-30">                                          
                                            <a href="{{url('contact')}}" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Contact Us <i class="fas fa-chevron-right"></i></a>					
                                        </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            {{-- </section> --}}
            <!-- about-area-end -->
            
			<!-- counter-area -->
            <div class="counter-area pt-100 mb-100" style="background-image:{{asset('assets/img/an-bg/an-bg04.png')}}; background-repeat: no-repeat; background-size: contain; ">
                <div class="container">
                    <div class="row align-items-end">
                         <div class="col-lg-3 col-md-6 col-sm-12">
                           <div class="single-counter text-center" >
							 <img src="{{('assets/img/icon/cunt-icon01.png')}}" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">500</span><small>+</small>                                   
                                </div>
                                <p>Doctors At Work</p>                               
                            </div>
                        </div>
                      <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								<img src="{{asset('assets/img/icon/cunt-icon02.png')}}" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">58796</span><small>+</small>                                   
                                </div>
                                <p>Happy Patients</p>                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								 <img src="{{asset('assets/img/icon/cunt-icon03.png')}}" alt="img">
                                <div class="counter p-relative">
                                   <span class="count">500</span><small>+</small>                       
                                </div>
                                <p>Medical Beds</p>                               
                            </div>
                        </div>
                         <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								 <img src="{{asset('assets/img/icon/cunt-icon04.png')}}" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">200</span><small>+</small>                      
                                </div>
                                <p>Winning Awards</p>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- counter-area-end -->

			  <!-- newslater-area -->
             @include('include.newsletter')
            <!-- newslater-aread-end -->
            
            		
        </main>
        <!-- main-area-end -->
        <!-- footer -->
@endsection