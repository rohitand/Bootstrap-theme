<?php include 'partials/header.php'; ?>
	
<!-- Intro -->
<section class="intro-section intro-section-13 bg-cover bg-cc" data-bg="images/bg10.png">
	<div class="carousel-widget ctrl-2" id="carousel-widget"
		data-nav="true"
		data-items="1"
		data-itemrange="false"
		data-margin="0"
		data-hauto="false"
		data-center="true">
		<div class="owl-carousel">
			
			<div class="item">
				<div class="caption">
					<h3 class="hd">Creative Agency</h3>
					<p class="sub-text delay-0-3s">Seddiam nonumy eirmod tempor invidunt utlabore etdolore magna</p>
				</div>
				<div class="full-wh bg-cover bg-cc" data-bg="images/slide-img1.jpg"></div>
			</div><!-- /.item -->

			<div class="item">
				<div class="caption">
					<h3 class="hd">Premium Quality</h3>
					<p class="sub-text delay-0-3s">Seddiam nonumy eirmod tempor invidunt utlabore etdolore magna</p>
				</div>
				<div class="full-wh bg-cover bg-cc" data-bg="images/slide-img2.jpg"></div>
			</div><!-- /.item -->

			<div class="item">
				<div class="caption">
					<h3 class="hd">User Experience</h3>
					<p class="sub-text delay-0-3s">Seddiam nonumy eirmod tempor invidunt utlabore etdolore magna</p>
				</div>
				<div class="full-wh bg-cover bg-cc" data-bg="images/slide-img3.jpg"></div>
			</div><!-- /.item -->

		</div><!-- /.owl-carousel -->
	</div><!-- /.carousel-widget -->
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
