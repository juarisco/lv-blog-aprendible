<template>
  <router-link :to="{name: 'tags_posts', params: {tag: tag.url}}">#{{ tag.name }}</router-link>
</template>

<script>
export default {
  props: ["tag"]
};
</script>

<style>
</style>