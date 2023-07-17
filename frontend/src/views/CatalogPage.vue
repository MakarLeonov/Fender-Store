<script setup>
import { ref, onMounted, computed } from 'vue'
import MySelect from '../components/UI/MySelect.vue';
import { ProductsStore } from '../store/store'
import axios from 'axios';

    const store = ProductsStore()

    onMounted(() => {
        store.getProducts()
        store.getTypes()
        store.getModels()
    })

    const type = ref('All types')
    const model = ref('All models')
    const stock = ref('All products')
    const search = ref('');

    const stoks = [
        'All products',
        'In stock',
        'Out of stock',
    ]

    const sortedByType = computed(() => {
        if (type.value === 'All types') {
            return store.productList;
        } else {
            return store.productList.filter((el) => {
                return (el.type.type === type.value);
            })
        }
    })

    const sortedByTypeAndModel = computed(() => {
        if (model.value === 'All models') {
            return sortedByType.value;
        } else {
            return sortedByType.value.filter((el) => {
                return (el.model.model === model.value);
            })
        }
    })

    const sortedByParams = computed(() => {
        if (stock.value == 'All products') {
            return sortedByTypeAndModel.value;
        } else if(stock.value == 'In stock') {
            return sortedByTypeAndModel.value.filter((el) => (el.in_stok > 0))
        } else {
            return sortedByTypeAndModel.value.filter((el) => (el.in_stok === 0))
        }
    }) 

    const sortedByParamsAndSearch = computed(() => {
        return sortedByParams.value.filter((el) => {
            return el.name.toUpperCase().includes(search.value.toUpperCase())
        })
    })


    function addToCart(product_id) {
        axios.post('http://127.0.0.1:8000/api/add_product', {
            user_id: JSON.parse(localStorage.user).id,
            product_id: product_id,
            amount: 1
        })
            .then((response) => {
                console.log(response)
            })
            .catch((err) => {
                console.log(err)
            })
    }
    

</script>

<template>
    <main>
        <!-- <div class="fon"></div> -->
        <div class="container">
            <p class="title">Catalog</p>
            <div class="filters">
                <my-select :options="store.types" @changeOption="(option) => type = option" class="select"/>
                <my-select :options="store.models" @changeOption="(option) => model = option" class="select"/> 
                <my-select :options="stoks" @changeOption="(option) => stock = option" class="select"/>
                <input type="text" v-model="search" placeholder="Search..."> {{ search }}
            </div>

            <div class="guitar_list">
                
                <div class="cart" v-for="product in sortedByParamsAndSearch" :key="product.id">
                    <img :src="'src/assets//guitars/' + product.image" :alt="product.name">
                    <p class="guitar_name">{{ product.name }}</p>
                    <div class="cart_info">
                        <p class="cart_p">Cost: ${{ product.cost }}</p>
                        <p class="cart_p">In stok: {{ product.in_stok }}</p>
                    </div>
                    <div class="cart_buttons">
                        <button class="cart_button">Add to <span class="material-symbols-outlined">star</span></button>
                        <button class="cart_button" @click="addToCart(product.id)">Add to <span class="material-symbols-outlined">shopping_cart</span></button>
                    </div>
                </div>

            </div>
        </div>
    </main>
</template>
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
        opacity: .08; 
        z-index: -100;
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
        min-height: 700px;
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
        gap: 33px;
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
        margin-bottom: 7px;
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