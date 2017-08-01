<?php include 'partials/header.php'; ?>
	
<!-- Intro -->
<section class="intro-section intro-section-11">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 l">
				<div class="content vm-item">
					<img src="images/logo1.png" alt="Brand logo">
					<h2 class="main-text">
						<small>Welcome to</small><br>
						R.Gen Restaurant
					</h2>
					<!-- <hr> -->
					<p class="sub-text">
						The Delicious Premium Food Home<br>
						<small>Since 1990</small>
					</p>
				</div>
			</div><!-- /.col-md-6 -->
			<div class="col-md-6 r">
				<!-- Booking form  -->
				<div id="table-booking-form" class="table-booking vm-item">
					<i class="fa fa-glass"></i>
					<h3 class="title small">BOOK YOUR TABLE</h3>
					<form action="form-data/formdata.php" class="form-widget">
						<input type="hidden" name="to" value="r.genesis.art@gmail.com">
						<input type="hidden" name="formtype" value="table-booking">
						<input class="form-control" data-label="Name" required data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">
						<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
						<input class="form-control" data-label="Phone" required data-msg="Please phone number." type="text" name="phone" placeholder="Enter your phone number">
						<input class="form-control date-pick" data-label="Date" required data-msg="Please select date." type="text" name="date" placeholder="Enter your date">
						<select class="form-control" data-label="No. of people" required data-msg="How many people?" name="people">
							<option value="">How many people?</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
						<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
					</form>	
					<div class="msg-block"></div>
				</div><!-- /#table-booking-form -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
	
	<div class="bg-section full-wh">
		<b class="full-wh overlay"></b>
		<div class="bgslider" data-bgslider="images/food_01.jpg|images/food_02.jpg|images/food_03.jpg|images/food_04.jpg"></div>
	</div><!-- / background slide show -->
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
