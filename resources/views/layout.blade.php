<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>@yield('meta-title', config('app.name') . " | Blog")</title>
	<meta name="description" content="@yield('meta-description', 'Este es el blog de Zendero')">
	<link rel="shortcut icon" href="#">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/framework.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</head>
<body>
	<div class="preload"></div>
	<header class="space-inter">
		<div class="container container-flex space-between">
			<figure class="logo"><img src="/img/logo.png" alt=""></figure>
			<nav class="custom-wrapper" id="menu">
				<div class="pure-menu"></div>
				<ul class="container-flex list-unstyled">
					<li><a href="/" class="text-uppercase active">Home</a></li>
					<li><a href="about.html" class="text-uppercase">About</a></li>
					<li><a href="archive.html" class="text-uppercase">Archive</a></li>
					<li><a href="contact.html" class="text-uppercase">Contact</a></li>
				</ul>
			</nav>
		</div>
    </header>
    
    <!-- Contenido -->
    @yield('content')

    <section class="footer">
		<footer>
			<div class="container">
				<figure class="logo"><img src="/img/logo.png" alt=""></figure>
				<nav>
					<ul class="container-flex space-center list-unstyled">
						<li><a href="/" class="text-uppercase c-white">home</a></li>
						<li><a href="about.html" class="text-uppercase c-white">about</a></li>
						<li><a href="archive.html" class="text-uppercase c-white">archive</a></li>
						<li><a href="contact.html" class="text-uppercase c-white">contact</a></li>
					</ul>
				</nav>
				<div class="divider-2"></div>
				<p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</p>
				<div class="divider-2" style="width: 80%;"></div>
				<p>© 2017 - Zendero. All Rights Reserved. Designed & Developed by <span class="c-white">Agencia De La Web</span></p>
				<ul class="social-media-footer list-unstyled">
					<li><a href="#" class="fb"></a></li>
					<li><a href="#" class="tw"></a></li>
					<li><a href="#" class="in"></a></li>
					<li><a href="#" class="pn"></a></li>
				</ul>
			</div>
		</footer>
	</section>
	
</body>
</html>