<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUs;
use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    
    public function index()
    {

        return view('contactUs.index');

    }

    public function store(StoreContactUs $request) //Utilizo el form Request para establecer y corroborar las reglas de validación de mi formulario.
    {

        Mail::to('emmadibe33@gmail.com')
            ->send(new ContactanosMailable($request->all()));
        //Los métodos to() y send() son métodos ESTÁTICOS. Esto quiere decir que solo pueden ser llamados directamente desde la clase, y no desde una instancia de la misma. Por lo tanto, no podría crear una instancia de la clase Mail llamada, por ejemplo, $mail, y llamar al método (->) send o to desde dicha instancia.

        $name = $request->name;
        $email = $request->mail;
        
        session()->flash('info', 'Bien, '.$name.'. Has enviado el mensaje con exito a la casilla '.$email.'!');

        return redirect()->route('contactUs.index');

    }

}
