$(document).ready(function () {

    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties
    var animating; //flag to prevent quick multi-click glitches

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
        return false;
    })

});