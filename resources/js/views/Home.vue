<template>
  <section class="posts container">
    <!-- @if (isset($title))
                        <h3>{{ $title }}</h3>
    @endif-->

    <article v-for="post in posts" class="post">
      <!-- @include($post->viewType('home')) -->

      <div class="content-post">
        <header class="container-flex space-between">
          <div class="date">
            <span class="c-gris">{{ post.published_date }} / {{ post.owner.name }}</span>
          </div>
          <!-- @if ($post->category) -->
          <div class="post-category">
            <span class="category">
              <!-- <a href="{{ route('categories.show', $post->category) }}"> -->
              <!-- {{ $post->category->name }} -->
              <!-- </a> -->
              <a href="#">{{ post.category.name }}</a>
            </span>
          </div>
          <!-- @endif -->
        </header>

        <h1 v-text="post.title"></h1>
        <div class="divider"></div>

        <p v-html="post.excerpt"></p>

        <footer class="container-flex space-between">
          <div class="read-more">
            <a href="#" class="text-uppercase c-green">read more</a>
          </div>

          <!-- @include('posts.tags') -->
          <div class="tags container-flex">
            <span class="tag c-gris text-capitalize" v-for="tag in post.tags">
              <a href="#">#{{ tag.name }}</a>
            </span>
          </div>
        </footer>
      </div>
    </article>

    <article class="post" v-if="!posts.length">
      <div class="content-post">
        <h1>Not any posts yet</h1>
      </div>
    </article>
  </section>
  <!-- {{ $posts->appends(request()->all())->links() }} -->
</template>

<script>
export default {
  data() {
    return {
      posts: []
    };
  },
  mounted() {
    axios
      .get("/api/posts")
      .then(res => {
        this.posts = res.data.data;
      })
      .catch(err => {
        console.log(err);
      });
  }
};
</script>

<style>
</style>