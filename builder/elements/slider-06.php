<?php include 'partials/header.php'; ?>
	
<!-- Slider - 6 -->
<section class="slider-section slider-section-3">
	<div class="container">
		<h2 class="title">Check Out Slider Features</h2>
		<p class="title-sub">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr diam nonumy<br>
			eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
		</p>
		
		<div class="carousel-widget ctrl-1" id="carousel-widget"
			data-nav="true"
			data-pager="true"
			data-itemrange="0,1|420,1|600,2|768,2|992,2|1200,3"
			data-margin="1"
			data-rbase="body"
			data-hauto="false">
			<div class="owl-carousel popgallery-widget">

				<div class="item propClone">
					<div class="img-box1">
						<div class="overlay anim">
							<span class="cm-item">
								<a href="images/800x600_1.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
							</span>
						</div>
						<img src="images/800x600_1.jpg" alt="App image">
					</div>
				</div><!-- /.item -->

				<div class="item propClone">
					<div class="img-box1">
						<div class="overlay anim">
							<span class="cm-item">
								<a href="images/800x600_2.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
								<a href="#"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="images/800x600_2.jpg" alt="App image">
					</div>
				</div><!-- /.item -->

				<div class="item">
					<div class="img-box1">
						<div class="overlay anim">
							<span class="cm-item">
								<a href="images/800x600_3.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
								<a href="#"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="images/800x600_3.jpg" alt="App image">
					</div>
				</div><!-- /.item -->

				<div class="item">
					<div class="img-box1">
						<div class="overlay anim">
							<span class="cm-item">
								<a href="images/800x600_4.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
								<a href="#"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="images/800x600_4.jpg" alt="App image">
					</div>
				</div><!-- /.item -->

				<div class="item">
					<div class="img-box1">
						<div class="overlay anim">
							<span class="cm-item">
								<a href="images/800x600_5.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
								<a href="#"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="images/800x600_5.jpg" alt="App image">
					</div>
				</div><!-- /.item -->

				<div class="item">
					<div class="img-box1">
						<div class="overlay anim">
							<span class="cm-item">
								<a href="images/800x600_6.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
								<a href="#"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="images/800x600_6.jpg" alt="App image">
					</div>
				</div><!-- /.item -->

				<div class="item">
					<div class="img-box1">
						<div class="overlay anim">
							<span class="cm-item">
								<a href="images/800x600_7.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
								<a href="#"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="images/800x600_7.jpg" alt="App image">
					</div>
				</div><!-- /.item -->

				<div class="item">
					<div class="img-box1">
						<div class="overlay anim">
							<span class="cm-item">
								<a href="images/800x600_8.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
								<a href="#"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="images/800x600_8.jpg" alt="App image">
					</div>
				</div><!-- /.item -->

			</div><!-- /.owl-carousel -->
		</div><!-- /.carousel-widget -->
	</div><!-- /.container -->
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
