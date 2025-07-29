$(document).ready(function () {
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 50) {
        $("#main-navbar").addClass("shrink");
        } else {
        $("#main-navbar").removeClass("shrink");
        }
    });
});