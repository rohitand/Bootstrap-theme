<?php include 'partials/header.php'; ?>


<!-- Form section -->
<section class="form-section form-section-1">
	<div class="container">
		<h2 class="title medium mr-b-10">Always be the first to know</h2>
		<p class="title-sub medium">Sign up for our newsletter!</p>

		<form action="form-data/notify-me.php" class="form-widget" data-formtype="newsletter" data-msgpos="append">
			<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
			<button type="submit" id="submit" data-loading-text="Pleae wait.." class="btn btn-primary"><i class="fa fa-envelope-o"></i> Subscribe now</button>
			<div class="msg-wrp"></div>
		</form> <!-- /form -->
	</div>
</section><!-- /.form-section -->


<hr><!-- 1 ===================================================== -->


<!-- Form section -->
<section class="form-section form-section-2">
	<div class="container">
		<div class="row eqh">
			<div class="col-md-6 l">
				<div class="vm-item">
					<h2 class="title medium mr-b-10">Always be the first to know</h2>
					<p class="title-sub medium">Sign up for our newsletter!</p>
				</div>		
			</div>
			<div class="col-md-5 col-md-offset-1 r">
				<form action="form-data/notify-me.php" data-formtype="newsletter" data-msgpos="normal" class="vm-item form-widget">
					<div class="field-group">
						<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
						<button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i></button>
					</div>
					<div class="msg-wrp"></div>
				</form> <!-- /form -->		
			</div>
		</div>
	</div>
</section><!-- /.form-section -->


<hr><!-- 2 ===================================================== -->


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


<hr><!-- 3 ===================================================== -->


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


<hr><!-- 4 ===================================================== -->


<!-- Table booking form : "mfp-hide" Add this class before using -->
<div id="table-booking-form" class="white-popup-block popup-form popup-form1">
	<div class="pop-header">
		<i class="fa fa-glass"></i>
		<h3 class="title small">Book Your Table</h3>
	</div>
	<div class="pop-body">
		<form action="form-data/formdata.php" class="form-widget" data-popup="table-booking-popup">
			<div class="field-wrp">
				<input type="hidden" name="to" value="r.genesis.art@gmail.com">
				<input type="hidden" name="formtype" value="table-booking">
				<div class="form-group">
					<input class="form-control" required data-label="Name" data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">
				</div>
				<div class="form-group">
					<input class="form-control" required data-label="Email" data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
				</div>
				<div class="form-group">
					<input class="form-control" required data-label="Phone" data-msg="Please phone number." type="text" name="phone" placeholder="Enter your phone number">
				</div>
				<div class="form-group">
					<input class="form-control date-pick" required data-label="Date" data-msg="Please select date." type="text" name="date" placeholder="Enter your date">
				</div>
				<div class="form-group">
					<select class="form-control" required data-label="No. of people" data-msg="How many people?" name="people">
						<option value="">How many people?</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
				</div>
			</div>
			<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
		</form>	
		<div class="msg-block"></div>
	</div>
</div><!-- /#popup-appointment-form -->


<hr><!-- 5 ===================================================== -->


<!-- Appointment form : "mfp-hide" Add this class before using  -->
<div id="popup-appointment-form" class="white-popup-block popup-form popup-form1">
	<div class="pop-header">
		<i class="fa fa-envelope-o"></i>
		<h3 class="title medium">Get Appointment</h3>
		<p class="title-sub mini">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
	</div>
	<div class="pop-body">
		<form action="form-data/formdata.php" class="form-widget" data-popup="popup-appointment">
			<div class="field-wrp">
				<input type="hidden" name="to" value="r.genesis.art@gmail.com">
				<input type="hidden" name="formtype" value="appointment">
				<div class="form-group">
					<input class="form-control" data-label="Name" required data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">
				</div>
				<div class="form-group">
					<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
				</div>
				<div class="form-group">
					<input class="form-control" data-label="Phone" required data-msg="Please phone number." type="text" name="phone" placeholder="Enter your phone number">
				</div>
				<div class="form-group">
					<select class="form-control" data-label="Treatment" required name="treatment" id="treatment">
						<option value="Acupuncture">Acupuncture</option>
						<option value="Laboratory">Laboratory</option>
						<option value="Nutrition">Nutrition</option>
						<option value="Prescription">Prescription</option>
						<option value="Travel Medicine">Travel Medicine</option>
						<option value="Other">Other</option>
					</select>
				</div>
			</div>
			<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
		</form>	
		<div class="msg-block"></div>
	</div>
