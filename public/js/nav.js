$(document).ready(function () {

    //menu aanpassen bij pagina resize


    $(window).resize(function () {
        if (($(window).width() < 768 )) {
            $('#page_header .links').css("display", "none");
            $("#page_header .cross").hide();
            $("#page_header .hamburger").show();
        }
        else {
            $('#page_header .links').css("display", "block");
            $("#page_header .cross").hide();
            $("#page_header .hamburger").hide();
        }
    });


    //main menu hamburger click
    $('#page_header .hamburger').click(function () {
        //console.log("open menu");
        $("#page_header .links").slideToggle("slow", function () {
            $("#page_header .cross").toggle();
            $("#page_header .hamburger").toggle();
        })
    })

    //main menu cross click
    $('#page_header .cross').click(function () {
        //console.log("close menu");
        $("#page_header .links").slideToggle("fast", function () {
            $("#page_header .cross").toggle();
            $("#page_header .hamburger").toggle();
        })
    })

    //banner scroll down
    $("#page_banner .scroll").click(function () {
        $("html, body").animate({scrollTop: 720}, 600);
    });


    //Hoe werkt het smooth scroll (home page)
    $(document).on('click', 'a[href^="#"]', function (event) {
        console.log("hehehe");
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });


    //dropdown account in nav
    $('.account').click(function () {
        $('.dropdown-content').toggle();
    })


});