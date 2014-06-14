<?php

require '../model/BlogModel.php';

class BlogControler {

//    Katram routam savs action

    public function listAction() {

        $blogs = $this->getFactory()->order_by_desc('created')->find_many();

        return $blogs;
    }

    public function indexAction($slug) {
        $blogs = $this->getFactory()->where('slug', $slug)->find_one();

        return $blogs;
    }

    public function adminListAction() {
        $blogs = $this->getFactory()->order_by_desc('id')->find_many();

        return $blogs;
    }

    public function adminAddAction($data) {
        $blog = $this->getFactory()->create();
        $blog->slug = $data["slug"];
        $blog->author = $data["author"];
        $blog->title = $data["blog-title"];
        $blog->description = $data["description"];
        $blog->content = $data["content"];
        
        return $blog->save();
                
//        var_dump($data);
//        exit;
    }

    protected function getFactory() {
        return Model::factory("Blog");
    }

}
