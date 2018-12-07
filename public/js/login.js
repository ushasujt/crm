$(document).ready(function () {
    
    $('#signin_submit').click(function () {  
        return true;//need to remove
        if (grecaptcha != undefined) {
            if (grecaptcha.getResponse() == '') {
                if ($("input[name=email]").val() != '' && $("input[name=password]").val() != '') {
                    $("#captcha-error").show();
                    $("#captcha-error").html("Google Captcha field is required.");
                    return false;
                } else {
                    $("#captcha-error").hide();
                    return true;
                }
            } else {
                $("#captcha-error").hide();
                return true;
            }
        } else {
            $("#captcha-error").hide();
            return true;
        }
    });
    $('#signin_form').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
            }
        },
        submitHandler: function (form) {

            var data = $('#signin_form').serialize();

            request = $.ajax({
                url: basePath + "/login-submit",
                type: "post",
                dataType: "json",
                data: data
            });

            request.done(function (response) {
                // Log a message to the console
                showMessage(response.message, 'success');
                console.log(response);
                if (response.red_url) {
                    window.location.href = response.red_url;
                } else {
                    window.location.href = basePath + '/home';
                }

            });

            // Callback handler that will be called on failure
            request.fail(function (xhr, textStatus, errorThrown) {
                var response = xhr.responseJSON;
                showMessage(response.message, 'error');
                //window.location.href = basePath + '';
            });
        }
    });


});