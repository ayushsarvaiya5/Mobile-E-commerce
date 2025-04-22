$(".send-button").click(function () {

    var firstname = $(".name").val();
    var check = /^[a-zA-Z]+$/;
    
    //name//
    if (firstname == "") {
        $(".name-hide").text("*Enter your name");
        $(".name").focus();
        return false;
    }
    else { $(".name-hide").text(""); }

    if (!firstname.match(check)) {
        $(".name-hide").text("*Enter your valid name");
        $(".name").focus();
        return false;
    }
    else { $(".name-hide").text(""); }

    if (firstname.length > 20) {
        $(".name-hide").text("*More than 20 char. is not allowed");
        $(".name").focus();
        return false;
    }
    else { $(".name-hide").text(""); }

    //mobile no//
    var mobile = $(".mobile").val();
    var check_moblie = /^[0-9]+$/;
    if (mobile == "") {
        $(".mobile-hide").text("*Enter your mobile no.");
        $(".mobile").focus();
        return false;
    }
    else { true }
    if (!mobile.match(check_moblie)) {
        $(".mobile-hide").text("*Enter your valid mobile no.");
        $(".mobile").focus();
        return false;
    }
    else { $(".mobile-hide").text(""); }
    //mobile no//

    //email //
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

    //message//
    var message = $(".message").val();
    if (message == "") {
        $(".hide-message").text("*Write something for us");
        $(".message").focus();
        return false;
    }
    else { $(".hide-message").text("") }
})