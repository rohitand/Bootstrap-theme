<?php include 'partials/header.php'; ?>
	
<!-- Slider -->
<section class="slider-section slider-section-2">
	
	<div class="container">
		<h2 class="title">Check Out Slider Features</h2>
		<p class="title-sub">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr diam nonumy<br>
			eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
		</p>	
	</div>
	
	<div class="carousel-widget zoom-carousel ctrl-1" id="carousel-widget"
		data-nav="true"
		data-pager="true"
		data-itemrange="0,1|420,1|600,2|768,3|992,4|1200,6"
		data-margin="0"
		data-hauto="false"
		data-center="true">
		<div class="owl-carousel">
			
			<div class="item">
				<div class="content anim"><img src="images/app-img1.jpg" alt="App image"></div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim"><img src="images/app-img2.jpg" alt="App image"></div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim"><img src="images/app-img3.jpg" alt="App image"></div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim"><img src="images/app-img4.jpg" alt="App image"></div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim"><img src="images/app-img5.jpg" alt="App image"></div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim"><img src="images/app-img6.jpg" alt="App image"></div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim"><img src="images/app-img7.jpg" alt="App image"></div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim"><img src="images/app-img8.jpg" alt="App image"></div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim"><img src="images/app-img9.jpg" alt="App image"></div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim"><img src="images/app-img10.jpg" alt="App image"></div>
			</div><!-- /.item -->

		</div><!-- /.owl-carousel -->
	</div><!-- /.carousel-widget -->
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