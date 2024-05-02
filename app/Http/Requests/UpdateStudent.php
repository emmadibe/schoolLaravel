<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudent extends FormRequest
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
            'name' => 'required|min:4',
        ];
    }

    public function messages():array
    {

        return [

            'name.required' => 'Ingresar el nombre del alumno a editar.',

            'name.min' => 'El nombre del alumno debe poseer, como mínimo, cuatro caracteres.',

        ];

    }

}
