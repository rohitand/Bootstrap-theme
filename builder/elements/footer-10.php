<?php include 'partials/header.php'; ?>
	
<!-- Footer section -->
<section class="footer-section footer-section-3">
	<div class="container">
		<div class="row">
			<div class="col-md-3 l">
				<img src="images/logo1.png" alt="Company logo">
				<h6>Postal Address</h6>
				<p>PO Box 16122 Collins Street West
				Victoria 8007 Australia</p>
			</div><!-- /Logo and address -->

			<div class="col-md-3 c">
				<a href="#">About us</a>
				<a href="#">Our cars</a>
				<a href="#">Quick booking</a>
				<a href="#">Term & conditions</a>
				<a href="#">Privacy policy</a>
			</div><!-- Quick links -->

			<div class="col-md-6 r">
				<div class="newsletter mr-b-20">
					<h5 class="hd">Sign up to get news, latest releases and more...</h5>
					<form action="form-data/notify-me.php" class="form-widget" data-formtype="newsletter" data-msgpos="append">
						<div class="field-group">
							<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
							<button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i></button>
						</div>
						<div class="msg-wrp"></div>
					</form> <!-- /form -->	
				</div>
				<div class="social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-youtube-play"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>	
				</div><!-- /Social -->
			</div><!-- Newsletter  -->

		</div>
		<hr>
		<p class="copyright">R.Gen - Landing page bundle &copy; 2015</p>
	</div>
</section><!-- ./Footer section -->

<?php include 'partials/footer.php'; ?>

</body>
</html>