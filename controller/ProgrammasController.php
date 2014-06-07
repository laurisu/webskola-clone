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
        $programmas = Model::factory("Programmas") -> find_many();
        
        return $programmas; /* vienmer pirms return atsat tukshu rindu */       
    }
}