<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidationFormRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Regras de validações a serem aplicados na requisição
     *
     * @return array
     */
    public function rules()
    {
        return [
            'passwordNov' =>'required|string|min:8',
            'passwordCon' =>'required|string',
        ];
    }

    /**
     * Mensagens personalizadas das validações
     *
     * @return array
     */
    public function messages()
    {
        return [
            'passwordNov.required' => 'Você deve preencher este campo.',
            'passwordNov.min' => 'Sua senha deve ter no mínimo 8 caracteres.',
            'passwordCon.required' => 'Você deve preencher este campo.',
        ];
    }
}
