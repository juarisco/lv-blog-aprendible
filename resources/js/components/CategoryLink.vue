<template>
  <router-link
    :to="{name: 'category_posts', 
    params: {
        category: category.url
    }}"
  >{{ category.name }}</router-link>
</template>

<script>
export default {
  props: ["category"]
};
</script>

<style>
</style>