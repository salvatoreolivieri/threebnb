<template>
    <div>
        <div class="mappa">
            <img src="https://ps.w.org/wp-store-locator/assets/banner-772x250.jpg?rev=830722" alt="Mappa" class="rounded" id="mappa">
        </div>
    </div>
</template>

<script>
    export default {
        name: 'MapComp'
    }

</script>

<style lang="scss" scoped>

.mappa{
    height: 300px;
    background-color: blue;
    border-radius: 30px;
    overflow: hidden;
    margin-bottom: 50px;
}

img{
    background-color: #EB594E;
    min-width: 100%;
    min-height: 100%;
    filter: grayscale(100%);
}

</style>
