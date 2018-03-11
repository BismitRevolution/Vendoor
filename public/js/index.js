$(document).ready(function () {
    // $("#home-nav").removeClass("active");
    // $("#dashboard-nav").addClass("active");
    $(".box").each(function() {
        $(this).height($(".box").width());
    });
});
