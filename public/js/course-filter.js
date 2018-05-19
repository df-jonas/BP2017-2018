$(document).ready(function () {
    $(".filterlistener").on("change keyup", function () {
        console.log('change');
        $.ajax({
            type: "POST",
            url: "/p/profile/filter",
            data: $(".filterlistener").serialize(),
            success: function (json) {
                var newhtml = "";
                if (json.length > 0) {
                    newhtml = '<ul class="vakken-nieuw"><h2 class="settings-title">Zoekresultaten:</h2><br>';
                    $.each(json, function (key, value) {
                        newhtml += '<li>' +
                            '' + value.name + '<span><a href="/p/profile/course/add/' + value.id + '"><input type="button" class="download-button" value="Toevoegen"></a></span>';
                        newhtml += '</li>';
                    });
                } else {
                    newhtml = '<span id="filter-details" class="item padding col-xs-12">Er werden geen vakken gevonden.</span>';
                }
                $("#filter-results").html(newhtml);
            }
        });
    });
});



