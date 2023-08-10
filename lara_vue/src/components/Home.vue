<template>
  <div id="home">
    <navigationbar />
    <div id="center-main-layout">
      <div id="main-layout">
        <div id="home-appearance"></div>
        <div id="home-container">
          <div class="blog-container" v-for="blog in blogs" :key="blog.id">
            <div class="blog-header">
              <div class="blog-title blog-header-item">
                <h2>{{ blog.title }}</h2>
              </div>
              <div class="blog-date blog-header-item">
                <p>{{ blog.dateposted }}</p>
              </div>
            </div>
            <div class="blog-body">
              <p class="blog-main-text">{{ blog.blogpost }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import navigationbar from './Navigation.vue'
import axios from 'axios'

export default {
  components: {
    navigationbar,
  },
  data() {
    return {
      baseUrl: 'http://127.0.0.1:8000/api/readAllBlogs',
      blogs: null
    }
  },
  mounted() {
    axios.get(this.baseUrl)
      .then(response => (this.blogs = response.data));
  }
}

</script>

<style scoped>
#center-main-layout {
  display: flex;
  justify-content: center;
}

#main-layout {
  min-height: 800px;
  height: auto;
  width: 95%;
  margin-top: 20px;
  position: relative;
  z-index: -4;
}

#home-appearance {
  height: 100%;
  width: 100%;
  background-color: white;
  opacity: 0.5;
  position: absolute;
  z-index: -2;
  border-radius: 20px;
}

#home-container {
  width: 100%;
  height: 100%;
  padding-left: 10px;
  padding-right: 10px;
  padding-top: 20px;
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: center;
  z-index: 2;
}

.blog-container {
  display: flex;
  flex-direction: column;
  align-items: start;
  height: 150px;
  width: 90%;
  margin-bottom: 3px;
  background-color: null;
  white-space: normal;
  border-bottom: 1px solid black;
  border-radius: 10px;
  transition: all 1s ease-in-out;
}

.blog-container:hover .blog-container:focus {
  background-color: rgb(209, 207, 207);

}

.blog-header {
  display: flex;
  flex-direction: row;
  align-items: center;
}

.blog-header-item {
  padding-top: 10px;
  padding-left: 20px;
  padding-right: 10px;
}

.blog-body {
  padding-left: 20px;
  padding-right: 10px;
  overflow: hidden;
}
</style>