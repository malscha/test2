$(document).ready(function () {
    // Handle form submission
    $('form').submit(function (event) {
        // Prevent default form submission
        event.preventDefault();

        // Get the time input from the form
        var time = $('#time-input').val();

        // Make an AJAX call to convertTime.php
        $.ajax({
            url: 'convertTime.php',
            type: 'POST',
            data: { 'time-input': time },
            dataType: 'html',
            success: function (data) {
                // Destroy any existing DataTable
                if ($.fn.DataTable.isDataTable('#time-table')) {
                    $('#time-table').DataTable().destroy();
                }

                // Display the new table data as a DataTable
                $('#time-table').html(data);
                $('#time-table table').DataTable({
                    paging: false,
                    searching: false,
                    info: false
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log('AJAX error: ' + textStatus + ' - ' + errorThrown);
            }
        });
    });
});

function init() {
    // Initialize the DataTable
    $('#time-table table').DataTable({
        paging: false,
        searching: false,
        info: false
    });
}

function destroy() {
    // Destroy the DataTable
    if ($.fn.DataTable.isDataTable('#time-table')) {
        $('#time-table').DataTable().destroy();
    }
}