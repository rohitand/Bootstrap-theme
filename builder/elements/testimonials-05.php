<?php include 'partials/header.php'; ?>
	
<!-- Testimonials -->
<section class="testimonial-section testimonial-section-1">
	<div class="container">
		<div class="carousel-widget ctrl-1" 
			data-items="1"
			data-itemrange="false"
			data-autoplay="true"
			data-nav="false"
			data-in="false"
			data-out="false"
			data-pager="true">
			<div class="owl-carousel">
				
				<div class="item">
					<div class="dark feedback-box feedback-box2">
						<i class="fa fa-quote-right"></i>
						<p class="feedback">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<div class="person">
							<img src="images/person1.jpg" alt="Person">
							<strong>Oupsum dolor</strong>
							<em>Creative Director</em>
						</div>
					</div><!-- /.feedback-box -->
				</div>
				
				<div class="item">
					<div class="dark feedback-box feedback-box2">
						<i class="fa fa-quote-right"></i>
						<p class="feedback">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<div class="person">
							<img src="images/person2.jpg" alt="Person">
							<strong>Oupsum dolor</strong>
							<em>Creative Director</em>
						</div>
					</div><!-- /.feedback-box -->
				</div>

				<div class="item">
					<div class="dark feedback-box feedback-box2">
						<i class="fa fa-quote-right"></i>
						<p class="feedback">Sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<div class="person">
							<img src="images/person3.jpg" alt="Person">
							<strong>Oupsum dolor</strong>
							<em>Creative Director</em>
						</div>
					</div><!-- /.feedback-box -->
				</div>

				<div class="item">
					<div class="dark feedback-box feedback-box2">
						<i class="fa fa-quote-right"></i>
						<p class="feedback">Onsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<div class="person">
							<img src="images/person4.jpg" alt="Person">
							<strong>Oupsum dolor</strong>
							<em>Creative Director</em>
						</div>
					</div><!-- /.feedback-box -->
				</div>

				<div class="item">
					<div class="dark feedback-box feedback-box2">
						<i class="fa fa-quote-right"></i>
						<p class="feedback">Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<div class="person">
							<img src="images/person5.jpg" alt="Person">
							<strong>Oupsum dolor</strong>
							<em>Creative Director</em>
						</div>
					</div><!-- /.feedback-box -->
				</div>

				<div class="item">
					<div class="dark feedback-box feedback-box2">
						<i class="fa fa-quote-right"></i>
						<p class="feedback">Aadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<div class="person">
							<img src="images/person6.jpg" alt="Person">
							<strong>Oupsum dolor</strong>
							<em>Creative Director</em>
						</div>
					</div><!-- /.feedback-box -->
				</div>

			</div><!-- /.owl-carousel -->
		</div><!-- /.carousel-widget -->

	</div>
	<div class="bg-section bg-cover full-wh bg-cc" data-bg="images/bg8.jpg"><b class="full-wh"></b></div>
</section><!-- /.testimonial-section -->


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