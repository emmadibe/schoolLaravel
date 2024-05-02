<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
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
    
            'name'=>'required|min:4',

        ];
    }

    public function messages(): array
    {

        return [

            'name.required' => 'Ingrese un nombre para el alumno',

            'name.min' => 'El nombre del alumno debe tener, como mínimo, 4 caracteres',

        ];

    }


}
