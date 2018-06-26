$(document).ready(function() {

    $('.form-newsletter').each(function() {
        $(this).submit(function() {
            var form = $(this),
                email = $(form).find('input').val(),
                responseMsg = $(this).next('.alert');

            //$(responseMsg).hide().addClass('response-waiting').text('Un momento por favor ...').fadeIn(200);

            $.ajax({
                url: '../send.php',
                data: email,
                type: 'post',
                dataType: 'json',
                success: function(data) {

                    var responseData = jQuery.parseJSON(data),
                        klass = '';

                	console.log(responseData);

                    /*switch (responseData.status) {
                        case 'error':
                            klass = 'response-error';
                            break;
                        case 'success':
                            klass = 'response-success';
                            break;
                    }

                    responseMsg.fadeOut(200, function() {
                        $(this).removeClass('response-waiting').addClass(klass).text(responseData.message).fadeIn(200, function() {
                            setTimeout(function() {
                                responseMsg.fadeOut(200, function() {
                                    $(this).removeClass(klass);
                                });
                            }, 3000);
                        });
                    });*/
                }
            });

            return false;
        });
    });
});