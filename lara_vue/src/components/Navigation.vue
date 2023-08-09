<template>
    <div class="navigation">
        <div class="navigation-container">
            <div class="logo">
                <a class="home route" href="">Home</a>
            </div>
            <div class="other-routes">
                <a class="about route" href="">About</a>
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
    background-color: rgb(123, 123, 7);
    opacity: 0.8;
    position: sticky;
}

.route{
    text-decoration: none;
    margin: 20px;
    font-size: 140%;
    color: black;
    transition: color 1s ease;
}

.route:hover, .route:focus{
    color: white;
}
</style>