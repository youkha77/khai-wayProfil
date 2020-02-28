$(function (){

    $('#contact-form').submit(function(e){
        e.preventDefault();
        $('.messageError').empty();
        var postdata = $('#contact-form').serialize();

        $.ajax({
            type: 'POST',
            url: 'php/contact.php',
            data: postdata,
            dataType: 'json',
            success: function (result) {
                if(result.isSuccess)
                {
                    $("#contact-form").append("<p class='thank-you'>Votre message a bien été envoyé</p>")
                    $("#contact-form")[0].reset();
                }else{
                    $("#name + .messageError").html(result.nameError);
                    $("#email + .messageError").html(result.emailError);
                    $("#text + .messageError").html(result.textError);
                }

            }
        });

    });


})