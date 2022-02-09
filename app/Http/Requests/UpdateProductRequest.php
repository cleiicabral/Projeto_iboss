<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateProductRequest extends FormRequest
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
        'price'=> 'numeric',
        'description' => 'max:120',
        'quantity' => 'numeric'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['error'=>$validator->errors()->first()],400));
    }
    
    public function messages()
    {
        return [
            'price.numeric' => 'Valor do produto inválido',
            'description.max' => 'Limite de caracteres ultrapassado na descrição',
            'quantity.numeric' => 'Valor inválido para quantidade'
        ];
    }
}