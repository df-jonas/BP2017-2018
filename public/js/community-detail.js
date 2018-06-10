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
                        '<div class="picture col-lg-1"><img src="/img/avatars/' + json.comment.user.image + '" class="group-img round-img"></div>' +
                        '<div class="txt col-lg-11"><div class="table"><div style="display: table-cell;  float: left">' +
                        '<span>' + json.comment.user.first_name + ' ' + json.comment.user.last_name + '</span></div>' +
                        '<div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">' +
                        '<span>now</span></div></div>' +
                        '<p>' + json.comment.content + '</p></div></div>';
                    $('#messages').prepend(value);
                    $('#comment_count').text(json.comments);
                }
            });
        }
    });
    /*Post like */
    $(".like").on("click", function () {
        $post_id = $(this).attr('data-post-id');
        $.ajax({
            method: 'POST',
            url: "/p/community/like",
            data: {
                'post_id': $post_id,
                '_token': $('#csrf_token').val()
            },
            success: function (json) {
                $('#vote_count').text(json.votes);
            }
        });

    });
    /* Scroll down comments */
    $(".comment").on("click", function () {
        $('html,body').animate({scrollTop: $(".comment").offset().top}, 'slow');
        $("#commentfield").focus();
    });
});