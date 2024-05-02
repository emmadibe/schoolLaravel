<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttemptTeacher extends FormRequest
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

            'name'=>'required|exists:teachers,name',
            'password' => 'required',

        ];
    }

    public function messages(): array
    {

        return [

            'name.required' => 'Por favor, ingrese su nombre. Gracias.',

            'name.exists' => 'EL USUARIO NO EXISTE',

           // 'password.confirmed' => 'ERROR EN LA CONTRASEÑA',

        ];

    }

}
