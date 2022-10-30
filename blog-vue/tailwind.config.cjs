/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "blog-vue/src/pages/**/*.{html,js}",
    "./pages/**/*.{html,js}",
    "./components/**/*.{html,js},",
    "src/App.vue",
    "/src/components/Navbar.vue",
  ],
  theme: {
    // container: {
    //   center: true,
    //   padding: "2rem",
    // },
    extend: {},
  },
  plugins: [require("@tailwindcss/forms")],
}
