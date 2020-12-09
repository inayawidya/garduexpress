<?php

class Controller {
        public function view($view, $data = []) 
        {
            require_once '../app/views/' . $view . '.php';
        }
        public function model($model)
        {
            require_once '../app/models/' . $model . '.php';
            return new $model;
        }
        public function input($inputName){
            if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == 'post'){

                return trim(strip_tags($_POST[$inputName]));
       
             } else if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'get'){
       
                return trim(strip_tags($_GET[$inputName]));
       
             }
        }
        public function redirect($controller,$method = "index",$args = array())
        {
            global $core; /* Guess Obviously */

            $location =  $controller . "/" . $method . "/" . implode("/",$args);

            /*
                * Use @header to redirect the page:
            */
            header("Location: http://localhost/garduexpress/public/" . $location);
            exit;
        } 
}