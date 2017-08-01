<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-23" data-fullh='y'>
	<div class="container h100 flex-cc z2">
		<div class="content">
			<a class="logo" href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><img src="images/logo1.png" alt="Brand logo"></a>
			<div class="caption">
				<h1 class="title fs50">PREMIUM COMING SOON<br>DESIGN TEMPLATE</h1>
				<hr class="light">
				<p class="title-sub">Lorem ipsum dolorsit ametcon setetur sadip scing elitr</p>
			</div>
			<!-- Countdown -->
			<div class="countdown-widget">
				<div data-day="25" data-month="12" data-year="2015" data-hr="0" data-min="0" data-sec="0"></div>	
			</div><!-- /.Countdown --> <br>

			<a href="#popup-newsletter-form" class="btn btn-primary btn-lg no-border popup-newsletter">Subscribe Now</a>
		</div>
	</div>
	
	<!-- Background slider -->
    <div class="bg-section full-wh">
        <div class="bgslider" data-bgslider="images/comingsoon_slide02.jpg|images/comingsoon_slide03.jpg|images/comingsoon_slide01.jpg"></div>
    </div>
    <!-- Background slider -->
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
