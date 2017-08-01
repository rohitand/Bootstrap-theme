<?php include 'partials/header.php'; ?>
	
<!-- content-section -->
<section class="content-section content-section-9">
	<div class="container">
		<div class="row">
			
			<!-- Column -->
			<div class="col-md-6">
				<p><img src="images/yoga_800x600_01.jpg" class="img-responsive" alt="Image"></p>
				<h2 class="title">What is Yoga?</h2>
				<p class="title-sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaad adsfd.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div><!-- / Column -->
			
			<!-- Column -->
			<div class="col-md-5 col-md-offset-1 align-c">
				
				<div class="feedback-wrp">
					<h2 class="title small">Testimonials</h2>
					<p class="title-sub mini">Lorem ipsum dolor sitamet consectetur adipisicing elit seddo eiusmod tempor incididunt ulabore.</p>

					<div class="carousel-widget ctrl-1" id="carousel-widget"
						data-items="1"
						data-itemrange="false"
						data-autoplay="true" 
						data-loop="true"
						data-pager="true"
						data-h="false">
						<div class="owl-carousel">

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
							</div>
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
							</div>
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
							</div>
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
							</div>
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
							</div>
							<div class="item">
								<div class="feedback-box feedback-box4">
									<div class="person">
										<img src="images/person6.jpg" alt="Person">
										<div class="info">
											<strong>Oupsum dolor</strong>
											<em>Creative Director</em>	
										</div>
									</div>
									<p class="feedback">Sed diam nonumy eirmod tempor Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
								</div><!-- /.feedback-box -->
							</div>

						</div><!-- /.owl-carousel -->
					</div><!-- /.col-md-5 -->
				</div><!-- /.feedback-wrp -->

			</div><!-- / Column -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.content-section -->


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