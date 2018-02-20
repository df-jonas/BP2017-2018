$(document).ready(function () {
    $("#rev_stars").on("change", function () {

        var csrf = $("#csrftoken");
        var rating = $("#rev_stars");
        var fileid = $("#fileid");

        $.ajax({
            type: "POST",
            url: "/p/sharing/rate",
            data: {
                "_token": csrf.val(),
                "fileid": fileid.val(),
                "rating": rating.val()
            },
            success: function (json) {
                // TODO Confirm rating to user.
            }
        });
    });
});