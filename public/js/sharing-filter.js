$(document).ready(function () {
    $(".filterlistener").on("change", function () {
        $.ajax({
            type: "POST",
            url: "/p/sharing/filter",
            data: $(".filterlistener").serialize(),
            success: function (json) {
                var newhtml = "";
                if (json.length > 0) {
                    newhtml = '<span class="filter filter-results">Er werden ' + json.length + ' resultaten gevonden.</span><br><br>';
                    $.each(json, function (key, value) {
                        newhtml += '<article class="file clearfix">' +
                            '<header>' + value.field.name + ' > ' + value.degree.name + ' > ' + value.course.name + '<a href="/p/sharing/proxy/' + value.public_id + '">' +
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
                            '<h3><a href="/p/sharing/' + value.id + '">' + value.title + '</a></h3>' +
                            '<p>door ' + value.user.name + '</p>' +
                            '</div></div></article>';
                    });
                } else {
                    newhtml = '<span class="filter filter-noresults">Er werden geen resultaten gevonden.</span>';
                }
                $("#filecontainer").html(newhtml);
            }
        });
    });
});