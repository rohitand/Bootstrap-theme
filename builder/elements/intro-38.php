<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-27 intro-section-27-3" data-fullh="y">
	<!-- container -->
	<div class="container-fluid pd-0 flex-cl h100">

		<!-- row -->
		<div class="flex-row h100 w100">
			<!-- column -->
			<div class="flex-col-lg-4 flex-cc l" style="min-height: 400px;">
				<div class="full-wh bg-section z1" data-parallax="scroll" data-image-src="images/appintro_slide1.jpg"></div>
			</div><!-- /.column -->
			
			<!-- column -->
			<div class="flex-col-lg-8 r flex-cc pd-tb-50">

				<!-- content -->
				<div class="flex-row content">
					<div class="flex-col-md-5">
						<!-- Slider -->
						<section class="slider-section">
							<div class="carousel-widget ctrl-2" 
								data-items="1"
								data-itemrange="false"
								data-tdrag="false"
								data-mdrag="false"
								data-pdrag="false"
								data-autoplay="true"
								data-nav="false"
								data-pager="true">
								<div class="owl-carousel">
									
									<div class="item"><img src="images/iphone-slides_01.png" alt="App image"></div>
									<div class="item"><img src="images/iphone-slides_02.png" alt="App image"></div>
									<div class="item"><img src="images/iphone-slides_03.png" alt="App image"></div>
									<div class="item"><img src="images/iphone-slides_04.png" alt="App image"></div>
									<div class="item"><img src="images/iphone-slides_05.png" alt="App image"></div>
									<div class="item"><img src="images/iphone-slides_06.png" alt="App image"></div>

								</div><!-- /.owl-carousel -->
							</div><!-- /.carousel-widget -->
						</section><!-- /.slider-section -->		
					</div><!-- /.column -->

					<div class="flex-col-md-7 flex-cc">
						<div class="content-wrp">
							
							<a href="#" class="logo"><img src="images/logo1.png" alt="Company logo"></a><br><br>
							
							<hr class="light mr-tb-20">

							<h1 class="title fs30 font-2">R.Gen Landing Pages</h1>
							<h2 class="title bold-4 fs34">EASY & POWERFUL WAY TO PROMOTING YOUR MOBILE APP</h2><br><br>
							
							<div class="newsletter1">
								<form action="form-data/notify-me.php" class="form-widget" data-formtype="newsletter">
									<div class="form-field">
										<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>	
									</div>
								</form>	
							</div><!-- /.newsletter -->

							<hr class="light mr-tb-30">

							<div class="btn-wrp">
								<a href="#" class="btn"><i class="fa fa-apple"></i></a>
								<a href="#" class="btn"><i class="fa fa-android"></i></a>
								<a href="#" class="btn"><i class="fa fa-windows"></i></a>	
							</div>
							
						</div><!-- /.content-wrp -->
					</div><!-- /.column -->
				</div><!-- /.content -->
				
				<div class="full-wh bg-section z1">
					<b style="background-color: #3498db;" class="full-wh overlay z2"></b>
				</div>

			</div><!-- /.column -->

		</div><!-- /.row -->
	</div><!-- /.container -->
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
