<?php include 'partials/header.php'; ?>
	
<!-- / Contact section -->
<section class="contact-section contact-section-3">
	<div class="container">
		<h2 class="title">Contact us</h2>
		<p class="title-sub mini">Lorem ipsum dolor sit amet, consetetur sadipscing elitr<br>
		sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>	
	</div>
	
	<div class="container contact-info">
		<div class="row">
			<div class="col-md-4">
				<div class="icon"><i class="fa fa-map-marker"></i></div>
				<h2 class="title small">Address</h2>
				<p class="title-sub">PO Box 16122, Collins Street West, Victoria 8007, Australia</p>
			</div>
			<div class="col-md-4">
				<div class="icon"><i class="fa fa-phone"></i></div>
				<h2 class="title small">Call us on</h2>
				<p class="title-sub">1-123-456-7890<br>1-123-456-7890</p>
			</div>

			<div class="col-md-4">
				<div class="icon"><i class="fa fa-envelope-o"></i></div>
				<h2 class="title small">Email us on</h2>
				<p class="title-sub"><a href="mailto:abc@xyz.com">abc@xyz.com</a></p>
			</div>
		</div>
	</div><!-- / container -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d39733.073301428696!2d-0.16466593641202756!3d51.50739853189934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!3m2!1d51.5073509!2d-0.1277583!4m0!5e0!3m2!1sen!2s!4v1442426108187" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	<div class="contact-form">
		<div class="container">
			<!-- Popup contact form - 1 -->
			<div id="contact-form" class="form-block">
				<h2 class="title">Drop us a line</h2>

				<form action="form-data/formdata.php" class="form-widget">
					<div class="field-wrp">
						<input type="hidden" name="to" value="r.genesis.art@gmail.com">
						<div class="row">
							<div class="col-md-6 l">
								<input class="form-control" data-label="Name" required data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">		
								<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
							</div>
							<div class="col-md-6 r">
								<textarea class="form-control" data-label="Message" required data-msg="Please enter your message." name="message" placeholder="Add your message"></textarea>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
				</form><!-- / form -->
				<div class="msg-block"></div>
			</div><!-- /#popup-contact-form -->
		</div>	
	</div>		
</section><!-- /contact-section -->


<?php include 'partials/footer.php'; ?>

</body>
</html>