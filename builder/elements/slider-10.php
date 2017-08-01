<?php include 'partials/header.php'; ?>
	
<!-- Slider -->
<section class="slider-section slider-section-4">
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
					<p class="content">
						Ultimate news display option
						<a href="#" class="btn btn-xs btn-line light">Learn more...</a>
					</p>
				</div><!-- /.item -->

				<div class="item">
					<p class="content">
						Quick and easy way to manage data
						<a href="#" class="btn btn-xs btn-line light">Learn more...</a>
					</p>
				</div><!-- /.item -->

			</div><!-- /.owl-carousel -->
		</div><!-- /.carousel-widget -->
	</div>
</section><!-- /.slider-section -->


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