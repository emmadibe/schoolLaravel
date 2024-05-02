<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;

    protected $primaryKey = 'studentId'; // Los modelos reconocen como clave primaria (primarykey) a ID. Por ende, muchos métodos de la clase Model, tales como delete() o edit() buscarán un campo llamado "id" a la hora de saber con qué registro realzar tal acción (una acción de eliminar, por ejemplo). Pero, puede ocurrrir que en mi base de datos yo no quiera llamar a mi primarykey "id". En mi caso, por ejemplo, lo llamo 'studentId'. En esta sentencia, aclaro eso para que los métodos tomen a 'studentId' como la primarykey. 

    
}
