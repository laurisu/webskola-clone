<?php

require '../model/TextPageModel.php';

class TextPageController
{
    public function indexAction() {
        $textPage = Model::factory("TextPage")->find_many();
        
        return $textPage;
    }
}
