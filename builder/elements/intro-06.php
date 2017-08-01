<?php include 'partials/header.php'; ?>
	
<!-- Intro -->
<section class="intro-section intro-section-6">
	<div class="container">

		<div class="info-wrp cm-item">
			<h2 class="main-text">Quick & Easy to Manage Projects</h2>
			<p class="sub-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
			<a href="#" class="btn btn-default btn1">Try for FREE</a>
			<a href="#" class="btn btn-default btn2">Learn more</a>
		</div>
	
	</div><!-- /.container -->
	<div class="bg-section bg-cover bg-cc full-wh" data-bg="images/bg7.jpg"><b class="full-wh"></b>
		<!-- BACKGROUND VIDEO -->
		<a class="videobg" data-property="{videoURL:'dorZ3vag5PI',containment:'.intro-section-6 .bg-section',showControls:true, autoPlay:true, loop:true, vol:50, mute:true, startAt:10, opacity:1, addRaster:true, quality:'default', optimizeDisplay:true}"></a>
	</div>
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
