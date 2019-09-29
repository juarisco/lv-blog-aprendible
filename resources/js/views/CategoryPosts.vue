<template>
  <paginator :url="`/api/categories/${this.category}`" component-name="posts-list" />
</template>

<script>
export default {
  props: ["category"]
};
</script>

<style>
</style>