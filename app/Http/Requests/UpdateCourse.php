<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourse extends FormRequest
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
            
            'name'=>'required|min:3',
            'school'=>'required',
            'numberGrades'=>'required',
            'numberStudents'=>'required',
            'subject'=>'required',

        ];
    }

    public function messages(): array
    {

        return[

            'name.required' => 'El nombre del curso es un campo obligatorio para actualizar el curso',

        ];

    }

    public function attributes(): array
    {

        return[

            'name' => 'nombre del curso a actualizar',

        ];

    }
}
