$(function (){

    $('#form1').submit(function (e) {
        e.preventDefault();
        $('.messageError').empty();
        var postdata = $('#form1').serialize();

        $.ajax({
           type: 'POST',
           url: 'php/contact.php',
           data: postdata,
           dataType: 'json',
           success: function (result) {


           }
        });

    });


})