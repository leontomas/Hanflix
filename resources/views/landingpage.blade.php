<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Han Flix</title>
	<link rel="stylesheet" type="text/css" href="./css/landingpage.css">

	<!-- Font -->
	<link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">

	<!-- Style -->
	<style>
		@import url('http://fonts.cdnfonts.com/css/gotham');
	</style>
</head>
<body>
	<div class="header">
			<div id="logo-container">
				<a href="{{ url('landingpage') }}">
					<img src="./thumbnails/logo2.png">
				</a>
			</div>
		
		<div id="button-container">
			<a href="{{ url('login') }}">Sign in</a>
		</div>
	</div>
	
	<div class="mid-container">
		<div class="bg-image-container">	
			<img src="./thumbnails/bghanflix4.jpg">
			<h3 id="bg-text">Watch your favorite Movies</h3>
			<h3 id="bg-text2">and Livestream here!</h3>
			<p id="bg-text3">Hanflix and chill?</p>
			<a id="subscribe" href="{{ url('register') }}">REGISTER NOW!!</a>
		</div>
	</div>
	
	<div class="first-lower-container">
		<div class="fl-texts">
			<div>
				<h3>Watch anywhere!</h3>
				<p>Enjoy your free time while <br> watching movies</p>
			</div>
		</div>
		<div class="img-container">
			<img src="./thumbnails/flatscreentv.jpg">
		</div>
	</div>
	
	<div class="second-lower-container">
		<div class="left-div">
			<img src="./thumbnails/hanflixtv.png">
			<div class="email">
				<input type="email" name="email" placeholder="Email Address">
				<button>Submit</button>
			</div>
		</div>
		<div class="right-div">
			<div class="right-texts">
				<h3>Subscribe to have <br>profile features</h3>
				<p>Enjoy anytime <br> and cancel anytime!</p>
			</div>
		</div>
	</div>
	
	<div class="third-lower-container">
		<div class="featured">
			<h3>Watch now!</h3>
			<a href="file:///C:/Users/ADMIN/Desktop/Netflix/login.html"><img src="./thumbnails/barky.jpg"></a>
			<a href="file:///C:/Users/ADMIN/Desktop/Netflix/login.html"><img src="./thumbnails/limitless.jpg"></a>
			<a href="file:///C:/Users/ADMIN/Desktop/Netflix/login.html"><img src="./thumbnails/coherence.jpg"></a>
			<a href="file:///C:/Users/ADMIN/Desktop/Netflix/login.html"><img src="./thumbnails/mindhunter.jpg"></a>
			<a href="file:///C:/Users/ADMIN/Desktop/Netflix/login.html"><img src="./thumbnails/the-sopranos.jpg"></a>
			<a href="file:///C:/Users/ADMIN/Desktop/Netflix/login.html"><img src="./thumbnails/the-gentlemen.jpg"></a>
		</div>
	</div>

</body>
</html>