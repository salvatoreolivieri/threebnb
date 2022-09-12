<template>
    <div class="hero-section">
        <div class="custom-container">
            <div class="call-to-action">
                <h1>Trova il bnb <br> piu adatto alle <br> tue esigenze</h1>
                <router-link class="button" to="ricerca">Esplora</router-link>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'HeroComp'
    }
</script>

<style lang="scss" scoped>

@import '../../../sass/front/partials/vars';

.hero-section{
    height: 700px;
    width: 100%;

    background-image: url('../../../assets/hero-section-background.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

    margin-top: -110px;
    padding-top: 270px;

    .custom-container{

        .call-to-action{

            max-width: 460px;

            h1{
                color: white;
                font-size: 47px;
                margin-bottom: 20px;
            }

            .button{

                width: 120px;
                padding: 8px 20px ;

                border-radius: 30px;
                border: 1px solid $colore-primario;

                font-size: 24px;
                color: white;
                background-color: $colore-primario;

                cursor: pointer;

                &:hover{
                    text-decoration: none;
                }

            }


        }

    }

}

</style>
