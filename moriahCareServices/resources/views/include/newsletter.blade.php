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
                            <img src="{{asset('assets/img/bg/nurse.png')}}">
                        </div>
                    </div>
                   
                </div>
            </section>
            <!-- newslater-aread-end -->