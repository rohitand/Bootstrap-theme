<?php include 'rgen/partials/header.php'; ?>
<body data-ng-app="rgenApp" class="verify-body">
<style>
	html,
	body {
		height: 100%;
	}
	h2 {
		font-size: 20px;
		padding-bottom: 15px;
		margin-bottom: 15px;
		border-bottom: 1px solid rgba(0,0,0,0.1);
	}
</style>
<div class="verify-wrp align-c" ng-controller="verifyController">
	<div class="align-l pd20 bg1 mr20-b">
		<h2>Basic requirement of builder</h2>
		<ul>
			<li>PHP with cURL module enabled</li>
			<li>Apache webserver (Windows servers will probably work, but are not supported)</li>
			<li>To run locally it require XAMPP / WAMP / MAMP to create server environment</li>
			<li>Apply full permission (777) on <strong>/tmp</strong> folder of builder to generate preview and export files</li>
		</ul>
		<p><strong>NOTE :</strong></p>
		<ul>
			<li>We strongly recommended to use builder on your local machine using <strong><a href="https://www.apachefriends.org/index.html" target="_blank">XAMPP</a> / <a href="http://www.wampserver.com/en/" target="_blank">WAMP</a> / <a href="https://www.mamp.info/en/" target="_blank">MAMP</a></strong> instead of hosting server.</li>
			<li>Token code is kind of password to open builder. It is always require when you clear your browser cache.</li>
		</ul>
	</div>
	
	<input type="text" class="form-field w-full large mr10-b align-c" placeholder="Enter your builder token code" data-ng-model="token_code">
	<button type="submit" class="rgen-btn btn-block large mediumlight mr20-b" ng-click="verify()">Log In</button>
	<p><i class="fa fa-hand-o-right" style="font-size: 40px; vertical-align: middle; margin: 10px;"></i> <a href="http://landingpages.rgenesis.com/verify/" class="rgen-btn" style="font-weight: bold; border: 3px solid #0c5ece; font-size: 16px;" target="_blank"> CLICK HERE TO GET YOUR TOKEN CODE </a> <i class="fa fa-hand-o-left" style="font-size: 40px; vertical-align: middle; margin: 10px;"></i></p>
</div>
		
<?php include 'rgen/partials/footer.php'; ?>






















































