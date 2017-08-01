<?php include 'partials/header.php'; ?>
	

<!-- Banner section -->
<section class="banner-section banner-section-1">
	<div class="row eqh gt1 mb1">
		
		<!-- Banner block -->
		<div class="col-md-3">
			<div class="bnr-box1">
				<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="link"></a>
				<b class="bnr-img" data-bg="images/600x400_01.jpg"></b>
				<div class="caption">
					<h3 class="hd">Christmas special</h3>
					<p class="txt">Lorem ipsum dolorit amet</p>
				</div>
			</div>
		</div><!-- /.Banner block -->

		<!-- Banner block -->
		<div class="col-md-3">
			<div class="bnr-box1">
				<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="link"></a>
				<b class="bnr-img" data-bg="images/600x400_02.jpg"></b>
				<div class="caption">
					<h3 class="hd">Men's watches</h3>
					<p class="txt">Lorem ipsum dolorit amet</p>
				</div>
			</div>
		</div><!-- /.Banner block -->

		<!-- Banner block -->
		<div class="col-md-3">
			<div class="bnr-box1">
				<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="link"></a>
				<b class="bnr-img" data-bg="images/600x400_03.jpg"></b>
				<div class="caption">
					<h3 class="hd">Women's hand bags</h3>
					<p class="txt">Lorem ipsum dolorit amet</p>
				</div>
			</div>
		</div><!-- /.Banner block -->

		<!-- Banner block -->
		<div class="col-md-3">
			<div class="bnr-box1">
				<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" class="link"></a>
				<b class="bnr-img" data-bg="images/600x400_04.jpg"></b>
				<div class="caption">
					<h3 class="hd">Sofas and Chairs</h3>
					<p class="txt">Lorem ipsum dolorit amet</p>
				</div>
			</div>
		</div><!-- /.Banner block -->

	</div><!-- /.row -->
</section><!-- /.Banner section -->


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