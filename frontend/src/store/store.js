import { defineStore } from 'pinia'
import { ref, computed, reactive } from 'vue'
import axios from 'axios'




export const ProductsStore = defineStore('products', () => {

    // USER
    const user = ref({})
    const token = ref('')

    function serUser() {
        user.value = JSON.parse(localStorage.user)
        token.value = localStorage.token
    }

    // PRODUCTS
    const productList = ref([])

    const getProducts = async () =>{
        let res = await fetch('http://127.0.0.1:8000/api/products');
        let products = await res.json();
        productList.value = products.data
    }



    // TYPES
    const types = ref(['All types']);
    
    const getTypes = async () => {
        let res = await fetch('http://127.0.0.1:8000/api/types');
        let data = await res.json();
        for (let key in data.data) {
            types.value.push(data.data[key].type)
        }
    }


    // MODELS
    const models = ref(['All models']);

    const getModels = async () => {
        let res = await fetch('http://127.0.0.1:8000/api/models');
        let data = await res.json();
        for (let key in data.data) {
            models.value.push(data.data[key].model);
        }
    }

    // CART
    const cart = ref([])

    const getCart = async () => {
        axios.post('http://127.0.0.1:8000/api/get_products', {
            user_id: JSON.parse(localStorage.user).id
        })
            .then((response) => {
                cart.value = response.data.data
                console.log(response.data.data)
            })
            .catch((error) => {console.log(error)})
    }


    return { productList, getProducts, getTypes, types, getModels, models, user, token, serUser, cart, getCart}
})