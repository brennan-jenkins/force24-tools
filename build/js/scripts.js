// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);    
});

var paddingWrapper = $('.carousel-item-wrapper');
var interval;

$(function() {
    clearInterval(interval);
    interval = setInterval(function () {
        var current = $('.carousel-item-active');
        var next = current.next();
        if( !next.length ){
            next = current.parent().find('div:first');
        }
        next.addClass('carousel-item-active');
        current.removeClass('carousel-item-active');
        
        var dataTrigger = ('.carousel-item-active a');
        $(dataTrigger).trigger("click");
        if($('#textCleaner').hasClass('active')){
            $('body').css({
                'background-image': 'url("images/text-cleaner-wm.png")'
            });
        }
        else if($('#layoutBuilder').hasClass('active')){
            $('body').css({
                'background-image': 'url("images/layout-wm.png")'
            });
        }
        else{
            $('body').css({
                'background-image': 'none'
            });
        }
    }, 7500);    
});

$(paddingWrapper).on('mousedown', paddingWrapper, function(){
    clearInterval(interval);
    $(paddingWrapper).removeClass('carousel-item-active');
    $(this).addClass('carousel-item-active');  
    var textCleanerListen = setInterval(function(){
        if($('#textCleaner').hasClass('active')){
            clearInterval(textCleanerListen);
            $('body').css({
                'background-image': 'url("images/text-cleaner-wm.png")'
            });
        }
    }, 1);   
    var LayoutBuilderListen = setInterval(function(){
        if($('#layoutBuilder').hasClass('active')){
            clearInterval(LayoutBuilderListen);
            $('body').css({
                'background-image': 'url("images/layout-wm.png")'
            });
        }
    }, 1);
});

$('.legacy-reveal-controller').click(function(){
    $('.legacy-wrapper').slideToggle(500);
    $(this).children('i').toggleClass('fa-chevron-down').toggleClass('fa-chevron-up');
});



