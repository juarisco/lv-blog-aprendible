@extends('layout')

@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)

@section('content')
    <article class="post container">
        @if ($post->photos->count() === 1)
            <figure><img src="{{ $post->photos->first()->url }}" alt="" class="img-responsive"></figure>
        @elseif($post->photos->count() > 1)
            @include('posts.carousel')
        @elseif($post->iframe)
            <div class="video">
                {!! $post->iframe !!}
            </div>                
        @endif
        <div class="content-post">
            <header class="container-flex space-between">
                <div class="date">
                    <span class="c-gris">{{ $post->published_at->format('M d') }}</span>
                </div>
                <div class="post-category">
                    <span class="category">{{ $post->category->name }}</span>
                </div>
            </header>
            <h1>{{ $post->title }}</h1>
            <div class="divider"></div>
            <div class="image-w-text">
                {{-- <figure class="block-left"><img src="img/img-post-2.png" alt=""></figure>
                <div>
                    <p>Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. Sed ultrices tellus vitae rutrum congue. Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas. Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. Cras a viverra ipsum. Aenean ut consequat ex, vitae vulputate nunc. Vestibulum metus nisi, aliquam sed tincidunt sit amet, pretium et augue.</p>
                    <p>Mauris sem odio, rhoncus eget euismod sed, pellentesque sit amet felis. Praesent dictum eleifend dui et efficitur. Nunc non orci in neque sodales semper. Etiam euismod volutpat lorem, vestibulum malesuada justo aliquet eget. Nunc lacus ante, varius a euismod eu, finibus commodo erat. Curabitur tincidunt sit amet nunc id interdum. Aliquam augue nisi, venenatis vitae ex at, lobortis fringilla nibh. Proin placerat enim vitae egestas eleifend. Aliquam quis orci dignissim, posuere nibh a, eleifend augue. Cras quis metus nec tortor aliquet ullamcorper. Quisque varius porta metus, ut maximus dolor euismod nec. Suspendisse sit amet feugiat turpis.</p>
                    <span class="cite-2">Curabitur ut leo pulvinar, consectetur magna eu, feugiat purus. Morbi hendrerit lectus turpis, a porttitor velit imperdiet id.</span>
                    <p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor. Nullam scelerisque ante mauris, egestas commodo nisi gravida ultrices. Suspendisse dapibus feugiat tincidunt. Aliquam gravida quam at ipsum sagittis bibendum. </p>
                </div> --}}
                {!! $post->body !!}
            </div>
    
            <footer class="container-flex space-between">
                @include('partials.social-links', ['description' => $post->title])
                <div class="tags container-flex">
                    @foreach ($post->tags as $tag)
                        <span class="tag c-gris text-capitalize">#{{ $tag->name }}</span>
                    @endforeach
                </div>
            </footer>
            <div class="comments">
                <div class="divider"></div>
                <div id="disqus_thread"></div>
                @include('partials.disqus-script')
                                        
            </div><!-- .comments -->
        </div>
    </article>    
@endsection

@push('styles')
    <link rel="stylesheet" href="/css/twitter-bootstrap.css">
@endpush

@push('scripts')
    <script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/twitter-bootstrap.js"></script>
@endpush