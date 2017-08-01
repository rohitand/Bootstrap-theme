<?php include 'partials/header.php'; ?>
	
<!-- other-section -->
<section class="other-section other-section-8">
	<div class="container">
		<div class="row tbl-gr align-m">
			
			<div class="col-md-6 l">

				<!-- Title -->
				<h2 class="title small mr-b-40">Testimonials</h2>
				
				<!-- carousel-widget -->
				<div class="carousel-widget ctrl-1" id="carousel-widget"
					data-items="1"
					data-nav="false"
					data-pager="true"
					data-itemrange="false"
					data-margin="20"
					data-in="false"
					data-out="false"
					data-autoplay="false"
					data-rbase="body"
					data-loop="false">
					<div class="owl-carousel popgallery-widget">
						
						<!-- item -->
						<div class="item">
							<div class="feedback-box feedback-box4">
								<div class="person">
									<img src="images/person1.jpg" alt="Person">
									<div class="info">
										<strong>Oupsum dolor</strong>
										<em>Creative Director</em>	
									</div>
								</div>
								<p class="feedback">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
							</div><!-- /.feedback-box -->
						</div><!-- /.item -->
						
						<!-- item -->
						<div class="item">
							<div class="feedback-box feedback-box4">
								<div class="person">
									<img src="images/person2.jpg" alt="Person">
									<div class="info">
										<strong>Oupsum dolor</strong>
										<em>Creative Director</em>	
									</div>
								</div>
								<p class="feedback">Ermod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
							</div><!-- /.feedback-box -->
						</div><!-- /.item -->
						
						<!-- item -->
						<div class="item">
							<div class="feedback-box feedback-box4">
								<div class="person">
									<img src="images/person3.jpg" alt="Person">
									<div class="info">
										<strong>Oupsum dolor</strong>
										<em>Creative Director</em>	
									</div>
								</div>
								<p class="feedback">Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
							</div><!-- /.feedback-box -->
						</div><!-- /.item -->
						
						<!-- item -->
						<div class="item">
							<div class="feedback-box feedback-box4">
								<div class="person">
									<img src="images/person4.jpg" alt="Person">
									<div class="info">
										<strong>Oupsum dolor</strong>
										<em>Creative Director</em>	
									</div>
								</div>
								<p class="feedback">Tempor invidunt ut labore et dolore Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
							</div><!-- /.feedback-box -->
						</div><!-- /.item -->

						<!-- item -->
						<div class="item">
							<div class="feedback-box feedback-box4">
								<div class="person">
									<img src="images/person5.jpg" alt="Person">
									<div class="info">
										<strong>Oupsum dolor</strong>
										<em>Creative Director</em>	
									</div>
								</div>
								<p class="feedback">Nvidunt ut labore et dolore lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
							</div><!-- /.feedback-box -->
						</div><!-- /.item -->

						<!-- item -->
						<div class="item">
							<div class="feedback-box feedback-box4">
								<div class="person">
									<img src="images/person6.jpg" alt="Person">
									<div class="info">
										<strong>Oupsum dolor</strong>
										<em>Creative Director</em>	
									</div>
								</div>
								<p class="feedback">Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
							</div><!-- /.feedback-box -->
						</div><!-- /.item -->

					</div><!-- /.owl-carousel -->
				</div><!-- /.carousel-widget -->
			</div><!-- /.col-md-6 -->

			<div class="col-md-6 r">
				<!-- Content -->
				<div class="content">
					<h2 class="title">About us</h2>
					<p class="title-sub">
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
					</p>
					<a href="#popup-contact-form" class="btn btn-line light popup-contact">Contact us</a>
				</div><!-- /.Content -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.container -->

	<!-- /.background image -->
	<div class="full-wh bg-cover bg-cc" data-bg="images/travel-bg.jpg"><b class="full-wh overlay"></b></div>
</section><!-- /.other-section -->


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