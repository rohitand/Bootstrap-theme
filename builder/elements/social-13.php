<?php include 'partials/header.php'; ?>
	

<!-- Social section -->
<section class="social-section social-section-12" data-eqh-parent="self" data-eqh-child=".feed-data .info-obj">
	<div class="container align-c">
		<div class="sq60 iconwrp fs50 txt-color1 flex-cc"><i class="fa fa-twitter"></i></div>
		<h2 class="title small">Envato Market</h2>
		<p class="title-sub">
			Everything you need for your next landing page<br>
			Follow <a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="bold-4" target="_blank">@EnvatoMarket</a> on twitter to stay updated with market trend
		</p>
		
		<div class="twitter-widget" 
			data-twitter-tpl="twitter1" 
			data-twitter-user="envatomarket"
			data-twitter-limit="6"
			data-twitter-length="150">

			<!-- twitter slider -->
			<div class="twitter-carousel ctrl-2" 
				data-nav="true"
				data-itemrange="0,1|420,1|600,2|768,3|992,4|1200,4"
				data-margin="10"
				data-hauto="false"
				data-loop="true"
				data-pager="true"
				data-timeout="2000"
				data-nav="true"	
				data-autoplay="true">
				<div class="owl-carousel feed-data"></div>
			</div><!-- / twitter slider -->
		
		</div><!-- / twitter gallery -->

		<hr>
		<p class="title-sub">
			<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-primary" target="_blank">Follow us on twitter</a>
		</p>
	</div><!-- / Container -->
</section><!-- / Social section -->



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