import { defineStore } from 'pinia'
import { ref, computed, reactive } from 'vue'
import axios from 'axios'




export const ProductsStore = defineStore('products', () => {

    const productList = ref([])

    const getProducts = async () =>{
        let res = await fetch('http://127.0.0.1:8000/api/products');
        let products = await res.json();
        productList.value = products.data
        console.log(products.data)
    }

    getProducts()

    



    return { productList }
})