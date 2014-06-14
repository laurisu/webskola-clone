<?php

require '../model/BlogModel.php';

class HomeControler 
{
        public function landingPageAction() {
        $blogs = Model::factory("Blog")->order_by_desc('created')->limit(3)->find_many();
        
        return $blogs;
        
    }
} 