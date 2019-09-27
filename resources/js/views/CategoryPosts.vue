<template>
  <section class="posts container">
    <!-- @if (isset($title))
                        <h3>{{ $title }}</h3>
    @endif-->

    <article v-for="post in posts" class="post">
      <!-- @include($post->viewType('home')) -->

      <div class="content-post">
        <post-header :post="post"></post-header>

        <p v-html="post.excerpt"></p>

        <footer class="container-flex space-between">
          <div class="read-more">
            <router-link
              :to="{name: 'posts_show', params: {url: post.url}}"
              class="text-uppercase c-green"
            >read more</router-link>
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
      .get(`/api/categories/${this.$route.params.category}`)
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