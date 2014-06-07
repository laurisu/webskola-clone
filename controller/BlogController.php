<?php

require '../model/BlogModel.php';

class BlogControler 
{
        public function listAction() {
        $blogs = Model::factory("Blog")->find_many();
        
        return $blogs;
        
    }
   public function indexAction($slug) {
        $blogs = Model::factory("Blog")->where('slug',$slug)->find_one();
        
        return $blogs;
        
    }
} 
