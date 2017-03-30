<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of holaController
 *
 * @author tt-01
 */
class HolaController extends Controller{
    
    public function __construct() {
        parent::__construct();
        
    }
    public function index() {
        $this->_view->title = 'Hola Controller';
        $this->_view->render('index', 'hola'); 
    }
}
