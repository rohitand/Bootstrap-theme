<?php include 'partials/header.php'; ?>
	
<!-- Intro -->
<section class="intro-section intro-section-9">
	<div class="container">
		<h2 class="main-text">Complete medical solution at one place</h2>
		<p class="sub-text">Lorem ipsum dolorsitamet consetetur sadipscing elitrsed diamn onumy eirmod etdolore magna aliquyamerat.</p>
		<a href="#popup-appointment-form" class="btn btn-default btn1 popup-appointment">Make an appointment</a>
	</div>
	
	<div class="bg-section full-wh">
		<div class="bgslider" data-bgslider="images/medical_01.jpg|images/medical_02.jpg|images/medical_03.jpg|images/medical_04.jpg|images/medical_05.jpg"></div>
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
