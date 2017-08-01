<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-29 pos-rel">
	<div class="full-wh bg-cover bg-ct bg-section" data-parallax="scroll" data-image-src="images/book_intro.jpg"></div>
	<div class="pos-rel pd-tb-80 z2 content-top">
		<!-- container -->
		<div class="container">
			<div class="flex-row middle-md">
				<div class="flex-col-md-6 flex-col-md-offset-1 last-md">
					<img src="images/book.png" class="img-responsive book-img" alt="book-image">
				</div>
				<div class="flex-col-md-5">
					<div class="content typo-light">
						<h1 class="title fs38 lh1-3 bold-4">R.GENESIS'S<br>FIRST GUIDE BOOK NOW ON SALE WITH 50% OFF</h1>
						<hr class="light">
						<p class="fs20 bold-2 italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					</div>
				</div>
			</div>
		</div><!-- /.container -->
	</div>
	<div class="pos-rel pd-tb-60 z1 content-bottom">
		<div class="container">
			<div class="flex-row middle-md gt40">
				<div class="flex-col-md-3">
					<p class="fs28 lh1-4 mr-0 txt-light">
						Offer Price <br>
						<span class="l-through">$200.00</span>&nbsp;&nbsp;
						<span class="bold-4">$100.00</span>
					</p>
					<p class="txt-light">Offer valid until 31, March 2016</p><br>
				</div>
				<div class="flex-col-md-3">
					<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank" class="btn btn-default no-border btn-lg">Purchase now</a>
				</div>
			</div><!-- /flex-row -->
		</div><!-- /container -->
	</div>
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
