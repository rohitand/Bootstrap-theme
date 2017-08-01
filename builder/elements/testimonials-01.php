<?php include 'partials/header.php'; ?>
	
<!-- Testimonials -->
<section class="testimonial-section testimonial-section-1">
	<div class="container">

		<h2 class="title">What our customer say</h2>
		<p class="title-sub">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr diam nonumyeirmod tempor invidunt ut labore etdolore.
		</p>
		
		<div class="row">
			<div class="col-md-4">
				<div class="feedback-box feedback-box1">
					<i class="fa fa-quote-right"></i>
					<p class="feedback">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					<div class="person">
						<strong>Oupsum dolor</strong>
						<em>Creative Director</em>
					</div>
				</div><!-- /.feedback-box -->

				<div class="feedback-box feedback-box1">
					<i class="fa fa-quote-right"></i>
					<p class="feedback">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
					<div class="person">
						<strong>Oupsum dolor</strong>
						<em>Creative Director</em>
					</div>
				</div><!-- /.feedback-box -->
			</div><!-- /.col -->

			<div class="col-md-4">
				<div class="feedback-box feedback-box1">
					<i class="fa fa-quote-right"></i>
					<p class="feedback">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
					<div class="person">
						<strong>Oupsum dolor</strong>
						<em>Creative Director</em>
					</div>
				</div><!-- /.feedback-box -->

				<div class="feedback-box feedback-box1">
					<i class="fa fa-quote-right"></i>
					<p class="feedback">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
					<div class="person">
						<strong>Oupsum dolor</strong>
						<em>Creative Director</em>
					</div>
				</div><!-- /.feedback-box -->
			</div><!-- /.col -->

			<div class="col-md-4">
				<div class="feedback-box feedback-box1">
					<i class="fa fa-quote-right"></i>
					<p class="feedback">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore  eirmod tempor invidunt ut labore et dolore.</p>
					<div class="person">
						<strong>Oupsum dolor</strong>
						<em>Creative Director</em>
					</div>
				</div><!-- /.feedback-box -->

				<div class="feedback-box feedback-box1">
					<i class="fa fa-quote-right"></i>
					<p class="feedback">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
					<div class="person">
						<strong>Oupsum dolor</strong>
						<em>Creative Director</em>
					</div>
				</div><!-- /.feedback-box -->
			</div><!-- /.col -->
		</div><!-- /.row -->

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