<?php include 'partials/header.php'; ?>
	
<!-- Other section -->
<section class="other-section other-section-1">
	<div class="container">
		<h2 class="title">Other display section</h2>
		<p class="title-sub">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr diam nonumy<br>
			eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
		</p>
		<hr class="mr-tb-40">
		<div class="row eqh">
			<div class="col-md-5 l">
				<ol>
					<li class="active" data-img="images/800x800_1.jpg">
						<div class="iconwrp"><i class="num">1</i></div>
						<p class="info">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
					</li>
					<li data-img="images/800x800_2.jpg">
						<div class="iconwrp"><i class="num">2</i></div>
						<p class="info">Seddiam nonum icon-blocky eirmod tempor invidunt ut labore et dolore magna</p>
					</li>
					<li data-img="images/800x800_3.jpg">
						<div class="iconwrp"><i class="num">3</i></div>
						<p class="info">Stet clita kasd gubergren nosea takimata sanctus tempor invidunt</p>
					</li>
					<li data-img="images/800x800_4.jpg">
						<div class="iconwrp"><i class="num">4</i></div>
						<p class="info">Stet clita kasd gubergren nosea takimata sanctus est Lorem ipsum dolor amet</p>
					</li>
				</ol>
			</div><!-- /.col-md-5 -->
			<div class="col-md-6 col-md-offset-1 r">
				<img src="images/800x800_1.jpg" alt="Image" class="img-responsive vm-item">
			</div><!-- /.col-md-6 -->

		</div>
	</div><!-- /.container -->
	<div class="full-wh bg-section bg-cover bg-cc" data-bg="images/blur-bg1.jpg"><b class="full-wh"></b></div>
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