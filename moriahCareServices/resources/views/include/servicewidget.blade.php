   <!-- Service Widget -->
                        <div class="sidebar-widget categories">
                            <div class="widget-content">
                                <!-- Services Category -->
                                <ul class="services-categories">
                                    <li><a href="{{url('/services')}}">All Services</a></li>
                                    @foreach ($allService as $service )
                                       <li class=""><a href="service-detail.html">{{$service->service_name}}</a></li>  
                                    @endforeach
                                   
                                      
                                </ul>
                            </div>
                        </div>