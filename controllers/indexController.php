<?php

class IndexController extends Controller {
    
    public function __construct() {
        parent::__construct();
        
    }
    public function index() {
        $this->_view->title = 'Portada';
        $this->_view->render('index'); 
    }

}
