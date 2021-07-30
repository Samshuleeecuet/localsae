// JavaScript source code

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



// typing text animation script
var typed = new Typed(".typing", {
    strings: ["Samshul Islam Shakil"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});

var typed = new Typed(".typing-1", {
    strings: ["Md Enamul Haque"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});

var typed = new Typed(".typing-2", {
    strings: ["Md Alamin Islam"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});

var typed = new Typed(".typing-3", {
    strings: ["Yasir Arafat"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});

var typed = new Typed(".typing-4", {
    strings: ["Some-One"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});