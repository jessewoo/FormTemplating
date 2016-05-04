/**
 * Created by jessewoo on 5/3/16.
 */

$( 'button#submit').click(function(e) {
    e.preventDefault();
    var uName = $('input#uName').val();
    var uMessage = $('input#uMessage').val();

    if ($.trim(uName) != '' && $.trim(uMessage) != '') {
        $.post('post.php', {username: uName, message: uMessage}, function(data) {
            $('div#viewer').text(data);
        });
    }
});