$(window).load(function(){
    var $container = $('.filter-tools-wrapper');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
    $('#filter-btns a').click(function(){
        $('#filter-btns .filter-current').removeClass('filter-current');
        $(this).addClass('filter-current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
});
// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("bulletpoint-page")) {
        $('#generateList').on('change keypress', function(event) {
            var userInputList = $('#generateList').val(); //user input variable
            var keycode = event.keyCode || event.which;
            // var listStyleType = $('#bulletStyle').val(); //get select value
            // $('#previewList').css('list-style-type', listStyleType); // select style type
            var listStyleType = $( "#bulletStyle option:selected" ).text();
            var bulletAlign = $( "#bulletAlign option:selected" ).text();
            
            $('#previewTable').find('tr').children('td:first-child').css('text-align', 'left'); // add text align left to bulletpoint td
            $(document).on("change keyup", function() {
                td1Val = $('#td1Val').val();
                td3Val = 100 - td1Val; // 100 minus the bulletpoint width
                $(td1).css({
                    'width': td1Val + '%', 
                    'line-height': '135%',
                    'font-size': '14px',
                    'font-family': 'arial, helvetica, sans-serif',
                    'color': '#000000'
                });
                $(td3).css({
                    'width': td3Val + '%', 
                    'padding': '0 0 0 5px',
                    'line-height': '135%',
                    'font-size': '14px',
                    'font-family': 'arial, helvetica, sans-serif',
                    'color': '#000000'
                });
            });
    
            if(keycode == '13' && this.value) { // press enter, disable if empty
                var td1 = document.createElement("td");
                var td3 = document.createElement("td");		
                $('#generateList').val(''); //clear value after each keypress
                $("#previewTable") // append table
                .append(
                    $("<tr>")
                    .append(
                        $(td1).attr('valign', 'top'),
                        $(td1).text(function(){
                            if(listStyleType == "image"){
                                $(this).append("<img src='https://www.force24.co.uk/src/img/logos/default-thumbnail.png' style='width: 20px; display:block; border:0;' width='20' data-f24-editable />");
                            }
                            else{
                                $(this).text(listStyleType);
                            }
                        }),
                        $(td3).attr('valign', 'top'),
                        $(td3).text(userInputList)
                    )
                );
    
                $('#bulletAlign').change(function(){ // vertical alignment function
                    var bulletAlign = $('#bulletAlign option:selected').text();
                    $('#previewTable').find('tr').children('td:first-child').attr('valign',bulletAlign)
                }); 
                
            }
            
        });
        
        $('#bulletStyle').on('change', function(){ // bulletpoint style
            var listStyleType = $( "#bulletStyle option:selected" ).text();
            if ($(this).val()=="image") // if image option selected
            {
                $('#previewTable').find('tr').children('td:first-child').text('').append("<img src='https://www.force24.co.uk/src/img/logos/default-thumbnail.png' style='width: 20px; display:block; border:0;' width='20' data-f24-editable />");
            }
            else{
                $('#previewTable').find('tr').children('td:first-child').text(listStyleType);
            }
        });
        
    
        $('table').on('dblclick','tr',function(e){ // remove tr on double click
            e.preventDefault();
            $(this).closest('tr').remove();
        });
    
    
        $('#generateCode').click(function(e){ //
            e.preventDefault();
            var preview = $('#tableWrapper').html();
            $('#bulletpointOutput').val(preview);
        });
    
        $(".copy-text").click(function(){
            $('#bulletpointOutput').select();
            document.execCommand('copy');
            $('#copiedToClip').modal('show').find('.modal-title').text('copied to clipboard');
            setInterval(function () {
                $('#copiedToClip').modal('hide');
            }, 1500);
        });
    }
});
// Hide URL bar on mobile devices
$(document).ready(function () {
	$(this).scrollTop(0);
	$('[data-toggle="tooltip"]').tooltip(); 
	if ($("body").hasClass("text-cleaner")) {


	function textCleaner() {
		var resetBtn 	= $('.reset-text');

		var inputText 	= $('#textinput');
		var outputText	= $('#textoutput');

		function clean() {
			var text = inputText.val();
			if($('#lines').is(':checked')) {
				text = text
					.replace(/\n/gi, ' ')		// removing new lines spaces;
					.replace(/<br>/gi, ' ');  	// removing line breaks;
			}

			if($('#tab').is(':checked')) {
				text = text
					.replace(/\t/gi, '');		// removing tab spaces;
			}
			
			if($('#upper').is(':checked')) {
				text = text
					.toUpperCase();		// changes text to uppercase;
			}
			if($('#lower').is(':checked')) {
				text = text
					.toLowerCase();		// changes text to lowercase;
			}htmlChars

			if($('#htmlChars').is(':checked')){
			text = text
				.replace(/&nbsp;/gi, ' ')
				.replace(/&/gi, '&amp;')
				.replace(/–/gi, '-')
				.replace(/—/gi, '-')
				.replace(/</gi, '&lt;')
				.replace(/>/gi, '&gt;')
				.replace(/«/gi, '&laquo;')
				.replace(/»/gi, '&raquo;')
				.replace(/←/gi, '&larr;')
				.replace(/→/gi, '&rarr;')
				.replace(/↑/gi, '&uarr;')
				.replace(/↓/gi, '&darr;')
				.replace(/£/gi, '&pound;')
				.replace(/€/gi, '&euro;')
				.replace('$', '&#36;')
				.replace(/%/gi, '&#37;')
				.replace(/\*/gi, '&#42;')
				.replace(/•/gi, '&#8226;')
				.replace(/‘/gi, '&#39;')
				.replace(/’/gi, '&#39;')
				.replace(/‚/gi, '&#8218;')
				.replace(/“/gi, '&#39;')
				.replace(/”/gi, '&#39;')
				.replace(/„/gi, '&#39;')
				.replace(/“/gi, '&ldquo;')
				.replace(/”/gi, '&rdquo;')
				.replace(/…/gi, '&#8230;')
				.replace(/™/gi, '&#8482;')
				.replace(/©/gi, '&copy;')
				.replace(/®/gi, '&reg;')
				.replace(/°/gi, '&deg;')
				.replace(/†/gi, '&#8224;')
				.replace(/✝/gi, '&#10013;')
				.replace(/‡/gi, '&#8225;')
				.replace(/¹/gi, '&sup1;')
				.replace(/²/gi, '&sup2;')
				.replace(/³/gi, '&sup3;')
				.replace(/@/gi, '&#64;')
				.replace(/È/gi, '&#200;')
				.replace(/É/gi, '&#201;')
				.replace(/Ê/gi, '&#202;')
				.replace(/Ë/gi, '&#203;')
				.replace(/Ì/gi, '&#204;')
				.replace(/Í/gi, '&#205;')
				.replace(/Î/gi, '&#206;')
				.replace(/Ï/gi, '&#207;')
				.replace(/Ð/gi, '&#208;')
				.replace(/Ñ/gi, '&#209;')
				.replace(/Ò/gi, '&#210;')
				.replace(/Ó/gi, '&#211;')
				.replace(/Ô/gi, '&#212;')
				.replace(/Õ/gi, '&#213;')
				.replace(/Ö/gi, '&#214;')
				.replace(/Ø/gi, '&#216;')
				.replace(/Ù/gi, '&#217;')
				.replace(/Ú/gi, '&#218;')
				.replace(/Û/gi, '&#219;')
				.replace(/Ü/gi, '&#220;')
				.replace(/Ý/gi, '&#221;')
				.replace(/Þ/gi, '&#222;')
				.replace(/ß/gi, '&#223;')
				.replace(/à/gi, '&#224;')
				.replace(/á/gi, '&#225;')
				.replace(/â/gi, '&#226;')
				.replace(/ã/gi, '&#227;')
				.replace(/ä/gi, '&#228;')
				.replace(/å/gi, '&#229;')
				.replace(/æ/gi, '&#230;')
				.replace(/ç/gi, '&#231;')
				.replace(/è/gi, '&#232;')
				.replace(/é/gi, '&#233;')
				.replace(/ê/gi, '&#234;')
				.replace(/ë/gi, '&#235;')
				.replace(/ì/gi, '&#236;')
				.replace(/í/gi, '&#237;')
				.replace(/î/gi, '&#238;')
				.replace(/ï/gi, '&#239;')
				.replace(/ð/gi, '&#240;')
				.replace(/ñ/gi, '&#241;')
				.replace(/ò/gi, '&#242;')
				.replace(/ó/gi, '&#243;')
				.replace(/ô/gi, '&#244;')
				.replace(/õ/gi, '&#245;')
				.replace(/ö/gi, '&#246;')
				.replace(/ø/gi, '&#248;')
				.replace(/ù/gi, '&#249;')
				.replace(/ú/gi, '&#250;')
				.replace(/û/gi, '&#251;')
				.replace(/ü/gi, '&uuml;')
				.replace(/ý/gi, '&#253;')
				.replace(/þ/gi, '&#254;')
				.replace(/ÿ/gi, '&#255;')
				.replace(/\x03/, '')      	// ^C to blank;
				.replace(/\u2028/, ' ') 	// line separator unicode to ''
				.replace(/\u00A0/, ' ') 	// NO BRAKE SPACE unicode to ' '
				.replace(/\u0003/, '');		// unicode END OF TEXT to ''				
			}
			
			if($('#brTag').is(':checked')) {
				text = text
					.replace(/\n/gi, '<br>')		// changes text to lowercase;
			}

			if($('#spaces').is(':checked')) {
				text = text
					.replace(/ +(?= )/g,'');	// replace multiple spaces with single space
			}

			if($('#sentence').is(':checked')){
				var newString = text.toLowerCase().replace(/(^\s*\w|[\.\!\?\n]\s*\w)/g,function(c){return c.toUpperCase()});
				text = newString;
			}
			

			outputText.text($.trim(text));
		}
		var words = $('#textinput').val().length = "0";
		
		inputText.on('keyup', function(e) {
			var characters = $('#textinput').val().length;
			if(characters > 0){
				words = $('#textinput').val().match(/\S+/g).length;
				outputText.css({
					'background-color': '#f5f5f5'
				});
			}
			else{
				words = $('#textinput').val().length = "0";
				outputText.css({
					'background-color': '#ffffff'
				});
				$('textarea').val('');
			}
			$('.display-word-count').text(words + ' | ' + characters);
			if(characters > 150){
				inputText.css({
					'font-size': '14px',
				});
				outputText.css({
					'font-size': '14px'
				});
			}
			else{
				inputText.css({'font-size': '20px'});
				outputText.css({'font-size': '20px'});
			}
			$(inputText).css({
				'height': '1px',
				'height': $(inputText)[0].scrollHeight+'px'
			});
			$(outputText).css({
				'height': '1px',
				'height': $(inputText)[0].scrollHeight+'px'
			});
			clean();
		});

		$('checkbox,input').change(function(){
			clean();
		})

		$('.options input[type=checkbox]').change(function() {
			clean();
		});

		outputText.click(function() {
			$(this).select();
		});

		resetBtn.click(function(e) {
			$('textarea').val('');
			outputText.css({
				'background-color': '#ffffff'
			});
			$('.display-word-count').text(words + ' | ' + characters);
			console.log(words);
			$('textarea').val('');
			e.preventDefault();
		});

		$(".copy-text").click(function(){
			$(outputText).select();
			document.execCommand('copy');
			$('#copiedToClip').modal('show').find('.modal-title').text('copied to clipboard');
			setInterval(function () {
				$('#copiedToClip').modal('hide');
			}, 1500);
		});
	}

	$(function(){
		textCleaner();
	});

}
});
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

// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
});
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

// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("template-builder")) {
        $('.email-template-container').append('<iframe src="templates/template_1/template.html" width="100%" height="500"  frameborder="0">');
        $('.template-company-name').on('keyup', function(){
            templateCompanyName = $(this).val();
            $("iframe").contents().find("img").attr('alt', templateCompanyName);
        });
        $('.template-company-url').on('keyup', function(){
            templateCompanyUrl = $(this).val();
            newUrl = "[nonTrackingLink]";
            $("iframe").contents().find("a").attr('href', templateCompanyUrl);
            $("iframe").contents().find(".nontrack").attr("href", newUrl);
        });
        
            //bgcolor on the td and border on anchor tag, color on text
        function updateCtaBgColour(jscolor) {
            $("iframe").contents().find("td[data-f24-editor-cta-button-td]").css({'background-color': '#'+jscolor}).attr('bgcolor', '#'+jscolor);
            $("iframe").contents().find("td[data-f24-editor-cta-button-td]").find('a').css({'background-color': '#'+jscolor});
        }
        //bgcolor on the td and border on anchor tag, color on text
        function updateCtaBorderColour(jscolor) {
            $("iframe").contents().find("td[data-f24-editor-cta-button-td]").find('a').css({'border-color': '#'+jscolor});
        }
        function updateCtaTextColour(jscolor) {
            $("iframe").contents().find("td[data-f24-editor-cta-button-td]").find('a').css({'color': '#'+jscolor});
        }
        function updatePrimaryColour(jscolor) {
            $("iframe").contents().find(".primary-colour").css({'background-color': '#'+jscolor});
        }
        function updateSecondaryColour(jscolor) {
            $("iframe").contents().find(".secondary-colour").css({'background-color': '#'+jscolor});
        }
    }
});

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
// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("tracking-script")) {
        var trackingScriptCode = document.getElementById('tracking-script-code');
        var setAnonymousCookie = false;
        var setClientId = $('#clientIdValue').val();
        var setFormMapping = false;
        var setMarketingListId = $('#MLIdValue').val();
        var formSelectorType = "#";
        var formSelectorValue = $('#formSelectorValue').val();
        var formMappingLocation = "";
        var formMappingLocationJoined = "";
        var mappedFieldNameValue = "";
        var mappedFieldNameValueJoined = "";
        var mappedFieldNameValue = "";
        var pattern = /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i;
        var editor = CodeMirror.fromTextArea(trackingScriptCode, {
            mode: 'javascript',
            tabMode: 'indent',
            lineNumbers: true,
            lineWrapping: true,
            autoCloseTags: true,
            theme: "xq-dark",
            readOnly: true
        });

        editor.getDoc().setValue('<!-- Start Force24 tracking -->\n<script>\n!function(f,o,r,c,e,_2,_4){f.Force24Object=e,f[e]=f[e]||function(){\n(f[e].q=f[e].q||[]).push(arguments)},f[e].l=1*new Date,\n_2=o.createElement(r),_4=o.getElementsByTagName(r)[0],_2.async=1,\n_2.src=c,_4.parentNode.insertBefore(_2,_4)}(window,document,"script",\n"//tracking1.force24.co.uk/tracking/V2/main.min.js","f24");\nf24("create", "' + setClientId + '");\nf24("send", "pageview");\nf24("cookieAnonymous", ' + setAnonymousCookie + ');\n</script>\n<!-- End Force24 tracking -->');

        function updateHtml(){
            editor.getDoc().setValue('<!-- Start Force24 tracking -->\n<script>\n!function(f,o,r,c,e,_2,_4){f.Force24Object=e,f[e]=f[e]||function(){\n(f[e].q=f[e].q||[]).push(arguments)},f[e].l=1*new Date,\n_2=o.createElement(r),_4=o.getElementsByTagName(r)[0],_2.async=1,\n_2.src=c,_4.parentNode.insertBefore(_2,_4)}(window,document,"script",\n"//tracking1.force24.co.uk/tracking/V2/main.min.js","f24");\nf24("create", "' + setClientId + '");\nf24("send", "pageview");\nf24("cookieAnonymous", ' + setAnonymousCookie + ');\n</script>\n<!-- End Force24 tracking -->');
        }
        function updateHtmlWithMapping(){
            editor.getDoc().setValue('<!-- Start Force24 tracking -->\n<script>\n!function(f,o,r,c,e,_2,_4){f.Force24Object=e,f[e]=f[e]||function(){\n(f[e].q=f[e].q||[]).push(arguments)},f[e].l=1*new Date,\n_2=o.createElement(r),_4=o.getElementsByTagName(r)[0],_2.async=1,\n_2.src=c,_4.parentNode.insertBefore(_2,_4)}(window,document,"script",\n"//tracking1.force24.co.uk/tracking/V2/main.min.js","f24");\nf24("create", "' + setClientId + '");\nf24("send", "pageview");\nf24("cookieAnonymous", ' + setAnonymousCookie + ');\nf24("formSelector", "form' + formSelectorType + formSelectorValue + '");\nf24("formMap", [\n{\nselector:"form' + formSelectorType + formSelectorValue + '",\nmeta:{id: "' + formSelectorValue + '", name: "' + formSelectorValue + '", f24name: "' + formSelectorValue + '"},\nfields:{' + formMappingLocationJoined + '},\nmarketingList: "' + setMarketingListId + '"\n}\n]);\n</script>\n<!-- End Force24 tracking -->');
        }

        $('#clientIdValue').on('keyup', function(){
            setClientId = $(this).val();
            if (pattern.test(setClientId) === true) {
                $(this).css('background-color', '#b2ffb2');
                $(this).siblings('p').remove();
                if(setMarketingListId == setClientId){
                    $(this).siblings('p').remove();
                    $(this).after('<p style="font-size:12px; color:#ff0000;">Your Client ID and Marketing List ID cannot be the same</p>');
                    $(this).css('background-color', '#ffadad');
                    $('#MLIdValue').siblings('p').remove();
                    $('#MLIdValue').css('background-color', '#ffadad').after('<p style="font-size:12px; color:#ff0000;">Your Client ID and Marketing List ID cannot be the same</p>');
                }
            } else {
                $(this).css('background-color', '#ffadad');
                $(this).siblings('p').remove();
                $(this).after('<p style="font-size:12px; color:#ff0000;">Invalid Client ID - If you are having issues, please contact your account manager</p>');
            }
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
            }
            else{
                updateHtml();
            }
        });

        $('input[name="anonCookieValue"]').on('change', function(){
            setAnonymousCookie = $(this).val();
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
            }
            else{
                updateHtml();
            }
        });

        $('input[name="addFormMapping"]').on('change', function(){
            setFormMapping = $(this).val();
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
                $('.mappingSettings').slideDown();
            }
            else{
                updateHtml();
                $('.mappingSettings').slideUp();
            }
        });

        $('#MLIdValue').on('keyup', function(){
            setMarketingListId = $(this).val();    
            if (pattern.test(setMarketingListId) === true) {
                $(this).css('background-color', '#b2ffb2');
                $(this).siblings('p').remove();
                if(setMarketingListId == setClientId){
                    $(this).siblings('p').remove();
                    $(this).after('<p style="font-size:12px; color:#ff0000;">Your Client ID and Marketing List ID cannot be the same</p>');
                    $(this).css('background-color', '#ffadad');
                    $('#clientIdValue').siblings('p').remove();
                    $('#clientIdValue').css('background-color', '#ffadad').after('<p style="font-size:12px; color:#ff0000;">Your Client ID and Marketing List ID cannot be the same</p>');
                }
            } else {
                $(this).css('background-color', '#ffadad');
                $(this).siblings('p').remove();
                $(this).after('<p style="font-size:12px; color:#ff0000;">Invalid Marketing List ID - If you are having issues, please contact your account manager</p>');
            }
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
            }
            else{
                updateHtml();
            }
        });
        $('input[name="formMappingSelectorType"]').on('change', function(){
            formSelectorType = $(this).val();
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
            }
            else{
                updateHtml();
            }
        });
        $('#formSelectorValue').on('keyup', function(){
            formSelectorValue = $(this).val();
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
            }
            else{
                updateHtml();
            }
        });

        $('.styled-checkbox input[type=checkbox]').on('change', function(){
            $(this).siblings('.nameToMap').toggle();
            if($(this).prop('checked')){
                $(this).parent().css('margin-bottom', '60px');
            }
            else{
                $(this).parent().css('margin-bottom', '0px');
            }
        });

        $('input[name="nameToMap"]').on('keyup', function(){
            formMappingLocationJoined = $('input[name="nameToMap"]').map(function (index, el) {
                var $checkbox = $(el).parent().find('[name="formMappingLocation"]');

                if (!$checkbox.is(':checked'))
                    return '';

                return $checkbox.val() + '"' + el.value + '"';
            }).get().filter(function (el){
                return el; 
            }).join(',\n');
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
            }
            else{
                updateHtml();
            }
        });

        var sticky = new Waypoint.Sticky({
            element: $('.tracking-script-code')[0]
        });
    }
});
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

// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    $('[data-toggle="tooltip"]').tooltip(); 
    
    if ($("body").hasClass("favicon-finder")) {
		$(function(){
			var favicon = ""
			var website = ""
			$('.websiteUrl').on('keyup', function(){
				var favicon = "https://icons.duckduckgo.com/ip2/";
				var website = $('.websiteUrl').val().replace(/(^\w+:|^)\/\//, '').replace(/\/$/, "");
				$(this).css({
					'background-image': 'url(' + favicon + website + '.ico)'
				});
				$('.favicon-code').val(favicon + website + ".ico");
			});
			$('.copy-favicon').click(function(){
				$(".favicon-code").select();
				document.execCommand('copy');
				$('#copiedToClip').modal('show').find('.modal-title');
				setInterval(function () {
					$('#copiedToClip').modal('hide');
				}, 1500);
			});
		});
	}
});
// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("add-to-calendar")) {

/* http://addtocalendar.com/
 *
 *
 * @license
 The MIT License (MIT)
 Copyright (c) 2015 AddToCalendar
 Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:
 The above copyright notice and this permission notice shall be included in all
 copies or substantial portions of the Software.
 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 SOFTWARE.
 */


(function (w, d) {
    function ipLookUp () {
        $.ajax('http://ip-api.com/json')
        .then(
            function success(response) {
                $('.location_input').val(response.city)
            },
      
            function fail(data, status) {
                console.log('Request failed.  Returned status of',
                            status);
            }
        );
      }   
      ipLookUp()     

    var emailPattern = 	/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var
        atc_url = '//addtocalendar.com/atc/',
        atc_version = '1.5';


    if (!Array.indexOf) {
        Array.prototype.indexOf = function (obj) {
            for (var i = 0, l = this.length; i < l; i++) {
                if (this[i] == obj) {
                    return i
                }
            }
            return -1
        }
    }

    if (!Array.prototype.map) {
        Array.prototype.map = function (f) {
            var result = [];
            for (var i = 0, l = this.length; i < l; i++) {
                result.push(f(this[i]))
            }
            return result
        }
    }

    var isArray = function (obj) {
        return Object.prototype.toString.call(obj) === "[object Array]"
    };

    var isFunc = function (obj) {
        return Object.prototype.toString.call(obj) === "[object Function]"
    };

    var ready = function (w, d) {
        var inited = false,
            loaded = false,
            queue = [],
            done, old;

        function go() {
            if (!inited) {
                if (!d.body) return setTimeout(go, 13);
                inited = true;
                if (queue) {
                    var j, k = 0;
                    while (j = queue[k++]) j.call(null);
                    queue = null
                }
            }
        }

        function check() {
            if (loaded) return;
            loaded = true;
            if (d.readyState === "complete") return go();
            if (d.addEventListener) {
                d.addEventListener("DOMContentLoaded", done, false);
                w.addEventListener("load", go, false)
            } else {
                if (d.attachEvent) {
                    d.attachEvent("onreadystatechange", done);
                    w.attachEvent("onload", go);
                    var k = false;
                    try {
                        k = w.frameElement == null
                    } catch (j) {
                    }
                    if (b.doScroll && k) ie()
                } else {
                    old = w.onload;
                    w.onload = function (e) {
                        old(e);
                        go()
                    }
                }
            }
        }

        if (d.addEventListener) {
            done = function () {
                d.removeEventListener("DOMContentLoaded", done, false);
                go()
            }
        } else {
            if (d.attachEvent) {
                done = function () {
                    if (d.readyState === "complete") {
                        d.detachEvent("onreadystatechange", done);
                        go()
                    }
                }
            }
        }

        function ie() {
            if (inited) return;
            try {
                b.doScroll("left")
            } catch (j) {
                setTimeout(ie, 1);
                return
            }
            go()
        }

        return function (callback) {
            check();
            if (inited) {
                callback.call(null)
            } else {
                queue.push(callback)
            }
        }
    }(w, d);

    if (w.addtocalendar && typeof w.addtocalendar.start == "function") return;
    if (!w.addtocalendar) w.addtocalendar = {};

    addtocalendar.languages = {
        'de': 'In den Kalender',
        'en': 'Add to Calendar',
        'es': 'Añadir al Calendario',
        'fi': 'Lisää kalenteriin',
        'fr': 'Ajouter au calendrier',
        'hi': 'कैलेंडर में जोड़ें',
        'in': 'Tambahkan ke Kalender',
        'ja': 'カレンダーに追加',
        'ko': '캘린더에 추가',
        'pt': 'Adicionar ao calendário',
        'ru': 'Добавить в календарь',
        'sv': 'Lägg till i kalender',
        'uk': 'Додати в календар',
        'zh': '添加到日历',
        'no': 'Legg til i kalender'
    };

    addtocalendar.calendar_urls = {}

    addtocalendar.loadSettings = function (element) {
        var settings = {
            'language': 'auto',
            'show-list-on': 'click',
            'calendars': [
                'iCalendar',
                'Google Calendar',
                'Outlook',
                'Outlook Online',
                'Yahoo! Calendar'
            ],
            'secure': 'auto',
            'on-button-click': function () {
            },
            'on-calendar-click': function () {
            }
        };

        for (var option in settings) {
            var pname = 'data-' + option;
            var eattr = element.getAttribute(pname);
            if (eattr != null) {

                if (isArray(settings[option])) {
                    settings[option] = eattr.replace(/\s*,\s*/g, ',').replace(/^\s+|\s+$/g, '').split(',');
                    continue;
                }

                if (isFunc(settings[option])) {
                    var fn = window[eattr];
                    if (isFunc(fn)) {
                        settings[option] = fn;
                    } else {
                        settings[option] = eval('(function(mouseEvent){' + eattr + '})');
                    }
                    continue;
                }

                settings[option] = element.getAttribute(pname);
            }
        }

        return settings;
    };

    addtocalendar.load = function () {
        var calendarsUrl = {
            'iCalendar': 'ical',
            'Google Calendar': 'google',
            'Outlook': 'outlook',
            'Outlook Online': 'outlookonline',
            'Yahoo! Calendar': 'yahoo'
        };
        var utz = (-(new Date()).getTimezoneOffset().toString());

        var languages = addtocalendar.languages;

        var dom = document.getElementsByTagName('*');
        for (var tagnum = 0; tagnum < dom.length; tagnum++) {
            var tag_class = dom[tagnum].className;

            if (tag_class.length && tag_class.split(" ").indexOf('addtocalendar') != -1) {

                var settings = addtocalendar.loadSettings(dom[tagnum]);

                var protocol = 'http:';
                if (settings['secure'] == 'auto') {
                    protocol = location.protocol == 'https:' ? 'https:' : 'http:';
                } else if (settings['secure'] == 'true') {
                    protocol = 'https:';
                }

                var tag_id = dom[tagnum].id;
                var atc_button_title = languages['en'];
                if (settings['language'] == 'auto') {
                    var user_lang = "no_lang";
                    if (typeof navigator.language === "string") {
                        user_lang = navigator.language.substr(0, 2)
                    } else if (typeof navigator.browserLanguage === "string") {
                        user_lang = navigator.browserLanguage.substr(0, 2)
                    }

                    if (languages.hasOwnProperty(user_lang)) {
                        atc_button_title = languages[user_lang];
                    }
                } else if (languages.hasOwnProperty(settings['language'])) {
                    atc_button_title = languages[settings['language']];
                }

                var url_parameters = [
                    'utz=' + utz,
                    'uln=' + navigator.language,
                    'vjs=' + atc_version
                ];

                var addtocalendar_div = dom[tagnum].getElementsByTagName('var');
                var event_number = -1;
                for (var varnum = 0; varnum < addtocalendar_div.length; varnum++) {
                    var param_name = addtocalendar_div[varnum].className.replace("atc_", "").split(" ")[0];
                    var param_value = addtocalendar_div[varnum].innerHTML;

                    if (param_name == 'event') {
                        event_number++;
                        continue;
                    }

                    if (param_name == addtocalendar_div[varnum].className) {
                        if (param_name == 'atc-body') {
                            atc_button_title = param_value;
                        }
                        continue;
                    }

                    if (event_number == -1) {
                        continue;
                    }

                    url_parameters.push('e[' + event_number + '][' + param_name + ']' + '=' + encodeURIComponent(param_value));
                }


                var atcb_link_id_val = (tag_id == '' ? '' : (tag_id + '_link') );
                var atcb_list = document.createElement('span');
                atcb_list.className = 'atcb-list';
                atcb_list.style.fontFamily = "arial, helvetica, sans-serif";
                atcb_list.style.fontSize = "16px";
                atcb_list.style.lineHeight = "145%";
                
                var menu_links = '';                
                for (var cnum in settings['calendars']) {
                    if (!calendarsUrl.hasOwnProperty(settings['calendars'][cnum])) {
                        continue;
                    }
                    var cal_id = calendarsUrl[settings['calendars'][cnum]];
                    var atcb_cal_link_id = (tag_id == '' ? '' : ('id="' + tag_id + '_' + cal_id + '_link"') );
                    menu_links += '<a ' + atcb_cal_link_id + ' class="atcb-item-link" style="color:#000000; text-decoration:underline;" href="'
                        + (cal_id == 'ical' && /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream ? 'webcal:' : protocol)
                        + atc_url
                        + cal_id + '?' + url_parameters.join('&')
                        + '" target="_blank" rel="nofollow">' + settings['calendars'][cnum] + '</a>&nbsp; &nbsp; ';
                }
                atcb_list.innerHTML = menu_links;

                var atcb_link;
                if (dom[tagnum].querySelector('.atcb-link') == undefined) {
                    atcb_link = document.createElement('a');
                    atcb_link.className = 'atcb-link';
                    atcb_link.innerHTML = atc_button_title;
                    atcb_link.id = atcb_link_id_val;
                    atcb_link.tabIndex = 1;

                    dom[tagnum].appendChild(atcb_link);
                    dom[tagnum].appendChild(atcb_list);
                } else {
                    atcb_link = dom[tagnum].querySelector('.atcb-link');
                    atcb_link.parentNode.appendChild(atcb_list);
                    atcb_link.tabIndex = 1;
                    if (atcb_link.id == '') {
                        atcb_link.id = atcb_link_id_val;
                    }
                }

                if (atcb_link.addEventListener) {
                    atcb_link.addEventListener('click', settings['on-button-click'], false);
                } else {
                    atcb_link.attachEvent('onclick', settings['on-button-click']);
                }

                var item_links = dom[tagnum].querySelectorAll('atcb-item-link');

                for (var varnum = 0; varnum < item_links.length; varnum++) {
                    var item_link = item_links[varnum];
                    if (item_link.addEventListener) {
                        item_link.addEventListener('click', settings['on-calendar-click'], false);
                    }else{
                        item_link.attachEvent('onclick', settings['on-calendar-click']);
                    }

                }
            }
        }
        var CopyCalendarCode = $('.atcb-list').html();
        $('.calendarCode').html('<textarea style="width:100%; height:300px; background-color:transparent; border:0;resize:none; outline:0;"><span style="font-family: arial, helvetica, sans-serif; font-size: 16px; line-height: 145%;">' + CopyCalendarCode + '</span></textarea>');
    };
    $('.date_start_input').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:SS',
    }).on('change', function(){
        var date_start = $(this).val();
        $('.atc_date_start').text(date_start);
        $('.atcb-link, .atcb-list').remove();
        addtocalendar.load();
        $('.atcb-link').remove();
    });
    $('.date_end_input').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:SS'
    }).on('change', function(){
        var date_end = $(this).val();
        $('.atc_date_end').text(date_end);
        $('.atcb-link, .atcb-list').remove();
        addtocalendar.load();
        $('.atcb-link').remove();
    });
    $('.title_input').on('keyup', function(){
        var calendarTitle = $(this).val();
        $('.atc_title').text(calendarTitle);
        $('.atcb-link, .atcb-list').remove();
        addtocalendar.load();
        $('.atcb-link').remove();
    });
    $('.desc_input').on('keyup', function(){
        var calendarDesc = $(this).val();
        $('.atc_description').text(calendarDesc);
        $('.atcb-link, .atcb-list').remove();
        addtocalendar.load();
        $('.atcb-link').remove();
    });
    
    $('.location_input').on('change', function(){
        var calendarLocation = $(this).val();
        $('.atc_location').text(calendarLocation);
        $('.atcb-link, .atcb-list').remove();
        addtocalendar.load();
        $('.atcb-link').remove();
    });
    $('.org_input').on('keyup', function(){
        var calendarOrg = $(this).val();
        $('.atc_organizer').text(calendarOrg);
        $('.atcb-link, .atcb-list').remove();
        addtocalendar.load();
        $('.atcb-link').remove();
    });
    $('.org_email_input').on('keyup', function(){
        var calendarOrgEmail = $(this).val();
        if (emailPattern.test(calendarOrgEmail) === true) {
            $(this).css('background-color', '#b2ffb2');
            $(this).siblings('p').remove(); 
            $('.atc_organizer_email').text(calendarOrgEmail);
            $('.atcb-link, .atcb-list').remove();
            addtocalendar.load();
            $('.atcb-link').remove();           
        } else {
            $(this).css('background-color', '#ffadad');
            $(this).siblings('p').remove();
            $(this).after('<p style="font-size:12px; color:#ff0000;">Invalid email address</p>');
        }
    });
})(window, document);
    }
});




