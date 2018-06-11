$(document).ready(function () {
    //accs
    var accordions = $('.accordion');
    //accordion loop
    $.each(accordions, function (i) {
        $(this).click(function () {
            $(this).toggleClass('active');
            //parent element
            var panel = $(this).next();
            //Open-sluit
            if (panel.css('display') === 'block') {
                panel.hide("slow", function () {

                });
            }
            else {
                panel.show("slow", function () {

                });
            }
        });
    });
});
//geïnspireerd op: https://codepen.io/jonhyleo/pen/zjmRqQ?page=3


