<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-16" data-fullwh='y'>

	<div class="container vh100 flex-col center-left">
		<!-- caption -->
		<div class="caption">
			<h2 class="title">Experience Benefits of Yoga In Life</h2>
			<!-- Info -->
			<div class="info">
				<i class="pe-7s-leaf"></i>
				<div class="info-data">
					<h3 class="title small">Balance Body & Mind</h3>
					<p class="title-sub mini">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed tempor.</p>	
				</div>
			</div><!-- /.Info -->
			<hr>
			<!-- Info -->
			<div class="info">
				<i class="pe-7s-smile"></i>
				<div class="info-data">
					<h3 class="title small">Healthy Life</h3>
					<p class="title-sub mini">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed tempor.</p>
				</div>
			</div><!-- /.Info -->
			<hr>
			<!-- Info -->
			<div class="info">
				<i class="pe-7s-science"></i>
				<div class="info-data">
					<h3 class="title small">Meditation Practice</h3>
					<p class="title-sub mini">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed tempor.</p>
				</div>
			</div><!-- /.Info -->
			
			<!-- btn-wrp -->
			<div class="btn-wrp">
				<h3 class="sub-text">Choose Your Classes & Start Your Training</h3>
				<a href="#popup-trainingclass-form" class="btn btn-line light popup-trainingclass">BOOK YOUR FREE TRIAL</a>
			</div><!-- /.btn-wrp -->
			
		</div><!-- /.caption -->
	</div><!-- /.container -->
	
	<div class="bg-section full-wh">
		<div class="bgslider" data-bgslider="images/yoga_slide01.jpg|images/yoga_slide02.jpg"></div>
	</div>
	<b class="arrow"><i class="fa fa-angle-down"></i></b>
	<b class="full-wh overlay"></b>
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
