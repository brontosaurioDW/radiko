$(document).ready(function(){

	var headerHome = $('.is-home');

	$(window).scroll(function(){
        if ($(window).scrollTop() > 300){
            $(headerHome).fadeIn();
        } else {
        	$(headerHome).fadeOut();
        }
    });
});