$(document).ready(function(){
    $(this).scrollTop(0);
    if ($("body").hasClass("cheat-sheet")) {
        $(".menus").click(function(e){
            e.preventDefault();
            $('.modal-content').show();
            $(".contentRow").css("display", "none");
            $("#"+ $(this).attr("data-div")).css("display", "flex");
        });
    }
});
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
// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    $('[data-toggle="tooltip"]').tooltip(); 
    if ($("body").hasClass("password-generator")) {

// Generate a password string
function randString(id){
  var dataSet = $(id).attr('data-character-set').split(',');  
  var possible = '';
  if($.inArray('a-z', dataSet) >= 0){
    possible += 'abcdefghijklmnopqrstuvwxyz';
  }
  if($.inArray('A-Z', dataSet) >= 0){
    possible += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  }
  if($.inArray('0-9', dataSet) >= 0){
    possible += '0123456789';
  }
  if($.inArray('#', dataSet) >= 0){
    possible += '!$%^&*()-_=+~#@<>?|';
  }
  var text = '';
  for(var i=0; i < $(id).attr('data-size'); i++) {
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  }
  return text;
}

$(function(){
  $('.character-set').on('keyup', function(){
    var passLength = $(this).val();
    $('.form-control').attr({
      'data-size': passLength
    });
    $(".getNewPass").click();
  });
});

function limitText(limitField, limitNum) {
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    }
}

