<?php

class Home extends Controller {
    public function index()
    {
    
        $this->redirect("Admin", "index");
        
        
    }
}