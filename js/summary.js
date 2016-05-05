/**
 * Created by jessewoo on 5/4/16.
 */

function load_summary(last_id) {
    // AJAX call to GET data from DB
    $.post('/includes/action/getdata.php', {lastid: last_id},
        function(data) {
            // console.log(data);
            $('#responsecontainer').html(data);
        }
    );

}

$(document).ready(function() {
    $("#StartForm").hide();

    var last_id = getParameterByName('id');

    // Load the summary page with AJAX
    if (last_id) {
        console.log("Loading Recent ID:", last_id);
        load_summary(last_id);
    }


    $("#editDataButton").attr("href", "/edit.php?id=" + last_id);

});