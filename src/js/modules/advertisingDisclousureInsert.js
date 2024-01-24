$(document).ready(function() {
    $('#toggle-important').on('change', function() {
        if ($(this).is(':checked')) {
            $('#table-container-important-text').show();
        } else {
            $('#table-container-important-text').hide();
        }
    });
});