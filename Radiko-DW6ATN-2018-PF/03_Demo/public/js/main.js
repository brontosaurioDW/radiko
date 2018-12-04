$(document).ready(function(){
	
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Menu Mobile
    $('.easy-sidebar-toggle').click(function(e) {
        e.preventDefault();
        $('body').toggleClass('toggled');
        $('.navbar.easy-sidebar').removeClass('toggled');
    });

    // Upload de imagen - Estilo del boton
    var inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input ) {
        var label    = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener( 'change', function( e ) {
            var fileName = '';
            if( this.files && this.files.length > 1 ) {
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            } else {
                fileName = e.target.value.split( '\\' ).pop();
                console.log(fileName);
            }

            if( fileName ) {
                label.querySelector( 'span' ).innerHTML = fileName;
            } else {
                label.innerHTML = labelVal;
            }
        });
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