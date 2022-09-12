<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormApartmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

                'title' => 'required|min:5|max:255',
                'rooms' => 'required|numeric|min:1',
                'beds' => 'required|numeric|min:1',
                'bathrooms' => 'required|numeric|min:1',
                'sqm' => 'required|numeric|min:5',
                'address' => 'required|min:5|max:255',
                'image' => 'required|max:10000|image',
                'services' =>'required_without_all',
                'visible' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => '*Campo obbligatorio',
            'title.min' => 'Minimo 5 caratteri',
            'title.max' => 'Massimo 255 caratteri',

            'rooms.required' => '*Campo obbligatorio',
            'rooms.numeric' => 'Inserisci il numero delle stanze',
            'rooms.min' => 'Minimo 1 stanza',

            'beds.required' => '*Campo obbligatorio',
            'beds.numeric' => 'Inserisci il numero dei letti',
            'beds.min' => 'Minimo 1 letto',

            'bathrooms.required' => '*Campo obbligatorio',
            'bathrooms.numeric' => 'Inserisci il numero di bagni',
            'bathrooms.min' => 'Minimo 1 bagno',

            'sqm.required' => '*Campo obbligatorio',
            'sqm.numeric' => 'Inserisci la grandezza',
            'sqm.min' => 'Minimo 5 metri quadri',

            'address.required' => '*Campo obbligatorio',
            'address.min' => 'Minimo 5 caratteri',
            'address.max' => 'Massimo 255 caratteri',

            'image.required' => '*Obbligatorio caricare un\'immagine',
            'image.max' => 'Caricare immagine che pesi meno di 10MB',
            'image.image' => 'Il file che hai caricato non è un\'immagine',

            'services.required_without_all' =>'*Seleziona almeno un servizio',

            'visible.required' => '*Seleziona',
        ];
    }
}
