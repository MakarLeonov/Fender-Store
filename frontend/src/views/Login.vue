<script setup>
import { ref } from 'vue'
import axios from 'axios'
import router from '../router/router';

const email = ref('')
const password = ref('')
const loggedInMessage = ref(false)
const errorMessage = ref(false)

function login() {
    axios.post('http://127.0.0.1:8000/api/login', {
        email: email.value,
        password: password.value
    })
        .then(async (response) => {    
            email.value = ''
            password.value = ''
            loggedInMessage.value = true

            setTimeout(() => {
                loggedInMessage.value = false
                this.router.push('/user')
            }, 2000)

        })
        .catch((error) => {
            errorMessage.value = true

            setTimeout(() => {
                errorMessage.value = false
            }, 3000);
            console.log(error)
        })

}


</script>

<template>
    <main>
        <p class="title">Login</p>

        <form @submit.prevent="login()">
                <input type="text" v-model.trim="email" placeholder="Your email...">
                <input type="password" v-model.trim="password" placeholder="Your password...">
                <button>Log In</button>
        </form>

        
        <div class="message_fon" v-if="loggedInMessage">
            <div class="message">
                <p>You have successfully logged in!</p>
            </div>
        </div>

        <div class="message_fon" v-if="errorMessage">
            <div class="message">
                <p>Login error. Check the entered data.</p>
            </div>
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

    form {
        display: flex;
        flex-direction: column;
        width: 460px;
    }

    input, button {
        width: 100%;
        height: 60px;
        flex-shrink: 0;
        border-radius: 11px;
        border: 2px solid #5A3015;
        background: rgba(217, 217, 217, 0.00);

        padding: 15px;
        font-size: 18px;
        color: #5A3015;
        font-weight: 400;
        margin-top: 17px;  
        transition: all .2s ease-out;  
    }

    button:hover {
        cursor: pointer;
        background: #5A3015;
        color: rgba(255, 255, 255, 0.98);
        transition: all .2s ease-in;
    }

    ::-webkit-input-placeholder { color:#5A3015; }
    ::-moz-placeholder { color:#5A3015; }
    :-ms-input-placeholder { color:#5A3015; } 
    input:-moz-placeholder { color:#5A3015; }

    .message_fon {
        position: absolute;
        z-index: 100;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.15);

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .message {
        width: 350px;
        background: #fff;
        padding: 20px;
        border-radius: 10px;

        font-size: 24px;
        font-family: Raleway;
        font-style: normal;
        font-weight: 400;
        margin-top: 5px;
    }
</style>