<template>
    <div>
        <p class="title">Favourites</p>

        <div class="guitar_list">
                <div class="cart">
                    <img src="../../assets//guitars/mustang.jpg" alt="mustang">
                    <p class="guitar_name">Fender Squire Mustang</p>
                    <div class="cart_info">
                        <p class="cart_p">Cost: $1000</p>
                        <p class="cart_p">In stok: 4</p>
                    </div>
                    <div class="cart_buttons">
                        <button class="cart_button">Delete from <span class="material-symbols-outlined">star</span></button>
                        <button class="cart_button">Add to <span class="material-symbols-outlined">shopping_cart</span></button>
                    </div>
                </div>
                <div class="cart">
                    <img src="../../assets//guitars/mustang.jpg" alt="mustang">
                    <p class="guitar_name">Fender Squire Mustang</p>
                    <div class="cart_info">
                        <p class="cart_p">Cost: $1000</p>
                        <p class="cart_p">In stok: 4</p>
                    </div>
                    <div class="cart_buttons">
                        <button class="cart_button">Delete from <span class="material-symbols-outlined">star</span></button>
                        <button class="cart_button">Add to <span class="material-symbols-outlined">shopping_cart</span></button>
                    </div>
                </div>
                <div class="cart">
                    <img src="../../assets//guitars/mustang.jpg" alt="mustang">
                    <p class="guitar_name">Fender Squire Mustang</p>
                    <div class="cart_info">
                        <p class="cart_p">Cost: $1000</p>
                        <p class="cart_p">In stok: 4</p>
                    </div>
                    <div class="cart_buttons">
                        <button class="cart_button">Delete from <span class="material-symbols-outlined">star</span></button>
                        <button class="cart_button">Add to <span class="material-symbols-outlined">shopping_cart</span></button>
                    </div>
                </div>
            </div>
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

    /* button {
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
    } */

    .guitar_list {
        display: flex;
        justify-content: space-between;
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
        margin-bottom: 30px;
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