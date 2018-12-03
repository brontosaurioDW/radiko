$(document).ready(function(){
	
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Menu Mobile
    $('.easy-sidebar-toggle').click(function(e) {
        e.preventDefault();
        $('body').toggleClass('toggled');
        $('.navbar.easy-sidebar').removeClass('toggled');
    });
});

$(window).on('scroll', function(){
    // Header home
    var headerHome = $('.is-home');
    
    if ($(window).scrollTop() > 54){
        $(headerHome).addClass('sticky');
        $(headerHome).addClass('sticky-header');
    } else {
        $(headerHome).removeClass('sticky');
        $(headerHome).removeClass('sticky-header');
    }
});

function GeocodingAdress() {
    // GEOCODING API -- Google maps para detalle de huerta
    if ($('.datos-info-huerta').length > 0) {
        var geocoder;
        var map;
        var address = $('.address').data('direccion');
        console.log(address);

        geocoder = new google.maps.Geocoder();

        var mapOptions = {
            zoom: 15,
        }

        map = new google.maps.Map(document.getElementById("map"), mapOptions);

        geocoder.geocode({
            'address': address
        }, function(results, status) {
            if (status == 'OK') {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    icon: '../images/marker.png'
                });
            } else {
                console.log('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
}