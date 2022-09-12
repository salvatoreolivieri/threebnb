<template>
    <div class="custom-container">

        <ApartmentDetails/>
        <!-- <MapComp/> -->
    </div>
</template>

<script>
// import MapComp from '../elements/MapComp.vue';
import ApartmentDetails from '../sections/ApartmentDetails.vue';

    export default {
    name: "ApartmentPage",
    components: { ApartmentDetails}
}
</script>

<style lang="scss" scoped>



</style>
