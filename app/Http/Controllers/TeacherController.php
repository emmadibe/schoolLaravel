<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthenticateTeacher;
use App\Http\Requests\StoreTeacher;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;
use App\Http\Requests\UpdateTeacher;
use App\Mail\NewUserMailable;
use App\Http\Controllers\MailsController;
use DragonCode\Support\Helpers\Str;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    
    public function index()
    {

        $teachers = Teacher::orderBy('teacherId', 'desc')->paginate(10);

        return view('teachers.index', compact('teachers'));

    }

    public function store(StoreTeacher $request)
    {

        $teacher = new Teacher(); // $teacher es una instancia de la clase Teacher();

        $teacher -> name = $request -> name;
        $teacher -> branch = $request -> branch;
        $teacher -> rol = 2;
        $teacher -> email = $request -> email;
        $teacher -> password = $request -> password;

        //////////Le pongo una foto de perfil genérica.

        // Ruta donde deseas guardar la imagen en el servidor
        $rutaDestino = public_path("img/photo/"); // Por ejemplo, la carpeta "imagenes" en el directorio público

        // Nombre de la imagen que deseas asignar
        $nombreImagen = 'generico.png'; // Puedes asignar el nombre que desees

        // Mover la imagen desde tu computadora al servidor
        $imagen = $request->file('photo'); // Obtener la imagen de la solicitud

        $teacher->namePhoto = $nombreImagen;
        $teacher->photo = $imagen;

        ///////////////////////

        //Yo deseo que, cuando se cree el usuario, se le mande un mail:
        $newUser = new MailsController;
        $newUser->newUser($request);
        //////////////////////////////

        $teacher -> save(); //Guardo el nuevo registro-usuario en la base de datos.

        $teacherId = Teacher::where([
            'name' => $teacher->name,
            'email' => $teacher->email,
            'password' => $teacher->password
        ])->first();

        session(['teacherId' => $teacherId->teacherId, 'name' => $teacher->name, 'email' => $teacher->email, 'rol' => $teacher->rol]); //El valor de la variable teacherId, como es mi primaryKey, se crea solo de forma autoincremental.
        
        session()->flash('info', 'Bien, '.$teacher->name.'. Has creado un nuevo usuario. Te enviamos un correo a '.$teacher->email.'!');

        return redirect()->route('home'); 

    }

    public function create()
    {

        return view('teachers.create');

    }

    public function update(UpdateTeacher $request, $teacherId) //Obviamente, las reglas de validación son las mismas que para el método store().
    {

        $teacher = Teacher::find($teacherId);

        $teacher->name = $request->name;
        $teacher->email = $request->session()->get('email'); 
        $teacher->password = $request->password;
        $teacher->branch = $request->branch;
        $teacher->rol = $request->session()->get('rol');

        if($request->hasFile("photo")){

            $photo =  $request->file("photo");
            $str = new Str;
            $namePhoto = $str->slug("photo").".".$teacherId.".".$photo->guessExtension(); //La propiedad guessExtension es la extensión. 

            $ruta = public_path("img/photo/");

            $photo->move($ruta, $namePhoto);

            $teacher->namePhoto = $namePhoto;

            $teacher->photo = $photo;

        }

        $teacher->save();

        session(['name' => $teacher->name]); //Tengo que actualizar también la variable de sesión.

        return redirect()->route('teachers.edit');

    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('name', 'password');
    
        //Debemos verificar que lo que tenemos en la propiedad name y password coinciden con lo que tenemos en esos mismos campos en la base de datos. Para ello utilizaremos el fazat Auth. Y usaremos su método llamado attempt(), el cual significa intentar. Porque vamos a INTENTAR hacer loguin con ese name y ese password.

        if(Auth::attempt($credentials)){ //El método attempt returna un valor bool: true, si hay coincidencias en la base de datos; false, si no. Prueba que haya coincidencias entre las variables que le pasamos por parámetro y los registros que hay en la tabla user. Por defecto es user, pero nosotros acalaramos que teacher es nuestra tabla de usuarios.

            $teacherId = Auth::user()->teacherId; //Llamo al método user de la clase Auth. El método user accede a todas las propiedades o campos del usuario autentificado. Por ende, luego de la flechita solo debo escribir el nombre de la propiedad a la cual deseo acceder. En este caso, deseo acceder a la propiedad teacherId.

            //Yo quiero que cuando el usuario se loguee, se dirija a la página en donde muestra los cursos en donde el campo teacherId sea igual al campo teacherId de la tabla teacher.
            $courses = Course::Where('teacherId', '=', $teacherId)->OrderBy('courseId', 'desc')->paginate(); 

            session(['teacherId' => $teacherId, 'name' => Auth::user()->name, 'rol' => Auth::user()->rol, 'email' => Auth::user()->email]); // Estoy guardando las variables de sesión. Puedo recuperarlas y usarlas tantas veces quiera. Puedo ver que la función session pide como parámetro un diccionario, en donde debo escribir el nombre de la variable a guardar(clave) y el valor que tendrá (valor). Es muy útil guardar ciertas variables de sesión porque las requiero seguidas. Por ejemplo, necesito siempre el id para saber qué cursos traerme.

            return view('courses.index', compact('courses'));

        }else{

            return "No logueado";

        }

    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');

    }

    public function destroy($teacherId)
    {

        $teacher = Teacher::where('teacherid', $teacherId)->first();

        $teacher->delete();

        $teachers = Teacher::orderBy('teacherId', 'desc')->paginate(10);

        return view('teachers.index', compact('teachers'));

    }

    public function edit()
    {

        $teacherId = session()->get('teacherId');

        $teacher = Teacher::where('teacherId', '=', $teacherId)->first();

        return view('teachers.edit', compact('teacher'));

    }

}
