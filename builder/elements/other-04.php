<?php include 'partials/header.php'; ?>
	
<!-- Other section -->
<section class="other-section other-section-1">
	<div class="container">
		<h2 class="title">Our Departments</h2>
		<p class="title-sub">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr diam nonumy<br>
			eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
		</p>
		<hr class="mr-tb-40">
		<div class="row eqh">
			<div class="col-md-5 l">
				<ol>
					<li class="active" data-img="images/medical_800x800_01.jpg">
						<div class="iconwrp"><i class="fa fa-object-group"></i></div>
						<div class="info">
							<h4 class="hd">DIAGNOSTIC IMAGING</h4>
							Lorem ipsum dolor sit ametcons
						</div>
					</li>
					<li data-img="images/medical_800x800_02.jpg">
						<div class="iconwrp"><i class="fa fa-anchor"></i></div>
						<div class="info">
							<h4 class="hd">CANCER CARE</h4>
							Lorem ipsum dolor sit ametcons
						</div>
					</li>
					<li data-img="images/medical_800x800_03.jpg">
						<div class="iconwrp"><i class="fa fa-bell-o"></i></div>
						<div class="info">
							<h4 class="hd">TRANSPLANT CENTER</h4>
							Lorem ipsum dolor sit ametcons
						</div>
					</li>
					<li data-img="images/medical_800x800_04.jpg">
						<div class="iconwrp"><i class="fa fa-bullhorn"></i></div>
						<div class="info">
							<h4 class="hd">DENTAL CARE</h4>
							Lorem ipsum dolor sit ametcons
						</div>
					</li>
					<li data-img="images/medical_800x800_05.jpg">
						<div class="iconwrp"><i class="fa fa-briefcase"></i></div>
						<div class="info">
							<h4 class="hd">BLOOD BANK</h4>
							Lorem ipsum dolor sit ametcons
						</div>
					</li>
				</ol>
			</div><!-- /.col-md-5 -->
			<div class="col-md-7 r">
				<img src="images/medical_800x800_01.jpg" alt="Image" class="img-responsive vm-item">
			</div><!-- /.col-md-6 -->

		</div>
	</div><!-- /.container -->
	<div class="full-wh bg-section bg-cover bg-cc" data-bg="images/blur-bg3.jpg"><b class="full-wh"></b></div>
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