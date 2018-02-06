$(document).ready(function () {
    $("#rev_stars").on("change", function () {

        var csrf = $("#csrftoken");
        var rating = $("#rev_stars");

        $.ajax({
            type: "POST",
            url: "/p/sharing/rate",
            data: {
                "_token": csrf.val(),
                "rating": rating.val()
            },
            success: function (json) {
                $("#rev_stars").attr('data-readonly', 'true');
            }
        });
    });
});