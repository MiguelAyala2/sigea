<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'roles[]' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El campo "Nombre" es requerido.',
            'email.required' => 'El campo "Email" es requerido.',
            'email.unique' => 'Este email ya esta en uso.',
            'password.required' => 'El campo "Contraseña" es requerido.',
            'password.min' => 'El campo contraseña debe contener al menos 8 caracteres.',
            'roles[].required' => 'Debe seleccionar un rol.',
        ];
    }
}
