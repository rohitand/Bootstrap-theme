<?php include 'partials/header.php'; ?>
	
<!-- Intro -->
<section class="intro-section intro-section-12">
	<div class="container">
		<div class="content">
			<img src="images/logo1.png" alt="Brand logo">
			<h2 class="main-text">
				<small>Welcome to</small><br>
				R.Gen Restaurant
			</h2>
			<!-- <hr> -->
			<p class="sub-text">
				The Delicious Premium Food Home<br>
				<small>Since 1990</small>
			</p>
			<a href="#table-booking-form" class="btn btn-default btn1 table-booking-popup">Book your table</a>
			<a href="#" class="btn btn-default btn2">View menu</a>
		</div>
	</div><!-- /.container -->
	
	<div class="bg-section full-wh">
		<b class="full-wh overlay"></b>
		<div class="bgslider" data-bgslider="images/food_01.jpg|images/food_02.jpg|images/food_03.jpg|images/food_04.jpg"></div>
	</div><!-- / background slide show -->
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
