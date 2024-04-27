<?php

require_once "../app/Core/Controller.php";

class Home extends Controller {

    public function index() {
    
        $this->view('Home');
    
    }
}