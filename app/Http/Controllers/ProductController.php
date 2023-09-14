<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    function index(){
        return view('views.hello', [
            'texto' => 'Bienvenido'
        ]);
    }
}