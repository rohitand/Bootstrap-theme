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
				<a href="#">Help</a>
				<a href="#">Contact us</a>
				<a href="#">Term & conditions</a>
				<a href="#">Privacy policy</a>
			</div><!-- Quick links -->

			<div class="col-md-6 r">
				<div class="newsletter">
					<h5 class="hd">Sign up to get news, latest releases and more...</h5>
					<form action="form-data/notify-me.php" class="form-widget" data-formtype="newsletter" data-msgpos="append">
						<div class="field-group">
							<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
							<button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i></button>
						</div>
						<div class="msg-wrp"></div>
					</form> <!-- /form -->	
				</div>
				<div class="addthis_toolbox addthis_default_style">
					<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a>
				</div>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
			</div><!-- Newsletter  -->

		</div>
		<hr>
		<p class="copyright">R.Gen - Landing page bundle &copy; 2015</p>
	</div>
</section><!-- ./Footer section -->

<?php include 'partials/footer.php'; ?>

</body>
</html>