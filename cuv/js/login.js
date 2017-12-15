$(document).on("click", "#loginButton", function() {

    var name = $('#username').val();
    var pass = $('#password').val();
    console.log(pass);

    $.post("Login", {username : name , password: pass},function(response) {
        //console.log("hi");
        if(response == "member"){
            window.location.href = "home-member.jsp";
        }else if(response == "tutor") {
            window.location.href = "home-tutor.jsp";
        }else if(response == "admin") {
        window.location.href = "home-admin.jsp";
        }
        else if (response == name){
            $("#password-notify").css("display","flex").addClass("is-active");
        }else{
           // console.log("pass");
            $("#username-notify").css("display","flex").addClass("is-active");
            $("#password-notify").css("display","flex").addClass("is-active");
        }

    });
});
