<?php

    class notFoundController extends controller {
        
        public function __construct() {
            parent::__construct();
        }
        
        public function index() {
            $dados = array();
            
            $this->loadview('404', $dados);
        }
    }