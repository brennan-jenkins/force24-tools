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