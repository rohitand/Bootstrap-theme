<?php include 'partials/header.php'; ?>
	

<!-- Social section -->
<section class="social-section social-section-14 pd-tb-50 dark bg-color1">
	<div class="container typo-light">
		
		<div class="flex-row gt40">
			<div class="flex-col-md-2">
				<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="sq100 bg-white txt-color1 rd iconwrp fs50 flex-cc" target="_blank"><i class="fa fa-twitter"></i></a>
			</div><!-- / column -->

			<div class="flex-col-md-10">
				<div class="twitter-widget" 
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
						<div class="owl-carousel feed-data btn-make-light"></div>
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