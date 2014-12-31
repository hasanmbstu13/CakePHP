<?php
class UsersController extends AppController {

  public $helpers = array('Html', 'Form');


  public function search($search = null)
  {

    if(!$search)
    {
      $posts = $this->User->find('all',array('order' => array('id' => 'desc'))); 
    }
    else
    {
      $posts = $this->User->find('all',array('order' => array('id' => 'desc'),
        'conditions' => array('title LIKE' => '%'.$search.'%')
        ));
          //where title like % search %'
    }

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

      	$data = $this->User->findById($id); //findById() is used to query the single data from database.

      	if (!$data) {
      		throw new Exception(__("ID was not in the Database."));
      		//throw new Exception("ID was not in the Database.");
      		
      	}

      	$this->set('user',$data);

      }

      public function index() {

        //$this->set('posts', $this->Post->find('all',array('order' => array('id' => 'desc'))));

        $users = $this->User->find('all',array('order' => array('id' => 'desc')));
        $count = $this->User->find('count'); //count is used to return total number of rows from the database. 
        
        $info = array(
        	'users' => $users,
        	'count' => $count
        	);
        $this->set($info);
      }


      public function add() {
        if ($this->request->is('post')) {
          $this->User->create();
          if ($this->User->save($this->request->data)) {
            $this->Session->setFlash(__('Your User has been saved.'));
            return $this->redirect(array('action' => 'index'));
          }
            $this->Session->setFlash(__('Unable to add your User.')); //__() method is used for localization and internalization
          }
        }


        public function edit($id = null) {
          if (!$id) {
            throw new NotFoundException(__('Invalid user'));
          }

          $post = $this->User->findById($id); //this two line of the code is used to populate the form
          

          if (!$post) {
            throw new NotFoundException(__('Invalid user'));
          }

          if (!$this->request->data) {
            $this->request->data = $post;
          }

          if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) { //$this->Post->save($this->request->data) this code is need to pass the data to the Model.
              $this->Session->setFlash(__('Your user has been Updated.'));
              return $this->redirect(array('action' => 'index'));
            }
            else
            {
                $this->Session->setFlash(__('Unable to Update your user.')); //__() method is used for localization and internalization   
              }
            }
          }


          public function delete($id)
          {

            $this->User->id = $id;//if we set the id in this way then we don't need to use parameter in the method exists() or delete()

            if(!$id || !$this->User->exists()) //exists method check whether a data is present in database or not
            {
              throw new Exception(__("ID was not set."));        
            }

            if($this->request->is('post'))
            {
              if($this->User->delete())
              {
                $this->Session->setFlash('The user was deleted');
              }
              else
              {
                $this->Session->setFlash('The user was not deleted');
              }
            }

            $this->redirect('index');
          }

        }


        ?>