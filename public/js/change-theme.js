$(document).ready(function () {
    var themes = $('.color-choose');
    $.each(themes, function (i) {
        $(this).click(function () {
            var value = $(this).data('theme');
            $.ajax({
                type: "POST",
                url: "/p/profile/theme",
                data: {
                    'theme' : value,
                    '_token': $('#csrf_token').val()
                },
                success: function () {
                    location.reload();
                }
            });
        });
    });

});



