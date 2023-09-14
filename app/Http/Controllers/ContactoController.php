<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class ContactoController extends BaseController
{
    public function index() // se muestra el formulario
    {
        return view('mis-views.contacto');
    }
    public function send(Request $request)
    {
        // Validar y enviar el correo
    }
    public function contacted(){
        return view('mis-views.contactado');
    }
    
}
