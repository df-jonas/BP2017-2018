$(document).ready(function () {
    $(".filterlistener").on("change", function () {
        $.ajax({
            type: "POST",
            url: "/p/community/filter",
            data: $(".filterlistener").serialize(),
            success: function (json) {

                moment.locale('nl');

                var newhtml = "";
                if (json.length > 0) {
                    newhtml += '<div class="item"><header> <a class="header-title">Zoekresultaten</a></header>';
                    $.each(json, function (key, value) {
                        newhtml += '<article class="group">' +
                            '<div class="padding"><div class="row flex">' +
                            '<section class="col-lg-1 col-md-1 col-sm-1 col-xs-2">' +
                            '<img src="/img/avatars/' + value.user.image + '" class="group-img round-img" alt="User profile picture">' +
                            '</section>' +
                            '<section class="col-lg-5 col-md-5 col-sm-7 col-xs-10">' +
                            '<h2 class="item-title no-margin"><a href="/p/community/' + value.group.url + '/' + value.id + '">' + value.title + '</a>' +
                            '</h2>' +
                            '<section class="row icons">' +
                            '<section class="col-lg-2 col-sm-2 col-xs-3">' +
                            '<i class="fa fa-comment"><span>' + value.commentcount + '</span></i>' +
                            '</section>' +
                            '<section class="col-lg-2 col-sm-2 col-xs-3">' +
                            '<i class="fa fa-thumbs-up"><span>' + value.votesum + '</span></i>' +
                            '</section>' +
                            '</section>' +
                            '</section>' +
                            '<section class="info hide-mobile col-lg-6 col-md-6 col-sm-4 col-xs-12" style="text-align: right;">' +
                            '<h6>' + moment(new Date(value.created_at)).fromNow() + '</h6>' +
                            '<h6>door' +
                            '<span> ' + value.user.first_name + ' ' + value.user.last_name + '</span>' +
                            '</h6></section></div></div></article>';
                    });
                    newhtml += '</div>';
                } else {
                    newhtml = '<span id="filter-details" class="item padding col-xs-12">Er werden geen resultaten gevonden.</span>';
                }
                $("#groupcontainer").html(newhtml);
            }
        });
    });
});