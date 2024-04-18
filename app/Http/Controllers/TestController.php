<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller{

    public function index($nombre,$edad){
        echo "Ruta 1: Hola, ".$nombre-", tu edad es: ".$edad." años.";
    }
}

?>