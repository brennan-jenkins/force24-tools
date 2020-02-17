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