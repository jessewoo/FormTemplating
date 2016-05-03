<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/bootstrap-3.3.1/js/bootstrap.min.js"></script>
<script src="/ekko-lightbox/ekko-lightbox.js"></script>

<!-- Custom build JS -->
<script src="/js/NavBarControl.js"></script>
<script src="/js/ExtraBootstrapControls.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>

<script type="text/javascript">
	$(document).ready(function ($) {
		$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
		    event.preventDefault();
		    $(this).ekkoLightbox();
		});
	});

	$(document).ready(function() {      
	   	$('.carousel').carousel({
		    pause: true,
		    interval: false
		});
	});

</script>