</div><!-- /#popup-appointment-form -->


<hr><!-- 6 ===================================================== -->


<!-- Popup contact form : "mfp-hide" Add this class before using -->
<div id="popup-contact-form" class="white-popup-block popup-form">
	<div class="pop-header">
		<i class="fa fa-envelope-o"></i>
		<h3 class="title medium">Contact Us</h3>
		<p class="title-sub mini">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>	
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
					<textarea class="form-control" data-label="Message" required data-msg="Please enter your message." name="message" placeholder="Add your message" cols="30" rows="10"></textarea>
				</div>
			</div>
			<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
		</form>	
		<div class="msg-block"></div>
	</div>
</div><!-- /#popup-contact-form -->


<hr><!-- 7 ===================================================== -->


<!-- Popup contact form -->
<div id="popup-contact-form" class="white-popup-block popup-form">
	<div class="pop-header">
		<i class="fa fa-envelope-o"></i>
		<h3 class="title medium">Contact Us</h3>
		<p class="title-sub mini">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>	
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
					<input class="form-control" required data-msg="Please phone number." data-label="Phone" type="text" name="phone" placeholder="Enter your phone number">
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


<hr><!-- 7.1 ===================================================== -->


<!-- Popup contact form : "mfp-hide" Add this class before using -->
<div id="popup-trainingclass-form" class="white-popup-block popup-form">
	<div class="pop-header">
		<i class="pe-7s-id"></i>
		<h3 class="title medium">Book My Free Trial</h3>
		<p class="title-sub mini">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
	</div>
	<div class="pop-body">
		<form action="form-data/formdata.php" class="form-widget" data-popup="popup-trainingclass">
			<div class="field-wrp">
				<input type="hidden" name="formtype" value="trainingclass">
				<input type="hidden" name="to" value="r.genesis.art@gmail.com">

				<div class="form-group">
					<input class="form-control" required data-msg="Please enter name." data-label="Name" type="text" name="name" placeholder="Enter your name">
				</div>
				<div class="form-group">
					<input class="form-control" required data-msg="Please enter email." data-label="Email" type="email" name="email" placeholder="Enter your email">
				</div>
				<div class="form-group">
					<input class="form-control" required data-msg="Please phone number." data-label="Phone" type="text" name="phone" placeholder="Enter your phone number">
				</div>
				<div class="form-group">
					<select class="form-control" required name="course" data-label="Course">
						<option value="Mixed Ability Yoga Classes">Mixed Ability Yoga Classes</option>
						<option value="Beginners Yoga Classes">Beginners Yoga Classes</option>
						<option value="Intermediate Yoga Classes">Intermediate Yoga Classes</option>
						<option value="Advanced Yoga Classes">Advanced Yoga Classes</option>
						<option value="Pregnancy Yoga Classes">Pregnancy Yoga Classes</option>
						<option value="Power Yoga Classes">Power Yoga Classes</option>
						<option value="Power Yoga Classes">Power Yoga Classes</option>
						<option value="Personal One to One Yoga Classes">Personal One to One Yoga Classes</option>
						<option value="Children Yoga Classes">Children Yoga Classes</option>
						<option value="Meditation Yoga Classes">Meditation Yoga Classes</option>
					</select>
				</div>
				<div class="form-group">
					<textarea class="form-control" required data-msg="Please enter your message." data-label="Message" name="message" placeholder="Add your message" cols="30" rows="10"></textarea>
				</div>
			</div>
			<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
		</form>
		<div class="msg-block"></div>
	</div>
