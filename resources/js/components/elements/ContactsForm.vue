<template>
  <div id="szform" class="col-md-6 p-3">
    <h3 class="mb-3">Contatta l'host</h3>
    <form v-on:submit.prevent="submitForm">
      <div class="form-group">
          <label for="email">Email address</label>
          <input
            type="email"
            class="form-control"
            id="email"
            v-model="form.email"
            aria-describedby="emailHelp"
            placeholder="Inserisci la email"
            @click="formSubmitted = false; formError = false"
          />
      </div>

      <div class="form-group">
          <label for="testo">Testo</label>
          <textarea
            v-model="form.text"
            class="form-control"
            id="teto"
            rows="4"
            @click="formSubmitted = false; formError = false"
          >
          </textarea>
      </div>

      <div class="mb-4">
        <input
          type="radio"
          v-model="form.policy"
          id="privacypolicy"
          name="privacypolicy"
          value="1"
          required
        > Accetto i termini della Privacy Policy
      </div>

      <button type="submit" class="btn btn-primary">Invia</button>

    </form>

    <p v-if="formSubmitted" class="text-success mt-3">Messaggio inviato con successo!</p>
    <p v-if="formError" class="text-danger mt-3">L'email è già in uso, riprovare</p>

  </div>
</template>

<script>
    import {apiUrlDatabase} from '../../data/apiConfig';
export default {
  name: "ContactsForm",

  data(){
    return{
        apiUrlDatabase,
        formSubmitted: false,
        formError: false,
        form:{
            email: '',
            text: '',
            policy: 0,
            appId: 0
        }
    }
  },

  props:{
    apartmentid: Number
  },

  methods:{
        submitForm(){

            axios.post(this.apiUrlDatabase + 'send-message', this.form)
                 .then((res) => {
                    console.log(res, 'MESSAGGIO INVIATO CON SUCCESSO');

                    this.form.email = '';
                    this.form.text = '';
                    this.form.policy = '';

                    this.formSubmitted = true;
                 })
                 .catch((error) => {
                    if(error.response){

                        if(error.response.status == 500){
                            this.formError = true;
                        }
                    }
                 });


        }
  },

  mounted(){
        this.form.appId = this.apartmentid;
        // console.log(this.form.appId, 'id appa FORM');
  }
};

</script>

<style lang="scss" scoped>
    button {
    background-color: #eb594e;
    font-weight: 500;
    border: none;
    &:hover {
        background-color: #a33a33;
    }
    }
</style>
