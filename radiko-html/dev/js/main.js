$(document).ready(function(){

	var headerHome = $('.is-home');

	$(window).scroll(function(){
        if ($(window).scrollTop() > 54){
            $(headerHome).addClass('sticky');
            $(headerHome).addClass('sticky-header');
        } else {
            $(headerHome).removeClass('sticky');
        	$(headerHome).removeClass('sticky-header');
        }
    });

    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

});