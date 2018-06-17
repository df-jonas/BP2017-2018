$(document).ready(function () {
    //Get all steps
    var steps = $('.steps li .step');
    //Loop through steps
    $.each(steps, function (i) {
        $(this).click(function () {
            $(this).toggleClass('active');
            //get data image name
            var img = $(this).attr('data-image');
            var url = 'img/how-it-works/' + img + '.png';
            //change mockup
            $('#how-mockup').attr('src', url);
        });
    });
});