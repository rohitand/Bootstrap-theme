<?php include 'partials/header.php'; ?>
	
<!-- Testimonials -->
<section class="testimonial-section dark testimonial-section-2">
	<div class="container">
		<div class="carousel-widget ctrl-1" id="carousel-widget"
			data-items="1"
			data-itemrange="false"
			data-autoplay="false"
			data-nav="false"
			data-pager="true">
			<div class="owl-carousel">
				
				<div class="item">
					<div class="feedback-box feedback-box3">
						<i class="quote fa fa-quote-right"></i>
						<p class="feedback">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<div class="person">
							<img src="images/person1.jpg" alt="Person">
							<div class="info">
								<strong>Oupsum dolor</strong>
								<em>Creative Director</em>	
							</div>
						</div>
						<i class="down-arrow fa fa-caret-down"></i>
					</div><!-- /.feedback-box -->
				</div>
				
				<div class="item">
					<div class="feedback-box feedback-box3">
						<i class="quote fa fa-quote-right"></i>
						<p class="feedback">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<div class="person">
							<img src="images/person2.jpg" alt="Person">
							<div class="info">
								<strong>Oupsum dolor</strong>
								<em>Creative Director</em>
							</div>
						</div>
						<i class="down-arrow fa fa-caret-down"></i>
					</div><!-- /.feedback-box -->
				</div>

				<div class="item">
					<div class="feedback-box feedback-box3">
						<i class="quote fa fa-quote-right"></i>
						<p class="feedback">Sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<div class="person">
							<img src="images/person3.jpg" alt="Person">
							<div class="info">
								<strong>Oupsum dolor</strong>
								<em>Creative Director</em>
							</div>
						</div>
						<i class="down-arrow fa fa-caret-down"></i>
					</div><!-- /.feedback-box -->
				</div>

				<div class="item">
					<div class="feedback-box feedback-box3">
						<i class="quote fa fa-quote-right"></i>
						<p class="feedback">Onsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<div class="person">
							<img src="images/person4.jpg" alt="Person">
							<div class="info">
								<strong>Oupsum dolor</strong>
								<em>Creative Director</em>
							</div>
						</div>
						<i class="down-arrow fa fa-caret-down"></i>
					</div><!-- /.feedback-box -->
				</div>

				<div class="item">
					<div class="feedback-box feedback-box3">
						<i class="quote fa fa-quote-right"></i>
						<p class="feedback">Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<div class="person">
							<img src="images/person5.jpg" alt="Person">
							<div class="info">
								<strong>Oupsum dolor</strong>
								<em>Creative Director</em>
							</div>
						</div>
						<i class="down-arrow fa fa-caret-down"></i>
					</div><!-- /.feedback-box -->
				</div>

				<div class="item">
					<div class="feedback-box feedback-box3">
						<i class="quote fa fa-quote-right"></i>
						<p class="feedback">Aadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<div class="person">
							<img src="images/person6.jpg" alt="Person">
							<div class="info">
								<strong>Oupsum dolor</strong>
								<em>Creative Director</em>
							</div>
						</div>
						<i class="down-arrow fa fa-caret-down"></i>
					</div><!-- /.feedback-box -->
				</div>

			</div><!-- /.owl-carousel -->
		</div><!-- /.carousel-widget -->

	</div>
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