@extends('layouts.master')
@section('title', 'Contact us today on 01322554488')
@section('content')
        
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:(assets/img/testimonial/test-bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>Contact Us</h2>                                    
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
			  <!-- contact-area -->
            <section id="contact" class="contact-area contact-bg pt-100 pb-70 p-relative fix" style="background-image:url(assets/img/an-bg/an-bg11.png); background-size: cover;background-repeat: no-repeat;">
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
						<form action="{{url('/message')}}" class="contact-form" method="post" >
                            @csrf
							<div class="row">
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">                                    
                                    <input type="text" name='firstName' placeholder="First Name">
                                </div>                               
                            </div>
                                <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">                                    
                                    <input type="text" name='lasttName' placeholder="Last Name">
                                </div>                               
                            </div>
							<div class="col-lg-12">                               
                                <div class="contact-field p-relative c-email mb-20">                                    
                                    <input type="text" name='email' placeholder="Your email">
                                </div>                                
                            </div>
							<div class="col-lg-12">                               
                                <div class="contact-field p-relative c-subject mb-20">                                   
                                    <input type="text" name='subject' placeholder="Your subject">
                                </div>
                            </div>							
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-45">                                  
                                    <textarea name="content" id="message" cols="30" rows="10" placeholder="Your message"></textarea>
                                </div>
                                <div class="slider-btn">                                          
                                            <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s" type='submit'>Send Message</button>					
                                        </div>                             
                            </div>
                            </div>
                        
                    </form>
						</div>
					</div>
                    
                </div>
               
            </section>
            <!-- contact-area-end -->
        </main>
      @endsection