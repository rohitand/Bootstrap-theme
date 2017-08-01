<?php include 'partials/header.php'; ?>
	
<!-- Other section -->
<section class="other-section other-section-10 dark" id="services">

	<div class="container pos-rel z2">
		<h2 class="title mr-b-40">What we offer</h2>

		<ul class="tab-widget icon-tab tab-pd">
			<li>
				<a href="#" data-tb="#service-tab-1" class="active flex-cc"><i class="pe-7s-global"></i></a>
				<h3 class="fs16 bold-2 mr-t-10">Web</h3>
			</li>
			<li>
				<a href="#" data-tb="#service-tab-2" class="flex-cc"><i class="pe-7s-way"></i></a>
				<h3 class="fs16 bold-2 mr-t-10">SEO</h3>
			</li>
			<li>
				<a href="#" data-tb="#service-tab-3" class="flex-cc"><i class="pe-7s-cart"></i></a>
				<h3 class="fs16 bold-2 mr-t-10">E-Commerce</h3>
			</li>
			<li>
				<a href="#" data-tb="#service-tab-4" class="flex-cc"><i class="pe-7s-phone"></i></a>
				<h3 class="fs16 bold-2 mr-t-10">Mobile</h3>
			</li>
			<li>
				<a href="#" data-tb="#service-tab-5" class="flex-cc"><i class="pe-7s-browser"></i></a>
				<h3 class="fs16 bold-2 mr-t-10">Software</h3>
			</li>
		</ul>

		<hr class="mr-tb-40">

		<div id="service-tab-1" class="tab-pn">
			<h2 class="title small">Website Development Service</h2>
			<p class="title-sub txt-light">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren
			</p>
		</div>

		<div id="service-tab-2" class="tab-pn">
			<h2 class="title small">Search Engine Optimization</h2>
			<p class="title-sub txt-light">
				Sed diam nonumy eirmod tempor invidunt ut labore orem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren
			</p>	
		</div>

		<div id="service-tab-3" class="tab-pn">
			<h2 class="title small">Complete E-Commerce Solutions</h2>
			<p class="title-sub txt-light">
				Tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren
			</p>
		</div>

		<div id="service-tab-4" class="tab-pn">
			<h2 class="title small">Mobile Application Development</h2>
			<p class="title-sub txt-light">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren
			</p>
		</div>

		<div id="service-tab-5" class="tab-pn">
			<h2 class="title small">Customize Software Development</h2>
			<p class="title-sub txt-light">
				Sed diam nonumy eirmod tempor invidunt ut labore orem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren
			</p>	
		</div>

		<hr class="mr-tb-40">

		<a href="#popup-contact-form" class="btn btn-line light popup-contact btn-lg">START YOUR NEW PROJECT</a>

	</div><!-- /.container -->

	<div class="full-wh bg-section bg-cover bg-cc" data-bg="images/blur-bg4.jpg"></div>
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