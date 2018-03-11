$(document).ready(function () {
    // $("#home-nav").removeClass("active");
    // $("#dashboard-nav").addClass("active");

    if ($(window).width() < 576) {
        $("#filter").addClass("btn-group-vertical");
        $("#filter").removeClass("btn-group");
        $("#filter-fill").addClass("hidden");
    }

    $("#filter").height($("#field").height());
});
