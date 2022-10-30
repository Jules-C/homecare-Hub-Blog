import { ref } from "vue"
import axios from "axios"
import { format } from "date-fns"
export default function getPosts() {
  const posts = ref([])
  const postbySlug = ref({})
  //const storeComment = ref({})
  const comments = ref([])
  const createdPost = ref({})
  const error = ref("")
  const errors = ref("")
  const getCommentsError = ref("")
  console.log("call get all posts from api here")

  //change the updated_at timestamp to frontend format
  function convertTime(value) {
    const dateTime = value
    let datePart = dateTime.split("T")[0]
    let formated = format(new Date(datePart), "MMM dd, yyyy")
    return formated
  }

  const getAllPosts = async () => {
    let response = await axios.get("/api/posts")
    console.log("getAllPosts", response.data.data)
    let data = response.data.data
    let cleanPosts = []
    data.forEach((post) => {
      post.updated_at = convertTime(post.updated_at)
      cleanPosts.push(post)
    })
    posts.value = cleanPosts
  }

  const getPostBySlug = async (slug) => {
    let res = await axios.get(`/api/posts/${slug}`)
    let dataSlug = res.data.data
    dataSlug.updated_at = convertTime(dataSlug.updated_at)
    console.log("after convert", dataSlug)
    postbySlug.value = dataSlug
  }

  const createPost = async () => {
    //create post api call
    let response = await axios.post("/api/posts")
    console.log("create post res", response.data.data)
    createdPost.value = response.data.data
    //return response.data
  }

  const destroyPost = async (id) => {
    await axios.delete(`/api/posts/${id}`)
  }

  const destroyComments = async () => {
    comments.value.forEach((comment) => {
      try {
        axios.delete(`/api/comments/${comment.id}`)
      } catch (e) {
        console.log(e)
      }
    })
  }

  const storeComment = async (data) => {
    errors.value = ""
    try {
      let res = await axios.post("/api/comments", data)
      console.log("new comment", res.data.data)
    } catch (e) {
      console.log(e)
    }
  }
  const getComments = async (post_id) => {
    try {
      let response = await axios.get(`/api/comments/${post_id}`)
      console.log("get comments by post id", response)
      let data = response.data.data
      if (data.id || data.length > 1) {
        let cleanComments = []
        data.forEach((comment) => {
          if (comment.post_id === post_id) {
            comment.updated_at = convertTime(comment.updated_at)
            cleanComments.push(comment)
            comments.value = cleanComments
          }
          //data.updated_at = convertTime(data.updated_at)
        })

        console.log("update comments by post id", cleanComments)
      }
    } catch (e) {
      console.log("get comments error", e)
      getCommentsError.value = e.response.status
    }
  }

  const editPost = async (id) => {
    try {
      await axios.patch(`/api/posts/${id}`, createdPost.value)
    } catch (e) {
      error.value = e.response.data.message
      console.log("edit post err", e.response.data.message)
    }
  }
  const patchPost = async (id) => {
    try {
      await axios.patch(`/api/posts/${id}`, postbySlug.value)
    } catch (e) {
      error.value = e.response.data.message
      console.log("patch post err", e.response.data.message)
    }
  }

  return {
    posts,
    getAllPosts,
    postbySlug,
    getPostBySlug,
    patchPost,
    storeComment,
    getComments,
    comments,
    createPost,
    createdPost,
    editPost,
    error,
    getCommentsError,
    destroyPost,
    destroyComments,
  }
}
