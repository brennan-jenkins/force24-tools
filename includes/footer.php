


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://fengyuanchen.github.io/js/common.js"></script>
<script src="https://unpkg.com/cropperjs/dist/cropper.js"></script>
<script src="build/js/libs.js"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
<script src="build/js/scripts.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.3.2/tinymce.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.3.2/jquery.tinymce.min.js"></script>

<script>
	
	$(function() {
				// Initialize grid editor
				$('#myGrid').gridEditor({
						new_row_layouts: [[12], [6,6], [4,4,4], [3,3,3,3], [8, 4], [2, 8, 2], [3, 6, 3]],
						content_types: ['tinymce'],
						autoCrop: true,
						data: true
				});
	});				
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83853044-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-83853044-2');
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-592eca1edd705338"></script>


<!-- Start Force24 tracking -->
<script>     
	!function(f,o,r,c,e,_2,_4){f.Force24Object=e,f[e]=f[e]||function(){
		(f[e].q=f[e].q||[]).push(arguments)},f[e].l=1*new Date,     
		_2=o.createElement(r),_4=o.getElementsByTagName(r)[0],_2.async=1,     
		_2.src=c,_4.parentNode.insertBefore(_2,_4)
	}
	(window,document, "script","//tracking1.force24.co.uk/tracking/V2/main.min.js","f24");  
	f24("create", "DB41DC8A-D5CD-4027-8670-744BDFFB0588");//replace with correct cliendId
	f24("send", "pageview");
</script>
<!-- End Force24 tracking -->


</body> 
</html>
