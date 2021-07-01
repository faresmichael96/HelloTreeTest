$(document).ready(function(){

    $('[data-toggle="tooltip"]').tooltip();

    $('.form-group .toggle_password').on('click', function(){
        $(this).toggleClass('bi-eye-slash-fill bi-eye-fill');
        var password = $(this).parent().find('input');
        if(password.attr("type") === 'password'){
            password.attr("type", "text");
        }else {
            password.attr("type", "password");
        }
    });

    $('.form_container .form_switch button').on('click', function(){
       var form_type = $(this).data('type');
       $('.form-group input').val("");
       $('.form_switch button').removeClass('active');
       $('.form_wrapper').removeClass("active");
       $(this).toggleClass('active');
       $(this).parents('.form_container').find('.form_wrapper[data-type='+form_type+']').toggleClass("active");
    });

    $('.user_type .custom-control label').on('click', function(){
        $('input[type=radio]').removeClass('active').prop('checked', false);
        $(this).parent().find('input[type=radio]').addClass('active').prop('checked', true);
    });

    $('input[type=radio]').on('click', function() {
        if($('#service_provider').prop('checked')){
            $('.form-group.company').addClass('active');
            $('.form-group.company input[name=company_name]').prop('required',true);
        }else{
            $('.form-group.company').removeClass('active');
            $('.form-group.company input[name=company_name]').prop('required',false);
        }
    });

});