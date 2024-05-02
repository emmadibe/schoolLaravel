<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeContoller;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//////////////RUTA PARA LA URL PRINCIPAL: SLASH (/):

Route::get('/', HomeContoller::class) -> name('home');

////////////////////////////RUTAS PARA CURSOS



Route::controller(CourseController::class)->middleware('auth')->group(function(){
    // Ruta para ver la lista de mis cursos.
    Route::get('courses', 'index')->name('courses.index');

    // Ruta para crear un nuevo curso a partir de un formulario.
    Route::get('courses/create', 'create')->name('courses.create');

    // Ruta para mostrar un curso específico.
    Route::get('courses/{courseId}', 'show')->name('courses.show');

    // Ruta para almacenar un nuevo curso.
    Route::post('courses', 'store')->name('courses.store');

    // Ruta para editar un curso específico.
    Route::get('courses/{courseId}/edit', 'edit')->name('courses.edit');

    // Ruta para actualizar un curso específico.
    Route::put('courses/{course}', 'update')->name('courses.update');

    Route::get('courses/{courseId}/destroy', 'destroy')->name('courses.destroy');

});



/////////////////////////RUTAS PARA DOCENTES

Route::controller(TeacherController::class)->group(function(){

    Route::post('teachers', 'store')->name('teachers.store');

    Route::get('teachers/create', 'create')->name('teachers.create');

    Route::post('teachers/authenticate', 'authenticate')->name('teachers.authenticate');

    Route::put('teachers/logout', 'logout')->name('teachers.logout');

    Route::put('teachers/{teacher}', 'update')->name('teachers.update')->middleware('auth');

    Route::get('teachers', 'index')->name('teachers.index')->middleware('auth');

    Route::get('teachers/{teacherId}/destroy', 'destroy')->name('teachers.destroy')->middleware('auth');

    Route::get('teachers/edit', 'edit')->name('teachers.edit')->middleware('auth');

    Route::put('teachers/{teacherId}', 'update')->name('teachers.update')->middleware('auth');

});

///////////////////////RUTAS PARA ESTUDIANTES

Route::controller(StudentController::class)->middleware('auth')->group(function(){

    Route::post('students/{courseId}/{i}', 'store')->name('students.store');

    Route::put('students/{courseId}/{i}', 'update')->name('students.update');

    Route::put('students/{courseId}/{i}/{j}', 'updateGrades')->name('students.updateGrades');

});

////////////////////////RUTA PARA NOSOTROS. PUEDO USARLA PARA DESCRIBIR MI TRAYECTORIA ACADÉMICA Y PROFESIONAL:

Route::view('we', 'we') -> name('we');

///////////////////////RUTA PARA CONTACTANOS:

Route::controller(ContactUsController::class)->middleware('auth')->group(function(){

    Route::get('contactUs', 'index')->name('contactUs.index');

    Route::post('contactUs', 'store')->name('contactUs.store');

});

