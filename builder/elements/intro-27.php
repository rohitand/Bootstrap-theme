<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-24" id="home">
	<div class="container h100 flex-cl z2 pos-rel">
		<div class="content">
			<div class="caption">
				<p class="title-sub italic bold-3 mr-b-10 fs30">R.Gen Landing Pages</p>
				<h1 class="title lh1-3 bold-5">EXPLORE A NEW WAY OF PRESENTING YOUR BUSINESS</h1>
				<hr class="dark">
				<p class="title-sub">Lorem ipsum dolorsit ametcon setetur sadip scing elitr</p>
			</div>

			<a href="#contactus" class="btn btn-primary btn-lg no-border">Contact Us</a>
		</div>
	</div>
	<div class="overlay full-wh bg-cover bg-cc" data-parallax="scroll" data-image-src="images/business_intro.jpg"></div>
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
