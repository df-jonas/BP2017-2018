$(document).ready(function () {
    console.log('filter ready');
    $(".filterlistener").on("change", function () {
        console.log('jaa');
        $.ajax({
            type: "POST",
            url: "/p/sharing/filter",
            data: $(".filterlistener").serialize(),
            success: function (json) {
                var newhtml = "";
                if (json.length > 0) {
                    newhtml = '<span id="filter-details" class="item padding col-xs-12">Er werden ' + json.length + ' resultaten gevonden.</span><br><br>';
                    $.each(json, function (key, value) {
                        newhtml += '<article class="overview file item clearfix">' +
                            '<a href="{{ $file->detailUrl() }}">'+
                            '<header>' + value.course.name +
                            '<i class="fa fa-download"></i></header></a><div class="padding">' +
                            '<div class="row flex">' +
                            '<div class="icon col-lg-1 col-md-2 col-sm-2 col-xs-3">' +
                            '<img src="/img/icons/001-file.png" style="width: 36px; height: 36px">' +
                            '</div>' +
                            '<div class="col-lg-5 col-md-6 col-sm-6 col-xs-10">' +
                            '<h4 class="title no-margin"><a href="/p/sharing/' + value.id + '">' + value.title + '</a></h4>' +
                            '<h5 class="brown">Erasmushogeschool Brussel</h5>' +
                            '<div class="row"><div class="col-xs-12"> door ' + value.user.first_name + ' ' + value.user.last_name + '</div></div>' +
                            '</div>' +
                            '<div class="col-lg-6 col-lg-push-0 col-md-4 col-sm-4 col-sm-push-0 col-xs-8 col-xs-push-2">' +
                            '<div class="vertical-center rating">';
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
                    newhtml = '<span id="filter-details" class="item padding col-xs-12">Er werden geen resultaten gevonden.</span>';
                }
                $("#filter-results").html(newhtml);
            }
        });
    });
});