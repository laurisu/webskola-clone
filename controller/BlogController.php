<?php

require '../model/BlogModel.php';

class BlogControler {

//    Katram routam savs Action

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

    /**
     * Object insert in database
     * @param type $data = masīvs ar datiem priekš objekta
     * @return boolean
     */
    public function adminAddAction($data) {
        $blog = $this->getFactory()->create(); // Šeit uztaisam jaunu objegtu
        $blog->slug = $data["slug"];  // Aipildam objektu ar datiem 
        $blog->author = $data["author"]; // objekta īpašība ir lauki datubāzē
        $blog->title = $data["blog-title"];
        $blog->description = $data["description"];
        $blog->content = $data["content"];
        
        return $blog->save(); // saglabājam objektu iekš datubāzes
                
//        var_dump($data);
//        exit;
    }
    
    public function adminEditAction($id) {
        $blogs = $this->getFactory()->find_one($id);
        
        return $blogs;
    }
    
        public function adminUpdateAction($id, $data) {
        $blog = $this->getFactory()->find_one($id); // Šeit sameklējam objegtu
        $blog->slug = $data["slug"];  // Aizpildam objektu ar datiem 
        $blog->author = $data["author"]; // objekta īpašība ir lauki datubāzē
        $blog->title = $data["blog-title"];
        $blog->description = $data["description"];
        $blog->content = $data["content"];
        
        return $blog->save(); // saglabājam objektu iekš datubāzes
    }

    protected function getFactory() {
        return Model::factory("Blog");
    }

}
