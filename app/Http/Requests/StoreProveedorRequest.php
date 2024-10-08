<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProveedorRequest extends FormRequest
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
            'prov_razon' => 'required',
            'prov_ruc' => 'required|unique:proveedor,prov_ruc',
            'prov_direc' => 'required',
            'prov_telef' => 'required',
            'prov_correo' => 'required|email|unique:proveedor,prov_correo',
        ];
    }

    public function messages(): array
    {
        return [
            'prov_razon.required'=> 'Este campo es requerido',
            'prov_ruc.required'=> 'Este campo es requerido',
            'prov_ruc.unique'=> 'Este ruc ya esta en uso',
            'prov_direc.required'=> 'Este campo es requerido',
            'prov_telef.required'=> 'Este campo es requerido',
            'prov_correo.required'=> 'Este campo es requerido',
            'prov_correo.email'=> 'Este campo debe ser de tipo email',
            'prov_correo.unique'=> 'Este correo ya esta en uso',
        ];
    }
}
