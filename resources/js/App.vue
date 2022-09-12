<template>
    <div>

        <HeaderComp/>

        <router-view></router-view>

        <FooterComp/>

    </div>
</template>

<script>

    import HeaderComp from './components/partials/HeaderComp.vue';
    import FooterComp from './components/partials/FooterComp.vue';

    export default {
        name: "App",
        components: { HeaderComp, FooterComp }
    }

</script>

<style lang="scss">
    @import '../sass/front/style.scss';
</style>
