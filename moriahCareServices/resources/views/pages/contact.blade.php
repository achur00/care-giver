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
                    @if(Session::get('msgSuccess'))
                        <div class="alert alert-success"> {{ Session::get('msgSuccess')}}</div>
                    @elseif(Session::get('msgSuccess'))
                    <div class="alert alert-danger"> {{ Session::get('msgSuccess')}}</div>
                    @endif

					<div class="row">
                        <div class="col-lg-6">
                              <div class="">
        
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2485.6903842004604!2d0.1824383152805845!3d51.46384082170883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHowbury%20House%20Thames%20Road%20Crayford%20DA1%204RQ!5e0!3m2!1sen!2sng!4v1679449176672!5m2!1sen!2sng" width="100px" height="800px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                    <input type="text" name='lastName' placeholder="Last Name">
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