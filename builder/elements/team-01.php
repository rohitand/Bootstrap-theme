<?php include 'partials/header.php'; ?>
	
<!-- Team section -->
<section class="team-section team-section-1">
	<div class="container">
		<h2 class="title">Our Team</h2>
		<p class="title-sub">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyt vero eos <br>
			nonumyt vero eos et accusam et justo duo dolores et ea rebum.
		</p>
		<div class="row">
			<div class="col-md-3">
				<div class="member-box member-box1">
					<div class="img" data-bg="images/doctor_1.jpg">
						<div class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
						<img src="images/spacer.png" alt="spacer">
					</div>
					<h3>Jessie Mckinney</h3>
					<em>Ent Surgery</em>
				</div><!-- /.member-box -->
			</div>
			<div class="col-md-3">
				<div class="member-box member-box1">
					<div class="img" data-bg="images/doctor_2.jpg">
						<div class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
						<img src="images/spacer.png" alt="spacer">
					</div>
					<h3>Alma Gomez</h3>
					<em>Invisalign</em>
				</div><!-- /.member-box -->
			</div>
			<div class="col-md-3">
				<div class="member-box member-box1">
					<div class="img" data-bg="images/doctor_3.jpg">
						<div class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
						<img src="images/spacer.png" alt="spacer">
					</div>
					<h3>Peggy Washington</h3>
					<em>Cosmetic Surgery</em>
				</div><!-- /.member-box -->
			</div>
			<div class="col-md-3">
				<div class="member-box member-box1">
					<div class="img" data-bg="images/doctor_4.jpg">
						<div class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
						<img src="images/spacer.png" alt="spacer">
					</div>
					<h3>Lydia Park</h3>
					<em>Plastic Surgery</em>
				</div><!-- /.member-box -->
			</div>
			<div class="col-md-3">
				<div class="member-box member-box1">
					<div class="img" data-bg="images/doctor_5.jpg">
						<div class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
						<img src="images/spacer.png" alt="spacer">
					</div>
					<h3>John Turner</h3>
					<em>Lasik Eye</em>
				</div><!-- /.member-box -->
			</div>
			<div class="col-md-3">
				<div class="member-box member-box1">
					<div class="img" data-bg="images/doctor_6.jpg">
						<div class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
						<img src="images/spacer.png" alt="spacer">
					</div>
					<h3>Wilson Young</h3>
					<em>Dental</em>
				</div><!-- /.member-box -->
			</div>
			<div class="col-md-3">
				<div class="member-box member-box1">
					<div class="img" data-bg="images/doctor_7.jpg">
						<div class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
						<img src="images/spacer.png" alt="spacer">
					</div>
					<h3>Marshall Stevenson</h3>
					<em>Acupuncture</em>
				</div><!-- /.member-box -->
			</div>
			<div class="col-md-3">
				<div class="member-box member-box1">
					<div class="img" data-bg="images/doctor_8.jpg">
						<div class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
						<img src="images/spacer.png" alt="spacer">
					</div>
					<h3>Frankie	Padilla</h3>
					<em>Laboratory</em>
				</div><!-- /.member-box -->
			</div>
		</div>

	</div>
</section><!-- / Team section -->


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