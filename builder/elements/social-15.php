<?php include 'partials/header.php'; ?>
	

<!-- Social section -->
<section class="social-section social-section-13">
	<div class="container align-c">
		<div class="sq60 iconwrp fs50 txt-color1 flex-cc"><i class="fa fa-twitter"></i></div>
		<h2 class="title small"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank">Envato Market</a></h2>
		
		<hr class="mr-tb-40">

		<div class="twitter-widget w75 mr-auto" 
			data-twitter-tpl="twitter2" 
			data-twitter-user="envatomarket"
			data-twitter-limit="6"
			data-twitter-length="200">

			<!-- twitter slider -->
			<div class="twitter-carousel ctrl-2" 
				data-items="1"
				data-itemrange="false"
				data-tdrag="false"
				data-mdrag="false"
				data-pdrag="false"
				data-autoplay="true" 
				data-loop="true"
				data-nav="false"
				data-pager="true">
				<div class="owl-carousel feed-data align-c"></div>
			</div><!-- / twitter slider -->
		
		</div><!-- / twitter gallery -->
		
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