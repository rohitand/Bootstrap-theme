<?php include 'partials/header.php'; ?>
	

<!-- extra-form -->
<section class="extra-section extra-form1">
	<div class="container">
		<!-- Tab structure -->
		<div class="tabs-auto tab-style2 medium">
			
			<ul class="tb-list align-c">
				<li class="tb">Login</li>
				<li class="tb">Register</li>
			</ul><!-- /.tb-list -->

			<div class="tb-content">

				<div class="tb-pn">
					
					<!-- form block -->
					<div class="form-block form-block-style1 w50 mr-auto mr-t-40">
						<h2 class="title small">Login to your Account</h2>
						<hr>
						<form action="#" class="form-widget placeholder-light">
							<div class="form-group">
								<label for="username">User name</label>
								<input class="form-control" data-label="User name" required data-msg="Please enter user name." type="text" name="username" placeholder="Enter your user name">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input class="form-control" data-label="Password" required data-msg="Please enter your password." type="password" name="password" placeholder="Enter your password">
							</div>
							<hr class="mr-tb-30">
							<button type="submit" class="btn btn-primary inline-block">Login</button>
							<a href="javascript:;" class="pull-right">Forgot Password?</a>	
							
						</form><!-- / form -->
					</div><!-- / form block -->

				</div><!-- tab pane -->

				<div class="tb-pn">
					
					<!-- form block -->
					<div class="form-block form-block-style1 w50 mr-auto mr-t-40">
						<h2 class="title small">Register for an Account</h2>
						<hr>
						<form action="#" class="form-widget placeholder-light">
							<div class="form-group">
								<label for="username">Name</label>
								<input class="form-control" data-label="Name" required data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<label for="username">Email</label>
								<input class="form-control" required data-label="Email" data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
							</div>
							<div class="form-group">
								<label for="username">Phone</label>
								<input class="form-control" required data-label="Phone" data-msg="Please phone number." type="text" name="phone" placeholder="Enter your phone number">
							</div>
							<div class="form-group">
								<label for="username">User name</label>
								<input class="form-control" data-label="User name" required data-msg="Please enter user name." type="text" name="username" placeholder="Enter your user name">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input class="form-control" data-label="Password" required data-msg="Please enter your password." type="password" name="password" placeholder="Enter your password">
							</div>
							<div class="form-group">
								<label for="password">Confirm Password</label>
								<input class="form-control" data-label="Confirm Password" required data-msg="Confirm your password." type="password" name="confirm_password" placeholder="Confirm your password">
							</div>
							<hr class="mr-tb-30">
							<div class="form-group checkbox">
								<label>
									<input data-label="Term" required data-msg="Please tick checkbox to agree our terms and conditions." type="checkbox" name="terms">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime maiores quis nam earum dicta ab velit,
								</label>
							</div>
							<hr class="mr-tb-30">
							<button type="submit" class="btn btn-primary inline-block">Register now</button>
						</form><!-- / form -->
					</div><!-- / form block -->

				</div><!-- tab pane -->					

			</div><!-- / tab content wrapper -->

		</div><!-- / tabs-auto -->

	</div><!-- / container -->
</section><!-- / extra-form -->



<?php include 'partials/footer.php'; ?>

</body>
</html>