<?php include 'partials/header.php'; ?>
	
<!-- Other section -->
<section class="other-section other-section-2 dark">
	<div class="container">
		<div id="step1-1" class="tab-pn">
			<h2 class="title">Step 1 : Other display section</h2>
			<p class="title-sub">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren
			</p>
		</div>

		<div id="step1-2" class="tab-pn">
			<h2 class="title">Step 2 : Eirmod tempor invidunt</h2>
			<p class="title-sub">
				Sed diam nonumy eirmod tempor invidunt ut labore orem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren
			</p>	
		</div>

		<div id="step1-3" class="tab-pn">
			<h2 class="title">Step 3 : Lorem ipsum dolor</h2>
			<p class="title-sub">
				Tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren
			</p>
		</div>
		
		<hr class="mr-tb-50">
		
		<ul class="tab-widget">
			<li><a href="#" data-tb="#step1-1" class="active"><i>1</i></a></li>
			<li><hr></li>
			<li><a href="#" data-tb="#step1-2"><i>2</i></a></li>
			<li><hr></li>
			<li><a href="#" data-tb="#step1-3"><i>3</i></a></li>
		</ul>

	</div><!-- /.container -->
</section><!-- /.other-section -->


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