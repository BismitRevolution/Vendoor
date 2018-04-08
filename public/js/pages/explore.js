$(document).ready(function () {
    if ($(window).width() < 576) {
        $("#filter").addClass("btn-group-vertical");
        $("#filter").removeClass("btn-group");
        $("#filter-fill").addClass("hidden");
    }

    $(".jquery-select2").select2();

    $("#filter-category").next().find(".select2-selection--single").each(function() {
        $(this).addClass("bg-blue");
        $(this).find(".select2-selection__rendered").addClass("white");
    });

    $(".vendor-item").each(function() {
        $(this).addClass("off");
    });

    $(".flip").each(function() {
        $(this).addClass("hidden");
    });

    $("#filter").height($("#field").height());

    $(".vendor-item").each(function() {
        var $item = $(this);
        $(this).find(".title").click(function() {
            if ($item.hasClass("off")) {
                $item.removeClass("off");
                $item.find(".flip").removeClass("hidden");
                $item.find(".unflip").addClass("hidden");
                $("#filter").height($("#field").height());
            } else {
                $item.addClass("off");
                $item.find(".flip").each(function() {
                    $(this).addClass("hidden");
                });
                $item.find(".unflip").each(function() {
                    $(this).removeClass("hidden");
                });
                $("#filter").height($("#field").height());
            }
        });
    });
});
