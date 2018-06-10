$(document).ready(function () {
    $('#chat-form').on('submit', function (e) {
        e.preventDefault();
        if ($('#chat-field').val().length >= 3) {
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (json) {
                    $('#chat-field').val("");
                    var value = '<div class="msg own clearfix col-lg-12">' +
                        '<div class="txt col-lg-11 col-md-11 col-sm-10 col-xs-12">' +
                        '<div class="table">' +
                        '<div style="display: table-cell;  float: left">' +
                        '<span>now</span></div>' +
                        '<div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">' +
                        '<span>ik</span> </div> </div>' +
                        '<p>' + json.message + '</p> </div>' +
                        '<div class="picture hide-mobile col-lg-1 col-md-1 col-sm-2 col-xs-0">' +
                        '<img src="/img/avatars/' + json.user.image + '" class="group-img round-img">' +
                        '</div></div>';
                    $('#chats').prepend(value);
                }
            });
        }
    });
});