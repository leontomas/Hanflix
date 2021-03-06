<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Han Flix</title>

	<!-- Link -->
	<link rel="stylesheet" type="text/css" href="./css/register.css">

	<!-- Font -->
	<link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">

	<style>
		@import url('http://fonts.cdnfonts.com/css/gotham');
	</style>
                
</head>
<body>
	<img id="bg" src="thumbnails/bgg.jpeg">
	<div class="upperContainer">
		<div class="loginBox">
			<div class="logo">
                <a href="{{ url('landingpage') }}">
                    <img src="./thumbnails/logo2.png">
                </a>
			</div>
			<div class="reg-log">
				<div class="reg-logBtn">
					<div>	
						<a id="loginBtn" href="{{ url('login') }}">Login</a>	
						<a id="registerBtn" href="{{ url('register') }}">Register</a>
					</div>
					<div class="inputBox">
						<input type="text" name="username" placeholder="Username">	
                        <input type="text" name="email" placeholder="Email">
                        <input type="text" name="fname" placeholder="First name">
                        <input type="text" name="lname" placeholder="Last name">
						<input type="password" name="password" placeholder="Password">
						<input type="password" name="cpassword" placeholder="Confirm password">	
					</div>
					<button onclick="">Register</button>
					<p>By continuing, you agree to Hanflix's <a id="terms" href="">Terms of use</a></p>
				</div>
			</div>
		</div>	
		<div class="lowerContainer">
			<div class="a-box1">
				<a href="">Frequently ask questions</a>
				<a href="">Privacy</a>
				<a href="">Help Center</a>
			</div>
			<div class="a-box2">
				<a href="">Facebook</a>
				<a href="">Twitter</a>
				<a href="">Instagram</a>
			</div>
			<div class="a-box3">
				<a href="">Contact us</a>
				<a href="">+639552867566</a>
				<a href="">+639073747526</a>
			</div>
		</div>
	</div>
	
</body>
</html>