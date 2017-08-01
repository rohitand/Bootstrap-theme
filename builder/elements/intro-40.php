<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-28">
	<div class="full-wh bg-cover bg-cc bg-section" data-parallax="scroll" data-image-src="images/gym_intro.jpg"></div>
	<!-- container -->
	<div class="container flex-cl h100 pos-rel z2">
		<div class="content">
			<h1 class="title bold-5">QUICK & EASY WAY TO CREATE LANDING PAGE</h1>
			<hr class="light">
			<h2 class="title fs24 bold-4 italic">Our Popular Programs</h2>
			<div class="carousel-widget ctrl-1" 
				data-items="1"
				data-itemrange="false"
				data-tdrag="false"
				data-mdrag="false"
				data-pdrag="false"
				data-autoplay="true" 
				data-in="flipInX" 
				data-out="flipOutX" 
				data-loop="true"
				data-nav="false">

				<div class="owl-carousel">
					
					<div class="item">
						<div class="info-box info-box5">
							<div class="img"><img src="images/gym-program_small1.jpg" alt="image"></div>
							<div class="info">
								<h2 class="hd">Power Training</h2>
								<p class="sub-txt">Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
							</div>
						</div>
					</div><!-- /.item -->

					<div class="item">
						<div class="info-box info-box5">
							<div class="img"><img src="images/gym-program_small2.jpg" alt="image"></div>
							<div class="info">
								<h2 class="hd">Cardio Training</h2>
								<p class="sub-txt">Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
							</div>
						</div>
					</div><!-- /.item -->

					<div class="item">
						<div class="info-box info-box5">
							<div class="img"><img src="images/gym-program_small3.jpg" alt="image"></div>
							<div class="info">
								<h2 class="hd">Aerobics</h2>
								<p class="sub-txt">Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
							</div>
						</div>
					</div><!-- /.item -->

				</div><!-- /.owl-carousel -->
			</div><!-- /.carousel-widget -->
			<a href="#popup-contact-form" class="btn btn-line light popup-contact">Reserve a Free Trial</a>
		</div>
	</div><!-- /.container -->
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
