<?php include 'partials/header.php'; ?>
	
<!-- intro-ecom -->
<section class="intro-ecom intro-ecom-1">
	<div class="carousel-widget ctrl-2" id="carousel-widget" 
		data-nav="true"
		data-pager="true"
		data-items="1"
		data-itemrange="false"
		data-margin="0"
		data-hauto="false"
		data-loop="true"
		data-center="true">
		<div class="owl-carousel">
			
			<!-- item -->
			<div class="item">
				<div class="caption vm-item">
					<h3 class="main-text">
						<small>Women's hand bags</small>
						Zipper front crossbody
					</h3>
					<div class="price-info">
						<div class="price-wrp">
							<span class="old">$125.00</span>
							<span class="new">$99.00</span>
						</div>
						<div class="more-btn">
							<span class="save">save $26.00</span>
							<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-default btn-small">Buy now</a>
						</div>
					</div>
				</div>
				<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank" class="full-wh bg-cover bg-cc" data-bg="images/ecom-slide01.jpg"><b class="overlay full-wh"></b></a>
			</div><!-- /.item -->

			<!-- item -->
			<div class="item">
				<div class="caption vm-item">
					<h3 class="main-text">
						<small>Men's watches</small>Luxury watches
					</h3>
					<hr>
					<div class="sub-text">Starting from $99.00</div>
					<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-default">CHECK FULL COLLECTION</a>
				</div>
				<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank" class="full-wh bg-cover bg-cc" data-bg="images/ecom-slide02.jpg"><b class="overlay full-wh"></b></a>
			</div><!-- /.item -->

			<!-- item -->
			<div class="item">
				<div class="caption vm-item">
					<h3 class="main-text">
						<small>CHRISTMAS OFFERS</small>Biggest Festival Sale
					</h3>
					<hr>
					<div class="sub-text">Items starting from $49.00</div>
					<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="btn btn-default">CHECK FULL COLLECTION</a>
				</div>
				<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank" class="full-wh bg-cover bg-cc" data-bg="images/ecom-slide03.jpg"><b class="overlay full-wh"></b></a>
			</div><!-- /.item -->

		</div><!-- /.owl-carousel -->
	</div><!-- /.carousel-widget -->
</section><!-- /.intro-ecom -->

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
