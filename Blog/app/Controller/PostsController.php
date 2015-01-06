<?php 

class PostsController extends AppController {

  public $helpers = array('Html', 'Form');


  public function search($search = null)
  {

    if(!$search)
    {
      $posts = $this->Post->find('all',array('order' => array('id' => 'desc'))); 
    }
    else
    {
      $posts = $this->Post->find('all',array('order' => array('id' => 'desc'),
        'conditions' => array('title LIKE' => '%'.$search.'%')
        ));
          //where title like % search %'
    }


        //$count = $this->Post->find('count'); //count is used to return total number of rows from the database. 

    $info = array(
      'posts' => $posts,
      'count' => count($posts)
      );
    $this->set($info);

    $this->render('index');

  } 

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

        $posts = $this->Post->find('all',array('order' => array('Post.id' => 'desc')));
        $count = $this->Post->find('count'); //count is used to return total number of rows from the database. 
        
        $info = array(
        	'posts' => $posts,
        	'count' => $count
        	);
        $this->set($info);

/*     $posts = $this->Post->find('all',array('order' => array('id' => 'desc')));
        $this->set(compact('count'));
        $this->set('count',$count);*/
      }


      public function add() {
        if ($this->request->is('post')) {
          $this->Post->create();
          if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been saved.'));
            return $this->redirect(array('action' => 'index'));
          }else{
            $this->Session->setFlash(__('Unable to add your post.')); //__() method is used for localization and internalization
          }
        }

        $this->set('users',$this->Post->User->find('list'));//This code is used for see all the users name in add form in the field of user_id.
        //we need the desired id before posting the code.
      }

/*        public function edit($id = null) {
          if (!$id) {
            throw new NotFoundException(__('Invalid post'));
          }

          $post = $this->Post->findById($id);
          if (!$post) {
            throw new NotFoundException(__('Invalid post'));
          }

          if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
              $this->Session->setFlash(__('Your post has been updated.'));
              return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your post.'));
          }

          if (!$this->request->data) {
            $this->request->data = $post;
          }
        }
*/

        public function edit($id = null) {
          if (!$id) {
            throw new NotFoundException(__('Invalid post'));
          }

          $post = $this->Post->findById($id); //this two line of the code is used to populate the form
          

          if (!$post) {
            throw new NotFoundException(__('Invalid post'));
          }

          //$this->request->data = $post;

          if (!$this->request->data) {
            $this->request->data = $post;
          }

          if ($this->request->is('post') || $this->request->is('put')) {
            //$this->Post->id = $id;
            if ($this->Post->save($this->request->data)) { //$this->Post->save($this->request->data) this code is need to pass the data to the Model.
              $this->Session->setFlash(__('Your post has been Updated.'));
              return $this->redirect(array('action' => 'index'));
            }
            else
            {
                $this->Session->setFlash(__('Unable to Update your post.')); //__() method is used for localization and internalization   
              }
            }
            $this->set('users',$this->Post->User->find('list'));//write this code before check the post or put method we need the id of the actual list
            /* users is the table name as a result cakephp recognize it automatically.
               $this->Post->User->find('list') i.e Post model referencing the User Model.
               list->means return the id of the list
               list of the id automatically choose the name or title by default
            */
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
        }





        










