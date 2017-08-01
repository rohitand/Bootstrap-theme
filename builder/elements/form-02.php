<?php include 'partials/header.php'; ?>
	
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


<?php include 'partials/footer.php'; ?>

</body>
</html>