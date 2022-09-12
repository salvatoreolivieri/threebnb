<template>
    <footer class="footer-section">
        <div class="container text-center text-area">
            <span>&#169 2022 | Threebnb - Sviluppato con entusiasmo dal Team 3</span>
        </div>
    </footer>
</template>

<script>
    export default {
        name: 'FooterComp'
    }
</script>

<style lang="scss" scoped>

.footer-section{
    background-color: #F7F7F7;
    height: 80px;

    border-top: 1px solid #dee2e6;

    .text-area{
        display: flex;
        justify-content: center;
        align-items: center;

        height: 100%;

    }

}

</style>
