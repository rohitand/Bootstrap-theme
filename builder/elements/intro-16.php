<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-17" data-fullwh='y'>
	
	<!-- Background slide show -->
	<div class="bg-section full-wh">
		<div class="bgslider" data-bgslider="images/yoga_slide01.jpg|images/yoga_slide02.jpg"></div>
	</div><!-- /.Background slide show -->
	
	<!-- Caption container -->
	<div class="container vh100 flex-cl">
		<div class="caption">
			<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS"><img src="images/logo1.png" alt="Brand logo"></a>
			<br><br><br>
			<h2 class="title">EXPERIENCE BENEFITS <br>OF YOGA IN LIFE</h2>
			<p class="title-sub">Choose Your Classes & Start Your Training</p>
			<hr>
			<a href="#popup-trainingclass-form" class="btn btn-line light popup-trainingclass">BOOK YOUR FREE TRIAL</a>
		</div>
	</div><!-- /.Caption container -->

	<div class="info-wrp">
		<div class="container">
			<div class="flex-row gt40">

				<!-- flex-column -->
				<div class="flex-col-md-4">
					<!-- info-box -->
					<div class="info-box info-box7">
						<div class="img"><i class="pe-7s-leaf"></i></div>
						<div class="info">
							<h2 class="hd">Balance Body & Mind</h2>
							<p class="sub-txt">Lorem ipsum dolor sit amet setetur sadipscing elitr diam nonumy eirmod tempor invidunt</p>
						</div>
					</div><!-- /.info-box -->
				</div><!-- /.flex-column -->
				
				<!-- flex-column -->
				<div class="flex-col-md-4">
					<!-- info-box -->
					<div class="info-box info-box7">
						<div class="img"><i class="pe-7s-smile"></i></div>
						<div class="info">
							<h2 class="hd">Healthy Life</h2>
							<p class="sub-txt">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
						</div>
					</div><!-- /.info-box -->
				</div><!-- /.flex-column -->
				
				<!-- flex-column -->
				<div class="flex-col-md-4">
					<!-- info-box -->
					<div class="info-box info-box7">
						<div class="img"><i class="pe-7s-science"></i></div>
						<div class="info">
							<h2 class="hd">Meditation Practice</h2>
							<p class="sub-txt">Takimata sanctus estorem ipsum dolor sit amet dolor sit amet consetetur sadipscing elitr</p>
						</div>
					</div><!-- /.info-box -->
				</div><!-- /.flex-column -->

			</div><!-- /.flex-row -->
			
		</div>
	</div><!-- /.info-wrp -->
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
