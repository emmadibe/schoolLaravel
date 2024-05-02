<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function Laravel\Prompts\password;

class StoreTeacher extends FormRequest
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
                'email'=>'required|email|unique:teachers,email', // La regla de validación unique establece que el dato ingresado por el usuario NO debe existir en la base de datos. Por eso, me pide dos parámetros: el nombre de la tabla y de la columna en donde NO debe existir dicho dato. En este caso, yo quiero que el dato ingresado en el campo email por el usuario no exista en la columna email de la tabla teachers de la base de datos escuelalaravel_db. Viste que es muy común que en las app no te dejen crearte una cuenta con un mail que ya se encuentra registrado.

            ];

    }

    public function messages(): array
    {

        return [

            'name.required' => 'Por favor, ingrese su nombre. Gracias.',

            'branch.required' => 'Por favor, ingresar la rama a la que se dedica: Ciencias Sociales, Naturale, entre otras.',

            'email.unique' => 'El mail ya fue registrado. Recupere la contraseña o elija otro mail, por favor.',

            'password.confirmed' => 'Las contraseñas no coinciden',

        ];

    }

    public function attributes(): array
    {
        
        return [

            'name' => 'Nombre del docente',

        ];

    }

}
