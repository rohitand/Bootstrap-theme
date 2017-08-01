<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-19" data-fullwh='y'>
	<!-- swiper-gallery -->
	<div class="swiper-gallery" id="swiper-gallery">
		<!-- Large images -->
		<div class="swiper-container gallery-top">
			<div class="swiper-wrapper">

				<!-- Slide -->
				<div class="swiper-slide flex-cl" data-bg="images/realestate_slide01.jpg">
					<div class="container">
						<!-- caption -->
						<div class="caption caption1">
							<strong class="tag-text">BUY</strong>
							<h2 class="title"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS">3884 Sunset Drive Stockbridge, GA 30281</a></h2>
							<hr>
							<p class="title-sub">3 Bed, 2 Bath, 2391 Sq Ft</p>
							<hr>
							<p class="price">$330000</p>
							<a href="#popup-contact-form" class="btn btn-line light btn-sm popup-contact">Contact Us</a>
						</div><!-- /.caption -->	
					</div>
				</div><!-- /.Slide -->
				
				<!-- Slide -->
				<div class="swiper-slide flex-cl" data-bg="images/realestate_slide02.jpg">
					<div class="container">
						<!-- caption -->
						<div class="caption caption1">
							<strong class="tag-text">RENT</strong>
							<h2 class="title"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS">3884 Sunset Drive Stockbridge, GA 30281</a></h2>
							<hr>
							<p class="title-sub">3 Bed, 2 Bath, 2391 Sq Ft</p>
							<hr>
							<p class="price">$1200/month</p>
							<a href="#popup-contact-form" class="btn btn-line light btn-sm popup-contact">Contact Us</a>
						</div><!-- /.caption -->	
					</div>
				</div><!-- /.Slide -->

				<!-- Slide -->
				<div class="swiper-slide flex-cl" data-bg="images/realestate_slide03.jpg">
					<div class="container">
						<!-- caption -->
						<div class="caption caption1">
							<strong class="tag-text">BUY</strong>
							<h2 class="title"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS">3884 Sunset Drive Stockbridge, GA 30281</a></h2>
							<hr>
							<p class="title-sub">4 Bed, 4 Bath, 3590 Sq Ft</p>
							<hr>
							<p class="price">$530000</p>
							<a href="#popup-contact-form" class="btn btn-line light btn-sm popup-contact">Contact Us</a>
						</div><!-- /.caption -->	
					</div>
				</div><!-- /.Slide -->

				<!-- Slide -->
				<div class="swiper-slide flex-cl" data-bg="images/realestate_slide04.jpg">
					<div class="container">
						<!-- caption -->
						<div class="caption caption1">
							<strong class="tag-text">RENT</strong>
							<h2 class="title"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS">3884 Sunset Drive Stockbridge, GA 30281</a></h2>
							<hr>
							<p class="title-sub">4 Bed, 4 Bath, 3590 Sq Ft</p>
							<hr>
							<p class="price">$2000/month</p>
							<a href="#popup-contact-form" class="btn btn-line light btn-sm popup-contact">Contact Us</a>
						</div><!-- /.caption -->	
					</div>
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
				<div class="swiper-slide" data-bg="images/realestate_slide01.jpg"></div>
				<!-- Thumb image -->
				<div class="swiper-slide" data-bg="images/realestate_slide02.jpg"></div>
				<!-- Thumb image -->
				<div class="swiper-slide" data-bg="images/realestate_slide03.jpg"></div>
				<!-- Thumb image -->
				<div class="swiper-slide" data-bg="images/realestate_slide04.jpg"></div>
				
			</div><!-- /.swiper-wrapper -->
		</div><!-- /.Thumb images -->
	</div><!-- /.swiper-gallery -->
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
