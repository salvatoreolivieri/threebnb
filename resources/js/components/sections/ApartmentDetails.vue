<template>

    <div>
        <div v-if="apartment.userId == apartment.loggedUserId" class="back-to-profile d-flex justify-content-between position-relative">
            <a class="back-to-app" href="/admin/">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Torna al profilo</span>
            </a>

            <div class="back-to-app" role="button">
                <i class="fa-solid fa-message"></i>
                <span @click="isMessageClicked = true">Messaggi</span>

            </div>

            <div class="position-absolute dropdown-msg px-3 pt-1" v-if="isMessageClicked" @mouseleave="isMessageClicked = false">

                <div v-if="apartment.messages.length == 0">
                    <h6 class="pt-2">Nessun messaggio.</h6>
                </div>

                <div v-for="(message,index) in apartment.messages.reverse()" :key="`message${index}`">
                    <q>{{message.text}}</q>
                    <h6 class="text-right pt-2">{{message.email}}</h6>
                    <hr>
                </div>

            </div>

        </div>

        <div class="container mt-3">

            <h2 class="text-center mt-4 mb-3">{{apartment.title}}</h2>

            <div class="app-image">
                <img :src="`${apartment.image}`" :alt="apartment.title" class="rounded">
                <span class="sponsor-label" v-if="apartment.sponsorships.length > 0">Sponsorizzato</span>
            </div>

            <div>
                <div class="row mt-5 mb-5">
                    <!--Colonna host e proprietà-->
                    <div id="szdettagli" class="col-md-6">

                        <div class="apartment-details">

                            <h4 class="mb-4">Dettaglio Appartamento </h4>
                            <ul>
                                <li>
                                    <h5>Host: {{apartment.user}}</h5>
                                </li>
                                <li>
                                    <strong>Indirizzo: </strong>
                                    <span>{{apartment.address}}</span>
                                </li>
                                <li>
                                    <strong>Bagni: </strong>
                                    <span>{{apartment.bathrooms}}</span>
                                </li>
                                <li>
                                    <strong>Letti: </strong>
                                    <span>{{apartment.beds}}</span>
                                </li>
                                <li>
                                    <strong>Stanze: </strong>
                                    <span>{{apartment.rooms}}</span>
                                </li>
                                <li>
                                    <strong>M²: </strong>
                                    <span>{{apartment.sqm}}</span>
                                </li>
                            </ul>
                        </div>



                        <div id="service" class="pt-2">
                            <br><h4>Servizi offerti </h4>
                            <ul>
                                <li
                                v-for="(service, index) in this.apartment.services"
                                :key="index">
                                    {{service.name}}
                                </li>
                            </ul>
                        </div>

                    </div>

                    <!--Colonna form-->
                    <ContactsForm :apartmentid="apartment.id" v-if="apartment.userId != apartment.loggedUserId"
                    />

                    <StatisticsComp :viewsArray="[allViews , apartmentViews]" v-if="apartment.userId == apartment.loggedUserId"
                    />

                </div>

                <!-- <div class="row">

                    <div class="col-12 my-4 d-flex justify-content-center">
                        <StatisticsComp :viewsArray="[allViews , apartmentViews]" v-if="apartment.userId == apartment.loggedUserId"
                        />
                    </div>
                </div> -->

            </div>
    </div>



    </div>
</template>

