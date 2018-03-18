$(document).ready(function () {
    $('#comment-form').on('submit', function (e) {
        e.preventDefault();

        if ($('#commentfield').val().length >= 3) {
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (json) {
                    $('#commentfield').val("");
                    var value = '<div class="msg col-lg-12">' +
                        '<div class="picture col-lg-1"><img src="/img/avatars/' + json.user.image + '" class="group_img"></div>' +
                        '<div class="txt col-lg-11"><div class="table"><div style="display: table-cell;  float: left">' +
                        '<span>' + json.user.first_name + ' ' + json.user.last_name + '</span></div>' +
                        '<div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">' +
                        '<span>now</span></div></div>' +
                        '<p>' + json.content + '</p></div></div>';
                    $('#messages').prepend(value);
                }
            });
        }
    });
});