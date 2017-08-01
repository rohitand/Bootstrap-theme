<?php include 'partials/header.php'; ?>
	
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
	

<?php include 'partials/footer.php'; ?>

</body>
</html>