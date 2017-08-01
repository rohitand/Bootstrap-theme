<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-25" data-fullwh='y'>
	<!-- Caption container -->
	<div class="container vh100 flex-cl">
		<div class="caption">
			<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS"><img src="images/logo1.png" alt="Brand logo"></a>
			<br><br><br>
			<h2 class="title bold-5">EXPLORE A NEW WAY OF PRESENTING YOUR BUSINESS</h2>
			<hr>
			<p class="title-sub">Lorem ipsum dolorsit ametcon setetur sadip scing elitr</p>
			<a href="#popup-contact-form" class="btn btn-line light popup-contact">START YOUR NEW PROJECT</a>
		</div>
	</div><!-- /.Caption container -->

	<div class="info-wrp">
		<div class="container">
			<div class="flex-row gt0">

				<!-- flex-column -->
				<div class="flex-col-md-4">
					<!-- info-box -->
					<div class="info-box info-box7">
						<div class="img"><i class="icon-desktop"></i></div>
						<div class="info">
							<h2 class="hd">Responsive Design</h2>
							<p class="sub-txt">Lorem ipsum dolor sit amet setetur sadipscing elitr diam nonumy eirmod tempor invidunt</p>
						</div>
					</div><!-- /.info-box -->
				</div><!-- /.flex-column -->
				
				<!-- flex-column -->
				<div class="flex-col-md-4">
					<!-- info-box -->
					<div class="info-box info-box7">
						<div class="img"><i class="icon-edit"></i></div>
						<div class="info">
							<h2 class="hd">Clean & Powerful Code</h2>
							<p class="sub-txt">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
						</div>
					</div><!-- /.info-box -->
				</div><!-- /.flex-column -->
				
				<!-- flex-column -->
				<div class="flex-col-md-4">
					<!-- info-box -->
					<div class="info-box info-box7">
						<div class="img"><i class="icon-lifesaver"></i></div>
						<div class="info">
							<h2 class="hd">Dedicated Support</h2>
							<p class="sub-txt">Takimata sanctus estorem ipsum dolor sit amet dolor sit amet consetetur sadipscing elitr</p>
						</div>
					</div><!-- /.info-box -->
				</div><!-- /.flex-column -->

			</div><!-- /.flex-row -->
			
		</div>
	</div><!-- /.info-wrp -->

	<!-- Background image -->
	<div class="bg-section full-wh bg-cover bg-cc" data-bg="images/business_intro1.jpg"></div>
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
