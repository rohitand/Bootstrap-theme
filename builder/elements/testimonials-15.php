<?php include 'partials/header.php'; ?>
	
<!-- Testimonials -->
<section id="feedback" class="testimonial-section testimonial-section-5">
	<div class="container">
		<h2 class="title">What our customer say</h2>
		<hr class="mr-tb-40">
		<div class="row">
			<div class="col-md-4">
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
			</div><!-- /.col-md-4 -->

			<div class="col-md-4">
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
			</div><!-- /.col-md-4 -->

			<div class="col-md-4">
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
			</div><!-- /.col-md-4 -->
		</div>

		
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