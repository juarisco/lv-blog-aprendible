<template>
  <posts-list :posts="posts"></posts-list>
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
      .get(`/api/tags/${this.$route.params.tag}`)
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