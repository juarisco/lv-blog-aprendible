<template>
  <section class="post container">
    <!-- @include($post->viewType()) -->
    <div class="content-post">
      <post-header :post="post"></post-header>

      <div class="image-w-text" v-html="post.body"></div>

      <footer class="container-flex space-between">
        <social-links :description="post.title" />

        <div class="tags container-flex">
          <span class="tag c-gris text-capitalize" v-for="tag in post.tags" :key="tag.id">
            <tag-link :tag="tag" />
          </span>
        </div>
      </footer>

      <div class="comments">
        <div class="divider"></div>
        <disqus-comments />
      </div>
      <!-- .comments -->
    </div>
  </section>
</template>

<script>
export default {
  props: ["url"],
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
      .get(`/api/blog/${this.url}`)
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