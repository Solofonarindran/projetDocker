<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClasseRequest extends FormRequest
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
        return
         [
            'libelle'=>'required|string',
            'effectifmax'=>'required|numeric',
            'bareme'=>'required|numeric'

        ];
    }

    public function messages()
    {
        return
        [
            'effectifmax.numeric'=>'Ce Champ n\'accepte qu\'un nombre',
            'bareme.numeric'=>'Ce Champ n\'accepte qu\'un nombre'
        ];
    }
}

