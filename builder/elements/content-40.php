<?php include 'partials/header.php'; ?>
	
<!-- content-section -->
<section class="content-section content-section-common pd-tb-60" id="about">
	<div class="container">
		<h2 class="title mr-b-30 small align-c">What's Inside</h2>
		
		<div class="carousel-widget ctrl-2 w-75 mr-auto" 
			data-nav="true"
			data-pager="true"
			data-itemrange="0,1|420,1|600,1|768,1|992,1|1200,1"
			data-margin="20"
			data-rbase="body"
			data-hauto="false">

			<div class="owl-carousel popgallery-widget">

				<div class="item">
					<div class="img-box1">
						<div class="overlay anim flex-cc">
							<span>
								<a href="images/bookimg_1.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
								<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="images/bookimg_1.jpg" alt="App image">
					</div>
				</div><!-- /.item -->

				<div class="item">
					<div class="img-box1">
						<div class="overlay anim flex-cc">
							<span>
								<a href="images/bookimg_2.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
								<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="images/bookimg_2.jpg" alt="App image">
					</div>
				</div><!-- /.item -->

				<div class="item">
					<div class="img-box1">
						<div class="overlay anim flex-cc">
							<span>
								<a href="images/bookimg_3.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
								<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="images/bookimg_3.jpg" alt="App image">
					</div>
				</div><!-- /.item -->

				<div class="item">
					<div class="img-box1">
						<div class="overlay anim flex-cc">
							<span>
								<a href="images/bookimg_4.jpg" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
								<a href="http://themeforest.net/item/rgen-landing-pages/13244840?ref=R_GENESIS" target="_blank"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="images/bookimg_4.jpg" alt="App image">
					</div>
				</div><!-- /.item -->

			</div><!-- /.owl-carousel -->
		</div><!-- /.carousel-widget -->

		<br><br>

		<div class="align-c">
			<h2 class="title small">Learn new tricks that help you to grow your business</h2>
			<p class="title-sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
		</div>
		
		<div class="row gt30">
			<div class="col-md-4">
				<div class="info-box info-box5">
					<div class="img" style="font-size: 40px;"><i class="pe-7s-ribbon"></i></div>
					<div class="info">
						<h2 class="hd">Lorem ipsum dolor</h2>
						<p class="sub-txt">Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="info-box info-box5">
					<div class="img" style="font-size: 40px;"><i class="pe-7s-ribbon"></i></div>
					<div class="info">
						<h2 class="hd">Lorem ipsum dolor</h2>
						<p class="sub-txt">Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="info-box info-box5">
					<div class="img" style="font-size: 40px;"><i class="pe-7s-ribbon"></i></div>
					<div class="info">
						<h2 class="hd">Lorem ipsum dolor</h2>
						<p class="sub-txt">Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="info-box info-box5">
					<div class="img" style="font-size: 40px;"><i class="pe-7s-ribbon"></i></div>
					<div class="info">
						<h2 class="hd">Lorem ipsum dolor</h2>
						<p class="sub-txt">Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="info-box info-box5">
					<div class="img" style="font-size: 40px;"><i class="pe-7s-ribbon"></i></div>
					<div class="info">
						<h2 class="hd">Lorem ipsum dolor</h2>
						<p class="sub-txt">Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="info-box info-box5">
					<div class="img" style="font-size: 40px;"><i class="pe-7s-ribbon"></i></div>
					<div class="info">
						<h2 class="hd">Lorem ipsum dolor</h2>
						<p class="sub-txt">Lorem ipsum dolor sit ametconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
					</div>
				</div>
			</div>
			
		</div><!-- /row -->
	</div><!-- /container -->
</section><!-- /content-section -->


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