@extends('layouts.app')
@section('title', 'Abaccus | Contact')
@section('content')
<!-- Start Map -->
<div id="map" data-position-latitude="28.530838" data-position-longitude="77.205870"></div>
<script>
    (function () {
        $.fn.CustomMap = function( options ) {
            
            var posLatitude = $('#map').data('position-latitude'),
            posLongitude = $('#map').data('position-longitude');
            
            var settings = $.extend({
                home: { latitude: posLatitude, longitude: posLongitude },
                text: '<div class="map-popup"><h4>Web Development | ZoOm-Arts</h4><p>A web development blog for all your HTML5 and WordPress needs.</p></div>',
                icon_url: $('#map').data('marker-img'), 
                zoom: 15
            }, options );
            
            var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);
            
            return this.each(function() {   
                var element = $(this);
                
                var options = {
                    zoom: settings.zoom,
                    center: coords,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    panControl: true,
                    disableDefaultUI: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.DEFAULT
                    },
                    overviewMapControl: true,   
                };
                
                var map = new google.maps.Map(element[0], options);
                
                var icon = { 
                    url: settings.icon_url, 
                    origin: new google.maps.Point(0, 0)
                };
                
                var marker = new google.maps.Marker({
                    position: coords,
                    map: map,
                    icon: icon,
                    draggable: false,
                    animation:google.maps.Animation.BOUNCE
                });
                
                var info = new google.maps.InfoWindow({
                    content: settings.text
                });
                
                google.maps.event.addListener(marker, 'click', function() { 
                    info.open(map, marker);
                });
                
                var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}];
                
                map.setOptions({styles: styles});
            });

};
}( jQuery ));

jQuery(document).ready(function() {
jQuery('#map').CustomMap();
});
</script>
<!-- End Map -->

<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- Start Content -->
<div id="content">
<div class="container">

<div class="row">
    
    <div class="col-md-8">
        
        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Contact Us</span></h4>
        
        <!-- Start Contact Form -->
        <div id="contact-form" class="contatct-form">
            <div class="loader"></div>
                                <form action="{{ route('contact.submit')}}" class="contactForm" method="post" accept-charset="utf-8">
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Name<span class="required">*</span></label>
                        <span class="name-missing">Please enter your name</span>  
                        <input id="name" name="name" type="text" value="" size="30" required >
                    </div>
                    <div class="col-md-4">
                        <label for="e-mail">Email<span class="required">*</span></label>
                        <span class="email-missing">Please enter a valid e-mail</span> 
                        <input id="e-mail" name="email" type="text" value="" size="30" required >
                    </div>
                    <div class="col-md-4">
                        <label for="url">Website</label>
                        <input id="url" name="url" type="text" value="" size="30">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="message">Add Your Comment</label>
                        <span class="message-missing">Say something!</span>
                        <textarea id="message" name="message" cols="45" rows="10" required></textarea>
                        <div class="g-recaptcha" data-sitekey="6LeWmQcTAAAAABtNxPswHaWBzUBg9wnD2xo3GpQp"></div>
                        <input type="submit" name="submit" class="button" id="submit_btn" disabled value="Send Message">
                    </div>
                </div>

            </form>                </div>
        <!-- End Contact Form -->
        
    </div>
    
    <div class="col-md-4">
        
        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Information</span></h4>
        
        <!-- Some Info -->
        <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. <br></p>
        
        <!-- Divider -->
        <div class="hr1" style="margin-bottom:10px;"></div>
        
        <!-- Info - Icons List -->
        <ul class="icons-list">
            <li><i class="fa fa-globe">  </i> <strong>Address:</strong> A-159, Shivalik, Malviya Nagar, Delhi</li>
            <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> yugal.kalra@abaccusproductions.com</li>
            <li><i class="fa fa-mobile"></i> <strong>Phone:</strong> +91 9810 23 5090</li>
        </ul>
        
        <!-- Divider -->
        <div class="hr1" style="margin-bottom:15px;"></div>
        
        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Working Hours</span></h4>
        
        <!-- Info - List -->
        <ul><li><strong>Monday -&nbsp;</strong><strong>Saturday</strong>&nbsp;- 9am to 8pm</li><li><strong>Sunday</strong> - Closed</li></ul><br>                
    </div>
    
</div>

</div>
</div>
<!-- End content -->
@endsection