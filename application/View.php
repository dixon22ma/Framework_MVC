<?php

class View {
    private $_controller;
    
    public function __construct(Request $request) {
        $this->_controller = $request->get_controller();
    }
    
    public function render($viewName, $_item = false) {
        
        $_menu = array(
            array(
                'id'=>'index',
                'title' => 'inicio',
                'url' => BASE_URL
            ),
            array(
                'id'=>'hola',
                'title' => 'hola',
                'url' => BASE_URL . 'hola'
            ),
        );
        
        $_layoutParams = array(
            'routeCss' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/css/',
            'routeImg' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/img/',
            'routeJs' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/js/',
            'menu' => $_menu
            
        );
        
        $routeView = ROOT . 'views' . DS . $this->_controller . DS . $viewName . '.phtml';
        if(is_readable($routeView)) {
            include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'header.php';
            include_once $routeView;
            include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'footer.php';
        } else {            
            throw new Exception('Error de vista');
        }
    }
}