</div><!-- /#popup-booking-form -->


<hr><!-- 8 ===================================================== -->


<!-- Popup booking form : "mfp-hide" Add this class before using -->
<div id="popup-carbooking-form" class="white-popup-block popup-form">
	<div class="pop-header">
		<i class="pe-7s-car"></i>
		<h3 class="title medium">Book a Car</h3>
		<p class="title-sub mini">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
	</div>
	<div class="pop-body">
		<form action="form-data/formdata.php" class="form-widget" data-popup="popup-carbooking">
			<div class="field-wrp">
				<input type="hidden" name="to" value="r.genesis.art@gmail.com">
				
				<div class="row gt16">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name</label>
							<input class="form-control" required data-msg="Please enter name." data-label="Name" type="text" name="name" placeholder="Enter your name">		
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Email</label>
							<input class="form-control" required data-msg="Please enter email." data-label="Email" type="email" name="email" placeholder="Enter your email">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="name">Phone</label>
					<input class="form-control" required data-msg="Please phone number." data-label="Phone" type="text" name="phone" placeholder="Enter your phone number">
				</div>

				<div class="row gt16">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Pick-up location</label>
							<select class="form-control" required name="pickup_location" data-label="Pick-up Location" data-msg="Please pick-up location.">
								<option value="">Select pick-up location</option>
								<option value="7351 West Street Granger, IN 46530">7351 West Street Granger, IN 46530</option>
								<option value="5397 Heather Lane Westford, MA 01886">5397 Heather Lane Westford, MA 01886</option>
								<option value="23 Cedar Avenue Potomac, MD 20854">23 Cedar Avenue Potomac, MD 20854</option>
								<option value="4931 Jackson Street Memphis, TN 38106">4931 Jackson Street Memphis, TN 38106</option>
								<option value="464 Valley View Road Hanover Park, IL 60133">464 Valley View Road Hanover Park, IL 60133</option>
								<option value="6098 Briarwood Court Berwyn, IL 60402">6098 Briarwood Court Berwyn, IL 60402</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Pick-up date and time</label>
							<input class="form-control datetime-pick" required data-label="Pick-up date and time" data-msg="Please select date and time." type="text" name="pickup_datetime" placeholder="Pick-up date and time">
						</div>
					</div>
				</div>
				
				<div class="row gt16">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Drop-off location</label>
							<select class="form-control" required name="dropoff_location" data-label="Drop-off Location" data-msg="Please drop-off location.">
								<option value="">Select drop-off location</option>
								<option value="7351 West Street Granger, IN 46530">7351 West Street Granger, IN 46530</option>
								<option value="5397 Heather Lane Westford, MA 01886">5397 Heather Lane Westford, MA 01886</option>
								<option value="23 Cedar Avenue Potomac, MD 20854">23 Cedar Avenue Potomac, MD 20854</option>
								<option value="4931 Jackson Street Memphis, TN 38106">4931 Jackson Street Memphis, TN 38106</option>
								<option value="464 Valley View Road Hanover Park, IL 60133">464 Valley View Road Hanover Park, IL 60133</option>
								<option value="6098 Briarwood Court Berwyn, IL 60402">6098 Briarwood Court Berwyn, IL 60402</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Drop-off date and time</label>
							<input class="form-control datetime-pick" required data-label="Drop-off date and time" data-msg="Please select date and time." type="text" name="dropoff_datetime" placeholder="Drop-off date and time">
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label for="cartype">Rental Car Type</label>
					<select class="form-control" required name="cartype" data-label="Car type">
						<option value="Economy">Economy</option>
						<option value="Compact">Compact</option>
						<option value="Intermediate">Intermediate</option>
						<option value="Standard">Standard</option>
						<option value="Signature Series">Signature Series</option>
						<option value="Luxury">Luxury</option>
						<option value="Standard SUV">Standard SUV</option>
						<option value="Passenger Van">Passenger Van</option>
					</select>
				</div>
			</div>
			<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
		</form>
		<div class="msg-block"></div>
	</div>
