<?php

namespace App\Http\Controllers;

use App\Models\Course; 
use App\Http\Requests\StoreCourse;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCourse;
use Nette\Utils\Random;

class CourseController extends Controller
{

    public function index(){ 

        $teacherId = session()->get('teacherId');

        $courses = Course::Where('teacherId', '=', $teacherId)->OrderBy('courseId', 'desc')->paginate(); 
        
        return view('courses.index', compact('courses'));
        
    }

    public function create(){ //Al método encargado para mostrar un formulario que sirve para crear algo (un course, o lo que sea) se lo llama, por convención, create.

        return view('courses.create'); //

    }

    public function store(StoreCourse $request){
     
        $course = new Course();

        $course->name = $request->name;
        $course->school = $request->school;
        $course->numberGrades = $request->numberGrades;
        $course->numberStudents = $request->numberStudents;
        $course->subject = $request->subject;
        $course->slug = rand(1, 100000);
        $course->teacherId = session()->get('teacherId');

        $course->save();

        return redirect()->route('courses.show', $course->courseId);
 
    }

    public function show($courseId){ //Al método encargado de mostrar un elemento en particular (en este caso, un course en particular) se le llama, por convención, show.

        $course = Course::where('courseId', $courseId)->first();

        return view('courses.show', compact('course'));//Como segundo parámetro del método view() le paso un array en donde le pongo el nombre con el que va a capturar la vista a la variable que le paso por parámetro al método show. Si no hago esto, la página me tirará un error porque no definí a la variable $course.

    }

    public function edit($courseId){

        $course = Course::where('courseId', $courseId)->first();

        return view('courses.edit', compact('course'));

    }

    public function update(UpdateCourse $request, $courseId){

        $course = Course::find($courseId);

        $course->name = $request->name;
        $course->school = $request->school;
        $course->subject = $request->subject;
        $course->numberGrades = $request->numberGrades;
        $course->numberStudents = $request->numberStudents;
        $course->teacherId = $request->session()->get('teacherId');

        $course->save();

        return redirect()->route('courses.show', $course->courseId);

    }

    public function destroy($courseId){

        $course = Course::where('courseId', $courseId)->first();

        $course->delete();

        $teacherId = session()->get('teacherId');

        $courses = Course::Where('teacherId', '=', $teacherId)->OrderBy('courseId', 'desc')->paginate(); 

        return view('courses.index', compact('courses'));

    }

}
