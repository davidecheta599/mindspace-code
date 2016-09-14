<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class app{
    protected $controller = 'home';//therefore this variable value name-sake  should be givin to any of the  existing  file in d controller folder
    protected $method = 'index';
    protected $params = [];
    
    public function __construct()
    {
     $url = $this->parseUrl(); 
    
     if(file_exists('../app/controllers/' . $url[0] . '.php'))
             
     {
           $this->controller = $url[0];                        //if the input do exist it should replace the variable-value 'home'
               unset($url[0]);                                    //unset ..to remove from the  array
         
     }                                                                          //if the input type file name do not exist then the url wil stil remain as default ../app/controllers/home
  
     require_once '../app/controllers/' . $this->controller . '.php'; //when u require a page the do this beow
     $this->controller = new $this->controller;                      //intantiate =the new class name of that page
     
      if(isset($url[1]))
      {                                                                              //(where to check &the method name)
          if(method_exists($this->controller, $url[1]))
             {
              $this->method = $url[1];                                         //if the input type method name do not exist then $this->method  wil stil remain as default ../app/controllers/home/index
               unset($url[1]);  
              } 
        }
        $this->params = $url ? array_values($url) : [];                                 //show the array-values else return empty array
        call_user_func_array([$this->controller,$this->method ],$this->params); 
    }
    
    
    
    public function parseUrl()
            {
       if(isset($_GET['url'])){
           
         return $url = explode('/', filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
       } 
    } 
    
}