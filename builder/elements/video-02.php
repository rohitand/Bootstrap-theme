<?php include 'partials/header.php'; ?>
	
<!-- Video section -->
<section class="video-section light video-section-1">
	<div class="container">
		<h2 class="title">Take quick overview of features</h2>
		<p class="title-sub">
			Lorem ipsum dolor sit amet, consetetur sadipscing<br>elitr diam nonumyeirmod tempor invidunt ut labore etdolore.
		</p>
		
		<div class="video-box">
			<iframe width="100%" height="100%" src="https://www.youtube.com/embed/dorZ3vag5PI" frameborder="0" allowfullscreen></iframe>
			<div class="frameCover" data-type="video"></div>
		</div><!-- /.video-box -->

		<a href="#" class="btn btn-line btn-lg mr-t-40">Learn more</a>
	</div>
</section><!-- /.video-section -->


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