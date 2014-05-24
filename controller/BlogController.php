<?php

require '../model/BlogModel.php';

class BlogControler 
{
    public function indexAction() {
        $blogs = Model::factory('Blog')->find_many();
        
        return $blogs;
    }
}