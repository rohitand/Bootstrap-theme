<?php include 'partials/header.php'; ?>
	
<!-- Slider -->
<section class="slider-section slider-section-2">
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
					<img src="images/800x600_1.jpg" alt="App image">
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<img src="images/800x600_2.jpg" alt="App image">
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<img src="images/800x600_3.jpg" alt="App image">
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<img src="images/800x600_4.jpg" alt="App image">
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<img src="images/800x600_5.jpg" alt="App image">
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<img src="images/800x600_6.jpg" alt="App image">
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<img src="images/800x600_7.jpg" alt="App image">
				</div>
			</div><!-- /.item -->

			<div class="item">
				<div class="content anim">
					<div class="caption">
						<h3 class="cp-hd">Consetetur sadipscing</h3>
						<p class="cp-txt">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy</p>
					</div>
					<img src="images/800x600_8.jpg" alt="App image">
				</div>
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