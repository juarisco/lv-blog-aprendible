<template>
  <div>
    <header class="container-flex space-between">
      <div class="date">
        <span class="c-gris">{{ post.published_date }} / {{ post.owner.name }}</span>
      </div>
      <!-- @if ($post->category) -->
      <div class="post-category">
        <span class="category">
          <router-link
            :to="{name: 'category_posts', params: {category: post.category.url }}"
          >{{ post.category.name }}</router-link>
        </span>
      </div>
      <!-- @endif -->
    </header>
    <h1 v-text="post.title"></h1>
    <div class="divider"></div>
  </div>
</template>

<script>
export default {
  props: ["post"]
};
</script>

<style>
</style>