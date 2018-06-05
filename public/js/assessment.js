$(document).ready(function () {
    $('.vaardigheden-dropdown').select2({
        placeholder: 'Kies vaardigheden',
        maximumSelectionLength: 7,
        language: "nl",
        width: "100%"
    });

    $('.group-dropdown').select2({
        placeholder: 'Selecteer groepsleden',
        language: "nl",
        width: "100%"
    });
    $('#new-assessment-group').on('click', function () {
        var groupcount = $('.group-dropdown').length;
        var firstgroupoptions = $("#firstgroup option");
        var currentgroupcount = groupcount + 1;
        var newhtml = '<div class="form-group col-xs-12 clearfix">' +
            '<div class="selectdiv">' +
            '<label for="group">Groep ' + currentgroupcount + '</label>' +
            '<select class="select form-control group-dropdown col-xs-12" name="group2[]" multiple="multiple">';
        firstgroupoptions.each(function () {
            newhtml += '<option value="AL">' + $(this).val() + '</option>'
        });
        newhtml += '</select>' +
            '</div>' +
            '</div>';
        $('.groups').append(newhtml);
        $('.group-dropdown').select2({
            placeholder: 'Selecteer groepsleden',
            language: "nl",
            width: "100%"
        });
    });
});
