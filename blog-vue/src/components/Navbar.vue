<template>
  <nav class="nav">
    <div class="toolbar">
      <a href="/" aria-current="page">Home</a>
      <router-link :to="{ name: 'new-post' }">
        <button class="new-post-button" type="button">
          New Post
        </button></router-link
      >
    </div>
  </nav>
</template>

<style scoped>
.nav {
  background: #ffffff;
  box-shadow: 0px 5px 11px rgba(0, 0, 0, 0.1);
}
.toolbar {
  padding: 1em;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 24px;
  line-height: 28px;
  display: flex;
  justify-content: space-between;
  align-items: center;
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
}
@media only screen and (max-width: 600px) {
  .new-post-button {
    width: 100px;
  }
}
</style>
