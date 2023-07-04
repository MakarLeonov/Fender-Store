<template>
    <div>
        <p class="title">Personal Accaunt</p>
            
        <p class="p">My login: Makar Leonov</p>
        <p class="p">My email: gamemakarena@gmail.com</p>
        <p class="p">My password: **********</p>
        
        <button class="aside_button">Edit personal data</button>
    </div>
</template>
<script>
export default {
    
}
</script>
<style lang="css" scoped>
     .title {
        color: rgba(50, 50, 50, 0.98);
        text-align: left;
        font-size: 36px;
        font-family: 'Raleway', sans-serif;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .p {
        color: rgba(50, 50, 50, 0.98);
        text-align: left;
        font-size: 20px;
        font-family: 'Raleway', sans-serif;
        font-weight: 400;
        margin-bottom: 10px;
    }

    button {
        width: 196px;
        height: 52px;
        flex-shrink: 0;
        border-radius: 7px;
        border: 2px solid #5A3015;
        background: #FFF;
        color: #5A3015;
        text-align: center;
        font-size: 18px;
        font-family: Raleway;
        font-weight: 600;
        cursor: pointer;
        transition: all .2s ease-out;
    }

    button:hover {
        background: #5A3015;
        color: #fff;
        transition: all .2s ease-in;
    }
</style>