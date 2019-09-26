<template>
  <div>
    <section class="posts container">
      <!-- @if (isset($title))
                        <h3>{{ $title }}</h3>
      @endif-->

      <!-- @forelse ($posts as $post) -->
      <article class="post">
        <!-- @include($post->viewType('home')) -->

        <div class="content-post">
          <!-- @include('posts.header') -->

          <!-- <h1>{{ $post->title }}</h1> -->
          Home
          <div class="divider"></div>

          <!-- <p>{{ $post->excerpt }}.</p> -->

          <footer class="container-flex space-between">
            <div class="read-more">
              <!-- <a href="{{ route('posts.show',$post) }}" class="text-uppercase c-green">@lang('read more')</a> -->
            </div>

            <!-- @include('posts.tags') -->
          </footer>
        </div>
      </article>
      <!-- @empty -->
      <article class="post">
        <div class="content-post">
          <h1>@lang('Not any posts yet')</h1>
        </div>
      </article>
      <!-- @endforelse -->
    </section>
    <!-- fin del div.posts.container -->
    <!-- {{ $posts->appends(request()->all())->links() }} -->
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>

<style>
</style>