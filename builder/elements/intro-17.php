<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-18">
	<div class="container flex-cl">
		<div class="caption">
			<h2 class="title lh1-4">Largest and trusted <br>car hire booking service</h2>
			<p class="title-sub">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
			<hr class="light mr-tb-20">
			<h2 class="title small italic bold-4">Save up to 60% <br>in top destinations this fall</h2>
			<a href="#popup-carbooking-form" class="btn btn-default no-border btn-lg popup-carbooking">QUICK BOOING</a>
		</div><!-- /.content -->
	</div><!-- /.container -->
	<div class="full-wh bg-section bg-cover bg-cc" data-bg="images/car_slide01.jpg"></div>
</section><!-- /.intro-section -->


<?php include 'partials/footer.php'; ?>


<script>
jQuery(document).ready(function($) {
	temp();	
});
function temp () { 
	$.getScript("js/rgen.js", function(data, textStatus, jqxhr) {
		$('[data-parallax="scroll"]').parallax();
	});
}
</script>
</body>
</html>
