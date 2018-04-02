$(document).ready(function () {
    $(".filterlistener").on("change", function () {
        $.ajax({
            type: "POST",
            url: "/p/community/filter",
            data: $(".filterlistener").serialize(),
            success: function (json) {
                alert("todo wanneer Arno klaar is met CSS prutsen ;)")
            }
        });
    });
});