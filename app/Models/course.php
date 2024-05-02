<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Este modelo administrarála tabla de mi base de datos llamada cursos. 

class Course extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'courseId'; // Los modelos reconocen como clave primaria (primarykey) a ID. Por ende, muchos métodos de la clase Model, tales como delete() o edit() buscarán un campo llamado "id" a la hora de saber con qué registro realzar tal acción (una acción de eliminar, por ejemplo). Pero, puede ocurrrir que en mi base de datos yo no quiera llamar a mi primarykey "id". En mi caso, por ejemplo, lo llamo 'courseId'. En esta sentencia, aclaro eso para que los métodos tomen a 'courseId' como la primarykey. 

    public function getRouteKeyName()
    {
        
        return 'name';

    }


}
