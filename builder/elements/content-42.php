<?php include 'partials/header.php'; ?>
	
<!-- Content -->
<section class="content-section content-section-12 pos-rel" id="services">
	<div class="full-wh bg-section bg-cover bg-cc" data-parallax="scroll" data-image-src="images/bg21.jpg"></div>
	<div class="container pos-rel z2">
		
		<div class="align-c typo-light w-75 mr-auto">
			<h2 class="title medium">Services we offer</h2>
			<p class="title-sub">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt laboris nisi ut aliquip ex ea commodo</p>	
		</div>
		
		<div class="rw eq3 gt10 mb10 eqh">
			<div class="cl">
				<div class="info-box info-box9 h100" style="background-color: rgba(255,255,255,0.9);">
					<div class="info txt-dark">
						<div class="img" style="color: inherit;"><i class="pe-7s-rocket"></i></div>
						<h2 class="fs16 mr-b-10 bold-n">UX DESIGN</h2>
						<p>Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod</p>
					</div>
				</div>
			</div><!-- /.column -->
			<div class="cl">
				<div class="info-box info-box9 h100" style="background-color: rgba(255,255,255,0.9);">
					<div class="info txt-dark">
						<div class="img" style="color: inherit;"><i class="pe-7s-browser"></i></div>
						<h2 class="fs16 mr-b-10 bold-n">
							INTERFACE DESIGN
						</h2>
						<p>Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod</p>
					</div>
				</div>
			</div><!-- /.column -->
			<div class="cl">
				<div class="info-box info-box9 h100" style="background-color: rgba(255,255,255,0.9);">
					<div class="info txt-dark">
						<div class="img" style="color: inherit;"><i class="pe-7s-phone"></i></div>
						<h2 class="fs16 mr-b-10 bold-n">
							APP DEVELOPMENT
						</h2>
						<p>Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod</p>
					</div>
				</div>
			</div><!-- /.column -->
			<div class="cl">
				<div class="info-box info-box9 h100" style="background-color: rgba(255,255,255,0.9);">
					<div class="info txt-dark">
						<div class="img" style="color: inherit;"><i class="pe-7s-global"></i></div>
						<h2 class="fs16 mr-b-10 bold-n">
							WEB DEVELOPMENT
						</h2>
						<p>Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod</p>
					</div>
				</div>
			</div><!-- /.column -->
			<div class="cl">
				<div class="info-box info-box9 h100" style="background-color: rgba(255,255,255,0.9);">
					<div class="info txt-dark">
						<div class="img" style="color: inherit;"><i class="pe-7s-mouse"></i></div>
						<h2 class="fs16 mr-b-10 bold-n">
							SOFTWARE SOLUTIONS
						</h2>
						<p>Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod</p>
					</div>
				</div>
			</div><!-- /.column -->
			<div class="cl">
				<div class="info-box info-box9 h100" style="background-color: rgba(255,255,255,0.9);">
					<div class="info txt-dark">
						<div class="img" style="color: inherit;"><i class="pe-7s-paint"></i></div>
						<h2 class="fs16 mr-b-10 bold-n">
							PRINT MEDIA
						</h2>
						<p>Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod</p>
					</div>
				</div>
			</div><!-- /.column -->
		</div>

		
	</div><!-- /.container -->
</section><!-- /.content-section -->


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