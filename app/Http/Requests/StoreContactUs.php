<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactUs extends FormRequest
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
            
            'name'=>'required|min:5|max:30',
            'mail'=>'required|email',
            'message'=>'required',
            
        ]; //La función nos retorna un diccionario. La clave, es el campo del formulario; el valor, los requerimientos para ser validados.
    }

    public function messages(): array
    {

        return [ 

            'name.required' => 'Por favor, ingresar el nombre del curso. Gracias.',

            'name.min' => 'El minimo de caracteres para el nombre son cinco.',

            'name.max' => 'El maximo de caracteres para el nombre son 30.',

            'mail.required' => 'Por favor, ingresar el nombre de la institución a la cual pertenece el curso. Gracias.',

            'mail.email' => 'Todo correo electronico debe tener un arroba: @.',

            'message.required' => 'Por favor, escriba el mensaje que desea enviar.',

        ]; //La función retorna un diccionario en donde cada elemento del diccionario será una regla de validación de un campo del formulario (clave) seguido del mensaje que se imprime en pantalla en caso de no pasar dicha regla (valor).

    }

    public function attributes(): array
    {

        return [

            'name' => 'nombre del curso',

        ];

    }
}
