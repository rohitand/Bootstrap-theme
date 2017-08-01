<?php include 'partials/header.php'; ?>
	
<!-- Other section -->
<section class="other-section other-section-6 bg-cover bg-cc" data-bg="images/bg12.jpg">
	<div class="container">
		<i class="fa fa-clock-o"></i>
		<h6 class="title mini">REGULAR OPENING HOURS</h6>
		<h2 class="title">Monday to Saturday - 6:00 am to 9:00 pm</h2>
		<p class="title-sub">PO Box 16122, Collins Street West, Victoria 8007, Australia</p>

		<hr class="mr-tb-40">
		
		<i class="fa fa-phone"></i>
		<h6 class="title mini">CALL US ON</h6>
		<h2 class="title">1-123-456-7890</h2>
		
		<hr class="mr-tb-40">
		<a href="#popup-trainingclass-form" class="btn btn-default btn-lg popup-trainingclass">BOOK YOUR FREE TRIAL</a>

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