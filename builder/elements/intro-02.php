<?php include 'partials/header.php'; ?>
	
<!-- Intro -->
<section class="intro-section intro-section-3">
	<div class="overlay full-wh bg-cover bg-cc" style="background-image: url('images/bg3.jpg')"></div>
	<div class="container">

		<div class="info-wrp">
			<img src="images/app-icon1.png" alt="App icon" class="app-icon">
			<div class="carousel-widget" id="carousel-widget" data-items="1" data-itemrange="false" data-tdrag="false" data-mdrag="false" data-pdrag="false" data-autoplay="true" data-in="flipInX" data-loop="true" data-hstop="true">

				<div class="owl-carousel">
					<div class="item"><h2 class="main-text">Quick &amp; Easy to Manage Projects</h2></div>
					<div class="item"><h2 class="main-text">Lorem ipsum dolor sit amet consetetur</h2></div>
				</div>
			</div>
			
			<p class="sub-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>

			<a href="#" class="btn btn-default btn-lg">Download for FREE</a>
		</div>
	
	</div><!-- /.container -->
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