</div><!-- /#popup-booking-form -->


<hr><!-- 9 ===================================================== -->


<!-- Popup contact form : "mfp-hide" Add this class before using -->
<div id="popup-contact-form" class="white-popup-block popup-form">
	<div class="pop-header">
		<h3 class="title medium">Contact Us</h3>
		<p class="title-sub mini">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>	
	</div>
	<div class="pop-body">
		<form action="form-data/formdata.php" class="form-widget" data-popup="popup-contact">
			<div class="field-wrp">
				<input type="hidden" name="to" value="r.genesis.art@gmail.com">
				<div class="row gt10">
					<div class="col-md-4">
						<div class="form-group">
							<input class="form-control" required data-label="Name" data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">		
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input class="form-control" required data-label="Email" data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input class="form-control" required data-label="Phone" data-msg="Please phone number." type="text" name="phone" placeholder="Enter your phone number">
						</div>
					</div>
				</div>
				<div class="form-group">
					<select class="form-control" required data-label="Service" data-msg="Please select service" name="service">
						<option value="">-- Select service -- </option>
						<option value="Website Development">Website Development</option>
						<option value="Search Engine Optimization">Search Engine Optimization</option>
						<option value="E-Commerce Solutions">E-Commerce Solutions</option>
						<option value="Mobile Application Development">Mobile Application Development</option>
						<option value="Software Development">Software Development</option>
						<option value="Other">Other</option>
					</select>
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


<hr><!-- 10 ===================================================== -->


<!-- Popup contact form : "mfp-hide" Add this class before using -->
<div id="popup-newsletter-form" class="white-popup-block popup-form">
	<div class="pop-body bg3">
		<div class="align-c">
			<h3 class="title medium">Newsletter Subscription</h3>
			<p class="title-sub mini">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>	
		</div>
		<form action="form-data/notify-me.php" class="form-widget" data-popup="popup-newsletter" data-formtype="newsletter">
			<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
			<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
		</form>	
		<div class="msg-block"></div>
	</div>
</div><!-- /#popup-contact-form -->


<hr><!-- 11 ===================================================== -->


<!-- Form section -->
<section class="form-section form-section-4">
	<div class="container align-c">
		<h2 class="title medium mr-b-10">Get the eBook sample</h2>
		<p class="title-sub medium">Lorem ipsum dolor sitamet consectetur adipisicing elitseddo<br>eiusmod tempor incididunt utlabore</p>
		
		<form action="form-data/notify-me.php" class="form-widget" data-formtype="newsletter" data-msgpos="normal">
			<ul class="form-inline-tbl align-t">
				<li><input class="form-control large" data-label="Name" required data-msg="Please enter name." type="text" name="name" placeholder="Enter your name"></li>
				<li><input class="form-control large" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email"></li>
				<li><button type="submit" data-loading-text="Pleae wait.." class="btn btn-primary btn-lg btn-block"><i class="fa fa-envelope-o"></i> Subscribe now</button></li>
			</ul>
		</form> <!-- /form -->
	</div>
</section><!-- /.form-section -->


<hr><!-- 12 ===================================================== -->


