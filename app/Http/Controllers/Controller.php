<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class PrimerController extends BaseController
{
    function index(){
        return view('mis-views.primer-view', [
            'texto' => 'Hola Mundo'
        ]);
    }
}

