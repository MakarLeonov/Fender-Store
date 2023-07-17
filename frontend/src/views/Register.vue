<script setup>
import { ref } from 'vue'
import axios from 'axios'
import router from '../router/router';

const name = ref('')
const email = ref('')
const password = ref('')
const password_confirmation = ref('')
const registeredMessage = ref(false)

function register() {
    axios.post('http://127.0.0.1:8000/api/register', {
        name: name.value,
        email: email.value,
        password: password.value,
        password_confirmation: password_confirmation.value,
    })
        .then(async (response) => {    
            name.value = ''
            email.value = ''
            password.value = ''
            password_confirmation.value = ''
            registeredMessage.value = TextTrackCue
            
            localStorage.setItem('user', JSON.stringify(response.data.user))
            localStorage.setItem('token', response.data.token)

            setTimeout(() => {
                registeredMessage.value = false
                this.router.push('/user')
            }, 2000)

        })
        .catch((error) => {console.log(error)})

}


</script>

<template>
    <main>
        <p class="title">Registration</p>

        <form @submit.prevent="register()">
                <input type="text" v-model.trim="name" placeholder="Your name...">
                <input type="text" v-model.trim="email" placeholder="Your email...">
                <input type="password" v-model.trim="password" placeholder="Input a password...">
                <input type="password" v-model.trim="password_confirmation" placeholder="Confirm the password...">
                <button>Register</button>
        </form>
        
        <div class="message_fon" v-if="registeredMessage">
            <div class="message">
                <p>Your account has been successfully registered!</p>
            </div>
        </div>

        <div class="link">Or log in to <span @click="router.push('/login')">an existing account</span></div>        
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

    .link {
        color: #5A3015;
        font-size: 32px;
        margin-top: 30px;
    }

    .link > span:hover {
        cursor: pointer;
        color: rgba(255, 102, 0, 0.911);
    }
</style>