<script>
import ContactsForm from '../elements/ContactsForm.vue';
import {apiUrlDatabase, apiUrlTomTom} from '../../data/apiConfig';
import StatisticsComp from '../elements/StatisticsComp.vue';
import ChartComp from '../elements/ChartComp.vue';

    export default {
        name: "ApartmentDetails",
        components: { ContactsForm, StatisticsComp, ChartComp },

        data(){
            return{
                apiUrlDatabase,
                apiUrlTomTom,
                tomtomKey: 'laZ0bbuHjk1Qf0HdMzIuCx3fPRECKycn',
                apartment: {
                    id: undefined,
                    title: '',
                    address: '',
                    bathrooms: '',
                    beds: '',
                    rooms: '',
                    sqm: '',
                    image: '',
                    user: '',
                    loggedUserId: '',
                    userId: '',
                    services: [],
                    sponsorships: [],
                    position:{
                        lat: '',
                        lon: '',
                        apartmentID: undefined
                    },
                    messages: []
                },
                isMessageClicked: false,
                ip: {
                    clientIp: '',
                    apartmentId: 0,
                },
                allViews: 0,
                apartmentViews: 0,
            }
        },

        methods: {
            apiRequest(){
                axios.get(this.apiUrlDatabase + 'apartment-details/' + this.$route.params.id)
                    .then(res => {
                        this.apartment.id = res.data.id;

                        this.ip.apartmentId = res.data.id;

                        this.apartment.title = res.data.title;

                        this.apartment.image = res.data.image;

                        this.apartment.address = res.data.address;

                        this.apartment.bathrooms = res.data.bathrooms;

                        this.apartment.beds = res.data.beds;

                        this.apartment.rooms = res.data.rooms;

                        this.apartment.sqm = res.data.sqm;

                        this.apartment.services = res.data.services;

                        this.apartment.sponsorships = res.data.sponsorships;

                        this.apartment.user = res.data.user.name + ' ' + res.data.user.surname;

                        this.apartment.userId = res.data.user.id;

                        this.apartment.loggedUserId = window.Id;

                        this.apartment.lat = res.data.latitude;

                        this.apartment.lon = res.data.longitude;

                        document.title = this.apartment.title, '| ThreeBnB';

                        this.getClientIp();

                        this.getApartmentViews();

                        this.getAllViews();

                        this.getMessages();

                        this.addressSearchApi();

                    })
            },

            getClientIp(){
                axios.get('https://api.ipify.org?format=json')
                .then( res => {
                    this.ip.clientIp = res.data.ip;
                    console.log('IP visitatore:', this.ip.clientIp);
                    this.sendClientIp();
                });
            },

            getMessages(){
                axios.get(this.apiUrlDatabase + 'see-messages/' + this.apartment.id)
                .then( res => {
                    this.apartment.messages = res.data;
                    console.log('messaggi dell\'appartamento:', this.apartment.messages, );
                });
            },

            getAllViews(){
                axios.get(this.apiUrlDatabase + 'get-all-views')
                .then( res => {
                    this.allViews = res.data.length;
                    console.log('Visualizzazioni di tutti gli appartamenti', this.allViews, );
                });
            },

            getApartmentViews(){
                axios.get(this.apiUrlDatabase + 'get-apartment-views/' + this.apartment.id)
                .then( res => {
                    this.apartmentViews = res.data.length;
                    console.log('Visualizzazioni dell\'appartamento:', this.apartmentViews, );
                });
            },

            sendClientIp(){
                axios.post(this.apiUrlDatabase + 'add-view', this.ip)
                .then((sendedData) => {
                    console.log(this.ip);
                    console.log(sendedData, 'Aggiunta visualizzazione');
                });
            },

            addressSearchApi(){
                axios.get(this.apiUrlTomTom + this.apartment.address + '.json?limit=5&minFuzzyLevel=1&maxFuzzyLevel=2&view=Unified&relatedPois=off&key=' + this.tomtomKey)
                    .then(res => {
                        this.apartment.position.lat = res.data.results[0].position.lat;
                        this.apartment.position.lon = res.data.results[0].position.lon;

                        console.log(this.apartment.position.lat, 'latitudine tomtom');
                        console.log(this.apartment.position.lon, 'longitudine tomtom');

                        this.apartment.position.apartmentID = this.apartment.id;

                        console.log('ID APPAPAPAPAPA', this.apartment.position.apartmentID);

                        this.sendApartmentPosition();
                    })
            },

            sendApartmentPosition(){
                axios.post(this.apiUrlDatabase + 'send-position', this.apartment.position)
                .then((sendedData) => {
                    console.log(sendedData, 'Aggiunta posizione ad appartamento');
                });
            },
        },

        mounted(){
            this.apiRequest();
        }
}
</script>

<style lang="scss" scoped>

    @import '../../../sass/front/partials/vars';

    .back-to-app {
        color: #929292;
        text-decoration: none;
        transition: 0.5s;
    }

    .back-to-app:hover {
        color: $colore-primario;
        font-size: 19px;
    }

    .back-to-app span {
        margin-left: 12px;
    }

    .sponsor-label {
        position: absolute;
        top: 15px;
        right: 20px;
        font-weight: bold;
        color: $colore-primario;
        background-color: #FFFFFF;
        padding: 5px 8px;
        border-radius: 10px;
    }

    .app-image {
        position: relative;
        height: 100%;
        width: 85%;
        border-radius: 30px;
        overflow: hidden;
        margin: 20px auto;
    }

    img {
        background-color: red;
        height: 600px;
        width: 100%;
    }

    #szdettagli img {
        width: 80px;
        border-radius: 100px;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    #host {
        display: inline-block;
    }

    .apartment-details li {
        margin-bottom: 5px;
        margin-left: 25px;
    }

    #service li {
        margin-bottom: 5px;
        margin-left: 25px;
    }

    .dropdown-msg{
        width: 300px;
        background-color: rgb(224, 224, 224);
        color: black;
        top: 30px;
        right: 0;
        z-index: 99999;
        border-radius: 10px;
        h6{
            color: $colore-primario;
        }
    }

    @media screen and (max-width: 767px){
        .sponsor-label {
            font-size: 14px;
        }
    }

    @media screen and (max-width: 500px){
        .sponsor-label {
            font-size: 12px;
        }
    }

    @media screen and (max-width: 430px){
        .sponsor-label {
            font-size: 10px;
        }
    }

</style>
