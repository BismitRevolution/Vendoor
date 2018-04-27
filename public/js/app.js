$(document).ready(function () {
    // $("#home-nav").removeClass("active");
    // $("#dashboard-nav").addClass("active");
    if ($(window).width() < 576) {
        $(".mobile").removeClass("container").addClass("mobile-container");
        $(".mobile-text").addClass("mobile-scale");
        $(".mobile-logo").addClass("mobile-scale");
        $(".mobile-round").addClass("mobile-scale");
        $(".mobile-col-12").removeClass("d-flex");
        $(".mobile-top").addClass("mobile-scale");
        $(".mobile-bottom").addClass("mobile-scale");

        $("#filter").removeClass("btn-group-vertical").addClass("mobile-scale");
        $("#filter-fill").addClass("mobile-scale");
    }
});
