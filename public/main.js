(function () {
    "use strict";

    $(document).ready(function () {
        runFilters();
    });
})();

function runFilters() {
    $.getJSON("/routes.json")
        .done(function (data) {
            listeners(data["data"])
        });
}

function listeners(data) {
    $("header nav li").on("click", function () {
        $("header nav li").removeClass("active");
        projectsFilter($(this).attr("type"));
        let newTitle = $(this).children("a").children("p").text();
        $("h1").text(newTitle);
        $(this).addClass("active");
    })
}

function projectsFilter(type) {
    if (type=="all") {
        $("#projects li").removeClass("sr-only");
    } else {
        $("#projects li").addClass("sr-only");
        $("#projects li").each(function () {
            if ($(this).attr("type").includes(type)) {
                // $(this).addClass("sr-only");
                $(this).removeClass("sr-only");
            }
        });
    }
}
