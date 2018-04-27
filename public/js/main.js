$(document).ready(function () {
    //referentie: https://tympanus.net/codrops/2015/09/15/styling-customizing-file-inputs-smart-way/
    $('.inputFile').each(function () {
        var $input = $(this),
            $label = $input.next('label'),
            labelVal = $label.html();

        $input.on('change', function (e) {
            var fileName = '';

            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else if (e.target.value)
                fileName = e.target.value.split('\\').pop();

            if (fileName)
                $label.find('span').html(fileName);
            else
                $label.html(labelVal);
        });

        // Firefox bug fix
        $input
            .on('focus', function () {
                $input.addClass('has-focus');
            })
            .on('blur', function () {
                $input.removeClass('has-focus');
            });
    });


    $('.box').hover(function () {
        $('.full-image').html($(this).html());
    });


    //profile pic upload on register screen
    $(function () {
        $('#picture-input').change(function (e) {
            var img = URL.createObjectURL(e.target.files[0]);
            $('#register-img').attr('src', img);

        });
    });


    //Tutoring people list
    $('.people-list li').click(function (e) {
        e.preventDefault();
        //haalt alle active classes weg
        $(".people-list li").each(function () {
            if ($(this).hasClass('people-list-active')) {
                $(this).removeClass('people-list-active');
            }
        });
        //kent active class toe aan li waarop geklikt werd
        if (!$(this).hasClass('new') && !$(this).hasClass('load-more')) {
            $(this).toggleClass("people-list-active");
        }
        else {
            //console.log("Nope");
        }
        //data attribute in html
        $data = $(this).data('request-id');
        //console.log($(this).data('request-id'));
        //$('#people-list-detail article').append("<p>" + $data +"</p>");
    })
});