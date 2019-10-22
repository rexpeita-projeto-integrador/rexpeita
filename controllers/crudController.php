<?php
class crudController extends controller {
    
    public function index() {
        $this->loadTemplate('crud');
    }
}