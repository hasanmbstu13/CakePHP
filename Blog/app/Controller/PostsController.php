<?php 

class PostsController extends AppController {
    
    public $helpers = array('Html', 'Form');

       public function index() {

        $this->set('posts', $this->Post->find('all',array('order' => array('id' => 'desc'))));
        
/*        $posts = $this->Post->find('all',array('order' => array('id' => 'desc')));
        $this->set(compact('posts'));*/
    }

}


 ?>