<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacher extends FormRequest
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

                'name'=>'required|min:5',
                'branch'=>'required',
                'password'=>'required|between:7,30|confirmed', //Una regla de validación intersante es confirmed. Muy usado para contraseñas, esa regla de validación se cumple cuando el valor del campo al que se le establece esa regla es igual a otro campo, el cual debe llevar el mismo nombre más _confirmation. Por ejemplo, si le pongo la regla a un campo llamado “password”, e valor que ingrese el usuario debe ser igual al que ingrese en “password_confirmation”.

            ];

    }

    public function messages(): array
    {

        return [

            'name.required' => 'Por favor, ingrese su nombre. Gracias.',

            'branch.required' => 'Por favor, ingresar la rama a la que se dedica: Ciencias Sociales, Naturale, entre otras.',

            'password.confirmed' => 'Las contraseñas no coinciden. Revisar.',

        ];

    }

    public function attributes(): array
    {
        
        return [

            'name' => 'Nombre del docente',

        ];

    }
}