<!-- Popup contact form : "mfp-hide" Add this class before using -->
<div id="popup-contact-form" class="white-popup-block popup-form max-w50">
	<div class="pop-header align-l">
		<h3 class="title small bold-2">Contact Us</h3>
		<hr class="light">
		<div class="row typo-light">
			<div class="col-md-4">
				<p><strong>Address : </strong> <br>
				PO Box 16122, Collins Street West,<br>Victoria 8007, Australia</p>
			</div>
			<div class="col-md-8">
				<p>
					<strong>Phone : </strong> 1-123-456-7890, 1-123-456-7890 <br>
					<strong>Fax : </strong> 1-123-456-7890, 1-123-456-7890 <br>
					<strong>Email : </strong> <a href="mailto:abc@xyz.com">abc@xyz.com</a>
				</p>
			</div>
		</div>
	</div>
	<div class="pop-body">
		<div class="flex-row gt30">
			<div class="flex-col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d39733.073301428696!2d-0.16466593641202756!3d51.50739853189934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!3m2!1d51.5073509!2d-0.1277583!4m0!5e0!3m2!1sen!2s!4v1442426108187" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="flex-col-md-6">
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
							<input class="form-control" required data-msg="Please phone number." data-label="Phone" type="text" name="phone" placeholder="Enter your phone number">
						</div>
						<div class="form-group">
							<textarea class="form-control" data-label="Message" required data-msg="Please enter your message." name="message" placeholder="Add your message" cols="30" rows="10"></textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
				</form>
			</div>
		</div>
		
	</div>
</div><!-- /#popup-contact-form -->
	

<hr><!-- 13 ===================================================== -->


<!-- Form section -->
<section class="form-section form-section-5 bg-gray sm-pd-reset sm-align-c" id="freetrial">
	<div class="container">

		<div class="flex-row middle-md">

			<div class="flex-col-md-5">
				<h2 class="title medium bold-4">Create Professional Landing Pages</h2>
				<p class="title-sub small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ex libero quas ratione rem eos, recusandae aut quasi dolorum, atque temporibus nam odit consequatur excepturi</p>
			</div><!-- / column -->

			<div class="flex-col-md-6 flex-col-md-offset-1 align-c">
				<!-- Form block -->
				<div class="form-block mr-b-20 pd-40 bdr-color2 bg-white bdr-1 rd-5">
					<h2 class="title fs20 bold-4 mr-b-30">START 30 DAY TRIAL</h2>
					<form action="form-data/notify-me.php" class="form-widget frm-gt20" data-formtype="newsletter">
						<input class="form-control lg" data-label="Name" required data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">
						<input class="form-control lg" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
						<button type="submit" class="btn btn-lg btn-primary">Try it now</button>
					</form><!-- / form -->
				</div><!-- /Form block -->

				<p>By clicking this button, you agree to our <a href="http://themeforest.net/item/rgen-landing-pages-with-page-builder/13244840?ref=R_GENESIS" target="_blank">Terms & Conditions</a> and <a href="http://themeforest.net/item/rgen-landing-pages-with-page-builder/13244840?ref=R_GENESIS" target="_blank">Privacy Policy.</a></p>
			</div><!-- / column -->

		</div><!-- / row -->
		
	</div><!-- / container -->
</section><!-- /.form-section -->


<hr><!-- 14 ===================================================== -->


<!-- Form section -->
<section class="form-section form-section-4 pos-rel" data-animate-in="fadeInUp">
	<div class="container align-c pos-rel z1 typo-light">
		<h2 class="title small sm-fs20">Subscribe to our newsletter</h2>
		<p class="title-sub small">Lorem ipsum dolor sitamet consectetur adipisicing elitseddo eiusmod tempor incididunt utlabore</p>
		
		<form action="form-data/notify-me.php" class="form-widget" data-formtype="newsletter" data-msgpos="normal">
			<ul class="form-inline-tbl align-t">
				<li><input class="form-control large light" data-label="Name" required data-msg="Please enter name." type="text" name="name" placeholder="Enter your name"></li>
				<li><input class="form-control large light" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email"></li>
				<li><button type="submit" data-loading-text="Pleae wait.." class="btn btn-white btn-lg btn-block"><i class="fa fa-envelope-o"></i> &nbsp; Subscribe now</button></li>
			</ul>
		</form> <!-- /form -->
	</div>
	<div class="full-wh bg-cover bg-cc" data-parallax="scroll" data-image-src="images/bg3.jpg"><b class="full-wh bg-dark1 op-07" style="background-color: rgba(73, 76, 82, 0.7);"></b></div>
</section><!-- /.form-section -->


<hr><!-- 15 ===================================================== -->


<?php include 'partials/footer.php'; ?>
</body>
</html>