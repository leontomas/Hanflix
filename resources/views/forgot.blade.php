<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/forgot.css">
</head>
<style type="text/css">

</style>
<body>
	<div class="header">
		<div class="logo">
			<img src="thumbnails/logo2.png">
			<a href="">Help Center</a>
		</div>
		<div class="buttons">
			<div>
				<a id="join-button"href="{{ url('register') }}">Join HanFlix</a>
				<a id="sign-button"href="{{ url('login') }}">Sign in</a>
			</div>
		</div>
	</div>
	<div class="forgot-password-container">
		<div>
			<h3>Forgot password</h3>	
		</div>			
		<div class="account-input">
			<p>Please enter your email to reset your account.</p>
			<input type="email" name="" placeholder="Enter your account">
		</div>
		<div class="account-buttons">
			<a href="{{ url('login') }}">Cancel</a>
			<a href="{{ url('login') }}"><button>Enter</button></a>
		</div>
	</div>

	<div class="lowerContainer">
			<div class="a-box1">
				<a href="">Frequently ask questions</a>
				<a href="">Privacy</a>
				<a href="">Help Center</a>
			</div>
			<div class="a-box2">
				<a href="">Facebook Page</a>
				<a href="">Twitter</a>
				<a href="">Instagram</a>
			</div>
			<div class="a-box3">
				<a href="">Contact us</a>
				<a href="">+639552867566</a>
				<a href="">+639073747526</a>
			</div>
	</div>
</body>
</html>