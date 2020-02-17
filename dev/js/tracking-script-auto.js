// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("tracking-script-auto")) {
        var autoMLID = $('#clientID').val();
var pattern = /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i;
$('.single-form > strong').click(function(e){
    $(this).siblings('.all-fields').slideToggle();
});    
$('#clientID').on('keyup', function(){    
    autoMLID = $(this).val();    
    if (pattern.test(autoMLID) === true) {
        $(this).css('background-color', '#b2ffb2');
        $(this).siblings('p').remove();
    } else {
        $(this).css('background-color', '#ffadad');
        $(this).siblings('p').remove();
        $(this).after('<p style="font-size:12px; color:#ff0000;">Invalid Marketing List ID - If you are having issues, please contact your account manager</p>');
    }
});
var autoTrackCode = document.getElementById('autoTrackCode');
var autoTrackCodeVal = autoTrackCode.value;
var autoTrack = CodeMirror.fromTextArea(autoTrackCode, {
    mode: 'javascript',
    tabMode: 'indent',
    lineNumbers: true,
    lineWrapping: true,
    autoCloseTags: true,
    theme: "xq-dark",
    readOnly: true
});
autoTrack.getDoc().setValue(autoTrackCodeVal);
    }
});
