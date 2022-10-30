<template>
  <div>
    <input
      type="text"
      class="search"
      placeholder="Search by Author"
      v-model="searchQuery"
    />
    <div class="post-excerpt" v-for="post in searchedAuthor" :key="post.id">
      <img v-if="post.image_path" class="image" :src="post.image_path" />

      <div style="padding-left: 1em">
        <router-link :to="{ name: 'show-post', params: { slug: post.slug } }">
          <h1 class="post-title">{{ post.title }}</h1>
        </router-link>
        <p class="date">{{ post.updated_at }} | {{ post.author_name }}</p>
        <div v-html="post.body" class="body"></div>
        <router-link :to="{ name: 'show-post', params: { slug: post.slug } }">
          <p
            style="
              color: #126cc7;
              text-align: right;
              text-decoration: underline;
            "
          >
            Read More
          </p></router-link
        >
      </div>
    </div>
  </div>
</template>

<script>
import { onMounted } from "vue"
import { ref, computed } from "vue"
import getPosts from "../api/getPosts"

export default {
  setup() {
    const { posts, getAllPosts } = getPosts()

    const searchQuery = ref("")

    const searchedAuthor = computed(() => {
      return posts.value.filter((post) => {
        return (
          post.author_name
            .toLowerCase()
            .indexOf(searchQuery.value.toLowerCase()) != -1
        )
      })
    })

    onMounted(getAllPosts)
    console.log(posts.value)

    return {
      posts,
      searchQuery,
      searchedAuthor,
    }
  },
}
</script>
<style scoped>
@media only screen and (max-width: 600px) {
  .post-excerpt {
    display: flex;
    flex-direction: column;
    padding-top: 2em;
  }
  .image {
    height: 94px;
    width: 112px;
    padding-left: 1em;
  }
}
.post-excerpt {
  display: flex;

  padding-top: 2em;
}
.body {
  font-family: "Roboto", sans-serif;
  font-weight: 400;
  font-size: 20px;
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  line-height: 23.44px;
  max-height: 48px;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}

.post-title {
  font-weight: 700;
  font-size: 24px;
}
.date {
  color: #656565;
  font-weight: 400;
  font-size: 16px;
}
.image {
  height: 94px;
  width: 112px;
}
.search {
  box-sizing: border-box;
  font-family: "Inter";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 24px;
  width: 100%;
  height: 45px;
  padding-left: 1em;
  background: #ffffff;
  border: 1px solid #aeb2c5;
  border-radius: 28px;
}
input::placeholder {
  font-family: "Inter";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 24px;
  color: #aeb2c5;
}
</style>
