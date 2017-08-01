<?php include 'partials/header.php'; ?>
	
<!-- Slider -->
<section class="slider-section slider-section-8" id="casestudy">
	<div class="container align-c pos-rel z2">
		
		<!-- Title and content -->
		<div class="w-75 mr-auto">
			<h2 class="title medium">Case studies</h2>
			<p class="title-sub">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>	
		</div><!-- / Title and content -->
		
		<div class="carousel-widget ctrl-2 mr-auto" 
			data-nav="true"
			data-pager="true"
			data-itemrange="0,1|420,1|600,1|768,1|992,1|1200,1"
			data-margin="20"
			data-rbase="body"
			data-hauto="false">

			<div class="owl-carousel popgallery-widget">

				<div class="item">
					<div class="img-box1">
						<div class="overlay anim flex-cc">
							<span>
								<a href="images/800x400_1.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
								<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="images/800x400_1.jpg" alt="App image">
					</div>
					<div class="bg-color1 pd-40 typo-light">
						<h2 class="fs26 mr-b-10">Lorem ipsum dolor sit amet</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
					</div>
				</div><!-- /.item -->

				<div class="item">
					<div class="img-box1">
						<div class="overlay anim flex-cc">
							<span>
								<a href="images/800x400_2.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
								<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="images/800x400_2.jpg" alt="App image">
					</div>
					<div class="bg-color1 pd-40 typo-light">
						<h2 class="fs26 mr-b-10">Lorem ipsum dolor sit amet</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
					</div>
				</div><!-- /.item -->

			</div><!-- /.owl-carousel -->
		</div><!-- /.carousel-widget -->
	</div><!-- /.container -->

	<div class="bg-section bg-cc full-wh" data-bg="images/pattern2.png"></div>
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