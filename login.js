$(document).ready(function () {

    $(".open").click(function () {
        $(".togglesearch").toggle();
        $("input[type='text']").focus();
    });
    $(".on").click(function () {
        $(".off").show();
        $(".on").hide();
        $(".search-box").show();
    });
    $(".off").click(function () {
        $(".on").show();
        $(".off").hide();
        $(".search-box").hide();
    });

});


var password = document.getElementById("pass")
  , confirm_password = document.getElementById("copass");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
