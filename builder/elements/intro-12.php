<?php include 'partials/header.php'; ?>
	
<!-- Intro -->
<section id="home" class="intro-section intro-section-14">
	<div class="info-wrp vm-item">
		<div class="carousel-widget" id="carousel-widget" 
			data-items="1"
			data-itemrange="false"
			data-tdrag="false"
			data-mdrag="false"
			data-pdrag="false"
			data-autoplay="true" 
			data-in="flipInX"
			data-loop="true">

			<div class="owl-carousel">
				<div class="item">
					<h2 class="main-text">R.GEN LANDING PAGE COLLECTION</h2>
					<p class="sub-text">Stet clita kasd gubergren takimata sanctus estipsum dolor sitamet takimata sanctus</p>
				</div>
				<div class="item">
					<h2 class="main-text">UNIQUE DESIGNS OF EVERY PAGES</h2>
					<p class="sub-text">Consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt</p>
				</div>
			</div>
		</div>
		<a href="#" class="btn btn-lg mr-t-40 btn-line light">Our Work</a>
	</div><!-- /.container -->
	<div class="bg-section bg-cover bg-cc full-wh" data-bg="images/bg8.jpg"><b class="full-wh"></b>
		<!-- BACKGROUND VIDEO -->
		<a class="videobg" data-property="{videoURL:'dorZ3vag5PI',containment:'.intro-section-14 .bg-section',showControls:true, autoPlay:true, loop:true, vol:50, mute:true, startAt:10, opacity:1, addRaster:true, quality:'default', optimizeDisplay:true}"></a>
	</div>
</section><!-- /.intro-section-1 -->

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
