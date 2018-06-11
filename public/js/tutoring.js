$(document).ready(function () {

    $(".tutoringsession").on("click", function () {

        $(".people-list-active").each(function () {
            $(this).removeClass('people-list-active');
        });

        $(this).toggleClass("people-list-active");

        var id = $(this).attr("data-id");

        $.ajax({
            type: "POST",
            url: "/p/tutoring/panel/" + id,
            data: {'_token': $('#csrf_token').val()},
            success: function (session) {

                console.log(session);

                var s = session;
                var o;

                if (s.tutee.user_id === $('#userid').val())
                    o = s.tutor;
                else
                    o = s.tutee;

                var u = o.user;

                $('#image').attr("src", "/img/avatars/" + u.image);
                $('#name').text(u.first_name + " " + u.last_name);
                $('#course').text(o.course.name);
                $('#url_chat').attr("href", "/p/tutoring/" + s.id + "/messages");
                $('#url_planner').attr("href", "");
                $('#url_stop').attr("href", "/p/tutoring/stop/" + s.id);
                $('#introduction').text(s.tutee.description);
                $('.userpanel').css({"visibility": "visible"});

                // var newhtml = "";
                // if (json.length > 0) {
                //     newhtml = '<ul class="vakken-nieuw"><h2 class="settings-title">Zoekresultaten:</h2><br>';
                //     $.each(json, function (key, value) {
                //         newhtml += '<li>' +
                //             '' + value.name + '<span><a href="/p/profile/course/add/' + value.id + '"><input type="button" class="download-button" value="Toevoegen"></a></span>';
                //         newhtml += '</li>';
                //     });
                // } else {
                //     newhtml = '<span id="filter-details" class="item padding col-xs-12">Er werden geen vakken gevonden.</span>';
                // }
                // $("#filter-results").html(newhtml);
            }
        });
    });
});



