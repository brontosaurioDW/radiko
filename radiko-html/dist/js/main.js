$(document).ready(function(){

	var headerHome = $('.is-home');

	$(window).scroll(function(){
        if ($(window).scrollTop() > 300){
            $(headerHome).addClass('sticky');
        } else {
        	$(headerHome).removeClass('sticky');
        }
    });

    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

});