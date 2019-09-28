<template>
  <posts-list :posts="posts"></posts-list>
</template>

<script>
export default {
  props: ["category"],
  data() {
    return {
      posts: []
    };
  },
  mounted() {
    axios
      .get(`/api/categories/${this.category}`)
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