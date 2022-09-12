<template>
<div class="sponsor">

    <div class="container text-center m-5">
      <h1>Sponsorizza il tuo annuncio</h1>
    </div>

    <div class="d-flex justify-content-center align-items-center container">

        <div class="d-flex card text-center m-2 lite">
            <h1>Lite</h1><span class="d-block">2,99 &euro;</span>
            <div class="mt-4"><p>Ottieni un posizionamento di rilievo per</p></div>
            <h1>24h</h1>
            <a href="#scegli" @click="checkLite" class="seleziona">Seleziona</a>
        </div>
        <div class="d-flex card text-center m-2 plus">
            <p class="popolare position-absolute price-badge font-weight-normal">Più popolare</p>
            <h1>Plus</h1><span class="d-block sbarra">8,97 &euro;</span><span class="d-block">5,99 &euro;</span>
            <div class="mt-4"><p>Ottieni un posizionamento di rilievo per</p></div>
            <h1>72h</h1>
            <a href="#scegli" @click="checkPlus" class="seleziona">Seleziona</a>
        </div>

        <div class="d-flex card text-center m-2 gold">
            <h1>Gold</h1><span class="d-block sbarra">17,94 &euro;</span><span class="d-block">9,99 &euro;</span>
            <div class="mt-4"><p>Ottieni un posizionamento di rilievo per</p></div>
            <h1>144h</h1>
            <a href="#scegli" @click="checkGold" class="seleziona">Seleziona</a>
        </div>
    </div>

    <div id="scegli" class="d-flex align-items-center justify-content-center flex-column">
      <div>
        <h3>Seleziona il tipo di sponsorizzazione</h3>
      </div>

      <div class="d-flex flex-row">
        <p>
        Lite <input type="radio" name="sponsor" value="lite" :checked="liteChecked" />
        </p>
        <p>
        Plus <input type="radio" name="sponsor" value="plus" :checked="plusChecked" />
        </p>
        <p>
        Gold <input type="radio" name="sponsor" value="gold" :checked="goldChecked" />
      </p>
      </div>



    </div>

  </div>
</template>

<script>
    export default {
        name: 'SponsorshipsComp',
        data(){
            return {
                liteChecked: false,
                plusChecked: false,
                goldChecked: false,
            }
        },

        methods:{
            checkLite(){
                this.liteChecked = true
            },
            checkPlus(){
                this.plusChecked = true
            },
            checkGold(){
                this.goldChecked = true
            }
        },

        mounted(){
            document.title = "Lello"
        }

    }

</script>

<style lang="scss" scoped>

body{
    background:#eee;
}

.sponsor{
  margin-bottom: 100px;
}

#scelto{
  bottom: 0;
  height: 30px;
  background-color: #EB594E;
}

.card {
  width: 350px;
  padding: 10px;
  border-radius: 20px;
  color: #fff;
  height: 400px;
  display: flex;
  position: relative;
  align-items: center;
  justify-content: center;
  transition: 0.5s;
}

.lite{
  color: #0e0e0e;
  background-color: #ffffff;
  border: solid 3px #EB594E;
}

.lite:hover, .plus:hover, .gold:hover{
  background-color: #EB594E;
  background-image: none;
  color: white;
}

.plus{
  color: #404040;
  background-image: url(https://media.istockphoto.com/photos/abstract-metal-background-silver-gray-background-picture-id1287620067?b=1&k=20&m=1287620067&s=170667a&w=0&h=fZF45_nnF2owHwG11jRUcm8ibFirkUo1kZ1aozGJvCs=);
  background-position: top;
  background-size: cover;
  border: solid 3px #EB594E;
}

.gold{
  color: #404040;
  background-image: url(https://i.pinimg.com/originals/1e/c8/d2/1ec8d279aacf9eae231a6b9945b8bdd3.jpg);
  background-position: center;
  border: solid 3px #EB594E;
}


.card h1 {
  font-size: 48px;
  margin-bottom: 0px;
}

.card span {
  font-size: 28px;
}

.image {
  position: absolute;
  opacity: .1;
  left: 0;
  top: 0;
}

.image2 {
  position: absolute;
  bottom: 0;
  right: 0;
  opacity: .1;
}

.sbarra{
  text-decoration: line-through;
}

.popolare{
  bottom: -63px;
  background-color: #EB594E;
  color: #fefefe;
  font-weight: 600;
  font-size: 24px;
  border: solid 2px #EB594E;
  padding: 3px;
  border-radius: 0px 0px 20px 20px;
}

.seleziona{
  padding: 10px;
  color: White;
  background-color: #212529;
  margin-top: 15px;
  border-radius: 25px;
}

#scegli{
  margin-top: 100px;
  height: 300px;
  width: 100%;
  & a{
  color: white;
  background-color: #EB594E;
  font-size: 20px;
  font-weight: 600;
  padding: 10px;
  margin: 30px;
  border-radius: 20px;
  }
  & a:hover{
  background-color: #404040;
  }
  & p{
  margin: 22px;
  font-size: 22px;
  font-weight: 600;
  }
}

#buttonpay{
  margin: 20px;
}


</style>
