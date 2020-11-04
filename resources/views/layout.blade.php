<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	
	<title>Home</title>
</head>
<body>
	<header>	
	  <nav>
		<div class="nav-wrapper">
			<div class="container">
			  <a href="{{ route('home') }}" class="brand-logo">Phone Book</a>
			  <ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="sass.html">Sass</a></li>
				<li><a href="badges.html">Components</a></li>
				<li><a href="collapsible.html">JavaScript</a></li>
			  </ul>
			</div>
		</div>
	  </nav>    
	</header>

	<main class="container">
		@yield('content')
	</main>

	<!--JavaScript at end of body for optimized loading-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
  