$(document).ready(function () {

    function updateCourse() {
        $(".static-course").text($("#course").find(":selected").text());
    }

    function updateTitle() {
        $(".static-title").text($("#title").val());
    }

    function updateType() {
        $(".static-type").text($("#doctype").find(":selected").text());
    }

    function updateDegree() {
        $(".static-degree").text($("#degree").find(":selected").text());
    }

    function updatePubYear() {
        $(".static-publicationyear").text($("#originaldate").find(":selected").text());
    }

    function updatebook() {
        var temptext = "";
        if ($("#book").find(":selected").val() == "0") {
            temptext = "Geen boek";
        } else {
            temptext = $("#booktitle").val();
        }
        $(".static-book").text(temptext);
    }

    $("#course").on("change", updateCourse);
    $("#title").on("change", updateTitle);
    $("#doctype").on("change", updateType);
    $("#degree").on("change", updateDegree);
    $("#originaldate").on("change", updatePubYear);
    $("#book, #booktitle").on("change", updatebook);

    var current = 0;
    var max = 0;

    function onStepChange() {
        switch (max) {
            case 0:
                updateCourse();
                break;
            case 1:
                updateTitle();
                updateType();
                updateDegree();
                updatePubYear();
                break;
            case 2:
                updatebook();
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