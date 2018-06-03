/*$(document).ready(function () {

    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties
    var animating; //flag to prevent quick multi-click glitches

    $('#step').html()
    $(".next").click(function () {
        if (animating) return false;
        animating = true;
        //huidige fieldset
        current_fs = $(this).parent().parent().parent().parent();
        //volgende fieldset
        next_fs = $(this).parent().parent().parent().parent().next();

        //toont volgende fieldset
        next_fs.show();
        //animeren huidige fieldset
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                //opacity opgeslagen in now
                //huidige fieldset downscalen
                scale = 1 - (1 - now) * 0.2;
                //volgende fieldset in positie brengen
                left = (now * 50) + "%";
                //volgende fieldset zichtbaar maken
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                });
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 0,
            complete: function () {
                current_fs.hide();
                animating = false;
            }
        });
    });

    $(".previous").click(function () {
        if (animating) return false;
        animating = true;

        //huidige fieldset
        current_fs = $(this).parent().parent().parent().parent();
        //vorige fieldset
        previous_fs = $(this).parent().parent().parent().parent().prev();

        //toont vorige fieldset
        previous_fs.show();
        //animeren van huidige fieldset
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                //opacity opgeslagen in now
                //vorige fieldset upscalen
                scale = 0.8 + (1 - now) * 0.2;
                //huidige fieldset uit positie brengen
                left = ((1 - now) * 100) + "%";
                //vorige fieldset zichtbaar maken
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'transform': 'scale(' + scale + ')', 'opacity': opacity});
            },
            duration: 0,
            complete: function () {
                current_fs.hide();
                animating = false;
            }
        });
    });

    //voltooien
    $(".submit").click(function () {
        $("msform").submit();
    })

});
*/
$(document).ready(function() {
    var count = 0; // To Count Blank Fields
    /*------------ Validation Function-----------------*/
    $(".submit_btn").click(function(event) {
        var radio_check = $('.rad'); // Fetching Radio Button By Class Name
        var input_field = $('.text_field'); // Fetching All Inputs With Same Class Name text_field & An HTML Tag textarea
        var text_area = $('textarea');
// Validating Radio Button
        if (radio_check[0].checked == false && radio_check[1].checked == false) {
            var y = 0;
        } else {
            var y = 1;
        }
// For Loop To Count Blank Inputs
        for (var i = input_field.length; i > count; i--) {
            if (input_field[i - 1].value == '' || text_area.value == '') {
                count = count + 1;
            } else {
                count = 0;
            }
        }
// Notifying Validation
        if (count != 0 || y == 0) {
            alert("*All Fields are mandatory*");
            event.preventDefault();
        } else {
            return true;
        }
    });
    /*---------------------------------------------------------*/
    $(".next_btn").click(function() { // Function Runs On NEXT Button Click
        $(this).parent().next().fadeIn('slow');
        $(this).parent().css({
            'display': 'none'
        });
// Adding Class Active To Show Steps Forward;
        $('.active').next().addClass('active');
    });
    $(".pre_btn").click(function() { // Function Runs On PREVIOUS Button Click
        $(this).parent().prev().fadeIn('slow');
        $(this).parent().css({
            'display': 'none'
        });
// Removing Class Active To Show Steps Backward;
        $('.active:last').removeClass('active');
    });
// Validating All Input And Textarea Fields
    $(".submit_btn").click(function(e) {
        if ($('input').val() == "" || $('textarea').val() == "") {
            alert("*All Fields are mandatory*");
            return false;
        } else {
            return true;
        }
    });
});