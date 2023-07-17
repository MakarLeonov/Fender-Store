<script setup>
import { ProductsStore } from "../store/store"
import { computed, onMounted } from 'vue'
import axios from "axios";

const store = ProductsStore()

onMounted(() => {
    store.getProducts()
    store.getCart()
})

const total = computed(() => {
    return store.cart.reduce((sum, product) => sum + product.product.cost, 0);
})

const shipping = computed(() => {
    return (total.value >= 1000) ? 'Free' : '$70' 
})

function removeFromCart(id) {
    axios.delete(`http://127.0.0.1:8000/api/delete_product/${id}`)
    store.getCart()
}
</script>

<template>
    <main>
        <p class="title">My Cart</p>
        <div class="sections">
            <section v-if="store.cart.length">
                
                <div class="cart_item" v-for="product in store.cart" :key="product.id">
                    <img :src="'src/assets/guitars/' + product.product.image" alt="mustang">
                    <div class="cart_info">
                        <p class="cart_title">{{ product.product.name }}</p>
                        <p class="product_info">{{ product.product.description }}</p>
                        <div class="additional_info">
                            <p>Cost: ${{ product.product.cost }}</p>
                            <div>Colour: <div class="colour" :style="{background: product.product.color.color}"></div></div>
                            <p>In stoke: {{ product.product.in_stok }}</p>
                        </div>
                        
                        <div class="buttons">
                            <button @click="removeFromCart(product.id)">Delete from cart</button>
                        </div>
                    </div>
                </div>

            </section>

            <div class="empty_cart" v-else>
                <p class="empty_cart_title">The cart is empty.</p>
                <p class="empty_cart_subtitle">You can add something in the <span @click="$router.push('/catalog')">catalog section!</span></p>
            </div>

            <aside>
                <p class="aside_title">Order Summury</p>
                <p class="subtitle">Product list:</p>
                <div class="group" v-for="product in store.cart" :key="product.id">
                    <div class="product">- {{ product.product.name }} :</div>
                    <div class="cost">${{ product.product.cost }}</div>
                </div>

                <div class="group shipping">
                    <div class="subtitle">Shipping:</div>
                    <div class="cost">{{ shipping }}<span class="material-symbols-outlined" title="If the total cost exceeds 1000 dollars, delivery is free of charge">info</span></div>
                </div>

                <div class="group total">
                    <div class="total_p">Total:</div>
                    <div class="total_cost">${{ total }}</div>
                </div>

                <button class="aside_button">Go to payment</button>
            </aside>
        </div>
    </main>
</template>

<style lang="css" scoped>
    main {
        width: 70%;
        margin: 0 auto;
        padding-top: 40px;   
    }

    .title {
        color: rgba(50, 50, 50, 0.98);
        text-align: left;
        font-size: 36px;
        font-family: 'Raleway', sans-serif;
        font-weight: 700;
        margin: 100px 0 20px;
    }

    .sections {
        display: flex;
        justify-content: space-between;
    }
    section {
        width: 71%;
        display: flex;
        flex-direction: column;
    }

    .cart_item {
        width: 100%;
        /* height: 240px; */
        flex-shrink: 0;
        border-radius: 15px;
        background: #FFF;
        box-shadow: 0px 5px 15px 10px rgba(0, 0, 0, 0.05);
        padding: 22px 20px;
        margin-bottom: 10px;
        display: flex;
        gap: 20px;
    }

    img {
        width: 200px;
        height: 200px;  
    }

    .cart_title {
        font-size: 28px;
        font-family: Raleway;
        font-weight: 400;
    }
    .product_info {
        font-size: 18px;
        font-family: Raleway;
        font-weight: 400;
    }
    .additional_info {
        display: flex;
        gap: 24px;
        margin: 13px 0;
    }

    .additional_info > p, .additional_info > div {
        font-size: 22px;
        font-family: Raleway;
        font-weight: 400;
        display: flex;
    }
    .colour {
        width: 26px;
        height: 26px;
        flex-shrink: 0;
        border-radius: 19px;
        /* background: #780104; */
        margin-left: 5px;
    }

    .buttons {
        display: flex;
        gap: 5px;
    }

    button {
        width: 196px;
        height: 52px;
        flex-shrink: 0;
        border-radius: 7px;
        border: 2px solid #5A3015;
        background: #FFF;
        color: #5A3015;
        text-align: center;
        font-size: 18px;
        font-family: Raleway;
        font-weight: 600;
        cursor: pointer;
        transition: all .2s ease-out;
    }

    button:hover {
        background: #5A3015;
        color: #fff;
        transition: all .2s ease-in;
    }

    aside {
        width: 28%;
        height: fit-content;
        flex-shrink: 0;
        border-radius: 15px;
        background: #FFF;
        box-shadow: 0px 5px 15px 10px rgba(0, 0, 0, 0.05);
        padding: 25px;
    }

    .aside_title {
        font-size: 32px;
        font-family: Raleway;
        font-weight: 500;
        margin-bottom: 20px;
    }
    .subtitle {
        font-size: 22px;
        font-family: Raleway;
        font-weight: 400;
    }
    .group {
        display: flex;
        justify-content: space-between;
    }
    .product, .cost {
        font-size: 18px;
        font-family: Raleway;
        font-weight: 300;
        margin-top: 5px;
    }
    .total_p, .total_cost {
        font-size: 32px;
        font-family: Raleway;
        font-weight: 400;
    }

    .cost > span {
        font-size: 17px;
        margin-left: 2px;
        cursor: help;
    }

    .shipping {
        margin: 25px 0 15px;
    }

    .total {
        margin-bottom: 18px;
    }

    .aside_button {
        width: 100%;
    }

    .empty_cart {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .empty_cart_title {
        font-size: 32px;
        font-family: Raleway;
        font-weight: 500;
        margin-bottom: 10px;
    }

    .empty_cart_subtitle {
        font-size: 24px;
        font-family: Raleway;
        font-weight: 400;
    }

    .empty_cart_subtitle > span:hover {
        cursor: pointer;
        color: rgba(255, 102, 0, 0.911);
    }
</style>