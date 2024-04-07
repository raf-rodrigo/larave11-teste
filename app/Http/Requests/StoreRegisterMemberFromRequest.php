<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterMemberFromRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:255|nim:3|unique:register_members',
            'email' => 'required|email|max:50|unique:register_members',
            'cellphone' => 'required',
            'status' => 'required',
            'zipcode' => 'required',
            'address' => 'required',
            'addressNumber' => 'required|min:1',
            'addressComplement' => 'nullable|min:3|max:25',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo NOME é obrigatório',
            'name.min' => 'O campo NOME deve conter no mínimo três caracteres.',
            'name.unique' => "O NOME já existe.",
            'email.required' => 'O campo EMAIL é obrigatório',
            'cellphone.required' => 'O campo CELULAR é obrigatório',
            'status.required' => 'O campo TIPO DE SÓCIO é obrigatório',
            'zipcode.required' => 'O campo CEP é obrigatório',
            'address.required' => 'O campo ENDEREÇO é obrigatório',
            'addressNumber.required' => 'O campo NÚMERO é obrigatório',
            'addressNumber.min' => 'O campo NÚMERO deve conter no mínimo um caractere.',
            'addressComplement.min' => 'O campo COMPLEMENTO deve conter no mínimo três caracteres.',
            'neighborhood.required' => 'O campo BAIRRO é obrigatório',
            'city.required' => 'O campo CIDADE é obrigatório',
            'state.required' => 'O campo ESTADO é obrigatório',
        ];
    }
}
