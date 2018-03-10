$(document).ready(function () {
    $(".filterlistener").on("change", function () {
        $.ajax({
            type: "POST",
            url: "/p/sharing/filter",
            data: $(".filterlistener").serialize(),
            success: function (json) {
                var newhtml = "";
                if (json.length > 0) {
                    newhtml = '<span class="filter filter-results padding col-xs-12">Er werden ' + json.length + ' resultaten gevonden.</span><br><br>';
                    $.each(json, function (key, value) {
                        newhtml += '<article class="file item">' +
                            '<a href="/p/sharing/' + value.id + '">' +
                            '<header>' + value.course.name  +
                            '<i class="fa fa-download"></i></header></a><div class="padding">' +
                            '<div class="row flex">' +
                            '<div class="icon col-lg-1 col-xs-10">' +
                            '<img src="/img/icons/002-group-filled-persons.png" style="width: 36px; height: 36px">' +
                            '</div>' +
                            '<div class="col-md-5 col-xs-12">' +
                            '<h4 class="title"><a href="/p/sharing/' + value.id + '">' + value.title + '</a></h4>' +
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
                    newhtml = '<span class="filter filter-noresults padding col-xs-12">Er werden geen resultaten gevonden.</span>';
                }
                $("#filecontainer").html(newhtml);
            }
        });
    });
});