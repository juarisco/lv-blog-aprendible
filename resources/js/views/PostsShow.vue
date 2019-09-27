<template>
  <section class="post container">
    <!-- @include($post->viewType()) -->
    <div class="content-post">
      <!-- @include('posts.header') -->
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
      post: {}
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