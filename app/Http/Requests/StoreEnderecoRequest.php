<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnderecoRequest extends FormRequest
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
            // 'logradouro' => 'required|min:10|max:255',
            // 'numero' => 'required|max:20',
            // 'bairro' => 'required|min:3|max:50',
            // 'cidade' => 'required|min:3|max:80',
            // 'cpf' => 'required|min:5|max:8|numeric',
            // 'estado' => 'required|max:2',

        ];
    }
}