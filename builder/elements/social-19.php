<?php include 'partials/header.php'; ?>
	

<!-- Social section -->
<section class="social-section social-section-14">
	<div class="container">
		
		<div class="flex-row gt40">
			<div class="flex-col-md-5">
				<div class="info-obj img-t g20 small align-c">
					<div class="img"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank" class="iconwrp rd bg-color1 txt-light"><i class="fa fa-twitter"></i></a></div>
					<div class="info">
						<h3 class="title small mr-b-10"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank">Envato Market</a></h3>
						<p class="title-sub mr-b-10">Everything you need for your next landing page</p>
						<p class="fs14">Follow <a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="bold-4" target="_blank">@EnvatoMarket</a> on twitter to stay updated with market trend</p>
					</div>
				</div><!-- / info object -->
			</div><!-- / column -->

			<div class="flex-col-md-6 flex-col-md-offset-1">
				<div class="twitter-widget pd-30 rd-5 bdr-1 bdr-color1" 
					data-twitter-tpl="twitter3" 
					data-twitter-user="envatomarket"
					data-twitter-limit="6"
					data-twitter-length="200">

					<!-- twitter slider -->
					<div class="twitter-carousel ctrl-2 ctrl-l" 
						data-items="1"
						data-itemrange="false"
						data-tdrag="false"
						data-mdrag="false"
						data-pdrag="false"
						data-autoplay="true" 
						data-loop="true"
						data-nav="false"
						data-pager="true">
						<div class="owl-carousel feed-data"></div>
					</div><!-- / twitter slider -->
				</div><!-- / twitter gallery -->
			</div><!-- / column -->
		</div><!-- / row -->
		
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