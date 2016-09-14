<?php
//require_once '../core/controller.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//the class name must always b the same name with it file.php name
//
//mostly we pass in values on the child class extended to her parent holds the variables
class home  extends controller {
    //NoTE function index is the this->method calling in app.php
    
     public function index($name = '')
      {
         
          $user = $this->model('user');//here we r passing a value to model as 'user'
          $user->name = $name;
          $this->view('home/index',['name' =>$user->name ]) ;//here we r passing a values to $view & $data[]
         
         
     }
          
  /*this for index with two params
   *  public function index($name = '',$othername = ''){
       
       echo $name . ' ' . $othername; } */
    
    
    
}
