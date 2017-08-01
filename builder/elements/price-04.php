<?php include 'partials/header.php'; ?>
	
<!-- Price section -->
<section class="price-section price-section-2 dark bg-cover bg-cc" data-bg="images/bg1.jpg">
	<div class="container">
		
		<h2 class="title">Choose Free or Unlimited</h2>
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