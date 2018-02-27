$(document).ready(function () {
    $(".filterlistener").on("change", function () {
        $.ajax({
            type: "POST",
            url: "/p/sharing/filter",
            data: $(".filterlistener").serialize(),
            success: function (json) {
                var newhtml = "";
                if (json.length > 0) {
                    newhtml = '<span class="filter filter-results col-xs-12">Er werden ' + json.length + ' resultaten gevonden.</span><br><br>';
                    $.each(json, function (key, value) {
                        newhtml += '<article class="file clearfix">' +
                            '<header>' + value.field.name + ' > ' + value.degree.name + ' > ' + value.course.name + '<a href="/p/sharing/proxy/' + value.public_id + '">' +
                            '<i class="fa fa-download"></i></a></header><div class="padding">' +
                            '<div class="row flex">' +
                            '<div class="icon col-md-1 col-xs-12">' +
                            '<img src="/img/icons/001-file.png" style="width: 36px; height: 36px">' +
                            '</div>' +
                            '<div class="col-md-5 col-xs-12">' +
                            '<h3><a href="/p/sharing/' + value.id + '">' + value.title + '</a></h3>' +
                            '<p>door ' + value.user.first_name + ' ' + value.user.last_name + '</p>' +
                            '</div>' +
                            '<div class="col-md-6 col-xs-12" style="text-align: right">' +
                            '<div class="rating">';
                        for (var i = 1; i <= 5; i++) {
                            if (i <= value.averageRating) {
                                newhtml += '<span class="fa fa-star checked"></span>';
                            } else {
                                newhtml += '<span class="fa fa-star"></span>';
                            }
                        }
                        newhtml += '</div></div></div></div></article>';
                    });
                } else {
                    newhtml = '<span class="filter filter-noresults col-xs-12">Er werden geen resultaten gevonden.</span>';
                }
                $("#filecontainer").html(newhtml);
            }
        });
    });
});