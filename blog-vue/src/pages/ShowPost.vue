<template>
  <div>
    <div v-if="!edit">
      <button class="back" @click="$router.back()">Back</button>
      <h1>{{ postbySlug.title }}</h1>
      <caption class="date">
        {{
          postbySlug.updated_at
        }}
        |
        {{
          postbySlug.author_name
        }}
      </caption>
      <img
        v-if="postbySlug.image_path"
        class="image"
        :src="postbySlug.image_path"
      />
      <div v-html="postbySlug.body" class="body"></div>
      <div style="display: flex; justify-content: center; padding: 2em">
        <button class="edit" @click="edit = true">Edit</button>
      </div>
      <hr class="line" />
      <div>
        <h2 style="margin-bottom: 2.5em" v-if="getCommentsError == 404">
          Be the first to write a comment!
        </h2>
        <div v-else></div>

        <div class="post-excerpt" v-for="txt in comments" :key="txt.id">
          <div v-html="txt.text" class="body"></div>
          <caption style="margin-bottom: 2.5em" class="date">
            <p class="date">{{ txt.updated_at }}</p>
          </caption>
        </div>

        <label class="block">
          <textarea
            v-model="newComment"
            style="width: 100%; border-color: #aeb2c5"
            class="form-textarea mt-1 block w-full h-24"
            rows="4"
            placeholder="Enter some thoughtful comment."
          ></textarea>
        </label>

        <div style="display: flex; justify-content: flex-end; margin-top: 1em">
          <button class="new-post-button" @click="saveComment" type="button">
            Add Comment
          </button>
        </div>
      </div>
    </div>
    <div v-else>
      <div
        style="
          display: flex;
          justify-content: flex-end;
          flex-direction: column;
          padding: 2em 0 2em;
        "
      >
        <h1>Edit Post</h1>
        <h2 v-if="error" style="color: red">{{ error }}</h2>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
          <div style="margin-bottom: 2em">
            <label class="block">
              <input
                v-model="postbySlug.author_name"
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
                v-model="postbySlug.title"
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
                v-model="postbySlug.image_path"
                style="width: 100%; margin-bottom: 2em"
                type="url"
                multiple
                class="form-input mt-1 block w-full"
                placeholder="Image Url for Post"
              />
            </label>

            <label class="block">
              <textarea
                v-model="postbySlug.body"
                style="width: 100%"
                class="form-textarea mt-1 block w-full h-24"
                rows="10"
                placeholder="Start typing"
              ></textarea>
            </label>
          </div>
        </div>
        <div style="display: flex; margin-top: 1em; justify-content: flex-end">
          <button
            class="new-post-button"
            @click="updatePost(postbySlug.id)"
            type="button"
          >
            Update Post
          </button>
        </div>
        <div style="display: flex; justify-content: flex-end; margin-top: 1em">
          <button
            class="delete-button"
            @click="deletePost(postbySlug.id)"
            type="button"
          >
            Delete Post
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import getPosts from "../api/getPosts"
import { onMounted, ref } from "vue"
import router from "../router"

export default {
  name: "show-post",
  props: {
    slug: {
      required: true,
      type: String,
    },
  },

  setup(props) {
    const {
      postbySlug,
      getPostBySlug,
      patchPost,
      error,
      getComments,
      comments,
      storeComment,
      getCommentsError,
      destroyPost,
      destroyComments,
    } = getPosts()
    const edit = ref(false)
    const newComment = ref("")
    const slugify = (str) =>
      str
        .toLowerCase()
        .trim()
        .replace(/[^\w\s-]/g, "")
        .replace(/[\s_-]+/g, "-")
        .replace(/^-+|-+$/g, "")
    const updatePost = async (id) => {
      if (!postbySlug.value.author_name) {
        postbySlug.value.author_name = "Anonymous"
      }
      if (!postbySlug.value.image_path) {
        postbySlug.value.image_path =
          "https://www.thecoderpedia.com/wp-content/uploads/2020/06/Programming-Memes-Programmer-while-sleeping.jpg"
      }
      postbySlug.value.slug = slugify(postbySlug.value.title)
      console.log("id of post to edit", id)
      console.log("patch data:", postbySlug.value)
      await patchPost(id)
      console.log("error", error.value)
      if (!error.value) {
        alert("Post Updated!")
        edit.value = false
      }
    }
    const saveComment = async () => {
      console.log("saved comment", newComment.value)
      let requestData = {
        post_id: postbySlug.value.id,
        text: newComment.value,
      }

      //create in database
      await storeComment(requestData)
      getComments(postbySlug.value.id)
      newComment.value = ""
      getComments(postbySlug.value.id)
    }

    const deletePost = async (id) => {
      if (!window.confirm("Delete this post?")) {
        return
      }

      await destroyComments().then(() => {
        destroyPost(id)
        router.back()
      })
    }

    onMounted(() => {
      try {
        getPostBySlug(props.slug).then(() => {
          getComments(postbySlug.value.id)
        })
      } catch (e) {
        console.log(e)
      }
    })
    return {
      getPostBySlug,
      postbySlug,
      edit,
      error,
      updatePost,
      getComments,
      comments,
      storeComment,
      newComment,
      saveComment,
      getCommentsError,
      deletePost,
    }
  },
}
</script>

<style scoped>
@media only screen and (max-width: 600px) {
  .back {
    margin-top: -1.75em !important;
    margin-left: 1em !important;
  }
  .image {
    height: auto;
    max-height: 200px;
    padding-left: 1em;
  }
  .new-post-button {
    width: 150px;
  }
}

.body {
  font-family: "Roboto", sans-serif;
  font-weight: 400;
  font-size: 20px;
}

h1 {
  font-weight: 700;
  font-size: 32px;
  line-height: 38px;
}
h2 {
  font-weight: 600;
  font-size: 24px;
  line-height: 38px;
}
.date {
  color: #656565;
  font-weight: 400;
  font-size: 16px;
  display: flex;
}
.image {
  max-height: 262px;
  width: auto;
}
button {
  color: #126cc7;
  font-family: "Roboto", sans-serif;
  font-weight: 400;
  font-size: 20px;
  text-decoration: underline;
}
.back {
  position: absolute;
  left: 0;
  margin-top: -1em;
  margin-left: 2em;
}
.edit {
  text-align: center;
}
hr.line {
  border-top: 1px solid #aeb2c5;
  padding-bottom: 2em;
}
.new-post-button {
  background: #126cc7;
  border-radius: 6px;
  width: 185px;
  height: 46px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 23px;
  color: #ffffff;
  text-decoration: none;
}
.delete-button {
  background: #ff2200;
  border-radius: 6px;
  width: 185px;
  height: 46px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 23px;
  color: #ffffff;
  text-decoration: none;
}
</style>
