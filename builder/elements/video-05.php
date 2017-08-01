<?php include 'partials/header.php'; ?>
	
<!-- Video section -->
<section class="video-section light video-section-2">
	<div class="container">
		<div class="row eqh">
			<div class="col-md-5 col-md-push-7">
				<div class="content vm-item">
					<h2 class="title">Take quick overview of features</h2>
					<p class="title-sub">
						Lorem ipsum dolor sit amet, consetetur sadipscing<br>elitr diam nonumyeirmod tempor invidunt ut labore etdolore.
					</p>			
				</div>
			</div>
			<div class="col-md-6 col-md-offset-1 col-md-pull-6">
				<div class="video-box">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/dorZ3vag5PI" frameborder="0" allowfullscreen></iframe>
					<div class="frameCover" data-type="video"></div>
				</div><!-- /.video-box -->
			</div>
		</div>
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