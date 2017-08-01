<?php include 'partials/header.php'; ?>
	
<!-- Other section -->
<section class="other-section other-section-6" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<i class="fa fa-clock-o"></i>
				<h6 class="title small">OPENING HOURS</h6>
				<p class="title-sub mini mr-b-10">Monday : 6:00 am to 9:00 pm</p>
				<p class="title-sub mini mr-b-10">Tuesday to Friday : 8:00 am to 7:00 pm</p>
				<p class="title-sub mini mr-b-10">Saturday : 8:00 am to 4:00 pm</p>
				<p class="title-sub mini mr-b-10">Sunday : 9:00 am to 1:00 pm</p>
			</div>
			<div class="col-md-6">
				<i class="fa fa-map-marker"></i>
				<h6 class="title small">LOCATIONS</h6>
				<p class="title-sub mini mr-b-20">
					<i class="fa fa-map-pin"></i> PO Box 16122, Collins Street West,<br>Victoria 8007, Australia
				</p>
				<p class="title-sub mini mr-b-20">
					<i class="fa fa-map-pin"></i> Lorem ipsum dolor, Invidunt ut labore,<br>Takimata sanctut, Australia
				</p>
			</div>
		</div>

		<hr class="mr-tb-40">
		
		<i class="fa fa-phone"></i>
		<h6 class="title mini">CALL US ON</h6>
		<h2 class="title">1-123-456-7890</h2>
		
		<hr class="mr-tb-40">
		<a href="#popup-trainingclass-form" class="btn btn-default btn-lg popup-trainingclass">BOOK YOUR FREE TRIAL</a>

	</div><!-- / container -->
	<div class="full-wh bg-section bg-cover bg-cc" data-bg="images/bg11.jpg"><b class="full-wh overlay"></b></div>
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