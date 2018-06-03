$(document).ready(function () {
    function updateCourse() {
        $(".static-course").text($("#course").find(":selected").text());
    }

    function updateDescription(){
        $(".static-description").text($("#description").val());
    }

    function updatePreference() {
        if($("#studying").is(':checked')){
            $(".static-studying").css('display', 'block');
        }

        if($("#exercises").is(':checked')){
            $(".static-exercises").css('display', 'block')
        }
        if($("#explanation").is(':checked')){
            $(".static-explanation").css('display', 'block')
        }
    }

    $("#course").on("change", updateCourse);
    $("#description").on("change", updateDescription);
    $("#studying").on("change", updatePreference);
    $("#explanation").on("change", updatePreference);
    $("#exercises").on("change", updatePreference);


    var current = 0;
    var max = 0;

    function onStepChange() {
        switch (max) {
            case 0:
                updateCourse();
                break;
            case 1:
                updateDescription();
                break;
            case 2:
                updatePreference();
                break;
        }
    }

    onStepChange();

    $(".next").click(function () {
        current++;
        if (current > max) {
            max = current;
        }
        onStepChange();
    });

    $(".previous").click(function () {
        current--;
        onStepChange();
    });
});