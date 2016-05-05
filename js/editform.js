/**
 * Created by jessewoo on 5/4/16.
 */

function load_summary_on_edit_form(last_id) {
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
    $("#SubmitForm").removeClass("hide");

    var last_id = getParameterByName('id');

    // Load the summary page with AJAX
    if (last_id) {
        console.log("Loading Recent ID:", last_id);
        $("#mysqlID").val(last_id);
    }

    // Get array back from data
    $.post('/includes/action/getdataEdit.php', {lastid: last_id},
        function(data) {
            console.log(data);
            var obj = JSON.parse(data);
            $("#FirstNameInput").val(obj["firstname"]);
            $("#HomeAddressInput").val(obj["homeaddress"]);
            $("#CityInput").val(obj["city"]);
        }
    );

    // Hide all first
    $(".form-group").addClass("hide");
    $("#firstname-widgetcontainer").removeClass("hide");

    $("#questionsPagination").removeClass("hide");
    $("#firstname-question").addClass("active");

});

// LISTENER - when user clicks on pagination wizard
$("#questionsPagination ul li").on("click", function() {
    // console.log("clicked: " + $(this).attr('id'));
    var question_id = $(this).attr("id");
    var trimmed_id = question_id.replace("-question","");
    // console.log(trimmed_id);

    $("#WidgetContainer form .form-group").addClass("hide");

    // Pagination
    var selectedquestion_id = "#" + trimmed_id + "-question";
    $("#questionsPagination ul li").removeClass("active");
    $(selectedquestion_id).addClass("active");

    var loadhtmlfile = "/includes/form/" + trimmed_id + ".html";

    // Do not AJAX load panels that have ALREADY been AJAX loaded
    // This code checks to see if a section has previously been loaded or not
    if ($('#WidgetContainer #' + trimmed_id + "-widgetcontainer").length > 0) {
        // console.log("Previously loaded via AJAX: " + trimmed_id);
        $('#WidgetContainer #' + trimmed_id + "-widgetcontainer").removeClass("hide");
    }
    // This panel don't exist, lazy load its content via AJAX
    else {
        // console.log('Downloading content for: ' + loadhtmlfile);
        $.ajax({
            url: loadhtmlfile,
            dataType: "html",
            error: function (jq, text, error) {
                console.log('ERROR: ', jq, text, error);
            },
            success: function (data) {
                // console.log('SUCCESS');
                $("#WidgetContainer form").append(data);
            }
        });
    }
});

$(document).on('click', '#SubmitForm', function () {
    // event.preventDefault();
    var errormessage = "Please fill Out the following fields: ";

    var mysqlID_input = $("#mysqlID").val();
    console.log(mysqlID_input);

    var first_name_input = $("#FirstNameInput").val();
    if (!first_name_input) {
        errormessage = errormessage + " * First Name ";
    }
    var city_input = $("#CityInput").val();
    if (!city_input) {
        errormessage = errormessage + " * City ";
    }
    var home_address_input = $("#HomeAddressInput").val();
    if (!home_address_input) {
        errormessage = errormessage + " * Home Address ";
    }

    if (first_name_input && city_input && home_address_input) {
        console.log('All fields filled out');

        // AJAX call to insert to database
        $.post('/includes/action/update.php', {postmysqlID: mysqlID_input, postfirstname: first_name_input, postcity: city_input, posthomeaddress: home_address_input},
            function(data) {
                console.log(data);
                if (data == 0) {
                    $('#ErrorMessageContainer').html("Data Failed to be inserted.");
                }
                else {
                    window.location.href = data;
                }
            }
        );
    }
    // Form Validation
    else {
        console.log(errormessage);
        $("#ErrorMessageContainer").append("<div class='alert alert-danger text-center' role='alert'>" + errormessage + "</div>");
        $('#ErrorMessageContainer').fadeOut(4000, function(){
            $('#ErrorMessageContainer').empty().fadeIn();
        });
    }

});

// http://stackoverflow.com/questions/931252/ajax-autosave-functionality