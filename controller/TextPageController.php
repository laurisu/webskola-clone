<?php

require '../model/TextPageModel.php';

class TextPageController
{
    public function indexAction($slug) {
        $textPage = Model::factory("TextPage")->where('slug', $slug)->find_one();
        
        return $textPage;
    }
}
