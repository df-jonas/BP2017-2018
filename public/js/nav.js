$(document).ready(function () {
    //banner scroll down
    $("#page-banner .scroll").click(function () {
        $("html, body").animate({scrollTop: 720}, 600);
    });


    //Hoe werkt het smooth scroll (home page)
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
});