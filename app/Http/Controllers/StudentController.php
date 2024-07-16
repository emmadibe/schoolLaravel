<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudent;
use App\Http\Requests\UpdateStudent;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function updateGrades(Request $request, $courseId, $i, $j)
    {

        $student = Student::where(['courseId' => $courseId, 'columnNumber' => $i, 'teacherId' => session()->get('teacherId')])->first(); //Si hay una coincidencia en la consulta sql; es decir, si en mi base de datos se encuentra un registro que cumpla con las condiciones señaladas en el método where, la consulta me retornará un objeto, el cual es una instancia de la clase Student, y será almacenado en la variable $student. Ese objeto tendrá como propiedades cada uno de los campos de mi tabla Student de la base de datos.

        if($student->grades != NULL){

            $gradesArray = json_decode($student->grades); // Convertir la cadena JSON a un array asociativ

            $cantidad = count($gradesArray);

            for($i = 0; $i < $cantidad; $i++){

                $gradesArray2[$i] = $gradesArray[$i];

            }

            $gradesArray2[$i] = $request->grades;

            $student->grades = $gradesArray2;

            $student->save();

            return redirect()->route('courses.show', compact('courseId'));

        }else{ //Ahora viene lo que hago si el valor de $student->grades es null y, por ende, no tiene valor. Debo cargar el array desde 0.

            $gradesArray = array();

            $gradesArray[0] = $request->grades;

            $student->grades = array();

            $student->grades = $gradesArray[0];

            $student->save();

            return redirect()->route('courses.show', compact('courseId'));

        }

    }

    public function update(UpdateStudent $request, $courseId, $i)
    {

            $student = Student::where(['courseId' => $courseId, 'teacherId' => session()->get('teacherId'), 'columnNumber' => $i])->first(); //Si hay una coincidencia en la consulta where(o sea, hay un registro que cumple con usas condiciones), entonces el método me va a retornar un objeto. $student será un objeto. 

            if($student){ //Si el método where de la clase Student me retorno un objeto, quiere decir que debo actualizar su valor.

                $student->name = $request->name;

                $student->save();

                return redirect()->route('courses.show', compact('courseId'));

            }else{ //Si $student está vacío, es porque el método where() de la clase Student no encontró coincidencias an la db. Entonces, debo crear un registro nuevo. Para eso, primero creo una instancia de la clase Student.

                $student = new Student(); //Creo una instancia de la clase Student. Por lo tanto, hereda todos sus métodos y propiedades.

                $student->name = $request->name; //A la propiedad name del objeto student, le asigno el valor de la propiedad name del objeto $request. Cada uno de los campos del formulario que me redirige a la ruta administrada por el método store() es una propiedad del objeto $request, los cuales fueron validados primero por la clase StoreStudent(es un Form Request).
                $student->teacherId = session()->get('teacherId');
                $student->courseid = $courseId;
                $student->columnNumber = $i; 
        
                $student->save();
        
                //Si la propiedad name del objeto student ya tiene un valor, debo reedirigirme a la ruta que es administrada por el método update. Pues, voy a querer actualizar al registro, no crear uno nuevo.
        
                return redirect()->route('courses.show', compact('courseId'));

            }

    }

}
