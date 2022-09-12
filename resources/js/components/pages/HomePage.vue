<template>
    <div>
        <HeroComp />

        <CardSection
            :sponsoredApartmentsHomePage = sponsoredApartments
            :sponsored="1"
            :homePage= "true"
            message="sponsorizzati"
        />

        <!-- Pagination: -->

        <div class="text-center pagination-container">

            <!-- Inserire  v-if="pagination.current != 1" OPPURE :disabled-->
            <button
                class="custom-button"
                :disabled = "pagination.current === 1"
                @click="getSponsoredApartments(pagination.current - 1)">
                <i class="fa-solid fa-arrow-left"></i>
            </button>

            <!-- Inserire v-if="pagination.current != pagination.last" OPPURE :disabled-->
            <button
                class="custom-button"
                :disabled = "pagination.current === pagination.last"
                @click="getSponsoredApartments(pagination.current +1)">
                <i class="fa-solid fa-arrow-right"></i>
            </button>

        </div>

        <PartnerComp />

        <AboutComp />

    </div>
</template>

<script>

import HeroComp from '../sections/HeroComp.vue';
import CardSection from '../sections/CardSection.vue';
import PartnerComp from '../sections/PartnerComp.vue';
import AboutComp from '../sections/AboutComp.vue';
import {apiUrlDatabase} from '../../data/apiConfig';

export default {
    name: "HomePage",
    components: { HeroComp, CardSection, PartnerComp, AboutComp },

    data(){
        return{
            apiUrlDatabase,
            sponsoredApartments: [],
            pagination: {
                current: '',
                last: '',
            },
            showPagination: false
        }
    },

    methods:{
        getSponsoredApartments(page){
            axios.get(this.apiUrlDatabase + 'sponsored/' + '?page=' + page)
                .then(res => {
                    this.sponsoredApartments = res.data.data;
                    console.log(this.sponsoredApartments, 'appartamenti sponsorizzati')

                    this.pagination = {
                        current: res.data.current_page,
                        last: res.data.last_page
                    }

                    console.log(this.pagination);

                    if(this.pagination.current != this.pagination.last){
                        this.showPagination = true;
                    }
                })
        },

        checkExpiredSponsored(){
            axios.get(this.apiUrlDatabase + 'sponsor-expiry-time');
            console.log('EFFETTUATA CHIAMATA API');
        }
    },

    mounted(){
        this.checkExpiredSponsored();
        this.getSponsoredApartments(1)

        document.title = "ThreeBnB | I migliori appartamenti, in tutto il mondo"
    }
}

</script>

<style lang="scss" scoped>

.pagination-container{

    margin-top: -50px;

    .custom-button{

        border: none;
        border-radius: 10px;
        padding: 20px;
        width: 64px;
        margin-right: 5px;

    }

}

</style>
