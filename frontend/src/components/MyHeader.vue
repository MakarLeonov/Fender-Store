<template>
    <header>
        <img src="../assets/images/white_logo.png" v-if="this.$route.path === '/'" alt="fender logo">
        <img src="../assets/images/broun_logo.png" v-else alt="fender logo" @click="this.$router.push('/')">
        <nav :style="{'color': '#F2EEE9'}">
            <router-link to="/" :style="{'color': this.$route.path === '/' ? '#F2EEE9' : '#323232FA'}">
                Main page
                <span class="material-symbols-outlined">home</span>
            </router-link>
            <router-link to="/catalog" :style="{'color': this.$route.path === '/' ? '#F2EEE9' : '#323232FA'}">
                Catalog
                <span class="material-symbols-outlined">shopping_bag</span>
            </router-link>
            <router-link to="/cart" :style="{'color': this.$route.path === '/' ? '#F2EEE9' : '#323232FA'}">
                My cart
                <span class="material-symbols-outlined">shopping_cart</span>
            </router-link>
            <router-link to="/login" :style="{'color': this.$route.path === '/' ? '#F2EEE9' : '#323232FA'}">
                Log in
                <span class="material-symbols-outlined">person</span>
            </router-link>
        </nav>
    </header>
</template>

<style scoped>
header {
        position: absolute;
        height: 140px;
        width: 100%;
        /* background: rgba(0, 0, 0, 0.10); */
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 70px 0 25px;
        z-index: 5;

    }

    img {
        width: 151.976px;
        height: 100px;
        cursor: pointer;
    }
    
    nav {
        display: flex;
        gap: 60px;
        padding-bottom: 40px;
    }

    nav > a {
        text-align: center;
        font-size: 24px;
        font-family: 'Raleway', sans-serif;
        font-weight: 600;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    a > span {
        font-size: 25px;
        font-weight: 500;
    }
</style>