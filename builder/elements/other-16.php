<?php include 'partials/header.php'; ?>
	
<!-- Other section -->
<section class="other-section other-section-5 bg-cover bg-cc" data-bg="images/bg9.jpg">
	<div class="container">
		<div class="carousel-widget ctrl-1" id="carousel-widget"
			data-items="1"
			data-itemrange="false"
			data-tdrag="false"
			data-mdrag="false"
			data-pdrag="false"
			data-autoplay="true" 
			data-loop="true"
			data-nav="false">

			<div class="owl-carousel">
				
				<div class="item">
					<p class="content">"Ultimate text display option"</p>
				</div><!-- /.item -->

				<div class="item">
					<p class="content">"Quick and easy way to manage data"</p>
				</div><!-- /.item -->

			</div><!-- /.owl-carousel -->
		</div><!-- /.carousel-widget -->
		<hr class="mr-tb-40">
		<div class="awards">
			<img src="images/award-1_light.png" alt="Award">
			<img src="images/award-2_light.png" alt="Award">
			<img src="images/award-3_light.png" alt="Award">
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