<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class controller{
    
    public function model($model)//$model is giving a value of 'user'by extends
     {
        
        require_once '../app/models/' . $model . '.php';
         return new $model();                  //return = new class name of that page been require
        }
        
        
    protected function view($view,$data = [])
        {
         require_once'../app/views/' .$view . '.php';   
        }
}