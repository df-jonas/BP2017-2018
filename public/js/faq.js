
$( document ).ready(function() {
    //Get all accordion elements
    var accordions = $('.accordion');
    //Loop through elements
    $.each(accordions, function (i) {
        $(this).click(function () {
            $(this).toggleClass('active');
            //Panel parent element
            var panel = $(this).next();
            //Open-close
            if(panel.css('display') == 'block'){
                panel.hide( "slow", function() {

                });
            }
            else{
                panel.show( "slow", function() {

                });
            }
        });
    });
});


