import { createRouter, createWebHistory } from "vue-router"
import Home from "../pages/Home.vue"
import CreatePost from "../pages/CreatePost.vue"
import ShowPost from "../pages/ShowPost.vue"
const routes = [
  {
    path: "/",
    name: "home",
    component: Home,
  },
  {
    path: "/new-post",
    name: "new-post",
    component: CreatePost,
  }, // dynamic segments start with a colon
  { path: "/posts/:slug", name: "show-post", component: ShowPost, props: true },
]
const router = createRouter({
  history: createWebHistory(),
  routes,
})
export default router
