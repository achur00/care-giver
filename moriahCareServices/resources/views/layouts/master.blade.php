<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> @yield('title') </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root Internist, General Practitonery -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/dripicons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">                
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    </head>
    <body>
        <!-- header -->
        <header class="header-area">  
				
            <div id="header-sticky" class="menu-area menu-area2">
                <div class="container p-2">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo3">
                                    <a href="index.html"><img class='arkuz_thumbnail' src="{{asset('assets/img/logo/moriah-logo.jpg')}}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">                               
                                <div class="main-menu text-right pr-15">
                                    <nav id="mobile-menu">
                                        {{-- {{dd($pages)}} --}}
                                        <ul>
                                            @foreach ($pages as $menu )
                                      
                                                <li class="has-sub">
                                                    <a id='arkuz' href="{{url("$menu->url")}}">{{$menu->name}}</a>
                                                    {{-- @if (count($page->SubPage)>=1) --}}
                                                    <ul>
                                                        @foreach ($menu->SubPage as $submenue)
                                                      
                                                            													
                                                                <li><a href="{{url($submenue->url.'/'.$submenue->id)}}">{{$submenue->name}}</a></li>
                        
                                                            
                                                        
                                                        @endforeach 
                                                    </ul>
                                                    {{-- @endif --}}
                                                   
                                                    
                                                </li>
                                            @endforeach
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>    
                             <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                                 <a href="{{url('/contact')}}" class="top-btn p-2">Make A Quote <i class="fas fa-chevron-right"></i></a>
                                 
                            </div>
                             <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-top second-header d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center"> 
                        @foreach ( $contacts as $contact )                                      
                            <div class="col-lg-6 col-md-8 d-none  d-md-block">
                                <div class="header-cta">
                                    <ul>                                   
                                        <li>
                                            <i class="icon dripicons-mail"></i>
                                            <span><a class="arkuz-display-5" href='mailto:info@moriahcare.com'>{{$contact->email1}}</a></span>
                                        </li>
                                        <li>
                                            <i class="icon dripicons-phone"></i>
                                            <span><a class="arkuz-display-5" href='tel:info@moriahcare.com'>{{$contact->phone1}}</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 d-none d-lg-block">
                                <div class="header-social text-right">
                                <span>
                                    <a href="{{$contact->facebook}}" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="{{$contact->twitter}}" title="Twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="{{$contact->linkedin}}" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>                               
                                </span>                    
                                <!--  /social media icon redux -->                               
                            </div>
                            </div>
                         @endforeach  
                    </div>
                </div>
            </div>	
        </header>
        <!-- header-end -->
        <!-- main-area -->
        @yield('content')
        <!-- main-area-end -->
         <!-- footer -->
        <footer class="footer-bg footer-p" >
            <div class="overly"><img src="{{asset('assets/img/an-bg/footer-bg.png')}}" alt="rest"></div>
            <div class="footer-top pb-30" style="background-color: #ECF1FA;">
                <div class="container">
                    <div class="row justify-content-between">
                        
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="flog mb-35">
                                    <a href="#"><img src="{{asset('assets/img/logo/logo.png')}}" alt="logo"></a>
                                </div>
                                <div class="footer-text mb-20">
                                    <p>Sed ut perspiciatis unde om is nerror sit voluptatem accustium dolorem tium totam rem aperam eaque ipsa quae ab illose
                                    inntore veritatis</p>
                                </div>
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        
						<div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h5>Pages</h5>
                                </div>
                                <div class="footer-link">
                                    <ul>                       @foreach ($pages as $page)
                                          <li><a id="arkuz" href='{{url("$page->url")}}'><i class="fas fa-chevron-right"></i> {{$page->name}}</a></li>   
                                        @endforeach                  
                                        {{-- <li><a href="#"><i class="fas fa-chevron-right"></i> Partners</a></li>
										<li><a href="#"><i class="fas fa-chevron-right"></i> About Us</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> Career</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> Reviews</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> Terms & Conditions</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> Help</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-t+itle">
                                    <h5>Services
                                        
                                    </h5>
                                </div>
                                <div class="footer-link">
                                    <ul>
                                        @foreach ($allServices as $services)
                                          <li><a id="arkuz" href="{{url("/service/$services->id")}}"><i class="fas fa-chevron-right"></i> {{$services->service_name}}</a></li>   
                                        @endforeach
                                        {{-- <li><a href="#"><i class="fas fa-chevron-right"></i> Home</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> About Us</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> Services</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> Project</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> Our Team</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right"></i> Latest Blog</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h5>Contact Us</h5>
                                </div>
                                <div class="footer-link">
                                    <div class="f-contact">
                                    <ul>
                                      @foreach ($contacts as $contact)
                                       <li>   
                                        <i class="icon dripicons-phone"></i>
                                        <span ><a id="arkuz" id="arkuz" href='tel:"{{$contact->phone1}}"'>{{$contact->phone1}}</a><br><a  id="arkuz" href='tel:"{{$contact->phone1}}"'>{{$contact->phone2}}</a></span>
                                    </li>
                                    <li>
                                        <i class="icon dripicons-mail"></i>
                                         <span><a id="arkuz" href="mailto:info@example.com">{{$contact->email1}}</a><br><a id="arkuz" href="mailto:sale@example.com">{{$contact->email2}}</a></span>
                                    </li>
                                    <li>
                                      <i class="fal fa-map-marker-alt"></i>
                                         <span>{{$contact->address}}</span>
                                    </li>
                                     @endforeach  
                                   
                                </ul>
                                    
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>&copy; 
                                    @php
                                        echo date('Y').' '.'MoriahCare, designed by Arkuz'
                                    @endphp
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->


		<!-- JS here -->
        	<!-- JS here -->
        <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/one-page-nav-min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/ajax-form.js')}}"></script>
        <script src="{{asset('assets/js/paroller.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/js_isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/imagesloaded.min.js')}}"></script>
        <script src="{{asset('assets/js/parallax.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('assets/js/parallax-scroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/element-in-view.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>