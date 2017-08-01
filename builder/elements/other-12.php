<?php include 'partials/header.php'; ?>
	
<!-- Other section -->
<section class="other-section other-section-7 bg-cover bg-cc" data-bg="images/bg1.jpg">
	<div class="full-wh w-50 map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d39733.073301428696!2d-0.16466593641202756!3d51.50739853189934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!3m2!1d51.5073509!2d-0.1277583!4m0!5e0!3m2!1sen!2s!4v1442426108187" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="container-fluid">
		<div class="row eqh">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<div class="content">
					<i class="fa fa-clock-o"></i>
					<h6 class="title mini">REGULAR OPENING HOURS</h6>
					<h2 class="title">Monday to Saturday<br>8am to 9pm</h2>
					<p class="title-sub">PO Box 16122, Collins Street West, Victoria 8007, Australia</p>

					<hr class="mr-tb-40">
					
					<i class="fa fa-phone"></i>
					<h6 class="title mini">CALL FOR EMERGENCY CASES</h6>
					<h2 class="title">1-123-456-7890</h2>
					
					<hr class="mr-tb-40">
					<a href="#popup-appointment-form" class="btn btn-default btn-lg popup-appointment">GET APPOINTMENT</a>	
				</div>
			</div>
		</div>
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