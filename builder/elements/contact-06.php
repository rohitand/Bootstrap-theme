<?php include 'partials/header.php'; ?>
	
<!-- / Contact section -->
<section class="contact-section contact-section-2 dark">
	<div class="container">
		<div class="row">
			<div class="col-md-5 r">
				<div class="content">
					<h2 class="title">Contact us</h2>
					<p class="title-sub mini">Lorem ipsum dolor sit amet, consetetur sadipscing elitr<br>
					sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>

					<div class="info-box info-box5">
						<div class="img"><i class="fa fa-map-marker cm-item"></i></div>
						<div class="info">
							<h3 class="hd">Address</h3>
							<p class="sub-txt">PO Box 16122, Collins Street West, Victoria 8007, Australia</p>
						</div>
					</div><!-- Address -->

					<div class="info-box info-box5">
						<div class="img"><i class="fa fa-phone cm-item"></i></div>
						<div class="info">
							<h3 class="hd">Call us on</h3>
							<p class="sub-txt">1-123-456-7890</p>
						</div>
					</div><!-- Call us -->

					<div class="info-box info-box5">
						<div class="img"><i class="fa fa-envelope-o cm-item"></i></div>
						<div class="info">
							<h3 class="hd">Email us on</h3>
							<p class="sub-txt"><a href="mailto:abc@xyz.com">abc@xyz.com</a></p>
						</div>
					</div><!-- Email us -->	
				</div><!-- /.content -->
			</div><!-- /.col-md-6 -->

			<div class="col-md-6 col-md-offset-1 l">
				<!-- Popup contact form - 1 -->
				<div id="contact-form" class="form-block">
					<h2 class="title small">Drop us a line</h2>

					<form action="form-data/formdata.php" class="form-widget">
						<div class="field-wrp">
							<input type="hidden" name="to" value="r.genesis.art@gmail.com">
							<div class="form-group">
								<input class="form-control" data-label="Name" required data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
							</div>
							<div class="form-group">
								<textarea class="form-control" data-label="Message" required data-msg="Please enter your message." name="message" placeholder="Add your message" cols="30" rows="10"></textarea>
							</div>
						</div>
						<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
					</form><!-- / form -->
					<div class="msg-block"></div>
				</div><!-- /#popup-contact-form -->
			</div><!-- /.col-md-6 -->
			
		</div><!-- / row -->
	</div><!-- / container-fluid -->
</section><!-- /contact-section -->


<?php include 'partials/footer.php'; ?>

</body>
</html>