<?php include 'partials/header.php'; ?>
	

<!-- Social section -->
<section class="social-section social-section-9 pos-rel bg-gray">
	<div class="container align-c">
		<p class="title medium"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><i class="fa fa-instagram"></i> R.Genesis.Art</a></p>
		<p class="title-sub">Follow <a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="bold-4" target="_blank">@r.genesis.art</a> on instagram to get updates for new features informations</p>

		<div class="instagram-widget" 
			data-insta-tpl="insta-gallery4" 
			data-insta-user="envatomarket"
			data-insta-limit="8"
			data-insta-length="150"
			data-insta-tplclass="flex-col-md-3">

			<div class="feed-data flex-row gt20"></div>
		</div><!-- / Instagram gallery -->

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