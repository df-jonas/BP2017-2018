$(document).ready(function () {

    //console.log('nav script ready');
    //menu aanpassen bij pagina resize

    //main menu hamburger click
    $('#page-header .hamburger, #platform-header .hamburger').click(function () {
        console.log("open menu");
        $("#page-header .links, #platform-header .sub").slideToggle("fast", function () {
            $("#page-header .cross, #platform-header .cross").toggle();
            $("#page-header .hamburger, #platform-header .hamburger").toggle();
        })
    });

    //main menu cross click
    $('#page-header .cross, #platform-header .cross').click(function () {
        //console.log("close menu");
        $("#page-header .links, #platform-header .sub").slideToggle("fast", function () {
            $("#page-header .cross, #platform-header .cross").toggle();
            $("#page-header .hamburger, #platform-header .hamburger").toggle();
        })
    });

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


    //dropdown account in nav
    /*
    $('.account').click(function () {
        $('.dropdown-content').toggle();
    })
    */


});