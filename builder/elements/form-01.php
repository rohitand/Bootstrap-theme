<?php include 'partials/header.php'; ?>
	
<!-- Form section -->
<section class="form-section form-section-1">
	<div class="container">
		<h2 class="title medium mr-b-10">Always be the first to know</h2>
		<p class="title-sub medium">Sign up for our newsletter!</p>

		<form action="form-data/notify-me.php" class="form-widget" data-formtype="newsletter" data-msgpos="append">
			<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
			<button type="submit" id="submit" data-loading-text="Pleae wait.." class="btn btn-primary"><i class="fa fa-envelope-o"></i> Subscribe now</button>
			<div class="msg-wrp"></div>
		</form> <!-- /form -->
	</div>
</section><!-- /.form-section -->


<?php include 'partials/footer.php'; ?>

</body>
</html>