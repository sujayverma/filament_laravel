<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/images/favicon_ct.ico') }}"> --}}
    <title>@yield('title', 'Default Title')</title>
     <!-- Define Charset -->
     <meta charset="utf-8">

     <!-- Responsive Metatag -->
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
     <!-- Page Description and Author -->
     <meta name="description" content="Abaccus - Home">
     <meta name="author" content="Sujay Barma">
    <!-- This page CSS -->
    <link href="{{ asset('frontend_assets/asset/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Abaccus CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/style.css') }}" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/responsive.css') }}" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/animate.css') }}" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/colors/red.css') }}" title="red" media="screen" />

    <script type="text/javascript" src="{{ asset('frontend_assets/js/jquery-2.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/jquery.migrate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/modernizrr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/nivo-lightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/count-to.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/jquery.textillate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/jquery.lettering.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/jquery.easypiechart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/jquery.parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/mediaelement-and-player.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/js/script.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<body >
    <!-- Full Body Container -->
    <div id="container">
        <!-- Start Header Section --> 
        <div class="hidden-header"></div>
        <header class="clearfix">
            <!-- Start Top Bar -->
            <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <!-- Start Contact Info -->
                        <ul class="contact-details">
                            <li><a href="#"><i class="fa fa-map-marker"></i> A-159, Shivalik, Malviya Nagar, Delhi</a>
                            </li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i> yugal.kalra@abaccusproductions.com</a>
                            </li>
                            <li><a href="#"><i class="fa fa-phone"></i> +91 9810 23 5090</a>
                            </li>
                                            </ul>
                        <!-- End Contact Info -->
                    </div><!-- .col-md-6 -->
                    <div class="col-md-5">
                        <!-- Start Social Links -->
                        <ul class="social-list">
                                                    <li>
                                    <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/AbaccusProductions"><i class="fa fa-facebook"></i></a>
                                </li>
                                                                    <li>
                                <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="https://twitter.com/AbaccusProduct"><i class="fa fa-twitter"></i></a>
                            </li>
                                                                    <li>
                                <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="https://plus.google.com/u/0/110860804954975806327/about"><i class="fa fa-google-plus"></i></a>
                            </li>
                                                                    <li>
                                <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                                                <li>
                                <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                            </li>
                           
                        </ul>
                        <!-- End Social Links -->
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-bar -->
            <!-- End Top Bar -->
            
            
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Stat Toggle Nav Link For Mobiles -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- End Toggle Nav Link For Mobiles -->
                    <a class="navbar-brand" href="index.html">
                        <img alt="" style="height:45px;margin-top:0px;" src="{{ asset('frontend_assets/images/margo.png') }}">
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                  
        
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                                        <li>
                            <a class=" {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a class=" {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                        </li>
                       
                        <li>
                            <a class=" {{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li>
                            <a class="" href="{{ route('filament.admin.auth.login') }}">Login</a>
                        </li>
                    </ul>
                    <!-- End Navigation List -->
                </div>
            </div>
        </div>
            <!-- End Header Logo & Naviagtion -->
            
        </header> 
   
        @yield('content')


        @include('layouts.footer')
    

</body>

</html>