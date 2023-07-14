<script setup>
import { onMounted } from 'vue';
import { ProductsStore } from '../store/store'

    const store = ProductsStore();

    onMounted(() => {
        store.getProducts();
    })

</script>

<template>
    <main>
        <section class="title_section" />
        <section class="advantages">
            <p class="title">Why do musicians choose Fender?</p>
            <p class="advantages_p">
                Fender Musical Instruments Corporation is the largest guitar manufacturer in the world. Currently, the company produces countless instruments from limited name models to the entry-level brand Squier.            </p>
        </section>
        <img src="../assets//images//side_Image.png" alt="guitar`s head" class="side_image">
        <section class="popular_guitars">
            <p class="title">Popular guitars</p>
            <div class="guitar_list">

                <div class="cart" v-for="product in store.productList.slice(0, 3)" :key="product.id">
                    <img :src="`src/assets//guitars/${product.image}`" alt="mustang">
                    <p class="guitar_name">{{ product.name }}</p>
                    <div class="cart_info">
                        <p class="cart_p">Cost: ${{ product.cost }}</p>
                        <p class="cart_p">In stok: {{ product.in_stok }}</p>
                    </div>
                    <div class="cart_buttons">
                        <button class="cart_button">Add to <span class="material-symbols-outlined">star</span></button>
                        <button class="cart_button">Add to <span class="material-symbols-outlined">shopping_cart</span></button>
                    </div>
                </div>
                
                
            </div>
            <p @click="this.$router.push('/catalog')" class="see_more_p">See more our guitars...</p>
        </section>
    </main>
</template>

<style scoped>
    .title_section {
        width: 100%;
        height: 100vh;
        background-image: url("../assets/images/header_image.png");
        background-size: cover;
    }

    .title {
        color: rgba(50, 50, 50, 0.98);
        text-align: center;
        font-size: 36px;
        font-family: 'Raleway', sans-serif;
        font-weight: 700;
        margin: 100px 0 20px;
    }

    .advantages {
        width: 1305px;
        margin: 0 auto;
    }
    .advantages_p {
        color: #000;
        text-align: center;
        font-size: 24px;
        font-family: Raleway;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .side_image {
        display: block;
        margin-left: auto;
        margin-bottom: -200px;
    }

    .popular_guitars {
        margin-top: -200px;
        width: 1305px;
        margin: 0 auto;
    }

    .guitar_list {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin: 50px 0 0;
    }
    .cart {
        width: 410px;
        flex-shrink: 0;
        border-radius: 15px;
        background: #FFF;
        box-shadow: 0px 5px 15px 10px rgba(0, 0, 0, 0.05);
        padding: 20px;
        transition: all .2s ease-out;
        margin-bottom: 30px;
    }

    .cart:hover {
        box-shadow: 0px 5px 15px 10px rgba(0, 0, 0, 0.08);
        transition: all .2s ease-in;
    }

    .cart > img {
        width: 100%;
        margin-bottom: 20px;
    }

    .guitar_name {
        color: #000;
        font-size: 24px;
        font-family: Raleway;
        font-weight: 400;
        /* margin-bottom: 5px; */
    }

    .cart_info {
        display: flex;
        justify-content: space-between;
        padding-right: 7px;

    }

    .cart_p {
        color: #000;
        font-size: 22px;
        font-family: Raleway;
        font-weight: 500;
        margin-top: 3px;

    }
    .cart_buttons {
        width: 100%;
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }
    .cart_button {
        text-align: center;
        font-size: 18px;
        font-family: Raleway;
        font-weight: 600;
        border-radius: 7px;
        border: 2px solid #7C6157;
        
        width: 180px;
        height: 52px;
        flex-shrink: 0;
        cursor: pointer;
        background: #fff;
        color: #7C6157;
        transition: all .2s ease-out;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2px;
    }

    .cart_button:hover {
        background: #5A3015;
        border: 2px solid #5A3015;
        color: #fff;
        transition: all .2s ease-in;
    }

    .see_more_p {
        color: #524439;
        text-align: center;
        font-size: 24px;
        font-family: Raleway;
        font-weight: 400;
        cursor: pointer;
    }

</style>