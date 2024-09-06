@extends('layouts.app')
@section('content')

        <!-- Start Page Banner -->
        <div class="page-banner" style="padding:40px 0; background: url({{ asset('frontend_assets/images/slide-02-bg.jpg') }}) center #f9f9f9;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>About Us</h2>
                        <p>We Are Professional</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            <li><a href="{{ route('home')}}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->        
                <!-- Start Content -->
                <div id="content">
                    <div class="container">
                        <div class="page-content">
                            
                            
                            <div class="row">
                                
                                <div class="col-md-7">
                                    
                                    <!-- Classic Heading -->
        <h4 class="classic-title"><span>Welcome to Our Agency</span></h4>
        
        <!-- Some Text -->
        <div class="text-justify">
        <p>Lorem Ipsum is simply dummy text of the <a href="javascript:void(0)" rel="nofollow" target="_blank">printing</a>
         and typesetting industry. Lorem Ipsum has been the industry's standard 
        dummy text ever since the 1500s, when an unknown printer took a galley 
        of type and scrambled it to make a type specimen book. It has survived 
        not five centuries, but also the leap into electronic typesetting, 
        remaining essentially unchanged.</p>
        <p>It was popularised in the 1960s with the release of Letraset sheets 
        containing Lorem Ipsum passages, and more recently with desktop 
        publishing software like Aldus PageMaker including versions of Lorem 
        Ipsum. Sed ut perspiciatis unde omnis iste natus error sit volup 
        accusantium. Lorem ipsum dolor sit amet, consectetur.</p><br>	
        </div>
                                </div>
                                
                                <div class="col-md-5"> 
                                    
                                    <!-- Start Touch Slider -->
                                    <!-- Start Touch Slider -->
        <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
            <div class="item"><img alt="" src="{{ asset('frontend_assets/images/about-01.jpg') }}"></div>
            <div class="item"><img alt="" src="{{ asset('frontend_assets/images/about-02.jpg') }}"></div>
            <div class="item"><img alt="" src="{{ asset('frontend_assets/images/about-03.jpg') }}"></div>
        </div>
        <!-- End Touch Slider -->                            <!-- End Touch Slider -->
                                    
                                </div>
                                
                            </div>
                            
                            <!-- Divider -->
                            <div class="hr1" style="margin-bottom:50px;"></div>
                            
                            <div class="row">
                                
                                <div class="col-md-6">
                                    
                                    <!-- Classic Heading -->
            <h4 class="classic-title"><span>Our Skills</span></h4>
            
            <div class="skill-shortcode">
              <div class="skill">
                <p>Web Design</p>          
                <div class="progress">         
                  <div class="progress-bar" role="progressbar"  data-percentage="60">
                    <span class="progress-bar-span" >60%</span>
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>  
              </div>
              <div class="skill">
                <p>Wordpress</p>          
                <div class="progress">          
                  <div class="progress-bar" role="progressbar"  data-percentage="80">
                    <span class="progress-bar-span" >80%</span>
                    <span class="sr-only">80% Complete</span>
                  </div>
                </div>  
              </div>
              <div class="skill">
                <p>CSS 3</p>          
                <div class="progress">          
                  <div class="progress-bar" role="progressbar"  data-percentage="90">
                    <span class="progress-bar-span" >90%</span>
                    <span class="sr-only">90% Complete</span>
                  </div>
                </div>  
              </div>
              <div class="skill">
                <p>HTML 5</p>          
                <div class="progress">          
                  <div class="progress-bar" role="progressbar"  data-percentage="100">
                    <span class="progress-bar-span" >100%</span>
                    <span class="sr-only">100% Complete</span>
                  </div>
                </div>  
              </div>                              
        </div>
            
                                </div>
                                
                                <div class="col-md-6">
                                    
                                    <!-- Classic Heading -->
        <h4 class="classic-title"><span>Our Solutions</span></h4>
        
        <!-- Accordion -->
        <div class="panel-group" id="accordion">
                                
                    <!-- Start Accordion 1 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                                    <i class="fa fa-angle-up control-icon"></i>
                                    <i class="fa fa-desktop"></i> Fully Responsive Theme                        </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-1" class="panel-collapse collapse in">
                            <div class="panel-body"> <div>
                    <div>Duis aute irure dolor in 
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
        pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong>
         normal distribution of letters, as opposed to using 'Content here, 
        content here', making it look like readable English. Duis aute irure 
        dolor in reprehenderit in voluptate velit esse cillum dolore. Lorem 
        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
        tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
            <h4><br></h4><br></div>
                        </div>
                    </div>
                    <!-- End Accordion 1 -->
                                        
                    <!-- Start Accordion 1 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2">
                                    <i class="fa fa-angle-up control-icon"></i>
                                    <i class="fa fa-desktop"></i> Touchable Slider                        </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-2" class="panel-collapse collapse ">
                            <div class="panel-body"> <div>
                    <div>Duis aute irure dolor in 
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
        pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong>
         normal distribution of letters, as opposed to using 'Content here, 
        content here', making it look like readable English. Duis aute irure 
        dolor in reprehenderit in voluptate velit esse cillum dolore. Lorem 
        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
        tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
            <h4><br></h4><br></div>
                        </div>
                    </div>
                    <!-- End Accordion 1 -->
                                        
                    <!-- Start Accordion 1 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-3">
                                    <i class="fa fa-angle-up control-icon"></i>
                                    <i class="fa fa-desktop"></i> Our Expert Teams                        </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-3" class="panel-collapse collapse ">
                            <div class="panel-body"> <div>
                    <div>Duis aute irure dolor in 
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
        pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong>
         normal distribution of letters, as opposed to using 'Content here, 
        content here', making it look like readable English. Duis aute irure 
        dolor in reprehenderit in voluptate velit esse cillum dolore. Lorem 
        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
        tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
            
            <h4><br></h4><br></div>
                        </div>
                    </div>
                    <!-- End Accordion 1 -->
                                        </div>
                                </div>
                                
                            </div>
                            
                            <!-- Divider -->
                            <div class="hr1" style="margin-bottom:50px;"></div>
                            
                          
                            
                            <!-- Start Clients Carousel -->
        <div class="our-clients">
            
            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Our Clients</span></h4>
            
            <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">
                            <!-- Client 1 -->
                            <div class="client-item item">
                                <a href="#"><img src="{{ asset('img/web_client_image_1.png') }}" alt="" /></a>
                            </div>
                                    <!-- Client 1 -->
                            <div class="client-item item">
                                <a href="#"><img src="{{ asset('img/web_client_image_2.jpg') }}" alt="" /></a>
                            </div>
                                    <!-- Client 1 -->
                            <div class="client-item item">
                                <a href="#"><img src="{{ asset('img/web_client_image_3.jpg') }}" alt="" /></a>
                            </div>
                                    <!-- Client 1 -->
                            <div class="client-item item">
                                <a href="#"><img src="{{ asset('img/web_client_image_31.jpg') }}" alt="" /></a>
                            </div>
                                    <!-- Client 1 -->
                            <div class="client-item item">
                                <a href="#"><img src="{{ asset('img/web_client_image_5.JPG') }}" alt="" /></a>
                            </div>
                                    <!-- Client 1 -->
                            <div class="client-item item">
                                <a href="#"><img src="{{ asset('img/web_client_image_6.jpg') }}" alt="" /></a>
                            </div>
                    </div>
        </div>
        <!-- End Clients Carousel -->
        
                        </div>
                    </div>
                </div>
                <!-- End content -->


@endsection