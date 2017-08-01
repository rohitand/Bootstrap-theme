<?php include 'partials/header.php'; ?>
	
<!-- Price section -->
<section class="price-section price-section-2 dark" data-fullh="y" style="background-color: transparent; padding:0;">

	<!-- container -->
	<div class="container-fluid pd-0 flex-cl h100">
		<!-- row -->
		<div class="flex-row h100 w100">
			<!-- column -->
			<div class="flex-col-lg-4 flex-cc l pos-rel" style="min-height: 400px;">
				<div class="full-wh l0 bg-section z1" data-parallax="scroll" data-image-src="images/appintro_slide5.jpg"></div>
			</div><!-- /.column -->
			
			<!-- column -->
			<div class="flex-col-lg-8 r flex-cc bg-cover bg-cc bg-dark3 pd-tb-50 first-lg" data-bg="images/bg1.jpg">
				<!-- content -->
				<div class="content w80">
					<h2 class="title medium">Choose FREE or UNLIMITED</h2>
					<p class="title-sub">
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr diam nonumy<br>
						eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
					</p>
					
					<div class="price-table-1">
						<div class="free">
							<h3 class="hd">Free</h3>
							<div class="price">$0<small>/mo</small></div>
							<ul>
								<li>Up to 20 free project</li>
								<li>Maximum 30 sub tasks</li>
								<li>5 sharing</li>
								<li>Limited to single device</li>
							</ul>
							<a href="#" class="btn btn-line light btn-sm">Get started</a>
						</div><!-- /.free -->
					
						<div class="pro1">
							<h3 class="hd">Unlimited</h3>
							<div class="price">$10<small>/mo</small></div>
							<ul>
								<li>Unlimited project</li>
								<li>Unlimited sub tasks</li>
								<li>Unlimited sharing</li>
								<li>Synchronize all devices</li>
							</ul>
							<a href="#" class="btn btn-primary btn-sm">Get started</a>
						</div><!-- /.pro1 -->
					</div><!-- /.price-table-1 -->
				</div><!-- /.content -->
			</div><!-- /.column -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.price-section -->

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