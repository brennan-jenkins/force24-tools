// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("device-viewer")) {
        var deviceName = $('select[name=selectDevice]');
        var deviceOrientation = $('select[name=orientation]');
        var websiteUrl = $('.websiteUrl');
        var directInput = $('#directInput');
        var phoneContainer = $('.phone-container');
        $(deviceName).change(function(){
            var deviceWidth = $(this).find(':selected').data('width');
            var deviceHeight = $(this).find(':selected').data('height');
            phoneContainer.removeClass().addClass('phone-container').addClass(deviceName.find(':selected').data('device-name'));
            if($(deviceOrientation).find(':selected').data('orientation') == "landscape"){
                $('iframe').width(deviceHeight).height(deviceWidth);
            }
            else{
                $('iframe').width(deviceWidth).height(deviceHeight);
            }
        });

        $(deviceOrientation).change(function(){
            var deviceWidth = deviceName.find(':selected').data('width');
            var deviceHeight = deviceName.find(':selected').data('height');
            console.log(deviceWidth);
            console.log(deviceHeight);
            if($(this).find(':selected').data('orientation') == "landscape"){
                $('iframe').width(deviceHeight).height(deviceWidth);
            }
            else{
                $('iframe').width(deviceWidth).height(deviceHeight);
            }
        });

        $(websiteUrl).on('keyup', function(){
            $('iframe').attr('src', $(this).val());
        });


        $(directInput).on('keyup', function(){
            $('iframe').attr('src', 'data:text/html;charset=utf-8,' + escape(directInput.val()));
        });
    }
    
});
