<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:1|max:255",
            "description" => "required|string",
            "thumb" => "required|url",
            "price" => "required",
            "series" => "required|string",
            "sale_date" => "required",
            "type" => "required|string",
        ];
    }
    public function messages()
    {
        return [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" =>  "Il titolo deve avere almeno :min caratteri",
            "title.max" =>  "Il titolo deve avere massimo :max caratteri",
            "description.required" => "Il contenuto del post è obbligatorio",
            "thumb.required" => "L'immagine è obbligatoria",
            "price.required" => "Il prezzo è obbligatorio",
            "series.required" => "La serie è obbligatoria",
            "sale_date.required" => "La data di rilascio è obbligatoria",
            "type.required" => "La tipologia è obbligatoria",
        ];
    }
}
