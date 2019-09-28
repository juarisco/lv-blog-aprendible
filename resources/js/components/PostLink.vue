<template>
  <router-link
    :to="{
        name: 'posts_show', 
        params: {
            url: post.url
        }
    }"
  >
    <slot />
  </router-link>
</template>

<script>
export default {
  props: ["post"]
};
</script>

<style>
</style>