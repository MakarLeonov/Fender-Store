<script setup>

</script>

<template>
    <main>
        <!-- <div class="fon"></div> -->
        <div class="container">
            <router-view></router-view>
        </div>
    </main>
</template>
<script>
export default {
    
}
</script>
<style scoped>

    main {
        width: 100%;
    }
    .fon {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background-image: url("../assets/images/guiter-for-bg-repiat.jpg");
        background-repeat: repeat;
        background-size: 5% auto;
        opacity: .1; 
        z-index: 0;
    }

    .container {
        padding-top: 140px;
        width: 70%;
        margin: 0 auto;
        z-index: 10;
    }
   
</style>