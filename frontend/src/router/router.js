import { createRouter, createWebHashHistory } from 'vue-router'
import MainPage from "../views/MainPage.vue"
import CatalogPage from "../views/CatalogPage.vue"
import CartPage from "../views/CartPage.vue"
import LoginPage from "../views/LoginPage.vue"

const router = createRouter({
    history: createWebHashHistory(),
    routes: [
      {
        path: '/',
        name: 'main',
        component: MainPage
      },
      {
        path: '/catalog',
        name: 'catalog',
        component: CatalogPage
      },
      {
        path: '/cart',
        name: 'cart',
        component: CartPage
      },
      {
        path: '/login',
        name: 'login',
        component: LoginPage
      },
    ],
  })

  export default router