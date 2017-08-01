<?php include 'partials/header.php'; ?>
	
<!-- Other section -->
<section class="other-section other-section-6 bg-cover bg-cc" data-bg="images/bg1.jpg">
	<div class="container">
		<i class="fa fa-clock-o"></i>
		<h6 class="title mini">REGULAR OPENING HOURS</h6>
		<h2 class="title">Monday to Saturday - 8am to 9pm</h2>
		<p class="title-sub">PO Box 16122, Collins Street West, Victoria 8007, Australia</p>

		<hr class="mr-tb-40">
		
		<i class="fa fa-phone"></i>
		<h6 class="title mini">CALL FOR EMERGENCY CASES</h6>
		<h2 class="title">1-123-456-7890</h2>
		
		<hr class="mr-tb-40">
		<a href="#popup-appointment-form" class="btn btn-default btn-lg popup-appointment">GET APPOINTMENT</a>

	</div><!-- / container -->
</section><!-- / Other section -->


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