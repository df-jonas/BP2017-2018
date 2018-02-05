$(document).ready(function () {
    $(".filterlistener").on("change", function () {
        $.ajax({
            type: "POST",
            url: "/p/sharing/filter",
            data: $(".filterlistener").serialize(),
            success: function (json) {
                var newhtml = "";

                $.each(json, function (key, value) {

                    newhtml += '<article class="file clearfix">' +
                        '<header>' + value.field.name + ' > ' + value.degree.name + ' > ' + value.course.name + '<a href="https://static-unihelp.eu/' + value.public_id + '">' +
                        '<i class="fa fa-download"></i></a></header>' +
                        '<div class="padding">' +
                        '<div class="right">' +
                        '<div class="rating">' +
                        '<span class="fa fa-star checked"></span>' +
                        '<span class="fa fa-star checked"></span>' +
                        '<span class="fa fa-star checked"></span>' +
                        '<span class="fa fa-star"></span>' +
                        '<span class="fa fa-star"></span>' +
                        '</div>' +
                        '<h3>' + value.title + '</h3>' +
                        '<p>door ' + value.user.name+'</p>' +
                        '</div></div></article>';

                });

                $("#filecontainer").html(newhtml);
            }
        });
    });
});