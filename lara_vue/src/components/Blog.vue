<template>
    <div class="home">
        <navbar />
        <div class="blog-post">
            <div class="main-body blog-content blog-text">
                <div class="blog-title">
                    <h1>{{ title }}</h1>
                </div>
                <div class="blog-body blog-text">
                    <p>{{ blogpost }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import navbar from './Navigation.vue'
import axios from 'axios'

export default {
    components: {
        navbar,
    },
    data() {
        return {
            title: null,
            blogpost: null,
            baseUrl: "http://127.0.0.1:8000/api",
            fetchthis: {
                id: 0
            },
        }
    },
    mounted() {
        axios
            .get(
                this.baseUrl + '/readABlog',
                {
                    headers: {
                        "accept": "application/json"
                    },
                    data: this.fetchthis,
                },
            )
            .then(response => (
                this.title = response.data.title,
                this.blogpost = response.data.blogpost
            ));
    }
}
</script>
    
<style scoped>
.blog-post {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 40px;
}

.main-body {
    width: 70%;
    height: auto;
    padding-left: 10%;
    padding-right: 10%;
    padding-bottom: 10px;
    padding-top: 10px;
    background-color: rgb(226, 226, 138);
    border: 2px solid rgb(202, 202, 202);
    border-radius: 20px;
}

.blog-content {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.blog-text {
    text-align: center
}

.blog-body {
    font-size: 140%;
}
</style>