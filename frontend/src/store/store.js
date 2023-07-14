import { defineStore } from 'pinia'
import { ref, computed, reactive } from 'vue'
import axios from 'axios'




export const ProductsStore = defineStore('products', () => {

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



    // COLORS
    const colors = ref(['All '])





    



    return { productList, getProducts, getTypes, types, getModels, models }
})