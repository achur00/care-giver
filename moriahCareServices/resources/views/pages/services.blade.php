 @extends('layouts.master')
    @section('title',' All moriah care services')   
    @section('content')
        <!-- main-area -->
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(assets/img/testimonial/test-bg.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>Services</h2>                                    
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">News</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            
            <div class="container">
                <div class="row">
                    @foreach ($serviceAndSubPages as $services )
                    @foreach ($services->Service as $service )
                        
                  
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 wow fadeIn" data-wow-delay="0.1s">
                        <div class="card service-wrapper rounded border-0 shadow p-4">
                            {{-- <div class="icon text-center text-custom h1 shadow rounded bg-white">
                                <span class="uim-svg" style="" ></span>
                            </div> --}}
                            <div class="main_img">
                            {{-- <img src="{{asset('assets/img').'/'.$service->image}}" alt="image"> --}}
                            <img src="{{asset('assets/img/'.$service->image)}}" alt="image">
                            </div>
                            <div class="content mt-4">
                                <h5 class="title">{{$service->service_name}}</h5>
                                <p class="text-muted mt-3 mb-0">{!!Str::limit($service->short_content,100)!!}</p>
                                <div class="mt-3">
                                    <a href="{{url('service/'.$service->id)}}" class="text-custom border p-2 rounded-pill">Check Service <i class="mdi mdi-chevron-right"></i></a>
                                    
                                </div>
                                <div class="big-icon h1 text-custom">
                                {!! $service->svg !!}
                                </div>
                        
                            </div>
                            <div class="big-icon h1 text-custom">
                                <span class="uim-svg" style=""></span>
                            </div>
                        </div>  
                    </div><!--end col-->
                          @endforeach
                    @endforeach
                </div>
            </div>
        
            
			@include('include.service-area')

             <!-- newslater-area -->
            <section class="newslater-area pb-50" style="background-image: url({{asset('assets/img/an-bg/an-bg06.png')}});background-position: center bottom; background-repeat: no-repeat;" >
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-xl-4 col-lg-4 col-lg-4">
                            <div class="section-title mb-100">
                                <span>NEWSLETTER</span>          
                                <h2>Subscribe To Our Newsletter</h2>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <form name="ajax-form" id="contact-form4" action="#" method="post" class="contact-form newslater pb-130">
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


			 
        </main>
        <!-- main-area-end -->
    @endsection