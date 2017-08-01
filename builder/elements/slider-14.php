<?php include 'partials/header.php'; ?>
	
<!-- Slider section -->
<section class="slider-section slider-section-7" id="popular">
	<!-- swiper-gallery -->
	<div class="swiper-gallery" id="swiper-gallery">

		<h2 class="title medium">MOST POPULAR PROPERTIES</h2>

		<!-- Large images -->
		<div class="swiper-container gallery-top">
			<div class="swiper-wrapper">

				<!-- Slide -->
				<div class="swiper-slide flex-cc" data-bg="images/realestate_slide01.jpg">
					<!-- caption -->
					<div class="caption">
						<strong class="tag-text">TO BUY</strong>
						<hr class="light w-50 mr-auto">
						<p class="title-sub fs40 bold-3 mr-b-10">$330000</p>
						<h2 class="title small"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS">3884 Sunset Drive Stock bridge, GA 30281</a></h2>
						<p class="title-sub mr-0">
							<i class="fa fa-bed"></i> 4 Bed, &nbsp;&nbsp; 
							<i class="fa fa-tint"></i> 2 Bath, &nbsp;&nbsp;
							<i class="fa fa-building-o"></i> 1908 Sq Ft
						</p>
						<hr class="light w-50 mr-auto">
						<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-line light">More info</a>
					</div><!-- /.caption -->
				</div><!-- /.Slide -->

				<!-- Slide -->
				<div class="swiper-slide flex-cc" data-bg="images/realestate_slide02.jpg">
					<!-- caption -->
					<div class="caption">
						<strong class="tag-text">FOR RENT</strong>
						<hr class="light w-50 mr-auto">
						<p class="title-sub fs40 bold-3 mr-b-10">$3000 / Month</p>
						<h2 class="title small"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS">3884 Sunset Drive Stock bridge, GA 30281</a></h2>
						<p class="title-sub mr-0">
							<i class="fa fa-bed"></i> 3 Bed, &nbsp;&nbsp; 
							<i class="fa fa-tint"></i> 2 Bath, &nbsp;&nbsp;
							<i class="fa fa-building-o"></i> 1708 Sq Ft
						</p>
						<hr class="light w-50 mr-auto">
						<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-line light">More info</a>
					</div><!-- /.caption -->
				</div><!-- /.Slide -->

				<!-- Slide -->
				<div class="swiper-slide flex-cc" data-bg="images/realestate_slide03.jpg">
					<!-- caption -->
					<div class="caption">
						<strong class="tag-text">FOR RENT</strong>
						<hr class="light w-50 mr-auto">
						<p class="title-sub fs40 bold-3 mr-b-10">$1700 / Month</p>
						<h2 class="title small"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS">3884 Sunset Drive Stock bridge, GA 30281</a></h2>
						<p class="title-sub mr-0">
							<i class="fa fa-bed"></i> 3 Bed, &nbsp;&nbsp; 
							<i class="fa fa-tint"></i> 2 Bath, &nbsp;&nbsp;
							<i class="fa fa-building-o"></i> 1708 Sq Ft
						</p>
						<hr class="light w-50 mr-auto">
						<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-line light">More info</a>
					</div><!-- /.caption -->
				</div><!-- /.Slide -->

			</div><!-- /.swiper-wrapper -->
			<!-- Navigation buttons -->
			<div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
			<div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
		</div><!-- /Large images -->

		<!-- Thumb images -->
		<div class="swiper-container gallery-thumbs">
			<div class="swiper-wrapper">
				<!-- Thumb image -->
				<div class="swiper-slide" style="width:150px;" data-bg="images/realestate_slide01.jpg"></div>
				<!-- Thumb image -->
				<div class="swiper-slide" style="width:150px;" data-bg="images/realestate_slide02.jpg"></div>
				<!-- Thumb image -->
				<div class="swiper-slide" style="width:150px;" data-bg="images/realestate_slide03.jpg"></div>
			</div><!-- /.swiper-wrapper -->
		</div><!-- /.Thumb images -->
	</div><!-- /.swiper-gallery -->
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