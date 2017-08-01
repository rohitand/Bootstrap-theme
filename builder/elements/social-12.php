<?php include 'partials/header.php'; ?>
	

<!-- Social section -->
<section class="social-section social-section-10 bg-color1 dark" data-eqh-parent="self" data-eqh-child=".feed-data .info-obj">
	<div class="container align-c typo-light">
		<div class="sq60 iconwrp fs50 txt-light flex-cc"><i class="fa fa-twitter"></i></div>
		<h2 class="title small">Envato Market</h2>
		<p class="title-sub">
			Everything you need for your next landing page<br>
			Follow <a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="bold-4" target="_blank">@EnvatoMarket</a> on twitter to stay updated with market trend
		</p>
		
		<div class="twitter-widget" 
			data-twitter-tpl="twitter1" 
			data-twitter-user="envatomarket"
			data-twitter-limit="4"
			data-twitter-length="150"
			data-twitter-tplclass="flex-col-md-3 dark">

			<div class="feed-data flex-row gt10 btn-make-light"></div>
		</div><!-- / twitter feed -->
		
		<hr class="light">
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