<template>
    <div>

        <CheckboxComp
        @filters="getFilters"
        />

        <div >
            <CardSection
                :address="filters.address"
                :rooms="filters.rooms"
                :beds="filters.beds"
                :radius="filters.radius"
                :lat="filters.position.lat"
                :lon="filters.position.lon"
                :selectedServices="filters.selectedServices"
                :startResearch="filters.startResearch"
                :sponsored="1"
                :searchSuccesfull="searchSuccesfull"
                message="In evidenza"
                researchMessage="Le tue ricerche appariranno qui."
            />

            <CardSection
                :address="filters.address"
                :rooms="filters.rooms"
                :beds="filters.beds"
                :radius="filters.radius"
                :lat="filters.position.lat"
                :lon="filters.position.lon"
                :selectedServices="filters.selectedServices"
                :startResearch="filters.startResearch"
                :sponsored="0"
                :searchSuccesfull="searchSuccesfull"
                message="in base alle tue ricerche"
                researchMessage="Le tue ricerche appariranno qui."
            />
        </div>

    </div>
</template>

<script>
import CheckboxComp from '../sections/CheckboxComp.vue';
import CardSection from '../sections/CardSection.vue';

    export default {
        name: "SearchPage",
        components: { CheckboxComp, CardSection},

        data(){
            return{
                filters: {
                    radius: null,
                    address: null,
                    rooms: null,
                    beds: null,
                    selectedServices: null,
                    position: {
                        lat: null,
                        lon: null
                    },
                    startResearch: null
                },
                searchSuccesfull: false,
            }
        },

        methods: {
            getFilters(filters){
                this.filters = filters;
                this.searchSuccesfull = true;
                console.log(this.filters, 'Filtri ricevuti');
            }
        },

        mounted(){
            document.title = "Ricerca Appartamento | ThreeBnB"
        },

    }

</script>

<style lang="scss" scoped>

</style>
