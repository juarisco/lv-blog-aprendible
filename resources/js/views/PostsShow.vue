<template>
  <section class="post container">
    <!-- @include($post->viewType()) -->
    <div class="content-post">
      <!-- @include('posts.header') -->
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

      <h1>{{ post.title }}</h1>

      <div class="divider"></div>

      <div class="image-w-text" v-html="post.body"></div>

      <footer class="container-flex space-between">
        <!-- @include('partials.social-links', ['description' => $post->title]) -->
        <!-- @include('posts.tags') -->
      </footer>

      <div class="comments">
        <div class="divider"></div>
        <div id="disqus_thread"></div>
        <!-- @include('partials.disqus-script') -->
      </div>
      <!-- .comments -->
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      post: {
        owner: {},
        category: {}
      }
    };
  },
  mounted() {
    axios
      .get(`/api/blog/${this.$route.params.url}`)
      .then(res => {
        this.post = res.data;
      })
      .catch(err => {
        console.log(err.response.data);
      });
  }
};
</script>

<style>
</style>