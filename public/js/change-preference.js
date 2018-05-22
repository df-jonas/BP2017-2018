$(document).ready(function () {
    var notifications = $('.notification-choose ');
    $.each(notifications, function (i) {
        $(this).click(function () {
            var notification_type = $(this).data('notification');
            $.ajax({
                type: "POST",
                url: "/p/profile/preferences",
                data: {
                    'notification_type' : notification_type,
                    '_token': $('#csrf_token').val()
                },
                success: function () {
                    location.reload();
                }
            });
        });
    });

});



