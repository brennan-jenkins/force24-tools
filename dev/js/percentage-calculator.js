// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    
    if ($("body").hasClass("percentage-calculator")) {

        $('.percentage-1-input-per, .percentage-1-input-val').on('keyup', function(){
            var perc1InputPer = $('.percentage-1-input-per').val();
            var perc1InputVal = $('.percentage-1-input-val').val();
            var perc1Output = $('.percentage-1-output');
            perc1Output.val(perc1InputVal / 100 * perc1InputPer);
        });
        
        
        $('.percentage-2-input-per, .percentage-2-input-val').on('keyup', function(){
            var perc2InputPer = $('.percentage-2-input-per').val();
            var perc2InputVal = $('.percentage-2-input-val').val();
            var perc2Output = $('.percentage-2-output');
            perc2Output.val(100 * perc2InputPer / perc2InputVal);
        });
    }
});
