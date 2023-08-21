@extends('layouts.master')
@section('title','Moriahcare about')
@section('content')

        <!-- main-area -->
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/test-bg.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>About Us</h2>                                    
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
				<!-- about-area -->
            <section id="about" class="about-area about-p mt-100 pb-80 p-relative" style="background-image:url(img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                <div class="container">
                    <div class="row align-items-center">					
                      <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative">
                                <img src="img/bg/illlustration.png" alt="img">
                                
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
            </section>
            <!-- about-area-end -->
            
			<!-- counter-area -->
            <div class="counter-area pt-100 mb-100" style="background-image:url(img/an-bg/an-bg04.png); background-repeat: no-repeat; background-size: contain; ">
                <div class="container">
                    <div class="row align-items-end">
                         <div class="col-lg-3 col-md-6 col-sm-12">
                           <div class="single-counter text-center" >
							 <img src="img/icon/cunt-icon01.png" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">500</span><small>+</small>                                   
                                </div>
                                <p>Doctors At Work</p>                               
                            </div>
                        </div>
                      <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								<img src="img/icon/cunt-icon02.png" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">58796</span><small>+</small>                                   
                                </div>
                                <p>Happy Patients</p>                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								 <img src="img/icon/cunt-icon03.png" alt="img">
                                <div class="counter p-relative">
                                   <span class="count">500</span><small>+</small>                       
                                </div>
                                <p>Medical Beds</p>                               
                            </div>
                        </div>
                         <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								 <img src="img/icon/cunt-icon04.png" alt="img">
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
                            <form name="ajax-form" id="contact-form4" action="#" method="post" class="contact-form newslater pb-130">
                               <div class="form-group">
                                  <input class="form-control" id="email2" name="email" type="email" placeholder="Email Address..." value="" required=""> 
                                  <button type="submit" class="btn btn-custom" id="send2">Subscribe <i class="fas fa-chevron-right"></i></button>
                               </div>
                               <!-- /Form-email -->	
                            </form>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <img src="img/bg/news-illustration.png">
                        </div>
                    </div>
                   
                </div>
            </section>
            <!-- newslater-aread-end -->
            <!-- testimonial-area -->
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
                                        <img src="img/testimonial/testimonial-img.png" alt="img">                                        
                                    </div>
                                    <div class="single-testimonial-bg">
								    <div class="com-icon"><img src="img/testimonial/qutation.png" alt="img"></div>
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
                                        <img src="img/testimonial/testimonial-img.png" alt="img">                                        
                                    </div>
                                    <div class="single-testimonial-bg">
								    <div class="com-icon"><img src="img/testimonial/qutation.png" alt="img"></div>
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
                                        <img src="img/testimonial/testimonial-img.png" alt="img">                                        
                                    </div>
                                    <div class="single-testimonial-bg">
								    <div class="com-icon"><img src="img/testimonial/qutation.png" alt="img"></div>
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
								    <div class="com-icon"><img src="img/testimonial/qutation.png" alt="img"></div>
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
            <!-- testimonial-area-end -->
             <!-- brand-area -->
            <div class="brand-area" style="background-image:url(img/an-bg/an-bg12.png); background-size: cover;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="img/brand/c-logo.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand active">
                                  <img src="img/brand/c-logo02.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="img/brand/c-logo03.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="img/brand/c-logo04.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="img/brand/c-logo.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
			
        </main>
        <!-- main-area-end -->
        <!-- footer -->
@endsection