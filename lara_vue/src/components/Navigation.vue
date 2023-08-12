<template>
    <div class="navigation">
        <div class="navigation-container">
            <div class="logo">
                <router-link class="home route" to="/">Home</router-link>
            </div>
            <div class="other-routes">
                <!-- <router-link class="blogs route">Blogs</router-link> -->
                <router-link class="about route" to="">About</router-link>
            </div>
        </div>
    </div>
</template>

<script>

</script>

<style scoped>
.navigation-container {
    height: 60px;
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    background-color: rgb(2, 82, 71);
    opacity: 0.8;
    position: sticky;
}

.route {
    text-decoration: none;
    margin: 20px;
    font-size: 140%;
    color: black;
    transition: color 0.5s ease;
}

.route:hover,
.route:focus {
    color: white;
}

.home {
    margin-left: 100px;
}

.about {
    margin-right: 80px;
}
</style>