// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("text-shadow")) {

        var textColourValue = "0,0,0";
        var textHorizontalValue = "2";
        var textVerticalValue = "2";
        var textBlurValue = "2";
        var textOpacityValue = "100";
        
        $('.horizontal-reset').click(function(){
            $('.text-shadow-horizontal-slider').slider( "value", "2" );
            setTimeout(function(){
                $('.text-shadow-preview h2').css('transition', '');
            }, 500);
            $('.text-shadow-preview h2').css('transition', '0.5s ease 0s');
        });
        $('.vertical-reset').click(function(){
            $('.text-shadow-vertical-slider').slider( "value", "2" );
            setTimeout(function(){
                $('.text-shadow-preview h2').css('transition', '');
            }, 500);
            $('.text-shadow-preview h2').css('transition', '0.5s ease 0s');
        });
        $('.blur-reset').click(function(){
            $('.text-shadow-blur-slider').slider( "value", "2" );
            setTimeout(function(){
                $('.text-shadow-preview h2').css('transition', '');
            }, 500);
            $('.text-shadow-preview h2').css('transition', '0.5s ease 0s');
        });
        $('.opacity-reset').click(function(){
            $('.text-shadow-opacity-slider').slider( "value", "100" );
            setTimeout(function(){
                $('.text-shadow-preview h2').css('transition', '');
            }, 500);
            $('.text-shadow-preview h2').css('transition', '0.5s ease 0s');
        });
        
        $(function slider(){
            $( ".text-shadow-sliders span" ).each(function() {
                var textMinValue = parseInt( $( this ).attr('data-min'));
                var textMaxValue = parseInt( $( this ).attr('data-max'));
                var textStepValue = parseInt( $( this ).attr('data-step'));
                var textDefaultValue = parseInt( $( this ).attr('data-value'));
                $("#" + $(this).attr("data-id")).html(textDefaultValue);
                $( this ).empty().slider({
                    value: textDefaultValue,
                    min: textMinValue,
                    max: textMaxValue,
                    animate: true,
                    step: textStepValue,
                    slide: function(){
                        textHorizontalValue = $( ".text-shadow-horizontal-slider" ).slider( "value" );
                        textVerticalValue = $( ".text-shadow-vertical-slider" ).slider( "value" );
                        textBlurValue = $( ".text-shadow-blur-slider" ).slider( "value" );
                        textOpacityValue = $( ".text-shadow-opacity-slider" ).slider( "value" );
                        $('.text-shadow-preview h2').css({
                            'text-shadow': 'rgba(' + textColourValue + ', ' + textOpacityValue/100 + ') ' + textHorizontalValue + 'px ' + textVerticalValue + 'px ' + textBlurValue + 'px'
                        });
                        $('.text-shadow-styles p').html('text-shadow: rgba(' + textColourValue + ', ' + textOpacityValue/100 + ') ' + textHorizontalValue + 'px ' + textVerticalValue + 'px ' + textBlurValue + 'px;');
                    },
                    change: function(){
                        textHorizontalValue = $( ".text-shadow-horizontal-slider" ).slider( "value" );
                        textVerticalValue = $( ".text-shadow-vertical-slider" ).slider( "value" );
                        textBlurValue = $( ".text-shadow-blur-slider" ).slider( "value" );
                        textOpacityValue = $( ".text-shadow-opacity-slider" ).slider( "value" );
                        $('.text-shadow-preview h2').css({
                            'text-shadow': 'rgba(' + textColourValue + ', ' + textOpacityValue/100 + ') ' + textHorizontalValue + 'px ' + textVerticalValue + 'px ' + textBlurValue + 'px'
                        });
                        $('.text-shadow-styles p').html('text-shadow: rgba(' + textColourValue + ', ' + textOpacityValue/100 + ') ' + textHorizontalValue + 'px ' + textVerticalValue + 'px ' + textBlurValue + 'px;');
                    }
                });
            });
        });
        
        function updateText(picker) {
            textColourValue = Math.round(picker.rgb[0]) + ', ' + Math.round(picker.rgb[1]) + ', ' + Math.round(picker.rgb[2]);
            $('.text-shadow-preview h2').css({
                'text-shadow': 'rgba(' + textColourValue + ', ' + textOpacityValue/100 + ') ' + textHorizontalValue + 'px ' + textVerticalValue + 'px ' + textBlurValue + 'px'
            });
            $('.text-shadow-styles p').html('text-shadow: rgba(' + textColourValue + ', ' + textOpacityValue/100 + ') ' + textHorizontalValue + 'px ' + textVerticalValue + 'px ' + textBlurValue + 'px;');
        }
    }
});
