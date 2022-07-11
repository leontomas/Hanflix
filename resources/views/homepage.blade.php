<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>hanflix</title>

	<link rel="hanflix icon" type="image" href="./css/thumbnails/logo2.png">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- External CSS -->
	<link rel="stylesheet" type="text/css" href="./css/homepage.css">

    <!-- Font -->
	<link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">

    <!-- Style -->
    <style>
        @import url('http://fonts.cdnfonts.com/css/gotham');
    </style>

	<!-- Boostrap Link -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="nav-bar">
        <a href="{{ url('homepage') }}">
		    <img id="logo"src="./thumbnails/logo2.png">
        </a>
		<div class="nav-bar-buttons">
				<a href="{{ url('homepage') }}">Home</a>
				<a href="">TV Shows</a>
				<a href="">Movies</a>
				<a href="">Kids</a>
				<a href="">Recently Added</a>
			<div class="search-bar">
				<img src="./icons/search-icon.png">
				<input type="text" placeholder="Search..">
			</div>
		</div>
		
	</div>
	
    <div class="preview-trailer-container ">
		<p>Live Streams</p>
		<div class="live1-container">
		</div>
		<div class="live2-container">
		</div>
	</div>
	
    <div class="all-video-container">
		<div class="watch-next row justify-content">
			<p>Watch Next</p>
			<div class="col-4">
				<img src="./thumbnails/mindhunter.jpg">
			</div>
			<img src="./thumbnails/better-call-saul.jpg">
			<img src="./thumbnails/coherence.jpg">
			<img src="./thumbnails/everything-everywhere.jpg">
			<img src="./thumbnails/how-to-get-away-with-murder.jpg">
			<img src="./thumbnails/inglourious-basterds.jpg">
			<img src="./thumbnails/limitless.jpg">
		</div>
		<div class="recommended-movies">
			<p>Recommended Movies</p>
			<img src="./thumbnails/peaky-blinders.jpg">
			<img src="./thumbnails/the-art-of-defense.jpg">
			<img src="./thumbnails/the-gentlemen.jpg">
			<img src="./thumbnails/the-sopranos.jpg">
			<img src="./thumbnails/x-men.jpg">
			<img src="./thumbnails/barky.jpg">
			<img src="./thumbnails/pan's-labyrinth.jpg">
		</div>
	</div>

</body>
</html>