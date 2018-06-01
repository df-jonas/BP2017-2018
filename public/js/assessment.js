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
        var currentgroupcount = groupcount + 1;
        var newhtml = '<div class="form-group col-xs-12 no-padding clearfix">' +
            '<div class="selectdiv">' +
            '<label for="title">Groep ' + currentgroupcount +'</label>' +
            '<select class="select form-control group-dropdown col-xs-12" name="group2[]" multiple="multiple">' +
            '<option value="AL">Arno</option>' +
            '<option value="WY">Jonas</option>' +
            '<option value="WY">Brent</option>' +
            '<option value="WY">Mike</option>' +
            '<option value="WY">Ian</option>' +
            '<option value="AL">Arno</option>' +
            '<option value="WY">Jonas</option>' +
            '<option value="WY">Brent</option>' +
            '<option value="WY">Mike</option>' +
            '<option value="WY">Ian</option>' +
            '<option value="AL">Arno</option>' +
            '<option value="WY">Jonas</option>' +
            '<option value="WY">Brent</option>' +
            '<option value="WY">Mike</option>' +
            '<option value="WY">Ian</option>' +
            '<option value="AL">Arno</option>' +
            '</select>' +
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