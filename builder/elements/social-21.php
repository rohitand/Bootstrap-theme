<?php include 'partials/header.php'; ?>
	

<!-- Social section -->
<section class="social-section social-section-15 bg-gray">
	<div class="container">
		
		<div class="flex-row gt40">
			<div class="flex-col-md-6 bg-color1 typo-light">

				<div class="info-obj img-t g20 small align-c pd-tb-100">
					<div class="img">
						<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank" class="iconwrp rd bg-white txt-color1"><i class="fa fa-twitter"></i></a>
					</div>
					<div class="info">
						<h3 class="title small mr-b-10"><a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank">Envato Market</a></h3>
						<p class="title-sub">Everything you need for your next landing page</p>
						<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-default no-border" target="_blank">Follow us on twitter</a>
					</div>
				</div><!-- / info object -->

			</div><!-- / column -->

			<div class="flex-col-md-6 bg-white flex-cc">
				<div class="content max-w100">
					<div class="twitter-widget pd-30" 
						data-twitter-tpl="twitter3" 
						data-twitter-user="envatomarket"
						data-twitter-limit="6"
						data-twitter-length="200">

						<!-- twitter slider -->
						<div class="twitter-carousel ctrl-2 ctrl-mr-t10" 
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
				</div>
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