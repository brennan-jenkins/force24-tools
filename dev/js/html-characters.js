// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("html-characters")) {
        $('.character-table').find('td').click(function(){
            var tmpInput = $("<input>");
            $("body").append(tmpInput);
            var tdVal = $(this).text();
            tmpInput.val(tdVal).select();
            document.execCommand("copy");
            tmpInput.remove();
            $('#copiedToClip').modal('show').find('.modal-title').text(tdVal + ' copied to clipboard');
            setInterval(function () {
                $('#copiedToClip').modal('hide');
            }, 1000);
        });
    }
});
