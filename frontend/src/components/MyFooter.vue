<script setup>
import axios from 'axios';
import { ref } from 'vue'

const name = ref('')
const email = ref('')
const message = ref('')
const userName = ref('')
const showMessage = ref(false)


function sendMessage() {
    axios.post('http://127.0.0.1:8000/api/user_questions', {
        name: name.value,
        email: email.value,
        message: message.value,
    })
        .then((response) => {
            userName.value = response.data.data.name
            showMessage.value = true;
            setTimeout(() => {
            showMessage.value = false;
            }, 3000)
            
            name.value = ''
            email.value = ''
            message.value = ''
        })
        .catch((error) => {
            console.log(error)
        })
}

</script>
<template>
    <footer>
        <div class="wrapper">
            <img src="../assets/images/white_logo.png" v-if="this.$route.path === '/'" alt="fender logo">
            <p class="footer_title">Do you have a question?</p>
            <p class="footer_p">Team of professionals will help you</p>
            <form @submit.prevent="sendMessage()">
                <input type="text" name="name" v-model.trim="name" placeholder="Your name..."> 
                <input type="text" name="email" v-model.trim="email" placeholder="Your email...">
                <textarea name="message" placeholder="Your message..." v-model.trim="message"></textarea>
                <button>Send Message</button>
            </form>
            <div class="developed">
                <p class="developed_p">Developed by Leonov Makar, 2023</p>
                <a href="https://github.com/MakarLeonov/Fender-Store" target="_blank" >
                    <img src="../assets/images/GitHubLogo.png" alt="GitHub">    
                    GitHub
                </a>
            </div>
            <div class="message_fon" v-if="showMessage">
                <div class="message">
                    <p>Thanks {{ userName }}! We will send the answer on your email.</p>
                </div>
            </div>
        </div>
    </footer>
</template>

<style lang="css" scoped>
    footer {
        width: 100%;
        height: 100vh;
        background-image: url("../assets/images/foote_image.png");
        background-size: cover;
        position: relative;
        margin-top: 30px;
    }

    .wrapper {
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.30);
        padding: 25px;
    }

    .img {
        width: 151.976px;
        height: 100px;
        cursor: pointer;
    }

    .footer_title{
        color: #F2EEE9;
        font-size: 64px;
        font-family: Raleway;
        font-weight: 600;
        margin-top: 90px;
    }

    .footer_p {
        color: #F2EEE9;
        font-size: 24px;
        font-family: Raleway;
        font-style: normal;
        font-weight: 400;
        margin-top: 5px;
    }

    form {
        display: flex;
        flex-direction: column;
        width: 460px;
    }

    input, textarea, button {
        width: 100%;
        height: 60px;
        flex-shrink: 0;
        border-radius: 11px;
        border: 2px solid #F2EEE9;
        background: rgba(217, 217, 217, 0.00);

        padding: 15px;
        font-size: 18px;
        color: #F2EEE9;
        font-weight: 400;
        margin-top: 17px;  
        transition: all .2s ease-out;  
    }

    textarea {
        height: 250px;
    }

    button:hover {
        cursor: pointer;
        background: #F2EEE9;
        color: rgba(50, 50, 50, 0.98);
        transition: all .2s ease-in;
    }

    ::-webkit-input-placeholder { color:#F2EEE9; }
    ::-moz-placeholder { color:#F2EEE9; }
    :-ms-input-placeholder { color:#F2EEE9; } 
    input:-moz-placeholder { color:#F2EEE9; }

    .developed {
        position: absolute;
        bottom: 25px;
        left: 25px;
        display: flex;
        gap: 25px;
        align-items: center;
    }

    .developed_p {
        color: #F2EEE9;
        font-size: 24px;
        font-family: Raleway;
        font-weight: 400;
    }

    .developed > a {
        color: #F2EEE9;
        font-size: 28px;
        font-family: Raleway;
        font-weight: 400;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .message_fon {
        position: absolute;
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