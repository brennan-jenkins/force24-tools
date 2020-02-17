// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    $('[data-toggle="tooltip"]').tooltip(); 
    
    if ($("body").hasClass("css-gradient")) {
        
    }
});

var CssGradientOneVal = Cookies.get('primaryColour');
        var CssGradientTwoVal = Cookies.get('secondaryColour');
        var CssGradientDirection = "bottom";
        $('#primaryColour').val('132c46');
        $('#secondaryColour').val('00a4c3');
        $('#primaryColour').val(Cookies.get('primaryColour'));
        $('#secondaryColour').val(Cookies.get('secondaryColour'));
        $('.css-gradient-preview').css({'background-image': 'linear-gradient(to bottom, #' + CssGradientOneVal + ', #' + CssGradientTwoVal + ')'});
        
        function updateCssGradientOne(jscolor) {
            CssGradientOneVal = jscolor;
            $(".css-gradient-preview").css({'background-image': 'linear-gradient(to ' + CssGradientDirection + ', #' + CssGradientOneVal + ', #' + CssGradientTwoVal + ')'});
            $('.css-gradient-styles p').html('background-image linear-gradient(to ' + CssGradientDirection + ', #' + CssGradientOneVal + ', #' + CssGradientTwoVal + ');');   
            Cookies.set('primaryColour', CssGradientOneVal); 
        }
        function updateCssGradientTwo(jscolor) {
            CssGradientTwoVal = jscolor;
            $(".css-gradient-preview").css({'background-image': 'linear-gradient(to ' + CssGradientDirection + ', #' + CssGradientOneVal + ', #' + CssGradientTwoVal + ')'});
            $('.css-gradient-styles p').html('background-image: linear-gradient(to ' + CssGradientDirection + ', #' + CssGradientOneVal + ', #' + CssGradientTwoVal + ');');
            Cookies.set('secondaryColour', CssGradientTwoVal); 
        }
        
        $('a[data-css-gradient-direction]').click(function(e) {
            e.preventDefault();
            if($(this).data("css-gradient-direction") == "radial"){
                CssGradientDirection = $(this).data("css-gradient-direction"); 
                $(".css-gradient-preview").css({'background-image': 'radial-gradient(circle, #' + CssGradientOneVal + ', #' + CssGradientTwoVal + ')'});
                $('.css-gradient-styles p').html('background-image: radial-gradient(circle, #' + CssGradientOneVal + ', #' + CssGradientTwoVal + ');');
            }
            else{
                CssGradientDirection = $(this).data("css-gradient-direction");
                $(".css-gradient-preview").css({'background-image': 'linear-gradient(to ' + CssGradientDirection + ', #' + CssGradientOneVal + ', #' + CssGradientTwoVal + ')'});
                $('.css-gradient-styles p').html('background-image: linear-gradient(to ' + CssGradientDirection + ', #' + CssGradientOneVal + ', #' + CssGradientTwoVal + ');');
            }
        });