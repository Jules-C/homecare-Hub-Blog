<template>
  <div>
    <h1>Create New Post</h1>
    <h2 v-if="error" style="color: red">{{ error }}</h2>
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
      <div style="margin-bottom: 2em">
        <label class="block">
          <input
            v-model="createdPost.author_name"
            style="width: 100%"
            type="text"
            class="form-input mt-1 block w-full"
            placeholder="Author name"
          />
        </label>
      </div>
      <div style="margin-bottom: 2em">
        <label class="block">
          <input
            v-model="createdPost.title"
            style="width: 100%"
            type="text"
            class="form-input mt-1 block w-full"
            placeholder="Blog Post Title"
          />
        </label>
      </div>
      <div class="grid grid-cols-1 gap-6">
        <label class="block">
          <input
            v-model="createdPost.image_path"
            style="width: 100%; margin-bottom: 2em"
            type="url"
            multiple
            class="form-input mt-1 block w-full"
            placeholder="Image Url for Post"
          />
        </label>

        <label class="block">
          <textarea
            v-model="createdPost.body"
            style="width: 100%"
            class="form-textarea mt-1 block w-full h-24"
            rows="10"
            placeholder="Start typing"
          ></textarea>
        </label>
      </div>
    </div>
    <div style="display: flex; justify-content: flex-end; margin-top: 1em">
      <button
        class="new-post-button"
        @click="savePost(createdPost.id)"
        type="button"
      >
        Create
      </button>
    </div>
  </div>
</template>

<script>
import { onMounted } from "vue"

import getPosts from "../api/getPosts"

export default {
  setup() {
    const { createPost, createdPost, editPost, error } = getPosts()

    const slugify = (str) =>
      str
        .toLowerCase()
        .trim()
        .replace(/[^\w\s-]/g, "")
        .replace(/[\s_-]+/g, "-")
        .replace(/^-+|-+$/g, "")
    //
    const savePost = async (id) => {
      console.log("patch data:", createdPost.value)
      if (!createdPost.value.author_name) {
        createdPost.value.author_name = "Anonymous"
      }
      if (!createdPost.value.image_path) {
        createdPost.value.image_path =
          "https://www.thecoderpedia.com/wp-content/uploads/2020/06/Programming-Memes-Programmer-while-sleeping.jpg"
      }
      createdPost.value.slug = slugify(createdPost.value.title)
      console.log("id of post to edit", id)
      await editPost(id)
      if (!error.value) {
        alert("Post Created!")
      }
    }

    onMounted(createPost)

    return {
      savePost,
      error,
      slugify,
      createdPost,
    }
  },
}
</script>
<style scoped>
h1 {
  font-family: "Roboto", sans-serif;
  font-style: normal;
  font-weight: 700;
  font-size: 32px;
  line-height: 38px;
  margin-bottom: 1em;
}

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
  flex-direction: row;
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
  font-family: "Roboto", sans-serif;
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
  font-family: "Inter" sans-serif;
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 24px;
  color: #aeb2c5;
}
.new-post-button {
  background: #126cc7;
  border-radius: 6px;
  width: 185px;
  height: 46px;
  font-family: "Roboto" sans-serif;
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 23px;
  color: #ffffff;
}
</style>
