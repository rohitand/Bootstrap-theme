<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-20" data-fullwh="y">
	<div class="container flex-cl">
		<div class="flex-row">
			<div class="flex-col-md-6 flex-cl">
				<div class="caption">
					<h2 class="title lh1-2 bold-4">Wide Range of Properties to Explore and Trusted Service</h2>
					<p class="title-sub">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
					<hr class="light mr-tb-20">
					<h2 class="title small italic bold-4">Find your dream home<br> now made quick and easy</h2>
				</div><!-- /.content -->
			</div>
			<div class="flex-col-md-4 flex-col-md-offset-2">
				<!-- Popup contact form -->
				<div class="white-popup-block popup-form">
					<div class="pop-header">
						<h3 class="title small">Free Consultation</h3>
					</div>
					<div class="pop-body">
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
									<input class="form-control"  data-label="Phone" required data-msg="Please phone number." type="text" name="phone" placeholder="Enter your phone number">
								</div>
								<div class="form-group">
									<input class="form-control datetime-pick" required data-label="Date and Time" data-msg="Please select date and time." type="text" name="datetime" placeholder="Date and Time">
								</div>
								<div class="form-group">
									<textarea class="form-control" data-label="Message" required data-msg="Please enter your message." name="message" placeholder="Add your message" cols="30" rows="10"></textarea>
								</div>
							</div>
							<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
						</form>	
						<div class="msg-block"></div>
					</div>
				</div><!-- /#popup-contact-form -->
			</div>
		</div>
	</div><!-- /.container -->
	<div class="full-wh bg-section bg-cover bg-cc" data-parallax="scroll" data-image-src="images/realestate_intro.jpg"><b style="background-color: rgba(183, 163, 73, 0.35);" class="full-wh overlay"></b></div>
</section><!-- /.intro-section -->


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
