<!-- Questo componente gestisce la sezione in cui stamperemo le card dei singoli appartamenti -->

<template>
    <div class="custom-container">

        <h2>Appartamenti <span class="orange-text"> {{message}}</span></h2>

        <div v-if="homePage">

            <div class="card-section">

                <CardComp
                v-for="(apartment,index) in sponsoredApartmentsHomePage"
                :key="`apartment${index}`"
                :apartment="apartment"
                :sponsored="true"
                :homepage="true"
                />

            </div>

        </div>

        <div v-if="sponsored">

            <div class="card-section">

                <CardComp
                v-for="(apartment,index) in sponsoredApartments"
                :key="`apartment${index}`"
                :apartment="apartment"
                :sponsored="true"
                :homepage="false"
                />

                <div class="message">
                    <p v-if="!searchSuccesfull">{{researchMessage}}</p>
                    <p v-if="sponsoredApartments.length < 1 && searchSuccesfull">Nessun appartamento trovato.</p>
                </div>

            </div>

        </div>

        <div v-if="!sponsored">

            <div class="card-section" >

                <CardComp
                v-if="apartments.length !== 0"
                v-for="(apartment,index) in apartments"
                :key="`apartment${index}`"
                :apartment="apartment"
                :sponsored="false"
                :homepage="false"
                />

                <div class="message">
                    <p v-if="!searchSuccesfull">{{researchMessage}}</p>
                    <p v-if="apartments.length < 1 && searchSuccesfull">Nessun appartamento trovato.</p>
                </div>

            </div>

        </div>



    </div>
</template>

<script>

    import CardComp from '../elements/CardComp.vue';
    import {apiUrlDatabase} from '../../data/apiConfig';

    export default {
        name: "CardSection",
        components: {CardComp},

        data(){
            return{
                apiUrlDatabase,

                // Appartamenti
                apartments: [],
                // apartmentDistances: [],

                // Sponsorizzati
                sponsoredApartments: [],
                // sponsoredDistances: [],

                startResearch2: this.startResearch
            }
        },

        props:{
            message:{
                type: String,
                Required: true
            },
            homePage:{
                type: Boolean,
                Required: false
            },
            sponsoredApartmentsHomePage:{
                type: Array,
                required: false
            },
            researchMessage:{
                type: String,
                Required: false
            },
            sponsored:{
                type: Number,
                Required: true
            },
            searchSuccesfull:{
                type: Boolean,
                Required: true
            },
            address: String,
            beds: String,
            radius: String,
            rooms: String,
            selectedServices: Array,
            lat: Number,
            lon: Number,
            startResearch: Boolean
        },

        methods:{
            getApartmentsApi(sponsored){
                axios.get(this.apiUrlDatabase + 'filteredApartments/' + parseInt(this.rooms) + '/' + parseInt(this.beds) + '/' + parseInt(this.radius) + '/' + this.lat + '/' + this.lon + '/' + this.selectedServices.toString() + '/' + sponsored)
                    .then(res => {

                        if(sponsored){
                            this.sponsoredApartments = res.data;
                            console.log(this.sponsoredApartments, 'Lista degli sponsorizzati');
                        }else{
                            this.apartments = res.data;
                            console.log(this.apartments, 'Lista degli appartamenti');
                        }
                    })
            },
        },

        watch:{
            startResearch(){
                this.services = this.selectedServices;

                if(this.services.length === 0){
                    this.services.push(0)
                   console.log(this.services, 'push avvenuto');
                }

                if(this.services[0] == 0 && this.services.length > 1){
                   this.services = this.services.splice(0, 1);
                   console.log(this.services, 'splice avvenuto');
                }

                this.getApartmentsApi(this.sponsored);

                console.log('--------- INIZIO PARAMETRI DI RICERCA CARDSECTION---------');
                console.log(parseInt(this.rooms), 'Stanze');
                console.log(parseInt(this.beds), 'letti');
                console.log(parseInt(this.radius), 'Radius');
                console.log(this.address, 'Indirizzo');
                console.log(this.lat, 'Lat');
                console.log(this.lon, 'Lon');
                console.log(this.selectedServices[0], 'services');
                console.log('--------- FINE PARAMETRI DI RICERCA CARDSECTION---------');
            },
        },
    }
</script>

<style lang="scss" scoped>

@import '../../../sass/front/partials/vars';

.custom-container {
    padding: 40px 0 60px 0;

    .card-section {
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    @media screen and (max-width: 1516px) {
        .card-section {
            justify-content: center;
        }

    }
}
</style>
