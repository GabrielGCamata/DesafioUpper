<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
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
            'nome'              => ['required', 'min:2', 'max:200'],
            'cpf'               => ['required', 'digits:11'],
            'data_nascimento'   => ['required','min:2','max:255'],
            'email'             => ['required', 'min:2', 'max:200', 'email'],
            'estado'             => ['required'],
            'cidade'             => ['required'],
            'logradouro'             => ['required', 'min:2', 'max:200'],
        ];
    }
}
