 @extends('layouts.master')
    @section('title',' All moriah care services')   
    @section('content')
        <!-- main-area -->
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{asset('assets/img/bg/care-giver-service.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2 class="arkuz-orange">Services</h2>                                    
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-warning rounded-pill p-1">
                                        <li class="breadcrumb-item"><a href="{{$homePage->url}}">{{$homePage->name}}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$servicePage->name}}</li>
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
            @include('include.newsletter')
            <!-- newslater-aread-end -->


			 
        </main>
        <!-- main-area-end -->
    @endsection