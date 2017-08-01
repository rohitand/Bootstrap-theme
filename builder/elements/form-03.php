<?php include 'partials/header.php'; ?>
	
<!-- Form section -->
<section class="form-section form-section-3">
	<div class="container">
		<div class="row eqh">
			
			<div class="col-md-6 l">
				<div class="vm-item">
					<h6>CONTACT</h6>
					<h2 class="title small">Get in touch with us!</h2>
					<a href="#popup-contact-form" class="popup-contact btn btn-lg btn-default">Get in touch</a>	
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

		</div><!-- / row -->		
	</div><!-- / container -->
</section><!-- / Form section -->

<!-- Popup contact form : "mfp-hide" Add this class before using -->
<div id="popup-contact-form" class="white-popup-block popup-form mfp-hide">
	<div class="pop-header">
		<i class="fa fa-envelope-o"></i>
		<h3 class="title medium">Contact Us</h3>
		<p class="title-sub mini">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>	
	</div>
	<div class="pop-body">
		<form action="form-data/formdata.php" class="form-widget" data-popup="popup-contact">
			<input type="hidden" name="to" value="r.genesis.art@gmail.com">
			<input class="form-control" data-label="Name" required data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">
			<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
			<textarea class="form-control" data-label="Message" required data-msg="Please enter your message." name="message" placeholder="Add your message" cols="30" rows="10"></textarea>
			<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
		</form>	
		<div class="msg-block"></div>
	</div>
</div><!-- /#popup-contact-form -->


<?php include 'partials/footer.php'; ?>

</body>
</html>