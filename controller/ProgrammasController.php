<?php

require_once '../model/ProgrammasModel.php';

class ProgrammasController
{
    public function indexAction($slug) {
        $programma = Model::factory("Programmas")->where('slug', $slug)->find_one();
        
        return $programma; /* vienmer pirms return atsat tukshu rindu */       
    }
    
    public function listAction() {
        $programmas = Model::factory("Programmas")->find_many();
        
        return $programmas;      
    }
}