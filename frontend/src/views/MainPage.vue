<script setup>

</script>

<template>
    <main>
        <section class="title_section" />
        <section class="advantages">
            <p class="title">Почему музыканты выбирают именно Fender?</p>
            <p class="advantages_p">
                Корпорация Fender Musical Instruments является крупнейшим производителем гитар в мире. В настоящее время компания выпускает бесчисленное количество инструментов от лимитированных именных моделей до бренда начального уровня Squier.
            </p>
        </section>
    </main>
</template>

<style scoped>
    .title_section {
        width: 100%;
        height: 100vh;
        background-image: url("../assets/images/header_image.png");
        background-size: cover;
    }

    .title {
        color: rgba(50, 50, 50, 0.98);
        text-align: center;
        font-size: 36px;
        font-family: 'Raleway', sans-serif;
        font-weight: 700;
        margin: 100px 0 20px;
    }

    .advantages {
        width: 1305px;
        margin: 0 auto;;
    }
    .advantages_p {
        color: #000;
        text-align: center;
        font-size: 24px;
        font-family: Raleway;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
</style>