// Create a new password on page load
$('input[rel="gp"]').each(function(){
  $(this).val(randString($(this)));
});

// Create a new password
$(".getNewPass").click(function(){
  var field = $(this).closest('div').find('input[rel="gp"]');
  field.val(randString(field));
}); 

// Auto Select Pass On Focus
$('input[rel="gp"]').on("click", function () {
   $(this).select();
});
    }
});

// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("code-editor")) {
        var delay;
        var codeEditor = document.getElementById('code-editor');
        var editor = CodeMirror.fromTextArea(codeEditor, {
            mode: 'xml',
            tabMode: 'indent',
            htmlMode: true,
            lineNumbers: true,
            lineWrapping: true,
            autoCloseTags: true,
            theme: "xq-dark"
        });
        editor.on("change", function() {
            clearTimeout(delay);
            delay = setTimeout(updatePreview, 300);
        });
        function updatePreview() {
            var previewFrame = document.getElementById('preview');
            var preview =  previewFrame.contentDocument ||  previewFrame.contentWindow.document;
            preview.open();
            preview.write(editor.getValue());
            preview.close();
        }
        setTimeout(updatePreview, 300);
        $('.code-fill-screen').click(function(){
            console.log('test');
            $('.code-editor-container').css({
                'background-color': '#ffffff',
                'position': 'fixed',
                'z-index': '99',
                'top': '0',
                'left': '0',
                'bottom': '0',
                'right': '0',
                'padding': '5vh 0'
            })
        });
    }
});
// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    
    if ($("body").hasClass("image-cropper")) {
      $(function () {
        'use strict';
      
        var console = window.console || { log: function () {} };
        var URL = window.URL || window.webkitURL;
        var image = $('#image');
        var $download = $('#download');
        var $dataX = $('#dataX');
        var $dataY = $('#dataY');
        var $dataHeight = $('#dataHeight');
        var $dataWidth = $('#dataWidth');
        var $dataRotate = $('#dataRotate');
        var $dataScaleX = $('#dataScaleX');
        var $dataScaleY = $('#dataScaleY');
        var options = {
          aspectRatio: 16 / 9,
          preview: '.img-preview',
          crop: function (e) {
            $dataX.val(Math.round(e.detail.x));
            $dataY.val(Math.round(e.detail.y));
            $dataHeight.val(Math.round(e.detail.height));
            $dataWidth.val(Math.round(e.detail.width));
            $dataRotate.val(e.detail.rotate);
            $dataScaleX.val(e.detail.scaleX);
            $dataScaleY.val(e.detail.scaleY);
          }
        };
        var originalImageURL = image.attr('src');
        var uploadedImageName = 'cropped.jpg';
        var uploadedImageType = 'image/jpeg';
        var uploadedImageURL;
      
        // Tooltip
        $('[data-toggle="tooltip"]').tooltip();
      
        // Cropper
        image.on().cropper(options);
      
        // Buttons
        if (!$.isFunction(document.createElement('canvas').getContext)) {
          $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
        }
      
        if (typeof document.createElement('cropper').style.transition === 'undefined') {
          $('button[data-method="rotate"]').prop('disabled', true);
          $('button[data-method="scale"]').prop('disabled', true);
        }
      
        // Download
        if (typeof $download[0].download === 'undefined') {
          $download.addClass('disabled');
        }
      
        // Options
        $('.docs-toggles').on('change', 'input', function () {
          var $this = $(this);
          var name = $this.attr('name');
          var type = $this.prop('type');
          var cropBoxData;
          var canvasData;
      
          if (!image.data('cropper')) {
            return;
          }
      
          if (type === 'checkbox') {
            options[name] = $this.prop('checked');
            cropBoxData = image.cropper('getCropBoxData');
            canvasData = image.cropper('getCanvasData');
      
            options.ready = function () {
              image.cropper('setCropBoxData', cropBoxData);
              image.cropper('setCanvasData', canvasData);
            };
          } else if (type === 'radio') {
            options[name] = $this.val();
          }
      
          image.cropper('destroy').cropper(options);
        });
      
        // Methods
        $('.docs-buttons').on('click', '[data-method]', function () {
          var $this = $(this);
          var data = $this.data();
          var cropper = image.data('cropper');
          var cropped;
          var $target;
          var result;
      
          if ($this.prop('disabled') || $this.hasClass('disabled')) {
            return;
          }
      
          if (cropper && data.method) {
            data = $.extend({}, data); // Clone a new one
      
            if (typeof data.target !== 'undefined') {
              $target = $(data.target);
      
              if (typeof data.option === 'undefined') {
                try {
                  data.option = JSON.parse($target.val());
                } catch (e) {
                  console.log(e.message);
                }
              }
            }
      
            cropped = cropper.cropped;
      
            switch (data.method) {
              case 'rotate':
                if (cropped && options.viewMode > 0) {
                  image.cropper('clear');
                }
      
                break;
      
              case 'getCroppedCanvas':
                if (uploadedImageType === 'image/jpeg') {
                  if (!data.option) {
                    data.option = {};
                  }
                }
      
                break;
            }
      
            result = image.cropper(data.method, data.option, data.secondOption);
      
            switch (data.method) {
              case 'rotate':
                if (cropped && options.viewMode > 0) {
                  image.cropper('crop');
                }
      
                break;
      
              case 'scaleX':
              case 'scaleY':
                $(this).data('option', -data.option);
                break;
      
              case 'getCroppedCanvas':
                if (result) {
                  // Bootstrap's Modal
                  $('#getCroppedCanvasModal').modal().css({'opacity': '1', 'display':'block'}).find('.modal-dialog').css({'position':'absolute', 'top': '50%', 'left': '50%', 'transform': 'translate(-50%, -50%)'}).find('.modal-body').html(result);
      
                  if (!$download.hasClass('disabled')) {
                    download.download = uploadedImageName;
                    $download.attr('href', result.toDataURL(uploadedImageType));
                  }
                }
      
                break;
      
              case 'destroy':
                if (uploadedImageURL) {
                  URL.revokeObjectURL(uploadedImageURL);
                  uploadedImageURL = '';
                  image.attr('src', originalImageURL);
                }
      
                break;
            }

            if ($.isPlainObject(result) && $target) {
              try {
                $target.val(JSON.stringify(result));
              } catch (e) {
                console.log(e.message);
              }
            }
          }
        });
      
        // Keyboard
        $(document.body).on('keydown', function (e) {
          if (e.target !== this || !image.data('cropper') || this.scrollTop > 300) {
            return;
          }
      
          switch (e.which) {
            case 37:
              e.preventDefault();
              image.cropper('move', -1, 0);
              break;
      
            case 38:
              e.preventDefault();
              image.cropper('move', 0, -1);
              break;
      
            case 39:
              e.preventDefault();
              image.cropper('move', 1, 0);
              break;
      
            case 40:
              e.preventDefault();
              image.cropper('move', 0, 1);
              break;
          }
        });
      
        // Import image
        var $inputImage = $('#inputImage');
      
        if (URL) {
          $inputImage.change(function () {
            var files = this.files;
            var file;
      
            if (!image.data('cropper')) {
              return;
            }
      
            if (files && files.length) {
              file = files[0];
      
              if (/^image\/\w+$/.test(file.type)) {
                uploadedImageName = file.name;
                uploadedImageType = file.type;
      
                if (uploadedImageURL) {
                  URL.revokeObjectURL(uploadedImageURL);
                }
      
                uploadedImageURL = URL.createObjectURL(file);
                image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
                $inputImage.val('');
              } else {
                window.alert('Please choose an image file.');
              }
            }
          });
        } else {
          $inputImage.prop('disabled', true).parent().addClass('disabled');
        }
        var cropper = image.data('cropper');
      });
    }
});



