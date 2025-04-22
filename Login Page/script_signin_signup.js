$(document).ready(function () {
    $(".input-1").click(function () {
        $(".hr-1").css("border-color", "black");
        $("#user").css("color", "blueviolet");
    })
    $(".input-2").click(function () {
        $(".hr-2").css("border-color", "black");
        $("#lock").css("color", "blueviolet")
    })
    $(".login-button").click(function () {
        $(".hr-1,.hr-2").css("border-color", "rgb(194, 187, 187)");
        $("#lock,#user").css("color", "grey");
    })

    $(".hide,.hide-1,.first-name-hide,.last-name-hide,.UserId-hide,.email-hide,.password-signup-hide,.confirm-password-signup-hide").css("color", "red");
    
    $(".login-button").click(function () {
        var name = $(".input-1").val();
        var check = /^[a-zA-Z]+$/;

        //username for login
        if (name == "") {
            $(".hide").text("*Enter your name");
            $(".input-1").focus();
            return false;
        }
        else { true; }

        if (!name.match(check)) {
            $(".hide").text("*Enter your valid name");
            $(".input-1").focus();
            return false;
        }
        else { true; }

        if (name.length > 20) {
            $(".hide").text("*More than 20 char. is not allowed");
            $(".input-1").focus();
            return false;
        }
        else { $(".hide").text(""); }
        //username for login

        //pass for login
        var pass = $(".input-2").val();
        if (pass == "") {
            $(".hide-1").text("*Enter your password");
            $(".input-2").focus();
            return false;
        }
        else { $(".hide-1").text(""); }
    })
    //pass for login


    //for sign-up btn
    $(".signup-button").click(function () {
        var lastname = $(".last-name").val();
        var firstname = $(".first-name").val();
        var check = /^[a-zA-Z]+$/;

        //firstname for sign-up
        if (firstname == "") {
            $(".first-name-hide").text("*Enter your name");
            $(".first-name").focus();
            return false;
        }
        else { true; }

        if (!firstname.match(check)) {
            $(".first-name-hide").text("*Enter your valid name");
            $(".first-name").focus();
            return false;
        }
        else { true; }

        if (firstname.length > 20) {
            $(".first-name-hide").text("*More than 20 char. is not allowed");
            $(".first-name").focus();
            return false;
        }
        else { $(".first-name-hide").text(""); }
        //firstname for sign-up

        //lastname for sign-up
        if (lastname == "") {
            $(".last-name-hide").text("*Enter your name");
            $(".last-name").focus();
            return false;
        }
        else { true; }

        if (!lastname.match(check)) {
            $(".last-name-hide").text("*Enter your valid name");
            $(".last-name").focus();
            return false;
        }
        else { true; }

        if (lastname.length > 20) {
            $(".last-name-hide").text("*More than 20 char. is not allowed");
            $(".last-name").focus();
            return false;
        }
        else { $(".last-name-hide").text(""); }
        //lastname for sign-up

        //user-id for sign-up
        var check_userid = /^[a-zA-Z][a-zA-Z0-9_]{7-19}$/;
        var userid = $(".UserId").val();
        if (userid == "") {
            $(".UserId-hide").text("*Enter your User id");
            $(".UserId").focus();
            return false;
        }
        else { true }

        if (!userid.match(check)) {
            $(".UserId-hide").text("*Enter valid User-Id");
            $(".UserId").focus();
            return false;
        }
        else { true; }

        if (userid.length < 8) {
            $(".UserId-hide").text("*Less than 8 char. is not allowed");
            $(".UserId").focus();
            return false;
        }
        else { $(".last-name-hide").text(""); }

        if (userid.length > 20) {
            $(".UserId-hide").text("*More than 20 char. is not allowed");
            $(".UserId").focus();
            return false;
        }
        else { $(".UserId-hide").text(""); }


        //email-id for sign-up
        var check_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var email = $(".email").val();
        if (email == "") {
            $(".email-hide").text("*Enter your email id");
            $(".email").focus();
            return false;
        }
        else { true }
        
        if (!email.match(check_email)) {
            $(".email-hide").text("*Enter your valid email id");
            $(".email").focus();
            return false;
        }
        else { $(".email-hide").text(""); }
        //email-id for sign-up

        //pass for sign-up
        var password = $(".password-signup").val();
        if (password == "") {
            $(".password-signup-hide").text("*Enter your password");
            $(".password-signup").focus();
            return false;
        }
        else { $(".password-signup-hide").text(""); }
        //pass for sign-up
        
        //confirm-pass for sign-up
        var confirmPassword = $(".confirm-password-signup").val();
        if (confirmPassword == "") {
            $(".confirm-password-signup-hide").text("*Enter your password");
            $(".confirm-password-signup").focus();
            return false;
        }
        if (!confirmPassword.match(password)) {
            $(".confirm-password-signup-hide").text("*Your password did not match");
            $(".confirm-password-signup").focus();
            return false;
        }
        else { $(".confirm-password-signup-hide").text(""); }
        //confirm-pass for sign-up
    })
})