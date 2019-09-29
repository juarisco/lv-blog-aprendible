<template>
  <section class="posts container">
    <!-- @if (isset($title))
                        <h3>{{ $title }}</h3>
    @endif-->

    <posts-list-item v-for="post in items" :post="post" :key="post.id" />

    <article class="post" v-if="!items.length">
      <div class="content-post">
        <h1>Not any posts yet</h1>
      </div>
    </article>
  </section>
  <!-- {{ $posts->appends(request()->all())->links() }} -->
</template>

<script>
export default {
  props: ["items"]
};
</script>

<style>
</style>