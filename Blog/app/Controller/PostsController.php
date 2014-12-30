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

          $post = $this->Post->findById($id); //this two line of the code is used to populate the form
          

          if (!$post) {
            throw new NotFoundException(__('Invalid post'));
          }

          $this->request->data = $post;

          if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Post->save($this->request->data)) { //$this->Post->save($this->request->data) this code is need to pass the data to the Model.
              $this->Session->setFlash(__('Your post has been Updated.'));
              return $this->redirect(array('action' => 'index'));
            }
            else
            {
                $this->Session->setFlash(__('Unable to Update your post.')); //__() method is used for localization and internalization   
              }
            }
          }


          public function delete($id)
          {

            /*Check to see if an item exists in the database or not in following three ways
              $this->ModelName->exists($id)
              $this->ModelName->id = $id;
              $this->ModelName->exists()
            */

            $this->Post->id = $id;//if we set the id in this way then we don't need to use parameter in the method exists() or delete()

            if(!$id || !$this->Post->exists()) //exists method check whether a data is present in database or not
            {
              throw new Exception(__("ID was not set."));        
            }

            if($this->request->is('post'))
            {
              if($this->Post->delete())
              {
                $this->Session->setFlash('The post was deleted');
              }
              else
              {
                $this->Session->setFlash('The post was not deleted');
              }
            }

            $this->redirect('index');
          }


      /*    public function delete($id = null)
          {

            if(!$id || $this->Post->exists($id))
            //If we want to remove id from the parameter list then we must be set it first
            //like $this->Post->id = $id;
            {
              throw new Exception(__("ID was not set."));        
            }

            if($this->request->is('post'))
            {
              if($this->Post->delete($id))
              {
                $this->Session->setFlash('The post was deleted');
              }
              else
              {
                $this->Session->setFlash('The post was not deleted');
              }
            }

            $this->redirect('index');
          }*/

         /* public function delete($id) {
            if ($this->request->is('get')) {
              throw new MethodNotAllowedException();
            }

            if ($this->Post->delete($id)) {
              $this->Session->setFlash(
                __('The post with id: %s has been deleted.', h($id))
                );
              return $this->redirect(array('action' => 'index'));
            }
          }
*/



       /*public function delete()
          {
            $this->redirect('index');
          }*/



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


    ?>