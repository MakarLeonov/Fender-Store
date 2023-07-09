<script setup>
import { ref } from 'vue'
import MySelect from '../components/UI/MySelect.vue';
import { ProductsStore } from '../store/store'

    const store = ProductsStore()

    const types = [
        'All types',
        'Only Electric',
        'Only Acustic',
    ]

    const models = [
        'All models',
        'Stratocaster',
        'Telecaster',
        'Jaguar',
        'Jazzmaster',
        'Lead',
        'Duo-Sonic',
        'Mustang',
    ]

    const stoks = [
        'All products',
        'Only in stok',
        'All products',
    ]


    const type = ref('')
    const model = ref('')
    const stok = ref('')

</script>

<template>
    <main>
        <!-- <div class="fon"></div> -->
        <div class="container">
            <p class="title">Catalog</p>
            <div class="filters">
                <my-select :options="types" @changeOption="(option) => type = option" class="select"/> 
                <my-select :options="models" @changeOption="(option) => model = option" class="select"/> 
                <my-select :options="stoks" @changeOption="(option) => stok = option" class="select"/>
                <input type="text" name="name" placeholder="Your name...">
            </div>

            <div class="guitar_list">
                
                <div class="cart" v-for="product in store.productList" :key="product.id">
                    <img :src="'src/assets//guitars/' + product.image" alt="mustang">
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
    .title {
        color: rgba(50, 50, 50, 0.98);
        text-align: left;
        font-size: 36px;
        font-family: 'Raleway', sans-serif;
        font-weight: 700;
        /* margin: 100px 0 20px; */
    }

    .container {
        padding-top: 140px;
        width: 70%;
        margin: 0 auto;
        z-index: 10;
    }

    .filters {
        margin: 10px 0 20px;
        display: flex;
        gap: 10px;
    }

    input {
        width: 300px;
        display: flex;
        height: 55px;
        background: #fff;
        border: 1px solid #5A3015;
        padding: 20px;
        border-radius: 7px;
        align-items: center;
        cursor: pointer;
        justify-content: space-between;
        transition: all .2s ease-out;
        color: #5A3015;
        font-size: 22px;
        font-family: Raleway;
    }

    ::-webkit-input-placeholder { color:#5A3015; }
    ::-moz-placeholder { color:#5A3015; }
    :-ms-input-placeholder { color:#5A3015; } 
    input:-moz-placeholder { color:#5A3015; }

    .guitar_list {
        display: flex;
        /* justify-content: space-between; */
        gap: 37px;
        flex-wrap: wrap;
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
</style>