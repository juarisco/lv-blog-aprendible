<template>
  <posts-list :posts="posts"></posts-list>
</template>

<script>
export default {
  props: ["tag"],
  data() {
    return {
      posts: []
    };
  },
  mounted() {
    axios
      .get(`/api/tags/${this.tag}`)
      .then(res => {
        this.posts = res.data.data;
      })
      .catch(err => {
        console.log(err);
      });
  }
  // beforeRouteUpdate(to, from, next) {
  //   this.tag = to.params.tag;
  //   this.getPosts();

  //   next();
  // },
  // methods: {
  //   getPosts() {
  //     axios
  //       .get(`/api/tags/${this.tag}`)
  //       .then(res => {
  //         this.posts = res.data.data;
  //       })
  //       .catch(err => {
  //         console.log(err);
  //       });
  //   }
  // }
  // watch: {
  //   tag() {
  //     this.getPosts();
  //   }
  // }
};
</script>

<style>
</style>