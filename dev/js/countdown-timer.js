// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
});

var countdownUrl = 'https://tools.force24.co.uk/gif.php?time=2019-12-25+00:00:01&width=700&height=60&boxColor=ffffff&font=BebasNeue&fontColor=000000&yOffset=60&fontSize=60&xOffset=0';
var newCountdownTime = '2019-12-13' + '+' + '16:00:00';
var newCountdownBG = 'ffffff';
var newCountdownTextColor = '000000';
var newCountdowntextSize = '60';
var CountdownWidth = '365';
var newCountdownWidth = "365";
var newCountdownUrl = "";
var xOffset = "-30";

function updateCountdown(){
    newCountdownUrl = countdownUrl.replace(/(width=).*?(&)/,'$1' + newCountdownWidth + '$2')
                                .replace(/(time=).*?(&)/,'$1' + newCountdownTime + '$2')
                                .replace(/(boxColor=).*?(&)/,'$1' + newCountdownBG + '$2')
                                .replace(/(fontColor=).*?(&)/,'$1' + newCountdownTextColor + '$2')
                                .replace(/(fontSize=).*?(&)/,'$1' + newCountdowntextSize + '$2')
                                .replace(/(height=).*?(&)/,'$1' + newCountdowntextSize + '$2')
                                .replace(/(yOffset=).*?(&)/,'$1' + newCountdowntextSize + '$2')
                                .replace(/(xOffset=-).*?(&)/,'$1' + xOffset + '$2');
    $('.countdownTimerPreview').attr('src', 'https://tools.force24.co.uk/gif.php?time=' + newCountdownTime + '&width=' + newCountdownWidth + '&height=' + newCountdowntextSize + '&boxColor=' + newCountdownBG + '&font=BebasNeue&fontColor=' + newCountdownTextColor + '&fontSize=' + newCountdowntextSize + '&xOffset=-' + xOffset + '&yOffset=' + newCountdowntextSize);
    $('.countdownTimerSrc').text('<table align="center" width="' + newCountdownWidth + '" cellpadding="0" cellspacing="0" border="0"><tr><td align="center"><img width="' + newCountdownWidth + '" style="width:' + newCountdownWidth + 'px" src="https://tools.force24.co.uk/gif.php?time=' + newCountdownTime + '&width=' + newCountdownWidth + '&height=' + newCountdowntextSize + '&boxColor=' + newCountdownBG + '&font=BebasNeue&fontColor=' + newCountdownTextColor + '&fontSize=' + newCountdowntextSize + '&xOffset=-' + xOffset + '&yOffset=' + newCountdowntextSize + '" alt="" class="imgmax"></td></tr></table>')
    console.log('<img width="' + newCountdownWidth + '" style="width:' + newCountdownWidth + 'px" src="https://tools.force24.co.uk/gif.php?time=' + newCountdownTime + '&width=' + newCountdownWidth + '&height=' + newCountdowntextSize + '&boxColor=' + newCountdownBG + '&font=BebasNeue&fontColor=' + newCountdownTextColor + '&fontSize=' + newCountdowntextSize + '&xOffset=-' + xOffset + '&yOffset=' + newCountdowntextSize + '" alt="" class="imgmax">');
};

function updateCountdownBackground(jscolor) {
    newCountdownBG = jscolor;
    updateCountdown();
}
function updateCountdownTextColor(jscolor) {
    newCountdownTextColor = jscolor;
    updateCountdown();
}

$('.date_countdown_input').datetimepicker({
    format: 'YYYY-MM-DD+HH:mm:SS',
}).on('change', function(){
    newCountdownTime = $(this).val();
    CountdownWidth = $('.countdown_timer_font_size').val();
    xOffset = (CountdownWidth / 2);
    newCountdownWidth = Math.round(((CountdownWidth / 2) * 11.35) - xOffset);
    console.log(xOffset);
    updateCountdown();
});
$('.countdown_timer_font_size').on('keyup', function(){
    newCountdowntextSize = $(this).val();
    CountdownWidth = $(this).val();
    xOffset = (CountdownWidth / 2);
    newCountdownWidth = Math.round(((CountdownWidth / 2) * 11.35) - xOffset);
    console.log(newCountdownWidth);
    updateCountdown();
});
$('.countdown_timer_width').on('keyup', function(){
    newCountdownWidth = $(this).val();
    console.log($(this).val())
    updateCountdown();
});

$('.openTimer').click(function(){
    window.open(newCountdownUrl);
});