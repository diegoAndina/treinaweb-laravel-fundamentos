<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFuncionarioRequest extends FormRequest
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
            'nome' => 'bail|string|required|min:3|max:100|unique:funcionarios',
            'cpf' => 'bail|required|min:8|max:11|unique:funcionarios',
            'salario' => 'bail|required|numeric|min:600|max:99999.99|unique:funcionarios',
            'situacao' => 'boolean|required|',
            'data_contratacao' => 'date|required|',
        ];
    }
}