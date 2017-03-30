<?php

class Bootstrap {
    public static function run(Request $request) {
        $controller = $request->get_controller() . 'Controller';
        $routController = ROOT . 'controllers' . DS . $controller . '.php';
        $model = $request->get_model();
        $args = $request->get_args();       
        
        if(is_readable($routController)) {            
            require_once $routController;            
            $controller = new $controller;            
            if(is_callable(array($controller, $model))) {
                $model = $model = $request->get_model();
            } else {
                $model = DEFAULT_MODEL;
            }            
            if(isset($args)){
                call_user_func_array(array($controller, $model), $args);
            } else {
                call_user_func(array($controller, $model));
            }            
        } else {
            throw new Exception('No Encontrado');
        }        
    }
}