$('.close-modal').click(function(){
  $('#getCroppedCanvasModal').modal('hide').css({'opacity': '0', 'display':'none'});
  $('.modal-backdrop').removeClass('show')
})

// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("email-validator")) {
        var editor = CodeMirror(document.getElementById("codeEditor"), {
    value:         "<table>\n\t<tr>\n\t\t<td>\n\t\t\tReplace this code with your HTML\n\t\t</td>\n\t</tr>\n</table>",
    mode :         "xml",
    htmlMode:      true,
    theme: "xq-dark",
    tabMode:       "indent",
    tabSize:       3,
    lineNumbers: true,
    lineWrapping: true,
    dragDrop:      true
});
function validate(){
    var resultEditor = CodeMirror(document.getElementById("codeOutput"), {
        value:         "<table>\n\t<tr>\n\t\t<td>\n\t\t\tIf you see this, please contact your account manager\n\t\t</td>\n\t</tr>\n</table>",
        mode :         "xml",
        htmlMode:      true,
        theme: "xq-dark",
        tabMode:       "indent",
        tabSize:       3,
        lineNumbers: true,
        lineWrapping: true,
        readOnly: true
    });
    $(iframeDocument).find('body').each(function(){
        if((this).getElementsByTagName('style').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> Your &#60;body&#62; contains a &#60;style&#62; tag we would advise you to move this to the head as email clients react differently to this</div>');
        }
        if((this).getElementsByTagName('h1').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('h1').length + ' &#60;h1&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('h2').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('h2').length + ' &#60;h2&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('h3').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('h3').length + ' &#60;h3&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('h4').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('h4').length + ' &#60;h4&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('h5').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('h5').length + ' &#60;h5&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('h6').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('h6').length + ' &#60;h6&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('p').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('p').length + ' &#60;p&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('div').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('div').length + ' &#60;div&#62; tag(s) in your email code, it is better practice to avoid these and instead try to better construct your &#60;table&#62; structure</div>');
        }
        if((this).getElementsByTagName('strong').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('strong').length + ' &#60;strong&#62; tag(s) in your email code, it is better practice to avoid these and instead use &#60;b&#62;</div>');
        }
        if((this).getElementsByTagName('unsubscribe').length < 1){
            $('.information-wrapper').append('<div class="information"><div class="fas fa-info-circle"></div> We could not find the Force24&#39;s unsubscribe tag within your email code, please replace your current unsubscribe with the following: &#60;unsubscribe style=""&#62;Unsubscribe&#60;/unsubscribe&#62;</div>');
        }
    });
    $(iframeDocument).find('head').each(function(){
        if((this).getElementsByTagName('title').length < 1){
            $('.error-wrapper').append('<div class="error"><div class="fas fa-bug"></div> Your &#60;head&#62; is missing a required element &#60;title&#62; we have automatically added this in, please update the value of this be best suit what you need</div>');
            $(this).append('<title>Force24 HTML Email</title>');
        }
        if((this).getElementsByTagName('style') < 1){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have no &#60;style&#62; tag in your head, without this and a media query your email will not be mobile responsive</div>');
        }
    });
    $(iframeDocument).find('table').each(function(){
        function S4() {
            return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
        }
        tableguid = (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();  
        $(this).attr({
            'data-f24-editable': '',
            'data-f24-display-name': 'Editable Table ' + tableguid
        }).removeAttr('data-f24-id');
        var tableHeight = $(this).attr('height');
        if(tableHeight < 20){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have a &#60;table&#62; with a height set to ' + tableHeight + ', outlook will automatically resize this to 20px we have applied the following style in order to avoid this (style="height:#px; line-height#px; font-size#px; mso-line-height:#px;)</div>');
            $(this).css({
                'height': tableHeight + 'px',
                'line-height': tableHeight + 'px',
                'font-size': tableHeight + 'px',
                'mso-line-height': tableHeight + 'px'
            });
        }
    });
    $(iframeDocument).find('td').first().parents('body').last().prepend('<spambotdetection class="invisible-preheader" style="font-size:0px; width:0px; height:0px; display:none; color:#e8e8e8; line-height:0px; text-decoration:none;">.</spambotdetection>');
    $(iframeDocument).find('td').each(function(){        
        function S4() {
            return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
        }
        tdguid = (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();         
        if($(this).children('unsubscribe').length > 0){
            $(this).after('<spambotdetection class="invisible-preheader" style="font-size:0px; width:0px; height:0px; display:none; color:#e8e8e8; line-height:0px; text-decoration:none;">.</spambotdetection>');
        }
        else{
            $(this).attr({
                'data-f24-editable': '',
                'data-f24-display-name': 'Editable TD ' + tdguid
            }).removeAttr('data-f24-id');
        }
        var tdHeight = $(this).attr('height');
        if(tdHeight < 20){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have a &#60;td&#62; with a height set to ' + tdHeight + ', outlook will automatically resize this to 20px we have applied the following style in order to avoid this (style="height:#px; line-height#px; font-size#px; mso-line-height:#px;)</div>');
            $(this).css({
                'height': tdHeight + 'px',
                'line-height': tdHeight + 'px',
                'font-size': tdHeight + 'px',
                'mso-line-height': tdHeight + 'px'
            });
        }
    });
    $(iframeDocument).find('tr').each(function(){
        var trHeight = $(this).attr('height');
        if(trHeight){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have a &#60;tr&#62; with a height set to ' + trHeight + ', You should avoid adding attributes to a &#60;tr&#62;, we have however added the following style in order to avoid Outlook resizing to 20px (style="height:#px; line-height#px; font-size#px; mso-line-height:#px;)</div>');
            $(this).css({
                'height': trHeight + 'px',
                'line-height': trHeight + 'px',
                'font-size': trHeight + 'px',
                'mso-line-height': trHeight + 'px'
            });
        }
    });
    $(iframeDocument).find('span').each(function(){
        function S4() {
            return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
        }
        spanGuid = (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();
        if($(this).hasClass('invisible-preheader')){
            $(this).attr({
                'data-f24-editable': '',
                'data-f24-display-name': 'Preheader'
            }).removeAttr('data-f24-id');
            $(this).after('<spambotdetection class="invisible-preheader" style="font-size:0px; width:0px; height:0px; display:none; color:#e8e8e8; line-height:0px; text-decoration:none;">.</spambotdetection>');
        }
        else{
            $(this).attr({
                'data-f24-editable': '',
                'data-f24-display-name': 'Editable Span ' + spanGuid
            }).removeAttr('data-f24-id');
        }
        var spanHeight = $(this).attr('height');
        if(spanHeight > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You should try to avoid using height on a &#60;span&#62; as this is an inline element and reacts differently in different email clients"</div>');
        }
    });
    $(iframeDocument).find('img').each(function(){
        function S4() {
            return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
        }
        imgGuid = (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();
        $(this).attr({
            'data-f24-editable': '',
            'data-f24-display-name': 'Editable Image ' + imgGuid
        }).removeAttr('data-f24-id');
        var imgHeight = $(this).attr('height');
        if(imgHeight < 20){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have a &#60;img&#62; with a height set to ' + imgHeight + ', outlook will automatically resize this to 20px we have applied the following style in order to avoid this (style="height:#px; line-height#px; font-size#px; mso-line-height:#px;)</div>');
            $(this).css({
                'height': imgHeight + 'px',
                'line-height': imgHeight + 'px',
                'font-size': imgHeight + 'px',
                'mso-line-height': imgHeight + 'px'
            });
        }
    });
    $(iframeDocument).find('a').each(function(){   
        function S4() {
            return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
        }         
        if((this).getElementsByTagName('img').length > 0){
            aGuid = (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();
            $(this).attr({
                'data-f24-no-edit': 'text',
                'data-f24-editable': '',
                'data-f24-display-name': 'Editable Link ' + aGuid
            }).removeAttr('data-f24-id');
        }
        else if($(this).attr('href') == "[nonTrackingLink]"){}
        else{
            aGuid = (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();
            $(this).attr({
                'data-f24-editable': '',
                'data-f24-display-name': 'Editable Link ' + aGuid
            }).removeAttr('data-f24-id');
        }
        var aHeight = $(this).attr('height');
        if(aHeight < 20){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have a &#60;a&#62; with a height set to ' + aHeight + ', outlook will automatically resize this to 20px we have applied the following style in order to avoid this (style="height:#px; line-height#px; font-size#px; mso-line-height:#px;)</div>');
            $(this).css({
                'height': trHeight + 'px',
                'line-height': trHeight + 'px',
                'font-size': trHeight + 'px',
                'mso-line-height': trHeight + 'px'
            });
        }
    });
    var doc = '<!doctype html>';
    resultEditor.setValue(doc.concat(iframeDocument.documentElement.outerHTML));
    $('.downloadTemplate').click(function(){
        var a = document.body.appendChild(
            document.createElement("a")
        );
        a.download = "template.html";
        a.href = "data:text/html," + encodeURIComponent(doc.concat(iframeDocument.documentElement.outerHTML));
        a.click();
    });
    $('.information-wrapper').append('<div class="information"><div class="fas fa-info-circle"></div> We have automatically added editable tags so that your email will work well in the Force24 portal</div>');
    $('.information-wrapper').append('<div class="information"><div class="fas fa-info-circle"></div> We have automatically added Spam Bot Detection, this helps us to eliminate spam bots and avoid unreliable click through rates in our tracking in the Force24 portal</div>');
}
$('.validate-code').on('click', function(){
    var delay = editor.lineCount() * 5;
    if(delay > 5000){
        delay = 5000;
    }
    console.log(delay);
    $('.loader-overlay').fadeIn();
    setTimeout(function(){ 
        $('.validate-code').html('Validate again?');
        $('.notice-wrapper').text('');
        $('.error-wrapper').text('');
        $('.information-wrapper').text('');
        $('#codeOutput').empty();
        var iframeElement = document.querySelector('iframe');
        iframeDocument = iframeElement.contentDocument;
        iframeDocument.open();
        var editorVal = editor.getValue();
        editorVal = editorVal.replace(/“/gi, '')
            .replace(/”/gi, '')
            .replace(/„/gi, '')
            .replace(/“/gi, '')
            .replace(/”/gi, '')
        iframeDocument.write(editorVal);
        iframeDocument.close();        
        validate();          
        $('.loader-overlay').fadeOut();  
    }, delay);        
});
function loadfile(input){
    var delay = input.files[0].size / 10;    
    if(delay > 5000){
        delay = 5000;
    }
    console.log(delay);
    $('.loader-overlay').fadeIn();
    setTimeout(function(){
        var reader = new FileReader();
        reader.onload = function(e){
            var iframeElement = document.querySelector('iframe');
            iframeDocument = iframeElement.contentDocument;
            iframeDocument.open();
            iframeDocument.write(e.target.result);
            iframeDocument.close();
            validate();
        };
        reader.readAsText(input.files[0]);
        $('.downloadTemplate').fadeIn();
        $('#codeUpload').fadeOut();
        $('.loader-overlay').fadeOut();     
    }, delay);
}
$('#byUpload').click(function(){
    editor.setValue("<table>\n\t<tr>\n\t\t<td>\n\t\t\tReplace this code with your HTML\n\t\t</td>\n\t</tr>\n</table>");
    $('#codeOutput').empty();
    $('#codeUpload').show();
    $('#codeEditor').hide();
    $('.validate-code').hide();
    $('#copyCodeHead').hide();
    $('.downloadTemplate').show();
    $('.notice-wrapper').text('');
    $('.error-wrapper').text('');
    $('.information-wrapper').text('');
});
$('#byDirectInput').click(function(){
    editor.setValue("<table>\n\t<tr>\n\t\t<td>\n\t\t\tReplace this code with your HTML\n\t\t</td>\n\t</tr>\n</table>");
    $('#codeOutput').empty();
    $('#codeUpload').hide();
    $('#codeEditor').show();
    $('.validate-code').show();
    $('#copyCodeHead').show();
    $('.downloadTemplate').show();
    $('.validate-code').html('Validate this');
    $('.notice-wrapper').text('');
    $('.error-wrapper').text('');
    $('.information-wrapper').text('');
});
function openDocs() {
    $(window).scrollTop(0);
    $('.main-wrap').css({
        'transform': 'perspective(1000px) translate3d(0,20vh,0) rotate3d(1,0,0,30deg)',
        'position': 'relative',
        'transition': 'all 0.6s',
        'transition-timing-function': 'cubic-bezier(0.2,1,0.3,1)'
    });
    $('body').css({
        'overflow': 'hidden'  ,
        'transition': 'all 0.6s'
    });
    $('.button-presets').css({
        'visibility': 'visible',
        'transition': 'all 0.6s',
        'transition-delay': '0.6s',
        'display':'block',
    });
}

/* Set the width of the side navigation to 0 */
function closeDocs() {
    $('.main-wrap').css({
        'transform': 'perspective(0) rotateX(0)',
        'position': 'inherit',
        'top': '0',
        'transition': 'all 0.6s'
    });
    $('body').css({
        'overflow': 'auto',
        'transition': 'all 0.6s'
    });
    $('.button-presets').css({
        'visibility': 'hidden',
        'transition': 'all 0.6s',
        'display':'none',
        'transition-delay': '0'
    });
}
    }});
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
