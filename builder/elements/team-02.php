<?php include 'partials/header.php'; ?>
	
<!-- team-section -->
<section class="team-section team-section-2" id="team">
	<div class="container">
		<h2 class="title">Our Trainers</h2>
		<p class="title-sub">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr diam nonumy<br>
			eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
		</p>
		
		<div class="carousel-widget ctrl-2" id="carousel-widget" 
			data-nav="true"
			data-pager="true"
			data-itemrange="0,1|420,1|600,2|768,2|992,3|1200,4"
			data-margin="30"
			data-rbase="body"
			data-hauto="false">
			<div class="owl-carousel popgallery-widget">

				<div class="item">
					<!-- .member-box -->
					<div class="member-box member-box2">
						<div class="img"><img src="images/person1.jpg" alt="member"></div>
						<div class="info">
							<h3>Jessie Mckinney</h3>
							<em>Mixed Yoga</em>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div><!-- /.member-box -->
				</div><!-- /.item -->

				<div class="item">
					<!-- .member-box -->
					<div class="member-box member-box2">
						<div class="img"><img src="images/person2.jpg" alt="member"></div>
						<div class="info">
							<h3>Alma Gomez</h3>
							<em>Beginners Yoga</em>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div><!-- /.member-box -->
				</div><!-- /.item -->

				<div class="item">
					<!-- .member-box -->
					<div class="member-box member-box2">
						<div class="img"><img src="images/person3.jpg" alt="member"></div>
						<div class="info">
							<h3>Peggy Washington</h3>
							<em>Intermediate Yoga</em>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div><!-- /.member-box -->
				</div><!-- /.item -->

				<div class="item">
					<!-- .member-box -->
					<div class="member-box member-box2">
						<div class="img"><img src="images/person4.jpg" alt="member"></div>
						<div class="info">
							<h3>Lydia Park</h3>
							<em>Advanced Yoga</em>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div><!-- /.member-box -->
				</div><!-- /.item -->

				<div class="item">
					<!-- .member-box -->
					<div class="member-box member-box2">
						<div class="img"><img src="images/person5.jpg" alt="member"></div>
						<div class="info">
							<h3>John Turner</h3>
							<em>Pregnancy Yoga</em>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div><!-- /.member-box -->
				</div><!-- /.item -->

				<div class="item">
					<!-- .member-box -->
					<div class="member-box member-box2">
						<div class="img"><img src="images/person6.jpg" alt="member"></div>
						<div class="info">
							<h3>Wilson Young</h3>
							<em>Personal One to One</em>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div><!-- /.member-box -->
				</div><!-- /.item -->

			</div><!-- /.owl-carousel -->
		</div><!-- /.carousel-widget -->
	</div><!-- /.container -->
</section><!-- /.team-section -->


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