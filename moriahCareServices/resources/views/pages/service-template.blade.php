@extends('layouts.master')
    @section('title',"Moriah Service: $serviceProduct->service_name")
    @section('content')
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{asset('assets/img/testimonial/test-bg.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>{{$serviceProduct->service_name}}</h2>                                    
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/services')}}">services</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$serviceProduct->service_name}}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
			<!-- choose-area -->
            <section class="choose-area pt-100 pb-50 p-relative">             
                <div class="chosse-img wow fadeInRight animated" data-animation="fadeInRight animated" data-delay=".2s"></div>
                <div class="container">
                    <div class="row">
                        <!-- rightside -->
               <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 order-2">
                  <div class="service-detail">
                        <div class="images-box row">                          
                            <div class="column col-lg-12 col-md-12 col-sm-8 wow fadeInLeft">
                                <figure class="image wow fadeIn"><a href="img/resource/service-img-1.jpg" class="lightbox-image" data-fancybox="services"><img src="img/blog/inner_b1.jpg" alt=""></a></figure>
                            </div>

                            
                        </div>

                        <div class="content-box">
                            {{-- <h2>{{$serviceProduct->service_name}}</h2> --}}
                            <p>{!!$serviceProduct->content!!}</p>
                            @include('include.join-us')
    
                            <!-- Two Column -->
                            {{-- <div class="two-column">
                                <div class="row">
                                    
                                    <div class="text-column col-xl-12 col-lg-12 col-md-12">
                                        <p>Industar develops, builds and finances utility scale solar and storage projects throughout the United States. We specialize in developing renewable solutions to suit the specific needs of large investor owned utilities.</p>

                                        <ul class="list-style-one">
                                            <li>Engine oil level should be regularly checked</li>
                                            <li>Tyres have a minimum of 1.6mm of tread depth</li>
                                            <li>Ensure that the electrolyte level is correct</li>
                                            <li>Never remove the radiator when the engine is</li>
                                            <li>Ensure that your vehicle's brake fluid is full</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div> --}}

                            
                            
                        </div>
                    </div>
                   
               </div>
               <!-- rightside -->
                        
               <!-- leftside -->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar services-sidebar">
                        
                        <!-- Service Widget -->
                        @include('include.servicewidget')
                        
                        <!--Brochures Box-->
                        <div class="brochures-box">
                            <div class="inner">
                                <h4>Download Brochures</h4>
                                <div class="text">Pleasure and praising pain was born and I will give you a complete account.</div>
                                <a class="theme-btn btn-style-one" href="#"><span class="btn-title"><i class="fa fa-file-pdf"></i> Info Company</span></a>
                                <a class="theme-btn btn-style-one" href="#"><span class="btn-title"><i class="fa fa-file-pdf"></i> Brochure Newest</span></a>
                            </div>
                        </div>
                    </aside>
                </div>
               <!-- /leftside -->
               
            </div>
					
                </div>
            </section>
            <!-- choose-area-end -->
				
		
        </main>
        <!-- main-area-end -->
    @endsection