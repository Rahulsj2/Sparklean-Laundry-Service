

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }



$(document).ready(function () {
    $(".payment").click(function () {
        linkValue = $(this).attr("href");
        console.log(linkValue);
        hidden_data = document.getElementById("hiding_data");
        if (hidden_data.value != linkValue) {
            $("#momo").collapse('hide');
            $("#visa").collapse('hide');
        }
        hidden_data.value = linkValue
    });
    $("input[name=payment]").click(function () {
        var checkedValue = $("input[name='payment']:checked").val();
        if (checkedValue == "momo" && linkValue == "pills-payment" ){
            $("#momo").collapse('show');
            $("#visa").collapse('hide');
        } else if (checkedValue == "visa" && linkValue == "pills-payment"){
            $("#momo").collapse('hide');
            $("#visa").collapse('show');
        }  else if (checkedValue == "visa" && linkValue != "pills-payment"){
            $("#momo").collapse('hide');
            $("#visa").collapse('hide');
        }
        else {
            $("#momo").collapse('hide');
            $("#visa").collapse('hide');
        }
    });
});


$(function() {

    $("#coup-coupon").hide();
    $("#btn-coupon").click(function (){
        $("#coup-coupon").show();
        $(this).text("Apply");
    });
});




$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

// Material Design example
$(document).ready(function () {
    $('#dtMaterialDesignExample').DataTable();
    $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
      $(this).parent().append($(this).children());
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
      const $this = $(this);
      $this.attr("placeholder", "Search");
      $this.removeClass('form-control-sm');
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
    $('#dtMaterialDesignExample_wrapper select').removeClass(
    'custom-select custom-select-sm form-control form-control-sm');
    $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
    $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
  });


$(function() {

    $("#username_error").hide();
    $("#email_error").hide();
    $("#password_error").hide();
    $("#confirm_password_error").hide();
    $("#current_password_error").hide();
    

    var error_username = false;
    var error_email = false;
    var error_password = false;
    var error_confirm_password = false;
    var error_current_password = false;

    $("#username").focusout(function() {
        check_username();
    });

    $("#email").focusout(function() {
        check_email();
    });

    $("#password").focusout(function() {
        check_password();
    });

    $("#confirmPassword").focusout(function() {
        check_confirm_password();
    });

    $("#current_password").focusout(function() {
        check_current_password();
    });

    
    function check_username() {
        var username_length = $("#username").val().length;

        if ( username_length < 5 || username_length > 20){
            $("#username_error").html("Username should be between 5-20 characters");
            $("#username_error").show();
            error_username = true;
        } else{
            $("#username_error").hide();
        }
    }

    function check_email() {
        var pattern = new RegExp(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/);

        if (pattern.test($("#email").val())) {
            $("#email_error").hide();
        } else{
            $("#email_error").html("Invalid email address");
            $("#email_error").show();
            error_email = true;
        }
    }

    function check_password() {
        var password_strength = new RegExp(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/);
        // var password_length = $("#password").val().length;

        if(password_strength.test($("#password").val())){
            $("#password_error").hide();
        } else{
            $("#password_error").html("Passwords must be 8 characters or longer, contain lowercase, uppercase, numeric and special characters");
            $("#password_error").show();
            error_password = true;
        }
    }

    function check_confirm_password() {
        var password = $("#password").val();
        var confirm_password = $("#confirmPassword").val();

        if (password != confirm_password){
            $("#confirm_password_error").html("Passwords do not match");
            $("#confirm_password_error").show();
            error_confirm_password = true;
        } else{
            $("#confirm_password_error").hide();
        }
    }

    function check_current_password() {
        var password_strength = new RegExp(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/);

        if(password_strength.test($("#password").val())){
            $("#passwcurrent_password_errorord_error").hide();
        } else{
            $("#current_password_error").html("Password does not match the requirement");
            $("#current_password_error").show();
            error_password = true;
        }
    }

    $("#signupForm").submit(function() {
        error_username = false;
        error_email = false;
        error_password = false;
        error_confirm_password = false;

        check_username();
        check_email();
        check_password();
        check_confirm_password();

        if (error_username == false && error_email == false && error_password == false && error_confirm_password == false){
            return true;
        } else{
            return false;
        }

    });

    $("#loginForm").submit(function() {
        error_email = false;
        error_password = false;

        check_email();
        check_password();

        if (error_email == false && error_password == false){
            return true;
        } else{
            return false;
        }

    });

    $("#changePasswordForm").submit(function() {

        error_password = false;
        error_confirm_password = false;
        error_current_password = false;

        check_password();
        check_confirm_password();
        check_current_password();

        if (error_password == false && error_confirm_password == false && error_current_password == false){
            return true;
        } else{
            return false;
        }

    });


});