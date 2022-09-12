require('./bootstrap');

$().ready(function(){

    apartmentFormValidator($('#apartmentCreateForm'));
    apartmentFormValidator($('#apartmentEditForm'));

    function apartmentFormValidator(form){
        form.submit(function(event){
            let errors = false;
            const validImagesFile = ['image/jpg', 'image/jpeg', 'image/png', 'image/bmp', 'image/gif', 'image/svg', 'image/webp'];

            $('#error-title').hide();
            $('#error-rooms').hide();
            $('#error-beds').hide();
            $('#error-bathrooms').hide();
            $('#error-sqm').hide();
            $('#error-address').hide();
            $('#error-service').hide();
            $('#error-image').hide();

            // Campo title
                if($('#title').val().length === 0){
                    $('#error-title').show('slow').text('Il campo titolo riepilogativo è obbligatorio');
                    $('#title').addClass('is-invalid');
                    errors = true;
                }
                else if($('#title').val().length < 5){
                    $('#error-title').show('slow').text('Il campo titolo riepilogativo deve avere minimo 3 caratteri');
                    $('#title').addClass('is-invalid');
                    errors = true;
                }
                else if($('#title').val().length > 255){
                    $('#error-title').show('slow').text('Il campo titolo riepilogativo può avere massimo 255 caratteri');
                    $('#title').addClass('is-invalid');
                    errors = true;
                }else{
                    $('#title').removeClass('is-invalid')
                }
            //

            console.log(isNaN(parseInt($('#rooms').val())));

            // Campo rooms
                if(isNaN(parseInt($('#rooms').val()))){
                    $('#error-rooms').show('slow').text('Il campo stanze è obbligatorio');
                    $('#rooms').addClass('is-invalid');
                    errors = true;
                }
                else if(parseInt($('#rooms').val()) < 1){
                    $('#error-rooms').show('slow').text('L\'appartamento deve contenere almeno una stanza');
                    $('#rooms').addClass('is-invalid');
                    errors = true;
                }
                else if(parseInt($('#rooms').val()) > 100){
                    $('#error-rooms').show('slow').text('L\'appartamento può contenere massimo 100 stanze');
                    $('#rooms').addClass('is-invalid');
                    errors = true;
                }
                else{
                    $('#rooms').removeClass('is-invalid')
                }
            //

            // Campo beds
                if(isNaN(parseInt($('#beds').val()))){
                    $('#error-beds').show('slow').text('Il campo letti è obbligatorio');
                    $('#beds').addClass('is-invalid');
                    errors = true;
                }
                else if(parseInt($('#beds').val()) < 1){
                    $('#error-beds').show('slow').text("L\'appartamento deve avere almeno un letto");
                    $('#beds').addClass('is-invalid');
                    errors = true;
                }
                else if(parseInt($('#beds').val()) > 100){
                    $('#error-beds').show('slow').text('L\'appartamento può contenere massimo 100 letti');
                    $('#beds').addClass('is-invalid');
                    errors = true;
                }
                else{
                    $('#beds').removeClass('is-invalid')
                }
            //

            // Campo bathrooms
                if(isNaN(parseInt($('#bathrooms').val()))){
                    $('#error-bathrooms').show('slow').text('Il campo bagni è obbligatorio');
                    $('#bathrooms').addClass('is-invalid');
                    errors = true;
                }
                else if(parseInt($('#bathrooms').val()) < 1){
                    $('#error-bathrooms').show('slow').text('L\'appartamento deve avere almeno un bagno');
                    $('#bathrooms').addClass('is-invalid');
                    errors = true;
                }
                else if(parseInt($('#bathrooms').val()) > 100){
                    $('#error-bathrooms').show('slow').text('L\'appartamento può contenere massimo 100 bagni');
                    $('#bathrooms').addClass('is-invalid');
                    errors = true;
                }
                else{
                    $('#bathrooms').removeClass('is-invalid')
                }
            //

            // Campo sqm
                if(isNaN(parseInt($('#sqm').val()))){
                    $('#error-sqm').show('slow').text('Il campo metri quadri è obbligatorio');
                    $('#sqm').addClass('is-invalid');
                    errors = true;
                }
                else if(parseInt($('#sqm').val()) < 5){
                    $('#error-sqm').show('slow').text('L\appartmento deve essere grande almeno 5 metri quadri');
                    $('#sqm').addClass('is-invalid');
                    errors = true;
                }
                else if(parseInt($('#sqm').val()) > 2000){
                    $('#error-sqm').show('slow').text('L\'appartamento non può essere più grande di 2000 metri quadri');
                    $('#sqm').addClass('is-invalid');
                    errors = true;
                }
                else{
                    $('#sqm').removeClass('is-invalid')
                }
            //

            // Campo address
                if($('#address').val().length === 0){
                    $('#error-address').show('slow').text('Il campo indirizzo è obbligatorio');
                    $('#address').addClass('is-invalid');
                    errors = true;
                }
                else if($('#address').val().lenght < 5){
                    $('#error-address').show('slow').text('L\indirizzo deve essere lungo almeno 5 caratteri');
                    $('#address').addClass('is-invalid');
                    errors = true;
                }
                else if($('#address').val().lenght > 255){
                    $('#error-address').show('slow').text('L\indirizzo può contenere massimo 255 caratteri');
                    $('#address').addClass('is-invalid');
                    errors = true;
                }
                else{
                    $('#address').removeClass('is-invalid')
                }
            //

            // Campo image
                if(!$('#image').prop('files')[0]){
                    $('#error-image').show('slow').text('L\'inserimento di un\'immagine è obbligatorio');
                    errors = true;
                }
                else if($.inArray($('#image').prop('files')[0]['type'], validImagesFile) < 0){
                    console.log('formato dell\immagine: ', $('#image').prop('files')[0]['type']);
                    $('#error-image').show('slow').text('Inserire un file in uno dei seguenti formati: jpg, jpeg, png, bmp, gif, svg, webp');
                    errors = true;
                }
                else if($('#image').prop('files')[0]['size'] > 10000000){
                    $('#error-image').show('slow').text('Inserire un immagine più piccola di 10MB');
                    errors = true;
                }
            //

            // Campo Services
                let checked = $("input[type=checkbox]:checked").length;

                if(!checked) {
                    $('#error-services').show('slow').text('L\'appartamento deve avere almeno un servizio');
                    errors = true;
                }
            //

            // Non mando avanti il form se ci sono degli errori
                if(errors === true){
                    event.preventDefault();
                }
            //

        });

    }
});
