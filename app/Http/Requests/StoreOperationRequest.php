<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOperationRequest extends FormRequest
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
            'motif'=>'required|string',
            'montant'=>'required|numeric'
        ];
    }

    public function messages()
    {
        return 
        [
            'montant.numeric'=>'Ce champ doit contenir un numérique'
        ];
    }
}
