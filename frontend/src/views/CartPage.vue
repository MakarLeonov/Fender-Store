<template>
    <main>
        <p class="title">My Cart</p>
        <div class="sections">
            <section>
                
                <div class="cart_item">
                    <img src="../assets//guitars/mustang.jpg" alt="mustang">
                    <div class="cart_info">
                        <p class="cart_title">Fender Squire Mustang</p>
                        <p class="product_info">
                            Born in Corona, California, the 24”-scale American Performer Mustang delivers the exceptional tone and feel you, along with a unique feel and new player-oriented features that make it even more inspiring to play.
                        </p>
                        <div class="additional_info">
                            <p>Cost: $1000</p>
                            <div>Colour: <div class="colour"></div></div>
                            <p>In stoke: 2</p>
                        </div>
                        
                        <div class="buttons">
                            <button>Delete from cart</button>
                            <button>Change the order</button>
                        </div>
                    </div>
                </div>

                <div class="cart_item">
                    <img src="../assets//guitars/mustang.jpg" alt="mustang">
                    <div class="cart_info">
                        <p class="cart_title">Fender Squire Mustang</p>
                        <p class="product_info">
                            Born in Corona, California, the 24”-scale American Performer Mustang delivers the exceptional tone and feel you, along with a unique feel and new player-oriented features that make it even more inspiring to play.
                        </p>
                        <div class="additional_info">
                            <p>Cost: $1000</p>
                            <div>Colour: <div class="colour"></div></div>
                            <p>In stoke: 2</p>
                        </div>
                        
                        <div class="buttons">
                            <button>Delete from cart</button>
                            <button>Change the order</button>
                        </div>
                    </div>
                </div> 

            </section>
            <aside>
                <p class="aside_title">Order Summury</p>
                <p class="subtitle">Product list:</p>
                <div class="group">
                    <div class="product">- Fender Squire Mustung :</div>
                    <div class="cost">$1000</div>
                </div>
                <div class="group">
                    <div class="product">- Fender Squire Mustung :</div>
                    <div class="cost">$1000</div>
                </div>
                <div class="group">
                    <div class="product">- Fender Squire Mustung :</div>
                    <div class="cost">$1000</div>
                </div>

                <div class="group shipping">
                    <div class="subtitle">Shipping:</div>
                    <div class="cost">free<span class="material-symbols-outlined" title="If the total cost exceeds 1000 dollars, delivery is free of charge">info</span></div>
                </div>

                <div class="group total">
                    <div class="total_p">Total:</div>
                    <div class="total_cost">$1000</div>
                </div>

                <button class="aside_button">Go to payment</button>
            </aside>
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

    .sections {
        display: flex;
        justify-content: space-between;
    }
    section {
        width: 71%;
        display: flex;
        flex-direction: column;
    }

    .cart_item {
        width: 100%;
        /* height: 240px; */
        flex-shrink: 0;
        border-radius: 15px;
        background: #FFF;
        box-shadow: 0px 5px 15px 10px rgba(0, 0, 0, 0.05);
        padding: 22px 20px;
        margin-bottom: 10px;
        display: flex;
        gap: 20px;
    }

    img {
        width: 200px;
        height: 200px;  
    }

    .cart_title {
        font-size: 28px;
        font-family: Raleway;
        font-weight: 400;
    }
    .product_info {
        font-size: 18px;
        font-family: Raleway;
        font-weight: 400;
    }
    .additional_info {
        display: flex;
        gap: 24px;
        margin: 13px 0;
    }

    .additional_info > p, .additional_info > div {
        font-size: 22px;
        font-family: Raleway;
        font-weight: 400;
        display: flex;
    }
    .colour {
        width: 26px;
        height: 26px;
        flex-shrink: 0;
        border-radius: 19px;
        background: #780104;
        margin-left: 5px;
    }

    .buttons {
        display: flex;
        gap: 5px;
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

    aside {
        width: 28%;
        height: 384px;
        flex-shrink: 0;
        border-radius: 15px;
        background: #FFF;
        box-shadow: 0px 5px 15px 10px rgba(0, 0, 0, 0.05);
        padding: 25px;
    }

    .aside_title {
        font-size: 32px;
        font-family: Raleway;
        font-weight: 500;
        margin-bottom: 20px;
    }
    .subtitle {
        font-size: 22px;
        font-family: Raleway;
        font-weight: 400;
    }
    .group {
        display: flex;
        justify-content: space-between;
    }
    .product, .cost {
        font-size: 18px;
        font-family: Raleway;
        font-weight: 300;
        margin-top: 5px;
    }
    .total_p, .total_cost {
        font-size: 32px;
        font-family: Raleway;
        font-weight: 400;
    }

    .cost > span {
        font-size: 17px;
        margin-left: 2px;
        cursor: help;
    }

    .shipping {
        margin: 25px 0 15px;
    }

    .total {
        margin-bottom: 18px;
    }

    .aside_button {
        width: 100%;
    }
</style>