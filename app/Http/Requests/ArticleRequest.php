<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|min:5',
            'description' => 'required|min:20',
            'image' => 'image',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Il titolo è obbligatorio",
            'title.min' => "Il titolo deve contenere almeno 5 caratteri",
            'description.min' => "La descrizione deve contenere almeno 20 caratteri",
            'description.required' => "La descrizione è obbligatoria",
            'image.image' => "Inserisci un'immagine in formato jpeg, png, bmp, o gif" //questo errore non compare, l'immagine non è richiesta, nel caso va quella di default
        ];
    }
}
