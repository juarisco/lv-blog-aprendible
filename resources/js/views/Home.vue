<template>
  <div>
    <posts-list :posts="posts"></posts-list>

    <div class="pagination" v-if="pagination.last_page > 1">
      <ul class="list-unstyled container-flex space-center">
        <li v-for="page in pagination.last_page" :key="page.id">
          <router-link
            :class="getActiveClass(page)"
            :to="{
              name: 'home', 
              query:{
                page:page
              }
            }"
          >{{ page }}</router-link>
        </li>
      </ul>
    </div>
    <pre>{{ pagination }}</pre>
  </div>
</template>

<script>
export default {
  data() {
    return {
      posts: [],
      pagination: {}
    };
  },
  mounted() {
    axios
      .get(`/api/posts?page=${this.$route.query.page || 1}`)
      .then(res => {
        this.pagination = res.data;
        this.posts = res.data.data;
        delete this.pagination.data;
      })
      .catch(err => {
        console.log(err);
      });
  },
  methods: {
    getActiveClass(page) {
      return [!this.$route.query.page && page == 1 ? "active" : ""];
    }
  }
};
</script>

<style lang="scss">
.pagination {
  a.active {
    background-color: #1abc9c;
    color: white;
  }
}
</style>