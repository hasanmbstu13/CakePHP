<?php 

class PostsController extends AppController {

  public $helpers = array('Html', 'Form');


      public function view($id = null) //$id = null if id is not set then by default id set with value null.
      {
      	if(!$id)
      	{
      		throw new NotFoundException(__("ID was not set.")); //__() is used for internationalizing and localizationing the string.
      	}

      	$data = $this->Post->findById($id); //findById() is used to query the single data from database.

      	if (!$data) {
      		throw new Exception(__("ID was not in the Database."));
      		//throw new Exception("ID was not in the Database.");
      		
      	}

      	$this->set('post',$data);

      }




      public function index() {

        //$this->set('posts', $this->Post->find('all',array('order' => array('id' => 'desc'))));

        $posts = $this->Post->find('all',array('order' => array('id' => 'desc')));
        $count = $this->Post->find('count'); //count is used to return total number of rows from the database. 
        
        $info = array(
        	'posts' => $posts,
        	'count' => $count
        	);
        $this->set($info);

/*        $posts = $this->Post->find('all',array('order' => array('id' => 'desc')));
        $this->set(compact('count'));
        $this->set('count',$count);*/
      }


      public function add() {
        if ($this->request->is('post')) {
          $this->Post->create();
          if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been saved.'));
            return $this->redirect(array('action' => 'index'));
          }
            $this->Session->setFlash(__('Unable to add your post.')); //__() method is used for localization and internalization
          }
        }


        public function edit($id = null) {
          if (!$id) {
            throw new NotFoundException(__('Invalid post'));
          }

          $post = $this->Post->findById($id);
          if (!$post) {
            throw new NotFoundException(__('Invalid post'));
          }

          if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Post->save($this->request->data)) { //$this->Post->save($this->request->data) this code is need to pass the data to the Model.
              $this->Session->setFlash(__('Your post has been Updated.'));
              return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to Update your post.')); //__() method is used for localization and internalization
          }

          $this->request->data = $post;

/*    if ($this->request->is(array('post', 'put'))) {
        $this->Post->id = $id;
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $post;
      }*/
    }

  }


  ?>