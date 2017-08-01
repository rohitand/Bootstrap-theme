<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-15">
	<div class="swiper-widget swiper-container" id="swiper-widget" 
		 data-speed="2000"
		 data-autoplay="false"
		 data-fullsize="true">
		<div class="swiper-wrapper">
			<!-- Slides -->
			<div class="swiper-slide">
				<!-- Slide URL -->
				<a class="full-wh link" href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS"></a>

				<!-- Caption -->
				<div class="caption">
					<div class="main-text">
						<small class="tag-text">NEW YORK CITY</small>
						Empire State Building<br>& Statue of Liberty
					</div>
					<div class="sub-text">
						<small>From</small>
						$109.00
						<i class="fa fa-angle-right"></i>
					</div>
				</div><!-- /.caption -->

				<!-- Slide image -->
				<div class="full-wh bg-cc bg-cover slide-img" data-bg="images/travel-slide01.jpg"></div>
			</div>
			<!-- /.Slides -->


			<!-- Slides -->
			<div class="swiper-slide">
				<!-- Slide URL -->
				<a class="full-wh link" href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS"></a>

				<!-- Caption -->
				<div class="caption">
					<div class="main-text">
						<small class="tag-text">ROME</small>
						Ancient Rome and Colosseum Half-Day Walking Tour
					</div>
					<div class="sub-text">
						<small>From</small>
						$100.00
						<i class="fa fa-angle-right"></i>
					</div>
				</div><!-- /.caption -->

				<!-- Slide image -->
				<div class="full-wh bg-cc bg-cover slide-img" data-bg="images/travel-slide02.jpg"></div>
			</div>
			<!-- /.Slides -->

			<!-- Slides -->
			<div class="swiper-slide">
				<!-- Slide URL -->
				<a class="full-wh link" href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS"></a>

				<!-- Caption -->
				<div class="caption">
					<div class="main-text">
						<small class="tag-text">SAN FRANCISCO</small>
						San Francisco Walking Tour<br>Golden Gate Bridge
					</div>
					<div class="sub-text">
						<small>From</small>
						$99.00
						<i class="fa fa-angle-right"></i>
					</div>
				</div><!-- /.caption -->

				<!-- Slide image -->
				<div class="full-wh bg-cc bg-cover slide-img" data-bg="images/travel-slide03.jpg"></div>
			</div>
			<!-- /.Slides -->
		</div>
		<!-- Pagination -->
		<div class="swiper-pagination"></div>
		
		<!-- Navigation buttons -->
		<div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
		<div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
	</div>
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
