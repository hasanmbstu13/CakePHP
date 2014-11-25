<?php

class  UsersController  extends AppController {


	public function index() {

		$this->set('title_for_layout', 'Index');
		$users = $this->User->find('all');  #$this->Picture->query("SELECT * FROM pictures LIMIT 2;");
		#debug($users);
		$this->set(compact('users'));          # sending query data to the view
		//$this->set('kjjh',$users); 

	}

	public function add() {

	}

	public function view($id=null) {

	}

	public function edit($id=null) {

	}

	public function delete($id=null) {

	}

		


}
