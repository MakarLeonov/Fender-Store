<script setup>
import { ref } from 'vue'
const dropdownActive = ref(false)
</script>

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
            <!-- <router-link to="/user/favourites" :style="{'color': this.$route.path === '/' ? '#F2EEE9' : '#323232FA'}">
                Favourites
                <span class="material-symbols-outlined">star</span>
            </router-link> -->
            <router-link to="/cart" :style="{'color': this.$route.path === '/' ? '#F2EEE9' : '#323232FA'}">
                My cart
                <span class="material-symbols-outlined">shopping_cart</span>
            </router-link>
            <router-link to="/login" :style="{'color': this.$route.path === '/' ? '#F2EEE9' : '#323232FA'}">
                Log in
                <span class="material-symbols-outlined">person</span>
            </router-link>
            <router-link to="#" :style="{'color': this.$route.path === '/' ? '#F2EEE9' : '#323232FA'}" @click="dropdownActive = !dropdownActive">
                User
                <span class="material-symbols-outlined">person</span>
                <Transition>
                    <div class="dropdown" v-if="dropdownActive">
                        <router-link to="/user">Accaunt <span class="material-symbols-outlined">settings</span></router-link>
                        <router-link to="/user/favourites">Favourites <span class="material-symbols-outlined">star</span></router-link>
                        <a>Log Out <span class="material-symbols-outlined">logout</span></a>
                    </div>
                </Transition>
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

    .dropdown {
        position: absolute;
        margin-top: 175px;
        display: flex;
        flex-direction: column;
        background: #f3f3f3;
        border-radius: 5px;
        margin-left: -10px;
    }

    .dropdown > a {
        color: rgba(50, 50, 50, 0.98);
        padding: 10px 15px;
        text-align: left;
        font-size: 19px;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 3px;
    }

    .dropdown > a:hover:first-child {
        color: #fff;
        background: #7C6157;
        border-radius: 5px 5px 0 0;
    }

    .dropdown > a:hover {
        color: #fff;
        background: #7C6157;
    }

    .dropdown > a:hover:last-child {
        color: #fff;
        background: #7C6157;
        border-radius: 0 0 5px 5px;
    }

    .v-enter-active,
    .v-leave-active {
    transition: opacity 0.2s ease;
    }

    .v-enter-from,
    .v-leave-to {
    opacity: 0;
    }
</style>