<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PrimerController extends BaseController
{
    function index(){
        return view('mis-views.primer-view', [
            'texto' => 'Este es un ejemplo que si esta compilando bien'
        ]);
    }
}
