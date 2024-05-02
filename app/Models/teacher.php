<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;//Definición necesaria para utilizar MODIFICADORES y ACCESORIOS.

class Teacher extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'teacherId'; // Los modelos reconocen como clave primaria (primarykey) a ID. Por ende, muchos métodos de la clase Model, tales como delete() o edit() buscarán un campo llamado "id" a la hora de saber con qué registro realzar tal acción (una acción de eliminar, por ejemplo). Pero, puede ocurrrir que en mi base de datos yo no quiera llamar a mi primarykey "id". En mi caso, por ejemplo, lo llamo 'teacherId'. En esta sentencia, aclaro eso para que los métodos tomen a 'teacherId' como la primarykey. 

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    ////MODIFICADOR y ACCESORIO. Deseo que el valor que el usuario ingrese en el campo name se guarde en la base de datos en minúscula, pero que la primera letra se vea en mayúscula. Para ello hago uso de la clase Attribute.
    protected function name(): Attribute
    {

        return new Attribute(

            get:fn($value) => ucwords($value),

            set:fn($value) => strtolower($value)

        );

    }
}
