$(document).ready(function () {
    function updateCourse() {
        $(".static-course").text($("#course").find(":selected").text());
    }

    function updateDescription() {
        $(".static-description").text($("#description").val());
    }

    function updatePreference() {
        if ($("#studying").is(':checked')) {
            $(".static-studying").show();
        }
        else {
            $(".static-studying").hide();
        }

        if ($("#exercises").is(':checked')) {
            $(".static-exercises").show();
        }
        else {
            $(".static-exercises").hide();
        }
        if ($("#explanation").is(':checked')) {
            $(".static-explanation").show();
        }
        else {
            $(".static-explanation").hide();
        }
    }

    $("#course").on("change", updateCourse);
    $("#description").on("change", updateDescription);
    $("#studying, #explanation, #exercises").on("change", updatePreference);


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