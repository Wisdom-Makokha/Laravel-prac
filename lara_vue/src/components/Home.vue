<template>
    <div class="home">
        <Navigationbar />
        <div class="blog-post">
            <div class="main-body blog-content blog-text">
            <div class="blog-title">
                <h1>My title</h1>
            </div>
            <div class="blog-body blog-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Sit amet justo donec enim diam vulputate ut pharetra sit. Urna porttitor rhoncus
                    dolor purus non enim. Feugiat vivamus at augue eget arcu dictum varius. Arcu risus quis varius quam
                    quisque id diam vel quam. Sodales neque sodales ut etiam sit. Arcu cursus euismod quis viverra nibh cras
                    pulvinar mattis. Interdum posuere lorem ipsum dolor sit amet. Elit ut aliquam purus sit amet luctus
                    venenatis lectus magna. Vel risus commodo viverra maecenas accumsan lacus vel facilisis. Risus nullam
                    eget felis eget. Iaculis at erat pellentesque adipiscing. At volutpat diam ut venenatis tellus in metus
                    vulputate eu. Blandit turpis cursus in hac habitasse platea dictumst quisque sagittis. Orci nulla
                    pellentesque dignissim enim sit amet. In tellus integer feugiat scelerisque varius morbi enim. Lectus
                    nulla at volutpat diam ut venenatis. Egestas erat imperdiet sed euismod nisi porta lorem.<br><br>

                    Arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc. Sit amet risus nullam eget felis eget
                    nunc lobortis. Amet tellus cras adipiscing enim eu turpis. Viverra suspendisse potenti nullam ac tortor
                    vitae. Vitae ultricies leo integer malesuada nunc. Ac tortor dignissim convallis aenean et tortor at
                    risus viverra. Morbi non arcu risus quis varius quam quisque id. Vitae justo eget magna fermentum. Enim
                    praesent elementum facilisis leo vel fringilla est ullamcorper. Aliquet risus feugiat in ante metus
                    dictum at tempor commodo.<br><br>

                    Pellentesque diam volutpat commodo sed egestas egestas fringilla. Purus non enim praesent elementum
                    facilisis leo vel. Nullam eget felis eget nunc lobortis mattis aliquam faucibus purus. Vulputate sapien
                    nec sagittis aliquam malesuada bibendum arcu vitae. Vehicula ipsum a arcu cursus vitae congue mauris.
                    Nullam vehicula ipsum a arcu. Vitae ultricies leo integer malesuada nunc vel risus commodo viverra.
                    Habitasse platea dictumst quisque sagittis. Eleifend donec pretium vulputate sapien nec. Nunc mattis
                    enim ut tellus elementum sagittis vitae et. Faucibus scelerisque eleifend donec pretium vulputate.
                    Elementum pulvinar etiam non quam lacus suspendisse. Elit duis tristique sollicitudin nibh sit amet
                    commodo. Cursus turpis massa tincidunt dui. Maecenas pharetra convallis posuere morbi leo urna molestie.
                Neque aliquam vestibulum morbi blandit cursus risus. Turpis massa sed elementum tempus egestas sed sed
                risus. In iaculis nunc sed augue lacus.<br><br>

                Eleifend mi in nulla posuere sollicitudin aliquam ultrices. Pulvinar pellentesque habitant morbi
                tristique senectus et netus et. Ultricies mi quis hendrerit dolor magna eget. Eget sit amet tellus cras
                adipiscing enim. Ultricies mi quis hendrerit dolor magna eget est. Cursus sit amet dictum sit amet
                justo. Nulla facilisi cras fermentum odio eu feugiat pretium nibh. Purus sit amet volutpat consequat
                mauris nunc congue nisi vitae. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec. Purus
                semper eget duis at. Dui vivamus arcu felis bibendum ut tristique et egestas quis. Ornare quam viverra
                orci sagittis eu volutpat odio. Sem integer vitae justo eget magna fermentum iaculis. Tellus at urna
                condimentum mattis pellentesque. Dignissim convallis aenean et tortor at risus. Et malesuada fames ac
                turpis. Orci eu lobortis elementum nibh tellus.<br><br>

                Nec sagittis aliquam malesuada bibendum arcu vitae. A lacus vestibulum sed arcu non odio euismod
                lacinia. Lectus mauris ultrices eros in cursus turpis. Diam vulputate ut pharetra sit amet aliquam id
                diam. Duis ut diam quam nulla porttitor massa id neque aliquam. Fringilla est ullamcorper eget nulla
                facilisi etiam dignissim diam. Morbi tincidunt ornare massa eget egestas purus viverra accumsan. Enim
                praesent elementum facilisis leo. Eu mi bibendum neque egestas congue quisque egestas diam. Ut pharetra
                sit amet aliquam id diam maecenas ultricies mi. Aliquet eget sit amet tellus cras adipiscing enim. Nisi
                quis eleifend quam adipiscing vitae proin sagittis. Ac feugiat sed lectus vestibulum mattis ullamcorper
                velit sed ullamcorper. Sagittis orci a scelerisque purus semper. Sit amet risus nullam eget felis eget
                nunc lobortis mattis. Cursus eget nunc scelerisque viverra mauris in aliquam. Tincidunt id aliquet risus
                feugiat in ante metus dictum at. Malesuada fames ac turpis egestas.</p>
        </div>
    </div>
        </div>
</div></template>

<script>
import Navigationbar from './Navigation.vue'

export default {
    components: {
        Navigationbar,
    }
}
</script>
    
<style scoped>
.blog-post{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 50px;
}
.main-body{
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

.blog-content{
    display: flex;
    flex-direction: column;
    align-items: center;
}

.blog-text{
    text-align: center
}

.blog-body{
    font-size: 140%;
}
</style>