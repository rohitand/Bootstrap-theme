<?php include 'partials/header.php'; ?>
	
<!-- Slider -->
<section class="slider-section slider-section-9 bg-dark3" id="templates">
	<div class="container align-c typo-light">
		<h2 class="title medium bold-4">Ready to use templates</h2>
		<p class="title-sub">R.Gen Landing Pages come up with 35+ ready landing pages for multipurpose use it easy to customize.</p>
		
		<hr class="mr-tb-40 w-50 mr-auto light">
		
		<div class="carousel-widget ctrl-2 ctrl-light" 
			data-nav="true"
			data-pager="true"
			data-itemrange="0,1|420,1|600,2|768,2|992,3|1200,3"
			data-margin="20"
			data-hauto="false">
			<div class="owl-carousel">
				
				<div class="item">
					<div class="content anim">
						<a href="http://themeforest.net/item/rgen-landing-pages-with-page-builder/13244840?ref=R_GENESIS" target="_blank"><img src="images/demo-07.png" alt="Image"></a>	
					</div>
				</div><!-- /.item -->
				<div class="item">
					<div class="content anim">
						<a href="http://themeforest.net/item/rgen-landing-pages-with-page-builder/13244840?ref=R_GENESIS" target="_blank"><img src="images/demo-08.png" alt="Image"></a>	
					</div>
				</div><!-- /.item -->
				<div class="item">
					<div class="content anim">
						<a href="http://themeforest.net/item/rgen-landing-pages-with-page-builder/13244840?ref=R_GENESIS" target="_blank"><img src="images/demo-01.png" alt="Image"></a>	
					</div>
				</div><!-- /.item -->
				<div class="item">
					<div class="content anim">
						<a href="http://themeforest.net/item/rgen-landing-pages-with-page-builder/13244840?ref=R_GENESIS" target="_blank"><img src="images/demo-02.png" alt="Image"></a>	
					</div>
				</div><!-- /.item -->
				<div class="item">
					<div class="content anim">
						<a href="http://themeforest.net/item/rgen-landing-pages-with-page-builder/13244840?ref=R_GENESIS" target="_blank"><img src="images/demo-03.png" alt="Image"></a>	
					</div>
				</div><!-- /.item -->
				<div class="item">
					<div class="content anim">
						<a href="http://themeforest.net/item/rgen-landing-pages-with-page-builder/13244840?ref=R_GENESIS" target="_blank"><img src="images/demo-04.png" alt="Image"></a>	
					</div>
				</div><!-- /.item -->
				<div class="item">
					<div class="content anim">
						<a href="http://themeforest.net/item/rgen-landing-pages-with-page-builder/13244840?ref=R_GENESIS" target="_blank"><img src="images/demo-05.png" alt="Image"></a>	
					</div>
				</div><!-- /.item -->
				<div class="item">
					<div class="content anim">
						<a href="http://themeforest.net/item/rgen-landing-pages-with-page-builder/13244840?ref=R_GENESIS" target="_blank"><img src="images/demo-06.png" alt="Image"></a>	
					</div>
				</div><!-- /.item -->

			</div><!-- /.owl-carousel -->
		</div><!-- /.carousel-widget -->

		<hr class="mr-tb-40 w-50 mr-auto light">

		<a href="http://themeforest.net/item/rgen-landing-pages-with-page-builder/13244840?ref=R_GENESIS" target="_blank" class="btn btn-lg btn-color1" target="_blank">VIEW ALL DEMO TEMPLATES</a>
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