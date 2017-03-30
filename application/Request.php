<?php

class Request {
    private $_controller;
    private $_model;
    private $_args;
    
    /*
     * New instance to class Request
     */
    public function __construct() {
        if(isset($_GET['url'])) {
            //  Filter url 
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            //  Explode array with url
            $url = explode('/', $url);
            //  Delete args not valid in array
            $url = array_filter($url);
        }
        //  Initialice 
        //  Extraer el primer elemento de la url
        $this->_controller = strtolower(array_shift($url));
        $this->_model = strtolower(array_shift($url));
        $this->_args = $url;
        
        if(!$this->_controller ) {
            $this->_controller = DEFAULT_CONTROLLER;
        } 
        
        if(!$this->_model) {
            $this->_model = DEFAULT_MODEL;
        }
        
        if(!isset($this->_args)) {
            $this->_args = array();
        }
    }
    
    /**
     * Get Controller
     * @return controller
     */
    function get_controller() {
        return $this->_controller;
    }

    /**
     * Get Model
     * @return model
     */
    function get_model() {
        return $this->_model;
    }

    /**
     * Get Args
     * @return array
     */
    function get_args() {
        return $this->_args;
    }

}
