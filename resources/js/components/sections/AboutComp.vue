<template>
    <div class="about-us-section">

        <div class="row custom-container">

            <div class="col-lg-4 col-md-12 col-sm-12 about-text">
                <h2>{{ about[counter].title }}</h2>
                <p>{{ about[counter].text }}</p>

                <div class="slider">
                    <span
                     @click="counter = 0"
                     :class="this.counter == 0 ? 'active' : '' ">1
                    </span>

                    <span
                     @click="counter = 1"
                     :class="this.counter == 1 ? 'active' : '' ">2
                    </span>

                    <span
                     @click="counter = 2"
                     :class="this.counter == 2 ? 'active' : '' ">3
                    </span>
                </div>
            </div>

            <div
                v-if="showButton"
                class="arrow-container">

                <i
                    @click="counter = counter - 1"
                    :class="this.counter < 1 ? 'hide' : ''"
                    class="previous fa-solid fa-arrow-left-long">
                </i>

            </div>


            <div
                @mouseover = mouseIsHover
                @mouseleave = mouseNotHover
                class="img-container text-center">
                <img :src="about[counter].img" :alt="about[counter].title">
            </div>

            <div
                v-if="showButton"
                class="arrow-container">

                <i
                    @click="counter = counter + 1"
                    v-if="counter <= 1"
                    class="next fa-solid fa-arrow-right-long">
                </i>

            </div>


        </div>

    </div>
</template>

<script>

export default {
    name: 'AboutComp',

    data(){
        return{
            showButton: false,
            counter: 0,
            about:[
                {
                    title: "Chi siamo",
                    text: "Siamo la piattaforma su cui puoi fare affidamento per trovare il tuo bnb ideale. Crediamo nella capacità di fare la differenza, per questo tutti i nostri bnb sono realizzati con materie prime ecosostenibili e ad impatto zero. Desideriamo fare la differenza.",
                    img: "https://images.contentstack.io/v3/assets/bltfa2cefdbe7482368/bltcfe32ad33e97bbed/5f5a61332d8d464b43a53626/DenverFeature_1200x630.jpg"
                },
                {
                    title: "Perchè sceglierci",
                    text: "Tutti i nostri bnb sono moderni, vicino alla natura ed ecosostenibili. Garantiamo eccellenza al miglior rapporto qualità-prezzo possibile! Scegliendo i nostri bnb otterrai comfort, benessere e prezzi accessibili ad ogni stagione!",
                    img: "https://images.contentstack.io/v3/assets/bltfa2cefdbe7482368/bltc6f7c14c70c7db16/5f4d553799431928ffc0df9c/Atlanta_header1200x630.jpg"
                },
                {
                    title: "La nostra missione",
                    text: "Vogliamo rivoluzionare il mondo travel permettendo a chiunque di viaggiare. Siamo riusciti nel nostro intento garantendo a tutti i nostri iscritti appartamenti economici, moderni e vicino alla natura. Prendi parte al nostro movimento!",
                    img: "https://images.contentstack.io/v3/assets/bltfa2cefdbe7482368/blte6275d47f2e91243/5f5fcf575e85ad4dee18eb0f/Miamifeature_1200x630.jpg"
                },
            ]
        }
    },

    methods:{
        mouseIsHover(){
            this.showButton = true;
        },
        mouseNotHover(){
            this.showButton = false;
        }
    }
}
</script>

<style lang="scss" scoped>

@import '../../../sass/front/partials/vars';

.about-us-section{

    margin: 80px 0;

    .custom-container{

        display: flex;

        .about-text{

            margin-right: 80px;
            margin-bottom: 30px;

            p{
                margin: 20px 0;
                font-size: 20px;
            }

            .slider{

                display: flex;
                justify-content: center;

                padding: 5px;
                border-radius: 30px;

                width: 120px;
                margin-top: 30px;

                background-color: $colore-primario;

                text-align: center;

                cursor: pointer;

                span{
                    display: block;

                    width: 25px;
                    color: white;
                    text-align: center;
                    margin-right: 10px;

                    border-radius: 50%;
                    margin-right: 5px;

                }

                .active{
                    background-color: #3D3D3D;

                }
            }
        }

        .img-container{

            width: 690px;
            height: 345px;


            img{
                width: 100%;
                height: 100%;
                border-radius: 20px;
                margin-left: 20px;
            }
        }

        .arrow-container{

            position: relative;
            width: 0px;

            .next,
            .previous{

                position: relative;
                z-index: 9999;

                border: 1px solid black;
                border-radius: 50%;

                width: 30px;
                height: 30px;

                display: flex;
                justify-content: center;
                align-items: center;

                cursor: pointer;
                background-color: white;
                // background-color: rgba(0,0,0, 0.4);
                // color: white;

            }

            .previous{
                top: 160px;
                right: -40px;
            }

            .next{
                top: 160px;
                right: 25px;
            }

            .hide{
                display: none;
            }
        }


        @media screen and (max-width: 560px) {

            .about-us-section{
                margin: 20px 0;
            }

            .about-text{
                margin-right: 0px;
            }


            .img-container{
                width: 290px;
                height: 145px;
            }

            p{
                font-size: 18px;
            }

            .arrow-container{
                display: none;
            }
        }

        @media screen and (min-width: 561px) and (max-width: 800px) {

            .img-container{
                width: 400px;
                height: 200px;
            }

        }

        @media screen and (min-width: 992px) and (max-width: 1087px) {

            .img-container{
                width: 420px;
                height: 210px;
            }

        }

        @media screen and (min-width: 1088px) and (max-width: 1198px) {

            .img-container{
                width: 500px;
                height: 250px;
            }

        }

        @media screen and (min-width: 1199px) and (max-width: 1257px) {

            .img-container{
                width: 560px;
                height: 280px;
            }

        }

        @media screen and (min-width: 1258px) and (max-width: 1440px) {

            .img-container{
                width: 590px;
                height: 295px;
            }

        }
        @media screen and (min-width: 1407px) and (max-width: 1679px) {

            .img-container{
                width: 670px;
                height: 335px;
            }

        }
        @media screen and (min-width: 1680px) {

            .img-container{
                width: 815px;
                height: 405px;
            }

        }


    }

}

</style>
