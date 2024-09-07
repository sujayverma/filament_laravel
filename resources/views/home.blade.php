@extends('layouts.app')
@section('title', 'Abaccus | Home')
@section('content')
<!-- Start Home Page Slider -->
<section id="home">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">
    
        <!-- Indicators -->
        <ol class="carousel-indicators">
                        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                        <li data-target="#main-slide" data-slide-to="1" class=""></li>
                        <li data-target="#main-slide" data-slide-to="2" class=""></li>
                    
        </ol>
        <!--/ Indicators end-->
    
        <!-- Carousel inner -->
        <div class="carousel-inner">
                    <div class="item active" data-slide-number="0">
                <img class="img-responsive" src="{{ asset('img/slider-3.png') }}" alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="animated2">
                          <span>Welcome to Abaccus</span>
                        </h2>
                        <h3 class="animated3">
                            <span>All post productions need</span>
                        </h3>
                        <p class="animated4">
                            <!-- <a href="#" class="slider btn btn-primary"> -->
                                                        <!-- </a> -->
                        </p>
                    </div>
                </div>
            </div>
                    <div class="item " data-slide-number="1">
                <img class="img-responsive" src="{{ asset('img/slider-2.png') }}" alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="animated2">
                          <span>Abaccus for E Transfer</span>
                        </h2>
                        <h3 class="animated3">
                            <span>Speed Quality Cost Effectiveness</span>
                        </h3>
                        <p class="animated4">
                            <!-- <a href="#" class="slider btn btn-primary"> -->
                                                        <!-- </a> -->
                        </p>
                    </div>
                </div>
            </div>
                    <div class="item " data-slide-number="2">
                <img class="img-responsive" src="{{ asset('img/slider-1.png') }}" alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="animated2">
                          <span>THE WAY OF <strong>SUCCESS</strong></span>
                        </h2>
                        <h3 class="animated3">
                            <span>Deliver the television advertising media</span>
                        </h3>
                        <p class="animated4">
                            <!-- <a href="#" class="slider btn btn-primary"> -->
                                                        <!-- </a> -->
                        </p>
                    </div>
                </div>
            </div>
                    
        </div>
        <!-- Carousel inner end-->
    
        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
    <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->
    
    <script>
    var slider = '';
    $(document).ready(function(){
        var windowWidth = $( window ).width();
        var mobile = windowWidth < 500;
        if(mobile)
            slider  = $("#main-slide").detach();
    });
    $(window).on("orientationchange",function(event){
      if(window.orientation == 0) 
        slider = $("#main-slide").detach();
      else
        $("#home").append(slider);
    });
    </script>        
            <!-- Start Services Section -->
    <div class="section service">
        <div class="container">
            <div class="row">
                            <!-- Start Service Icon 1 -->
                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                    <div class="service-icon">
                        <i class="fa fa-leaf icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>High Quality Theme</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
    
                    </div>
                </div>
                <!-- End Service Icon 1 -->
                            <!-- Start Service Icon 1 -->
                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                    <div class="service-icon">
                        <i class="fa fa-desktop icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Full Responsive</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
    
                    </div>
                </div>
                <!-- End Service Icon 1 -->
                            <!-- Start Service Icon 1 -->
                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                    <div class="service-icon">
                        <i class="fa fa-eye icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Retina Display Ready</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
    
                    </div>
                </div>
                <!-- End Service Icon 1 -->
                            <!-- Start Service Icon 1 -->
                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                    <div class="service-icon">
                        <i class="fa fa-code icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Clean Modern Code</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
    
                    </div>
                </div>
                <!-- End Service Icon 1 -->
                            <!-- Start Service Icon 1 -->
                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                    <div class="service-icon">
                        <i class="fa fa-rocket icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Fast & Light Theme</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
    
                    </div>
                </div>
                <!-- End Service Icon 1 -->
                            <!-- Start Service Icon 1 -->
                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                    <div class="service-icon">
                        <i class="fa fa-cog icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Css3 Transitions</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
    
                    </div>
                </div>
                <!-- End Service Icon 1 -->
                            <!-- Start Service Icon 1 -->
                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                    <div class="service-icon">
                        <i class="fa fa-download icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Free Updates</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
    
                    </div>
                </div>
                <!-- End Service Icon 1 -->
                            <!-- Start Service Icon 1 -->
                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                    <div class="service-icon">
                        <i class="fa fa-umbrella icon-large"></i>
                    </div>
                    <div class="service-content">
                        <h4>Help & Support</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
    
                    </div>
                </div>
                <!-- End Service Icon 1 -->
                        </div><!-- .row -->
        </div><!-- .container -->
    </div>
    <!-- End Services Section -->
            
            
    <!-- Start Purchase Section -->
    <div class="section purchase">
        <div class="container">
    
            <!-- Start Video Section Content -->
            <div class="section-video-content text-center">
    
                <!-- Start Animations Text -->
                <h1 class="fittext wite-text uppercase tlt">
                  <span class="texts">
                                                        <span>Modern</span>
                                        <span>Clean</span>
                                        <span>Awesome</span>
                                        <span>Cool</span>
                                        <span>Great</span>
                                  </span>
                    Abaccus Template is Ready for <br>Business, Agency <strong>or</strong> Creative Portfolios<br>            </h1>
                <!-- End Animations Text -->
            </div>
            <!-- End Section Content -->
    
        </div><!-- .container -->
    </div>
    <!-- End Purchase Section -->        
                    
            
                    
                    
                        
            <!-- Start Client/Partner Section -->
    <div class="section partner">
    <div class="container">
        <div class="row">
    
            <!-- Start Big Heading -->
    <div class="big-title text-center">
        <h1><strong>Our Clients</strong></h1>
        <!-- <p class="title-desc">Partners We Work With</p> -->
    </div>
    <!-- End Big Heading -->
    
    <!--Start Clients Carousel-->
    <div class="our-clients">
        <div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">
            
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
        </div><!-- .row -->
    </div><!-- .container -->
    </div>
    <!-- End Client/Partner Section -->  

    @endsection