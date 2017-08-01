<?php include 'partials/header.php'; ?>
	
<!-- Form section -->
<section class="form-section form-section-3">
	<div class="container">
		<div class="row eqh">
			
			<div class="col-md-6 l">
				<div class="vm-item">
					<h6>SOCIAL NETWORK</h6>
					<h2 class="title small">Let's be friends</h2>

					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube-play"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>	
					</div><!-- /Social -->
					
				</div>
			</div><!-- /Contact form -->

			<div class="col-md-6 r">
				<div class="newsletter vm-item">
					<h6>NEWSLETTER</h6>
					<h2 class="title small">Be the first to know</h2>
					<form action="form-data/notify-me.php" data-formtype="newsletter" data-msgpos="append" class="form-widget">
						<div class="field-group">
							<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
							<button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i></button>
						</div>
						<div class="msg-wrp"></div>
					</form> <!-- /form -->	
				</div>
			</div><!-- /Newsletter form -->

		</div><!-- / Row -->	
	</div><!-- / container -->
</section><!-- / Form section -->

<?php include 'partials/footer.php'; ?>

</body>
</html>