// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("box-shadow")) {

    var boxShadowColourValue = "0,0,0";
    var boxShadowInsetValue = "";
    var boxShadowHorizontalValue = "0";
    var boxShadowVerticalValue = "0";
    var boxShadowSpreadValue = "10";
    var boxShadowBlurValue = "30";
    var boxShadowOpacityValue = "100";
    
    $('.horizontal-reset').click(function(){
        $('.box-shadow-horizontal-slider').slider( "value", "0" );
        setTimeout(function(){
            $('.box-shadow-preview').css('transition', '');
        }, 500);
        $('.box-shadow-preview').css('transition', '0.5s ease 0s');
    });
    $('.vertical-reset').click(function(){
        $('.box-shadow-vertical-slider').slider( "value", "0" );
        setTimeout(function(){
            $('.box-shadow-preview').css('transition', '');
        }, 500);
        $('.box-shadow-preview').css('transition', '0.5s ease 0s');
    });
    $('.spread-reset').click(function(){
        $('.box-shadow-spread-slider').slider( "value", "10" );
        setTimeout(function(){
            $('.box-shadow-preview').css('transition', '');
        }, 500);
        $('.box-shadow-preview').css('transition', '0.5s ease 0s');
    });
    $('.blur-reset').click(function(){
        $('.box-shadow-blur-slider').slider( "value", "30" );
        setTimeout(function(){
            $('.box-shadow-preview').css('transition', '');
        }, 500);
        $('.box-shadow-preview').css('transition', '0.5s ease 0s');
    });
    $('.opacity-reset').click(function(){
        $('.box-shadow-opacity-slider').slider( "value", "100" );
        setTimeout(function(){
            $('.box-shadow-preview').css('transition', '');
        }, 500);
        $('.box-shadow-preview').css('transition', '0.5s ease 0s');
    });
    
    $(function slider(){
        $( ".box-shadow-sliders span" ).each(function() {
            var minValue = parseInt( $( this ).attr('data-min'));
            var maxValue = parseInt( $( this ).attr('data-max'));
            var stepValue = parseInt( $( this ).attr('data-step'));
            var defaultValue = parseInt( $( this ).attr('data-value'));
            $("#" + $(this).attr("data-id")).html(defaultValue);
            $( this ).empty().slider({
                value: defaultValue,
                min: minValue,
                max: maxValue,
                animate: true,
                step: stepValue,
                slide: function(){
                    boxShadowHorizontalValue = $( ".box-shadow-horizontal-slider" ).slider( "value" );
                    boxShadowVerticalValue = $( ".box-shadow-vertical-slider" ).slider( "value" );
                    boxShadowSpreadValue = $( ".box-shadow-spread-slider" ).slider( "value" );
                    boxShadowBlurValue = $( ".box-shadow-blur-slider" ).slider( "value" );
                    boxShadowOpacityValue = $( ".box-shadow-opacity-slider" ).slider( "value" );
                    $('.box-shadow-preview').css({
                        'box-shadow': boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px',
                        '-webkit-box-shadow': boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px',
                        '-moz-box-shadow': boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px'
                    });
                    $('.box-shadow-styles p').html('box-shadow:' + boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px; <br> -webkit-box-shadow:' + boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px; <br> -moz-box-shadow:' + boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px;');
                },
                change: function(){
                    boxShadowHorizontalValue = $( ".box-shadow-horizontal-slider" ).slider( "value" );
                    boxShadowVerticalValue = $( ".box-shadow-vertical-slider" ).slider( "value" );
                    boxShadowSpreadValue = $( ".box-shadow-spread-slider" ).slider( "value" );
                    boxShadowBlurValue = $( ".box-shadow-blur-slider" ).slider( "value" );
                    boxShadowOpacityValue = $( ".box-shadow-opacity-slider" ).slider( "value" );
                    $('.box-shadow-preview').css({
                        'box-shadow': boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px',
                        '-webkit-box-shadow': boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px',
                        '-moz-box-shadow': boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px'
                    });
                    $('.box-shadow-styles p').html('box-shadow:' + boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px; <br> -webkit-box-shadow:' + boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px; <br> -moz-box-shadow:' + boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px;');
                }
            });
        });
    });
    
    function updateBox(picker) {
        boxShadowColourValue = Math.round(picker.rgb[0]) + ', ' + Math.round(picker.rgb[1]) + ', ' + Math.round(picker.rgb[2]);
        $('.box-shadow-preview').css({
            'box-shadow': boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px',
            '-webkit-box-shadow': boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px',
            '-moz-box-shadow': boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px'
        });
        $('.box-shadow-styles p').html('box-shadow:' + boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px; <br> -webkit-box-shadow:' + boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px; <br> -moz-box-shadow:' + boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px;');
    }
    $('#box-shadow-inset').change(function(){
        boxShadowInsetValue = this.checked ? 'inset' : '';
        $('.box-shadow-preview').css({
            'box-shadow': boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px',
            '-webkit-box-shadow': boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px',
            '-moz-box-shadow': boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px'
        });
        $('.box-shadow-styles p').html('box-shadow:' + boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px; <br> -webkit-box-shadow:' + boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px; <br> -moz-box-shadow:' + boxShadowInsetValue + ' rgba(' + boxShadowColourValue + ', ' + boxShadowOpacityValue/100 + ') ' + boxShadowHorizontalValue + 'px ' + boxShadowVerticalValue + 'px ' + boxShadowBlurValue + 'px ' + boxShadowSpreadValue + 'px;');
    });
}

});