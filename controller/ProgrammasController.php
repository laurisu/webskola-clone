<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../model/ProgrammasModel.php';

class ProgrammasController
{
    public function indexAction() {
        $blogs = Model::factory("Programmas") -> find_many();
        
        return $blogs; /* vienmers pirms return tukshu rindu*/       
    }
}