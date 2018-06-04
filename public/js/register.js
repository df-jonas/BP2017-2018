$(document).ready(function () {
    var count = 0; // To Count Blank Fields
    /*------------ Validation Function-----------------*/
    $(".submit_btn").click(function (event) {
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
    $(".next").click(function () { // Function Runs On NEXT Button Click
        $(this).parent().parent().next().fadeIn('slow');
        $(this).parent().parent().css({
            'display': 'none'
        });
// Adding Class Active To Show Steps Forward;
        $('.active').next().addClass('active');
        $('.active').prev().removeClass('active');

    });
    $(".prev").click(function () { // Function Runs On PREVIOUS Button Click
        $(this).parent().parent().prev().fadeIn('slow');
        $(this).parent().parent().css({
            'display': 'none'
        });
// Removing Class Active To Show Steps Backward;
        $('.active').prev().addClass('active');
        $('.active:last').removeClass('active');
    });
// Validating All Input And Textarea Fields
    $(".submit").click(function () {
        $("msform").submit();
    })
});

//bron: https://www.formget.com/multi-step-form-using-jquery-and-css3/