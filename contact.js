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