<template>
    <footer>
        <div class="wrapper">
            <img src="../assets/images/white_logo.png" v-if="this.$route.path === '/'" alt="fender logo">
            <p class="footer_title">Do you have a question?</p>
            <p class="footer_p">Team of professional will help you</p>
            <form>
                <input type="text" name="name" placeholder="Your name...">
                <input type="text" name="email" placeholder="Your email...">
                <textarea name="message" placeholder="Your message..."></textarea>
                <button>Send Message</button>
            </form>
            <div class="developed">
                <p class="developed_p">Developed by Leonov Makar, 2023</p>
                <a href="https://github.com/MakarLeonov/Fender-Store" target="_blank" >
                    <img src="../assets/images/GitHubLogo.png" alt="GitHub">    
                    GitHub
                </a>
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
</style>