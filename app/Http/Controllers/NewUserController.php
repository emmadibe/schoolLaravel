<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\NewUserMailable;
use Illuminate\Support\Facades\Mail;

class NewUserController extends Controller
{
    
    public function store(Request $request) 
    {

        Mail::to('emmadibe33@gmail.com')
            ->send(new NewUserMailable( $request->all()));
        //Los métodos to() y send() son métodos ESTÁTICOS. Esto quiere decir que solo pueden ser llamados directamente desde la clase, y no desde una instancia de la misma. Por lo tanto, no podría crear una instancia de la clase Mail llamada, por ejemplo, $mail, y llamar al método (->) send o to desde dicha instancia.

        // $name =  $request->name;
        //$email =  $request->email;
        
       // session()->flash('info', 'Bien, '.$name.'. Has enviado el mensaje con exito a la casilla '.$email.'!');

    }

}
