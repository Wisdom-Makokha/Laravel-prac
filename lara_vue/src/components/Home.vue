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
      blogs: [],
      errors: []
    }
  },
  mounted() {
    axios.get(this.baseUrl)
      .then(response => (this.blogs = response.data))
      .catch(error => {this.errors.push(error)});
  }
}

</script>

<style scoped>
#center-main-layout {
  display: flex;
  justify-content: center;
}

#main-layout {
  min-width: 350px;
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
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: center;
  z-index: -1;
}

.blog-container {
  display: flex;
  flex-direction: column;
  align-items: start;
  height: fit-content;
  width: 90%;
  margin-bottom: 3px;
  background-color: rgba(220, 220, 220, 0.2);
  white-space: normal;
  border-bottom: 1px solid black;
  border-radius: 10px;
  transition: all 1s ease-in-out;
  position: relative;
  z-index: 1;
}

.blog-container:hover{
  background-color: rgba(20, 20, 20, 0.5);

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
  height:fit-content
}

.blog-main-text{
  height: 75px;
  overflow: clip;
  text-overflow: ellipsis
}
</style>