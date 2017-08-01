<?php include 'partials/header.php'; ?>
	
<!-- / Contact section -->
<section class="contact-section contact-section-4">
	<div class="container">
		<div class="flex-row">
			<div class="flex-col-md-6">
				
				<!-- Popup contact form - 1 -->
				<div id="contact-form" class="form-block">
					<h2 class="title small">Drop us a line</h2>
					<hr>
					<form action="form-data/formdata.php" class="form-widget" data-success-redirect="y" >
						<div class="field-wrp">
							<input type="hidden" name="to" value="r.genesis.art@gmail.com">
							<div class="form-group">
								<input class="form-control" data-label="Name" required data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
							</div>
							<div class="form-group">
								<input class="form-control" required data-label="Phone" data-msg="Please phone number." type="text" name="phone" placeholder="Enter your phone number">
							</div>
							<div class="form-group">
								<input class="form-control" data-label="Subject" required data-msg="Please enter subject." type="text" name="subject" placeholder="Enter subject">
							</div>
							<div class="form-group">
								<textarea class="form-control" data-label="Message" required data-msg="Please enter your message." name="message" placeholder="Add your message" cols="30" rows="10"></textarea>
							</div>
						</div>
						<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
					</form><!-- / form -->
					<div class="msg-block"></div>
				</div><!-- /#popup-contact-form -->

			</div><!-- / column -->

			<div class="flex-col-md-5 flex-col-md-offset-1">
				<div class="content">
					<h2 class="title small">Our Contact Informations</h2>
					
					<hr>
					
					<div class="info-obj img-l g20 mini">
						<div class="img"><span class="iconwrp"><i class="pe-7s-map-marker"></i></span></div>
						<div class="info">
							<h3 class="bold-1 fs20 mr-b-10">Headquarters</h3>
							<p>PO Box 16122, Collins Street West, Victoria 8007, Australia</p>
						</div>
					</div><!-- / info object -->

					<hr>

					<div class="info-obj img-l g20 mini">
						<div class="img"><span class="iconwrp"><i class="pe-7s-call"></i></span></div>
						<div class="info">
							<h3 class="bold-1 fs20 mr-b-0">Phone</h3>
							<p class="mr-b-20">1-123-456-7890, 1-123-456-7890</p>

							<h3 class="bold-1 fs20 mr-b-0">FAX</h3>
							<p class="mr-b-20">1-123-456-7890, 1-123-456-7890</p>
						</div>
					</div><!-- / info object -->

					<hr>

					<div class="info-obj img-l g20 mini">
						<div class="img"><span class="iconwrp"><i class="pe-7s-mail"></i></span></div>
						<div class="info">
							<h3 class="bold-1 fs20 mr-b-10">Email us</h3>
							<p><a href="mailto:abcmail@xyz.com">abcmail@xyz.com</a></p>
						</div>
					</div><!-- / info object -->

				</div><!-- /.content -->

			</div><!-- / column -->
			
		</div><!-- / row -->
	</div><!-- / container-fluid -->
</section><!-- /contact-section -->


<?php include 'partials/footer.php'; ?>

</body>
</html>