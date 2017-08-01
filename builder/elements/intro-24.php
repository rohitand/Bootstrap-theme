<?php include 'partials/header.php'; ?>
	
<!-- intro-section -->
<section class="intro-section intro-section-22" data-fullh='y' id="home">
	<div class="container h100 flex-cl z2">
		<div class="flex-row">

			<div class="flex-col-md-6 r flex-col-md-offset-1 last-md flex-cc">
				<div class="content">
					<strong class="tag-text italic">Starting at 6:00 pm</strong>
					<h2 class="title fs80 bold-5">CHRISTMAS CELEBRATION</h2>
					<hr class="light mr-tb-40">
					<!-- Countdown -->
					<div class="countdown-widget mr-b-10">
						<div data-day="25" data-month="12" data-year="2015" data-hr="0" data-min="0" data-sec="0"></div>	
					</div><!-- /.Countdown -->
					<p class="fs14">Lorem ipsum dolor sit amet, consectetur adipisicing elit *</p>
					
				</div><!-- /.content -->		
			</div><!-- /.flex-column -->

			<div class="flex-col-md-5 l flex-cc first-md">
				<!-- Popup contact form -->
				<div id="popup-contact-form" class="popup-form">
					<br><br>
					<div class="pop-header">
						<h3 class="title small bold-4">Contact Us</h3>
						<p class="title-sub mini">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sitamet conseteturs</p>
					</div>
					<div class="pop-body">
						<form action="form-data/formdata.php" class="form-widget" data-popup="popup-contact">
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
									<textarea class="form-control" data-label="Message" required data-msg="Please enter your message." name="message" placeholder="Add your message" cols="30" rows="10"></textarea>
								</div>
							</div>
							<button type="submit" class="btn btn-line light"><i class="fa fa-envelope-o"></i> Submit</button>
						</form>	
						<div class="msg-block"></div>
					</div>
				</div><!-- /#popup-contact-form -->
			</div><!-- /.flex-column -->

		</div><!-- /.flex-row -->
	</div><!-- /.container -->
	<div class="full-wh bg-section bg-cover bg-cc z1" data-parallax="scroll" data-image-src="images/party_intro2.jpg"><b class="full-wh overlay"></b></div>
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
