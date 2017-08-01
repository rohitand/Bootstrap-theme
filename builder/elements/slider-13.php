<?php include 'partials/header.php'; ?>
	
<!-- Slider section -->
<section class="slider-section slider-section-7">

	<!-- swiper-gallery -->
	<div class="swiper-gallery" id="swiper-gallery">
		<!-- Large images -->
		<div class="swiper-container gallery-top">
			<div class="swiper-wrapper">

				<!-- Slide -->
				<div class="swiper-slide flex-cc" data-bg="images/destination_01.jpg">
					<!-- caption -->
					<div class="caption">
						<strong class="tag-text">TRENDING DESTINATION</strong>
						<h2 class="title"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS">VENICE</a></h2>
						<p class="title-sub">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
						<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-line light">Explore destinations</a>
					</div><!-- /.caption -->
				</div><!-- /.Slide -->

				<!-- Slide -->
				<div class="swiper-slide flex-cc" data-bg="images/destination_02.jpg">
					<!-- caption -->
					<div class="caption">
						<strong class="tag-text">TRENDING DESTINATION</strong>
						<h2 class="title"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS">PARIS</a></h2>
						<p class="title-sub">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
						<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-line light">Explore destinations</a>
					</div><!-- /.caption -->
				</div><!-- /.Slide -->

				<!-- Slide -->
				<div class="swiper-slide flex-cc" data-bg="images/destination_03.jpg">
					<!-- caption -->
					<div class="caption">
						<strong class="tag-text">TRENDING DESTINATION</strong>
						<h2 class="title"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS">ROME</a></h2>
						<p class="title-sub">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
						<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-line light">Explore destinations</a>
					</div><!-- /.caption -->
				</div><!-- /.Slide -->

				<!-- Slide -->
				<div class="swiper-slide flex-cc" data-bg="images/destination_04.jpg">
					<!-- caption -->
					<div class="caption">
						<strong class="tag-text">TRENDING DESTINATION</strong>
						<h2 class="title"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS">NEW YORK CITY</a></h2>
						<p class="title-sub">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
						<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-line light">Explore destinations</a>
					</div><!-- /.caption -->
				</div><!-- /.Slide -->

				<!-- Slide -->
				<div class="swiper-slide flex-cc" data-bg="images/destination_05.jpg">
					<!-- caption -->
					<div class="caption">
						<strong class="tag-text">TRENDING DESTINATION</strong>
						<h2 class="title"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS">LONDON</a></h2>
						<p class="title-sub">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
						<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-line light">Explore destinations</a>
					</div><!-- /.caption -->
				</div><!-- /.Slide -->

				<!-- Slide -->
				<div class="swiper-slide flex-cc" data-bg="images/destination_06.jpg">
					<!-- caption -->
					<div class="caption">
						<strong class="tag-text">TRENDING DESTINATION</strong>
						<h2 class="title"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS">SAN FRANCISCO</a></h2>
						<p class="title-sub">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
						<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-line light">Explore destinations</a>
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
				<div class="swiper-slide" data-toggle="tooltip" title="VENICE" data-bg="images/destination_01.jpg"></div>
				<!-- Thumb image -->
				<div class="swiper-slide" data-toggle="tooltip" title="PARIS" data-bg="images/destination_02.jpg"></div>
				<!-- Thumb image -->
				<div class="swiper-slide" data-toggle="tooltip" title="ROME" data-bg="images/destination_03.jpg"></div>
				<!-- Thumb image -->
				<div class="swiper-slide" data-toggle="tooltip" title="NEW YORK CITY" data-bg="images/destination_04.jpg"></div>
				<!-- Thumb image -->
				<div class="swiper-slide" data-toggle="tooltip" title="LONDON" data-bg="images/destination_05.jpg"></div>
				<!-- Thumb image -->
				<div class="swiper-slide" data-toggle="tooltip" title="SAN FRANCISCO" data-bg="images/destination_06.jpg"></div>
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