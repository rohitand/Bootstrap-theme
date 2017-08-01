<?php include 'partials/header.php'; ?>
	
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

<?php include 'partials/footer.php'; ?>

</body>
</html>