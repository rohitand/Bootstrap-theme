<?php include 'partials/header.php'; ?>
	
<!-- Slider -->
<section class="slider-section slider-section-6 bg-cc bg-cover">
	<div class="container">
		<h2 class="title">Fashion Trends</h2>
		<p class="title-sub">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr diam nonumy<br>
			eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
		</p>	
	</div>

	<div class="carousel-widget zoom-carousel ctrl-1" id="carousel-widget" 
		data-nav="true"
		data-pager="true"
		data-itemrange="0,1|420,1|600,2|768,3|992,4|1200,5"
		data-margin="0"
		data-hauto="false"
		data-center="true">
		<div class="owl-carousel">
			
			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><img src="images/prd1_1.jpg" alt="image"></a>
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><img src="images/prd1_2.jpg" alt="image"></a>
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><img src="images/prd1_3.jpg" alt="image"></a>
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><img src="images/prd1_4.jpg" alt="image"></a>
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><img src="images/prd1_5.jpg" alt="image"></a>
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><img src="images/prd1_6.jpg" alt="image"></a>
				</div>
			</div><!-- /.item -->

		</div><!-- /.owl-carousel -->
	</div><!-- /.carousel-widget -->
	<div class="full-wh bg-section bg-cover bg-cc" data-bg="images/trends-bg.jpg"><b class="full-wh overlay"></b></div>
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