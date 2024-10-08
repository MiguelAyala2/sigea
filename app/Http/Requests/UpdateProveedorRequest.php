<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateProveedorRequest extends FormRequest
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
            'prov_ruc' => ['required',],
            'prov_direc' => 'required',
            'prov_telef' => 'required',
            'prov_correo' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'prov_razon.required'=> 'Este campo es requerido',
            'prov_ruc.required'=> 'Este campo es requerido',
            'prov_direc.required'=> 'Este campo es requerido',
            'prov_telef.required'=> 'Este campo es requerido',
            'prov_correo.required'=> 'Este campo es requerido',
        ];
    }
}
