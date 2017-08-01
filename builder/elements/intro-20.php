<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-21" data-fullh='y'>
	<div class="container-fluid h100 flex-cc z2">
		<div class="content">

			<div class="container">
				<strong class="tag-text bold-4">Thursday, Dec 31st at RGen Club</strong>
				<h2 class="title bold-5">
					<span class="fs170">2015</span><br>
					<span class="fs80">GREAT PARTY EVENT</span>
				</h2>
			</div>

			<!-- Countdown -->
			<div class="countdown-widget">
				<div data-day="31" data-month="12" data-year="2015" data-hr="0" data-min="0" data-sec="0"></div>	
			</div><!-- /.Countdown -->
			
			<a href="#popup-contact-form" class="btn btn-default btn-lg no-border popup-contact">RESERVE YOUR ENTRY</a>
			<br><br>
			<p class="fs14">Lorem ipsum dolor sit amet, consectetur adipisicing elit *</p>
		</div><!-- /.content -->
	</div><!-- /.container -->
	<div class="full-wh bg-section bg-cover bg-cc z1" data-parallax="scroll" data-image-src="images/party_intro.jpg"></div>
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
