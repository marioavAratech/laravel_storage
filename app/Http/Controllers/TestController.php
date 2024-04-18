<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TestController{

    public function index($nombre,$edad){
        echo "Ruta 1: Hola, ".$nombre-", tu edad es: ".$edad." años.";
    }
}

?>