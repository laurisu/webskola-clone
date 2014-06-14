<?php

class TextPage extends Model
{
    public static $_table = 'text_page';
    
    public function getId(){
        return $this->id;
    }
    
}