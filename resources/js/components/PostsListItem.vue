<template>
  <article class="post">
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
          <span class="tag c-gris text-capitalize" v-for="tag in post.tags" :key="tag.id">
            <router-link :to="{name: 'tags_posts', params: {tag: tag.url}}">#{{ tag.name }}</router-link>
          </span>
        </div>
      </footer>
    </div>
  </article>
</template>

<script>
export default {
  props: ["post"]
};
</script>

<style>
</style>