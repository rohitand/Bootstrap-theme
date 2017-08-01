<?php include 'partials/header.php'; ?>
	
<!-- Video section -->
<section class="video-section video-section-3">
	<div class="container">
		<div class="content">
			<br><br>
			<h2 class="title">Our Story</h2>
			<hr class="mr-tb-20">
			<p class="title-sub">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
			</p>
			<a href="#" class="btn btn-line light btn-sm mr-t-40">Read more...</a>
			<br><br>
		</div>
	</div><!-- /.container -->

	<div class="bg-section bg-cover bg-cc full-wh" id="videobg1" data-bg="images/bg7.jpg">
		<b class="full-wh"></b>
		<!-- BACKGROUND VIDEO -->
		<div class="videobg" data-property="{videoURL:'dorZ3vag5PI',containment:'#videobg1',showControls:true, autoPlay:true, loop:true, vol:50, mute:true, startAt:10, realfullscreen:false, opacity:1, addRaster:true, quality:'default', optimizeDisplay:true}"></div>
	</div>
</section><!-- / Video section -->


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