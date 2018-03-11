$(document).ready(function () {
    // $("#home-nav").removeClass("active");
    // $("#dashboard-nav").addClass("active");
    $(function() {
        $(".box").each(function() {
            $(this).height($(".box").width());
        });
    });
});
