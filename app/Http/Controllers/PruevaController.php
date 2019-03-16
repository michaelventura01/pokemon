<?php
namespace pokemon\Http\Controllers;
use pokemon\Http\Controllers\Controller; 

class PruevaController extends Controller{

    public function prueva($name){
        return 'PROVANDO CONTROLADOR PruevaControles con '.$name;
    }
}

