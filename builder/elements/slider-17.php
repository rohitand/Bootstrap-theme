<?php include 'partials/header.php'; ?>
	
<!-- Slider -->
<section class="slider-section slider-common bg-gray no-border" id="gallery">
	<div class="container">
		<div class="align-c mr-b-50 w-50 mr-auto" data-animate-in="fadeInUp">
			<h2 class="title small sm-fs20">View all features & screen shots of app</h2>
			<p class="title-sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti reprehenderit odio placeat</p>	
		</div>
		
		<div class="carousel-widget ctrl-1 popgallery-widget mr-b-50" 
			data-animate-in="fadeInUp"
			data-nav="false"
			data-pager="true"
			data-itemrange="0,1|420,2|600,3|768,3|992,4|1200,4"
			data-margin="10"
			data-hauto="false"
			data-center="false">
			<div class="owl-carousel">
				
				<!-- /.item -->
				<div class="item">
					<a href="images/app-img1.jpg" class="pop-img"><img src="images/app-img1.jpg" class="img-responsive" alt="image"></a>
				</div>
				<!-- /.item -->
				<div class="item">
					<a href="images/app-img2.jpg" class="pop-img"><img src="images/app-img2.jpg" class="img-responsive" alt="image"></a>
				</div>
				<!-- /.item -->
				<div class="item">
					<a href="images/app-img3.jpg" class="pop-img"><img src="images/app-img3.jpg" class="img-responsive" alt="image"></a>
				</div>
				<!-- /.item -->
				<div class="item">
					<a href="images/app-img4.jpg" class="pop-img"><img src="images/app-img4.jpg" class="img-responsive" alt="image"></a>
				</div>
				<!-- /.item -->
				<div class="item">
					<a href="images/app-img5.jpg" class="pop-img"><img src="images/app-img5.jpg" class="img-responsive" alt="image"></a>
				</div>
				<!-- /.item -->
				<div class="item">
					<a href="images/app-img6.jpg" class="pop-img"><img src="images/app-img6.jpg" class="img-responsive" alt="image"></a>
				</div>
				
			</div><!-- /.owl-carousel -->
		</div><!-- /.carousel-widget -->
		
		<hr class="mr-tb-50 dark">

		<div class="flex-row gt40 mb40" data-animate-in="fadeInUp">
			<div class="flex-col-md-4">
				<div class="info-obj img-t g20 align-c small">
					<div class="img"><span class="iconwrp txt-color1"><i class="pe-7s-paint-bucket"></i></span></div>
					<div class="info">
						<h3 class="bold-2 fs20 mr-b-10">Easy customization</h3>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt dolore magna aliquyam</p>
					</div>
				</div><!-- / info-obj -->
			</div><!-- column -->

			<div class="flex-col-md-4">
				<div class="info-obj img-t g20 align-c small">
					<div class="img"><span class="iconwrp txt-color1"><i class="pe-7s-photo-gallery"></i></span></div>
					<div class="info">
						<h3 class="bold-2 fs20 mr-b-10">Combination of blocks</h3>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt dolore magna aliquyam</p>
					</div>
				</div><!-- / info-obj -->
			</div><!-- column -->

			<div class="flex-col-md-4">
				<div class="info-obj img-t g20 align-c small">
					<div class="img"><span class="iconwrp txt-color1"><i class="pe-7s-photo"></i></span></div>
					<div class="info">
						<h3 class="bold-2 fs20 mr-b-10">Unique designs</h3>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt dolore magna aliquyam</p>
					</div>
				</div><!-- / info-obj -->
			</div><!-- column -->

			<div class="flex-col-md-4">
				<div class="info-obj img-t g20 align-c small">
					<div class="img"><span class="iconwrp txt-color1"><i class="pe-7s-plugin"></i></span></div>
					<div class="info">
						<h3 class="bold-2 fs20 mr-b-10">Unlimited possibilities</h3>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt dolore magna aliquyam</p>
					</div>
				</div><!-- / info-obj -->
			</div><!-- column -->

			<div class="flex-col-md-4">
				<div class="info-obj img-t g20 align-c small">
					<div class="img"><span class="iconwrp txt-color1"><i class="pe-7s-browser"></i></span></div>
					<div class="info">
						<h3 class="bold-2 fs20 mr-b-10">Advanced page builder</h3>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt dolore magna aliquyam</p>
					</div>
				</div><!-- / info-obj -->
			</div><!-- column -->

			<div class="flex-col-md-4">
				<div class="info-obj img-t g20 align-c small">
					<div class="img"><span class="iconwrp txt-color1"><i class="pe-7s-albums"></i></span></div>
					<div class="info">
						<h3 class="bold-2 fs20 mr-b-10">Flexible blocks</h3>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt dolore magna aliquyam</p>
					</div>
				</div><!-- / info-obj -->
			</div><!-- column -->
		</div><!-- row -->

	</div><!-- container -->
</section><!-- / Slider-section -->


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