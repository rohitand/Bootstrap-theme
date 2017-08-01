<?php include 'partials/header.php'; ?>
	
<!-- Intro -->
<section class="intro-section intro-section-10">
	<div class="carousel-widget ctrl-1" id="carousel-widget"
		data-items="1"
		data-center="true"
		data-itemrange="false"
		data-tdrag="false"
		data-mdrag="false"
		data-pdrag="false"
		data-autoplay="false" 
		data-loop="true"
		data-nav="true">

		<div class="owl-carousel">
			
			<div class="item">
				<div class="overlay full-wh bg-cover" data-bg="images/medical_02.jpg"><b class="full-wh overlay"></b></div>
				<div class="caption vm-item">
					<h2 class="main-text delay-0-8s">
						<small>All in one</small>
						HEALTH CARE SOLUTION
					</h2>
					<hr class="delay-1-2s">
					<p class="sub-text delay-1-6s">
						Lorem ipsum dolor sit amet, consetetur sadipscing elitrsed diam nonumy eirmod tempor invidunt utlabore
					</p>
					<a href="#popup-appointment-form" class="btn btn-default btn1 popup-appointment delay-2s">Make an appointment</a>
				</div><!-- /.caption -->
			</div><!-- /.item -->

			<div class="item">
				<div class="overlay full-wh bg-cover" data-bg="images/medical_01.jpg"><b class="full-wh overlay"></b></div>
				<div class="caption vm-item">
					<h2 class="main-text delay-0-8s">
						<small>RELIABLE & TRUSTED</small>
						HIGHLY QUALIFIED DOCTORS
					</h2>
					<hr class="delay-1-2s">
					<p class="sub-text delay-1-6s">
						Lorem ipsum dolor sit amet, consetetur sadipscing elitrsed diam nonumy eirmod
					</p>
					<a href="#popup-appointment-form" class="btn btn-default btn1 popup-appointment delay-2s">Make an appointment</a>
				</div><!-- /.caption -->
			</div><!-- /.item -->

		</div><!-- /.owl-carousel -->
	</div><!-- /.carousel-widget -->
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
