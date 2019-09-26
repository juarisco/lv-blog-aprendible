<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('meta-title', config('app.name') . " | Blog")</title>
	<meta name="description" content="@yield('meta-description', 'Este es el blog de Zendero')">
	<link rel="shortcut icon" href="#">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/framework.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
	@stack('styles')
</head>
<body>

	<div id="app">

		<div class="preload"></div>
		<header class="space-inter">
			<div class="container container-flex space-between">
				<figure class="logo"><img src="/img/logo.png" alt=""></figure>
				<nav>
                    <ul class="container-flex space-center list-unstyled">
                        <li>
                            <router-link to="/" class="text-uppercase">Inicio</router-link>
                        </li>
                        <li>
                            <router-link to="/nosotros" class="text-uppercase">Nosotros</router-link>
                        </li>
                        <li>
                            <router-link to="/archivo" class="text-uppercase">Archivos</router-link>
                        </li>
                        <li>
                            <router-link to="/contacto" class="text-uppercase">Contacto</router-link>
                        </li>
                    </ul>
                </nav>
			</div>
		</header>
		
		<!-- Contenido -->
        <section class="posts container">
            {{-- @if (isset($title))
                <h3>{{ $title }}</h3>
            @endif --}}

            {{-- @forelse ($posts as $post) --}}
                <article class="post">

                    {{-- @include($post->viewType('home')) --}}

                    <div class="content-post">
                        
                        {{-- @include('posts.header') --}}

                        {{-- <h1>{{ $post->title }}</h1> --}}

                        <router-view></router-view>

                        <br>
                        <div class="divider"></div>
                        <br>

                        

                        {{-- <p>{{ $post->excerpt }}.</p> --}}

                        <footer class="container-flex space-between">
                            <div class="read-more">
                                {{-- <a href="{{ route('posts.show',$post) }}" class="text-uppercase c-green">@lang('read more')</a> --}}
                            </div>

                            {{-- @include('posts.tags') --}}
                            
                        </footer>
                    </div>
                </article>
            {{-- @empty --}}
                <article class="post">
                    <div class="content-post">
                        <h1>@lang('Not any posts yet')</h1>
                    </div>
                </article>
            {{-- @endforelse --}}

        </section><!-- fin del div.posts.container -->

        {{-- {{ $posts->appends(request()->all())->links() }} --}}

        <section class="footer">
            <footer>
                <div class="container">
                    <figure class="logo"><img src="/img/logo.png" alt=""></figure>
                    <nav>
                        <ul class="container-flex space-center list-unstyled">
                            <li>
                                <a href="{{ route('pages.home') }}" class="text-uppercase c-white">home</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.about') }}" class="text-uppercase c-white">about</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.archive') }}" class="text-uppercase c-white">archive</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.contact') }}" class="text-uppercase c-white">contact</a>
                            </li>
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

    </div>
        
    <script src="{{ mix('js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>