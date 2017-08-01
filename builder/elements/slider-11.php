<?php include 'partials/header.php'; ?>
	
<!-- Slider -->
<section class="slider-section slider-section-5">
	<div class="container">
		<h2 class="title">Delightful Experience</h2>
		<p class="title-sub">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr diam nonumy<br>
			eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
		</p>	
	</div>

	<div class="carousel-widget zoom-carousel ctrl-1" id="carousel-widget"
		data-nav="true"
		data-pager="true"
		data-itemrange="0,1|420,1|600,2|768,2|992,2|1200,3"
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
					<img src="images/food_img01.jpg" alt="image">
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<img src="images/food_img02.jpg" alt="image">
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<img src="images/food_img03.jpg" alt="image">
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<img src="images/food_img04.jpg" alt="image">
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<img src="images/food_img05.jpg" alt="image">
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<img src="images/food_img06.jpg" alt="image">
				</div>
			</div><!-- /.item -->

		</div><!-- /.owl-carousel -->
	</div><!-- /.carousel-widget -->
	<div class="full-wh bg-section bg-cover"><b class="full-wh overlay"></b></div>
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