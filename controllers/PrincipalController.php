<?php

namespace Controllers;

use MVC\Router;

class PrincipalController{
    public static function principal(Router $router){
        $router->render('paginaPrincipal/principal',[
            'titulo' => 'Refranes'
        ]);
    }
}