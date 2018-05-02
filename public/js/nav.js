$(document).ready(function () {
    //small banner on scroll
    $(document).on("scroll", function () {
        if ($(document).width() > 768) {
            if ($(document).scrollTop() > 300) {
                $("#page-header").removeClass("large").addClass("small");
            }
            else {
                $("#page-header").removeClass("small").addClass("large");
            }
        }
    });
    //banner scroll down
    $("#page-banner .scroll").click(function () {
        $("html, body").animate({scrollTop: 1000}, 600);
    });
    //smooth scroll (home page)
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
});