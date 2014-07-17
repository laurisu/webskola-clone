<?php

class Blog extends Model 
{
    
    public static $_table = 'blog';
    
    public function getId(){
        return $this->id;
    }
    
    public function getShortDescription() {
        
        return $this->short_description;
    }
    
}