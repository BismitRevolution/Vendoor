$(document).ready(function () {
    if ($(window).width() < 576) {
        $("#filter").addClass("btn-group-vertical");
        $("#filter").removeClass("btn-group");
        $("#filter-fill").addClass("hidden");
    }

    $("#filter").height($("#field").height());

    $(".vendor-item").each(function() {
        $(this).addClass("off");
    });

    $(".flip").each(function() {
        $(this).addClass("hidden");
    });

    $(".vendor-item").each(function() {
        $(this).click(function() {
            if ($(this).hasClass("off")) {
                $(this).removeClass("off");
                $(this).find(".flip").removeClass("hidden");
                $(this).find(".unflip").addClass("hidden");
            } else {
                $(this).addClass("off");
                $(this).find(".flip").each(function() {
                    $(this).addClass("hidden");
                });
                $(this).find(".unflip").each(function() {
                    $(this).removeClass("hidden");
                });
            }
        });
    });
});
