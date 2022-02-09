<?php

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateProductRequest extends FormRequest
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
        'name' =>'required',
        'price'=> 'required|numeric',
        'description' => 'max:120',
        'quantity' => 'required|numeric'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['error'=>$validator->errors()->first()],400));
    }
    
    public function messages()
    {
        return [
            'name.required' => 'É necessário preencher o nome do produto',
            'price.required' => 'É necessário preencher o valor do produto',
            'price.numeric' => 'Valor do produto inválido',
            'description.max' => 'Limite de caracteres ultrapassado na descrição',
            'quantity.required' => 'É necessário preencher a quantidade do produto',
            'quantity.numeric' => 'Valor inválido para quantidade'
        ];
    }
}
